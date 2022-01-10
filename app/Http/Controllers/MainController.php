<?php

namespace App\Http\Controllers;

use App\Models\SuratKeluar;
use App\Models\SuratMasuk;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class MainController extends Controller
{
    public function home()
    {
        $sm = SuratMasuk::all()->count();
        $sk = SuratKeluar::all()->count();
        $total = $sm + $sk;
        
        return view('pages.dashboard', [
            'sm' => $sm,
            'sk' => $sk,
            'total' => $total
        ]);
    }

    public function cetakPdf(Request $request)
    {
        $input = $request->bulan;
        $bulan = Carbon::parse($input)->isoFormat('MM');
        $tahun = Carbon::parse($input)->isoFormat('YYYY');

        $sm = SuratMasuk::whereYear('tanggal_masuk', $tahun)->whereMonth('tanggal_masuk', $bulan)->get();
        $sk = SuratKeluar::whereYear('tanggal_masuk', $tahun)->whereMonth('tanggal_masuk', $bulan)->get();

        // return response()->json(['input' => [$bulan,$tahun], 'surat masuk' => $sm, 'surat keluar' => $sk]);

        $tanggal = Carbon::parse($input)->isoFormat('MMMM YYYY');
        $judul = 'Laporan Arsip Surat - '. $tanggal .'.pdf';

        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('pages.laporan', [
            'sm' => $sm,
            'sk' => $sk,
            'tanggal' => $tanggal,
        ]);

        // return view('pages.cetak', compact('kendaraan','elektronik','furnitur'));
        return $pdf->stream($judul);
    }
}
