<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Str;
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
}
