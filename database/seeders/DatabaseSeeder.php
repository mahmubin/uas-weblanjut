<?php

namespace Database\Seeders;

use App\Models\Pasien;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Pasien::create([
            'nama' => 'Mahmubin Haibah',
            'alamat' => 'tembung',
            'penyakit' => 'luar'
        ]);
        Pasien::create([
            'nama' => 'Mahmubin',
            'alamat' => 'tembung',
            'penyakit' => 'dalam'
        ]);
        Pasien::create([
            'nama' => 'Haibah',
            'alamat' => 'tembung',
            'penyakit' => 'dalam'
        ]);
        Pasien::create([
            'nama' => 'Haibah Mahmubin',
            'alamat' => 'tembung',
            'penyakit' => 'dalam'
        ]);
        Pasien::create([
            'nama' => 'aqwe',
            'alamat' => 'tembung',
            'penyakit' => 'dalam'
        ]);
        Pasien::create([
            'nama' => 'rwqrwq',
            'alamat' => 'tembung',
            'penyakit' => 'luar'
        ]);
        Pasien::create([
            'nama' => 'Madsasd',
            'alamat' => 'tembung',
            'penyakit' => 'dalam'
        ]);
    }
}
