<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SuratRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'surat' => 'file|max:10000',
            'judul_surat' => 'required|max:255',
            'tanggal_masuk' => 'required|date',
            'pengirim' => 'required|max:255',
            'penerima' => 'required|max:255',
        ];
    }
}
