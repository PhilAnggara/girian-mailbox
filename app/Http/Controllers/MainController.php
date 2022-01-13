<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\NomorSurat;
use App\Models\SuratMasuk;
use App\Models\SuratKeluar;
use Illuminate\Support\Str;
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
        // $bulan = Carbon::now()->isoFormat('MM');
        // $tahun = Carbon::now()->isoFormat('YYYY');
        // $data = NomorSurat::where('type', '0')->whereYear('created_at', $tahun)->whereMonth('created_at', $bulan)->get();
        // if ($data->isEmpty()) {
        //     dd('Kosong');
        // } else {
        //     dd('Ada');
        // }
        return view('pages.buat-surat');
    }
    
    public function cetakSurat(Request $request, $template)
    {
        $pdf = App::make('dompdf.wrapper');

        if ($template == 'surat-keterangan-izin-keramaian')
        {
            $type = '09';
            $order = $this->getOrder($type);
            $judul = 'Surat Keterangan Izin Keramaian - '. $request->nama .'.pdf';
            $pdf->loadView('pages.pdf.surat-keterangan-izin-keramaian', [
                'judul' => $judul,
                'data' => $request
            ]);
        }
        elseif ($template == 'surat-keterangan-izin-bangunan')
        {
            $type = '09';
            $order = $this->getOrder($type);
            $judul = 'Surat Keterangan Izin Bangunan - '. $request->nama .'.pdf';
            $pdf->loadView('pages.pdf.surat-keterangan-izin-bangunan', [
                'judul' => $judul,
                'data' => $request
            ]);
        }
        elseif ($template == 'surat-pengantar-untuk-nikah')
        {
            $type = '15';
            $order = $this->getOrder($type);
            $judul = 'Surat Pengantar Untuk Nikah - '. $request->nama .'.pdf';
            $pdf->loadView('pages.pdf.surat-pengantar-untuk-nikah', [
                'judul' => $judul,
                'data' => $request
            ]);
        }
        elseif ($template == 'surat-pengantar-pindah')
        {
            $type = '15';
            $order = $this->getOrder($type);
            $judul = 'Surat Pengantar Pindah - '. $request->nama .'.pdf';
            $pdf->loadView('pages.pdf.surat-pengantar-pindah', [
                'judul' => $judul,
                'data' => $request
            ]);
        }
        else
        {
            $type = '03';
            $order = $this->getOrder($type);
            $judul = 'Surat Izin Tempat Usaha - '. $request->nama .'.pdf';
            $pdf->loadView('pages.pdf.surat-izin-tempat-usaha', [
                'judul' => $judul,
                'data' => $request
            ]);
        }
   
        NomorSurat::create([
            'type' => $type,
            'order' => $order,
        ]);
        
        return $pdf->stream($judul);
    }
    
    public function getOrder($type)
    {
        $bulan = Carbon::now()->isoFormat('MM');
        $tahun = Carbon::now()->isoFormat('YYYY');
        
        $data = NomorSurat::where('type', $type)->whereYear('created_at', $tahun)->whereMonth('created_at', $bulan)->get();
        if ($data->isEmpty()) {
            $order = 1;
        } else {
            $order = $data->last()->order + 1;
        }

        return $order;
    }
}
