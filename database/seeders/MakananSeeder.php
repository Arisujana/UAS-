<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Makanan;

class MakananSeeder extends Seeder
{
    public function run(): void
    {
        Makanan::create([
            'nama' => 'Nasi Goreng',
            'asal' => 'Indonesia',
            'harga' => 25000,
            'rating' => 4,
            'foto' => 'nasigoreng.jpeg',
            'resep' => 'Nasi, telur, bawang, kecap, cabai'
        ]);

        Makanan::create([
            'nama' => 'Sate Ayam',
            'asal' => 'Madura',
            'harga' => 30000,
            'rating' => 5,
            'foto' => 'sate-ayam.jpeg',
            'resep' => 'Daging ayam, bumbu kacang, kecap'
        ]);
    }
}
