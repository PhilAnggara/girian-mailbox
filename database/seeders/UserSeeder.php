<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Muslih Antameng',
            'nip' => '3274298343204823039480',
            'username' => 'muslihantameng',
            'email' => 'muslihantameng@gmail.com',
            'jabatan' => 'Camat',
            'password' => Hash::make('Admin123')
        ]);
        User::create([
            'name' => 'Reagen Senduk',
            'nip' => '3274298343204823039480',
            'username' => 'reagensenduk',
            'email' => 'reagensenduk@gmail.com',
            'jabatan' => 'Sekretaris Kecamatan',
            'password' => Hash::make('Admin123')
        ]);
        User::create([
            'name' => 'Aditya Manansang',
            'nip' => '3274298343204823039480',
            'username' => 'adityamanansang',
            'email' => 'adityamanansang@gmail.com',
            'jabatan' => 'Admin',
            'password' => Hash::make('Admin123')
        ]);
    }
}
