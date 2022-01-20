<?php

namespace Database\Seeders;

use App\Models\NomorSurat;
use App\Models\SuratKeluar;
use App\Models\SuratMasuk;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class SuratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SuratMasuk::create([
            'nomor_surat' => 'SM-101221001',
            'nomor' => '04.001/WK-BITUNG/I/2022',
            'surat' => 'files/examples/sample.pdf',
            'judul_surat' => 'Surat Pemberitahua Libur',
            'tanggal_masuk' => Carbon::parse('2021-12-10'),
            'pengirim' => 'Walikota Bitung',
            'penerima' => 'Adit M',
        ]);
        SuratMasuk::create([
            'nomor_surat' => 'SM-101221002',
            'nomor' => '04.002/DIN-KES/I/2022',
            'surat' => 'files/examples/sample-1.pdf',
            'judul_surat' => 'Surat Pemberitahua Covid-19',
            'tanggal_masuk' => Carbon::parse('2021-12-10'),
            'pengirim' => 'Dinas Kesehatan',
            'penerima' => 'Arthur S',
        ]);

        SuratKeluar::create([
            'nomor_surat' => 'SK-101221001',
            'nomor' => '04.001/KEC-GIRIAN/I/2022',
            'surat' => 'files/examples/sample-2.pdf',
            'judul_surat' => 'Surat Pemberitahua Gaji Lurah',
            'tanggal_masuk' => Carbon::parse('2021-12-10'),
            'pengirim' => 'Kec. Girian',
            'penerima' => 'Kel. Girian Atas',
        ]);
        SuratKeluar::create([
            'nomor_surat' => 'SK-101221002',
            'nomor' => '04.002/KEC-GIRIAN/I/2022',
            'surat' => 'files/examples/sample-3.pdf',
            'judul_surat' => 'Surat Jadwal Kebersihan',
            'tanggal_masuk' => Carbon::parse('2021-12-10'),
            'pengirim' => 'Kec. Girian',
            'penerima' => 'Kel. Girian Bawah',
        ]);

        NomorSurat::create([
            'type' => '04',
            'order' => '1'
        ]);
        NomorSurat::create([
            'type' => '04',
            'order' => '2'
        ]);
    }
}
