<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SuratMasuk extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'surat_masuk';

    protected $guarded = [
        'id'
    ];

    protected $hidden = [

    ];
}
