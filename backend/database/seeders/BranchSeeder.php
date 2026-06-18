<?php

namespace Database\Seeders;

use App\Models\Branch;
use Illuminate\Database\Seeder;

class BranchSeeder extends Seeder
{
    public function run(): void
    {
        Branch::firstOrCreate(
            ['name' => 'Cabang Pusat - Jember'],
            ['address' => 'Jl. Contoh No. 1, Jember', 'phone' => '0331-123456', 'pic_name' => 'Admin Pusat', 'is_active' => true]
        );

        Branch::firstOrCreate(
            ['name' => 'Cabang Sumbersari'],
            ['address' => 'Jl. Sumbersari No. 10, Jember', 'phone' => '0331-654321', 'pic_name' => 'Manager Sumbersari', 'is_active' => true]
        );
    }
}