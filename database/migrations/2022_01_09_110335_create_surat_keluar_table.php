<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratKeluarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_keluar', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_no')->nullable();
            $table->string('nomor_surat');
            $table->string('nomor')->nullable();
            $table->text('surat')->nullable();
            $table->longText('isi_surat')->nullable();
            $table->string('judul_surat');
            $table->date('tanggal_masuk');
            $table->string('pengirim')->nullable();
            $table->string('penerima')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surat_keluar');
    }
}
