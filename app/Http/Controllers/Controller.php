<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\NomorSurat;
use Illuminate\Support\Str;
use Smalot\PdfParser\Parser;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function nomorSurat($prefix, $date, $table)
    {
        $date = Carbon::parse($date)->isoFormat('DDMMYY');

        if ($table->isEmpty()) {
            $kode = '001';
        } else {
            $kode = Str::padLeft($table->last()->id+1, 3, 0);
        }

        $nomor_surat = $prefix. "-". $date. $kode;

        return $nomor_surat;
    }
    
    public function updateNomorSurat($prefix, $date, $id)
    {
        $date = Carbon::parse($date)->isoFormat('DDMMYY');
        $kode = Str::padLeft($id, 3, 0);

        $nomor_surat = $prefix. "-". $date. $kode;

        return $nomor_surat;
    }

    public function generateNomor($tipe)
    {
        $bulanR = $this->getRomawi(Carbon::now()->isoFormat('M'));
        $bulan = Carbon::now()->isoFormat('MM');
        $tahun = Carbon::now()->isoFormat('YYYY');
        
        $data = NomorSurat::where('type', $tipe)->whereYear('created_at', $tahun)->whereMonth('created_at', $bulan)->get();
        if ($data->isEmpty()) {
            $order = '001';
        } else {
            $order = Str::padLeft($data->last()->order+1, 3, 0);
        }

        $nomor_surat = $tipe . '.' . $order . '/KEC-GIRIAN/' . $bulanR . '/' . $tahun;

        return $nomor_surat;
    }

    public function showNomor($nomor)
    {
        $bulan = $this->getRomawi(Carbon::parse($nomor->created_at)->isoFormat('M'));;
        $tahun = Carbon::parse($nomor->created_at)->isoFormat('YYYY');

        $nomor_surat = $nomor->type . '.' . Str::padLeft($nomor->order, 3, 0) . '/KEC-GIRIAN/' . $bulan . '/' . $tahun;

        return $nomor_surat;
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

    public function getRomawi($bulan)
    {
        switch ($bulan) {
            case 1:
                return 'I';
                break;
            case 2:
                return 'II';
                break;
            case 3:
                return 'III';
                break;
            case 4:
                return 'IV';
                break;
            case 5:
                return 'V';
                break;
            case 6:
                return 'VI';
                break;
            case 7:
                return 'VII';
                break;
            case 8:
                return 'VIII';
                break;
            case 9:
                return 'IX';
                break;
            case 10:
                return 'X';
                break;
            case 11:
                return 'XI';
                break;
            case 12:
                return 'XII';
                break;
        }
    }

    public function getNomor($path)
    {
        $file = public_path('storage/'.$path);
        $parser = new Parser();
        $pdf = $parser->parseFile($file);
        $text = $pdf->getText();
        
        if (Str::contains($text, 'Nomor :')) {     
            $text = Str::after($text, 'Nomor : ');  
        } elseif (Str::contains($text, 'No :')) {
            $text = Str::after($text, 'No : ');
        } else {
            $text = '';
        }

        $text = Str::words($text, 1, '');
        // $text = Str::substr($text, 0, -2);

        return $text;
    }
}
