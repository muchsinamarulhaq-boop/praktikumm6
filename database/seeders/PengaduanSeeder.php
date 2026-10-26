<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PengaduanSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        $kategoriIds = [];
        $categories = [
            ['nama_kategori' => 'Infrastruktur Jalan', 'deskripsi' => 'Laporan terkait jalan berlubang dan kerusakan jembatan'],
            ['nama_kategori' => 'Fasilitas Umum', 'deskripsi' => 'Laporan penerangan jalan umum dan taman publik'],
            ['nama_kategori' => 'Kebersihan Lingkungan', 'deskripsi' => 'Laporan tumpukan sampah dan saluran air tersumbat'],
        ];

        foreach ($categories as $cat) {
            $id = DB::table('kategori_pengaduan')->insertGetId([
                'nama_kategori' => $cat['nama_kategori'],
                'deskripsi' => $cat['deskripsi'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            $kategoriIds[] = $id;
        }
        for ($i = 0; $i < 10; $i++) {
            DB::table('pengaduan')->insert([
                'kategori_id' => $faker->randomElement($kategoriIds),
                'judul_pengaduan' => $faker->sentence(4),
                'isi_laporan' => $faker->paragraph(3),
                'nama_pelapor' => $faker->name,
                'nomor_telepon' => $faker->phoneNumber,
                'status' => $faker->randomElement(['menunggu', 'proses', 'selesai']),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}