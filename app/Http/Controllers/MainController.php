<?php

namespace App\Http\Controllers;

use App\Models\SuratKeluar;
use App\Models\SuratMasuk;
use Illuminate\Http\Request;

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
}
