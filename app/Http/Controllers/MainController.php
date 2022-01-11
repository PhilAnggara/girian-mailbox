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
        $pdf->loadView('pages.pdf.laporan', [
            'judul' => $judul,
            'sm' => $sm,
            'sk' => $sk,
            'tanggal' => $tanggal,
        ]);

        return $pdf->stream($judul);
    }

    public function buatSurat()
    {
        return view('pages.buat-surat');
    }
    
    public function cetakSurat(Request $request, $template)
    {
        $pdf = App::make('dompdf.wrapper');

        if ($template == 'surat-keterangan-izin-keramaian')
        {   
            $judul = 'Surat Keterangan Izin Keramaian - '. $request->nama_lengkap .'.pdf';
            $pdf->loadView('pages.pdf.surat-keterangan-izin-keramaian', [
                'judul' => $judul,
                'data' => $request
            ]);
        }
        elseif ($template == 'surat-keterangan-izin-bangunan')
        {
            $judul = 'Surat Keterangan Izin Bangunan - '. $request->nama_lengkap .'.pdf';
            $pdf->loadView('pages.pdf.surat-keterangan-izin-bangunan', [
                'judul' => $judul,
                'data' => $request
            ]);
        }
        elseif ($template == 'surat-keterangan-untuk-nikah')
        {
            $judul = 'Surat Keterangan Untuk Nikah - '. $request->nama_lengkap .'.pdf';
            $pdf->loadView('pages.pdf.surat-keterangan-untuk-nikah', [
                'judul' => $judul,
                'data' => $request
            ]);
        }
        elseif ($template == 'surat-pengantar-pindah')
        {
            $judul = 'Surat Pengantar Pindah - '. $request->nama_lengkap .'.pdf';
            $pdf->loadView('pages.pdf.surat-pengantar-pindah', [
                'judul' => $judul,
                'data' => $request
            ]);
        }
        else
        {
            $judul = 'Surat Izin Tempat Usaha - '. $request->nama_lengkap .'.pdf';
            $pdf->loadView('pages.pdf.surat-izin-tempat-usaha', [
                'judul' => $judul,
                'data' => $request
            ]);
        }
        
        return $pdf->stream($judul);
    }
}
