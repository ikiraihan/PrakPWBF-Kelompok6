<?php

namespace Database\Seeders;

use App\Models\Kota;
use App\Models\jenisBarang;
use App\Models\Role;
use App\Models\TabelUser;
use App\Models\Ukuran;
use App\Models\Warna;
use App\Models\Barang;
use App\Models\detailBarang;
use App\Models\Hs;
use App\Models\Supplier;
use App\Models\Penerimaan;
use App\Models\detailPenerimaan;
use App\Models\Pembayaran;
use App\Models\Pemesanan;
use App\Models\detailPemesanan;

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
        
        Kota::factory(50)->create();
        JenisBarang::factory(10)->create();
        Role::factory(2)->create();
        TabelUser::factory(10)->create();
        Ukuran::factory(5)->create();
        Warna::factory(20)->create();
        Barang::factory(10)->create();
        detailBarang::factory(10)->create();
        Hs::factory(10)->create();
        Supplier::factory(5)->create();
        Penerimaan::factory(5)->create();
        detailPenerimaan::factory(5)->create();
        Pembayaran::factory(5)->create();
        Pemesanan::factory(5)->create();
        detailPemesanan::factory(5)->create();
    }
}
