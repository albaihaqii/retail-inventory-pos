<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    public function run(): void
    {
        Supplier::firstOrCreate(
            ['name' => 'PT Sumber Makmur Distribusi'],
            ['contact_person' => 'Budi Santoso', 'phone' => '0331-111222', 'email' => 'budi@sumbermakmur.test', 'address' => 'Jember']
        );

        Supplier::firstOrCreate(
            ['name' => 'CV Berkah Grosir'],
            ['contact_person' => 'Siti Aminah', 'phone' => '0331-333444', 'email' => 'siti@berkahgrosir.test', 'address' => 'Jember']
        );
    }
}