<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Spp;
use App\Models\User;
use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\Pembayaran;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $petugas = [
            [
                'username' => 'admin',
                'password' => bcrypt('adminadmin'),
                'nama_petugas' => 'solihin',
                'level' => 'admin'
            ],
            [
                'username' => 'petugas',
                'password' => bcrypt('petugaspetugas'),
                'nama_petugas' => 'ravi',
                'level' => 'petugas'
            ],
];

$siswass = [
    [
        'malam b' => [
            [
                'nama' => 'solihin',
                'nis' => '222-001',
                'alamat' => 'jl sadang',
                'nisn' => '99897988',
                'id_kelas' => 1,
                'id_spp' => 1,
                'no_telp' => '8907674536753',
                'jenis_kelamin' => 'l',
            ],
           
        ],
    ]
];



    $data_spp = [
        [
            "level" => 'X',
            "nominal" => 170000,
        ],
        [
            "level" => 'XI',
            "nominal" => 200000,
        ],
        [
            "level" => 'XII',
            "nominal" => 250000,
        ],
    ];



    $data_kelas = [
        [
            "nama_kelas" => "malam b",
            "kompetensi_keahlian" => "Teknik Informatika",
        ],
       
    ];

    //! SEEDER DATA SPP
    $data_spp = [
        [
            "level" => 'X',
            "nominal" => 170000,
        ],
        [
            "level" => 'XI',
            "nominal" => 200000,
        ],
        [
            "level" => 'XII',
            "nominal" => 250000,
        ],
    ];


foreach ($petugas as $user) {
    User::create($user);
}
foreach ($siswass as $siswas) {
    foreach ($siswas as $siswa) {
        foreach ($siswa as $s) {
            Siswa::create($s);
        }
    }
}
// Siswa::factory()->count(10)->create();
// User::factory()->count(10)->create();
// // foreach ($pembayaran as $bayar) {
// //     Pembayaran::create($bayar);
// // }
foreach ($data_spp as $spp) {
    Spp::create($spp);
}
foreach ($data_kelas as $kelas) {
    Kelas::create($kelas);
}

    }


}
