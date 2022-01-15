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
            'name' => 'Aditya Manansang',
            'nip' => '3274298343204823039480',
            'username' => 'adityamanansang',
            'email' => 'adityamanansang@gmail.com',
            'jabatan' => 'Sekretaris Kecamatan',
            'password' => Hash::make('Admin123')
        ]);
        User::create([
            'name' => 'Arthur Manansang',
            'nip' => '3274298343204823039480',
            'username' => 'arthurmanansang',
            'email' => 'arthurmanansang@gmail.com',
            'jabatan' => 'Admin',
            'password' => Hash::make('Admin123')
        ]);
    }
}
