<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class OrangSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama'    => 'Budi Santoso',
                'alamat'  => 'Jl. Merdeka No. 10, Jakarta',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'nama'    => 'Siti Aminah',
                'alamat'  => 'Jl. Sudirman No. 20, Bandung',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'nama'    => 'Andi Wijaya',
                'alamat'  => 'Jl. Diponegoro No. 15, Surabaya',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'nama'    => 'Rina Kusuma',
                'alamat'  => 'Jl. Gatot Subroto No. 5, Yogyakarta',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'nama'    => 'Agus Pratama',
                'alamat'  => 'Jl. Thamrin No. 8, Medan',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'nama'    => 'Dewi Lestari',
                'alamat'  => 'Jl. Pahlawan No. 12, Semarang',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'nama'    => 'Fajar Nugroho',
                'alamat'  => 'Jl. Ahmad Yani No. 18, Malang',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'nama'    => 'Lina Marlina',
                'alamat'  => 'Jl. Sisingamangaraja No. 22, Padang',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'nama'    => 'Rudi Hartono',
                'alamat'  => 'Jl. Hasanuddin No. 30, Balikpapan',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'nama'    => 'Maya Sari',
                'alamat'  => 'Jl. Cendrawasih No. 25, Pontianak',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'nama'    => 'Tono Susilo',
                'alamat'  => 'Jl. Merpati No. 14, Kupang',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'nama'    => 'Sari Wulandari',
                'alamat'  => 'Jl. Kenanga No. 9, Manado',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'nama'    => 'Bambang Setiawan',
                'alamat'  => 'Jl. Flamboyan No. 11, Solo',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'nama'    => 'Nina Kartika',
                'alamat'  => 'Jl. Melati No. 7, Pekanbaru',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'nama'    => 'Eko Prasetyo',
                'alamat'  => 'Jl. Anggrek No. 4, Banjarmasin',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
        ];

        // Simple Queries
        // $this->db->query("INSERT INTO orang (nama, alamat, created_at, updated_at) VALUES(:nama:, :alamat:, :created_at:, :updated_at:)", $data[0]);
        // $this->db->query("INSERT INTO orang (nama, alamat, created_at, updated_at) VALUES(:nama:, :alamat:, :created_at:, :updated_at:)", $data[1]);
        // $this->db->query("INSERT INTO orang (nama, alamat, created_at, updated_at) VALUES(:nama:, :alamat:, :created_at:, :updated_at:)", $data[2]);

        // Using Query Builder
        $this->db->table('orang')->insertBatch($data);
    }
}
