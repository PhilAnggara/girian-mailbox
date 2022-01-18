<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SuratKeluar extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'surat_keluar';

    protected $guarded = [
        'id'
    ];

    protected $hidden = [

    ];
    
    public function nomor()
    {
        return $this->belongsTo(NomorSurat::class, 'id_no', 'id');
    }
}
