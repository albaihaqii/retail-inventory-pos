<?php

namespace Database\Seeders;

use App\Models\Branch;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $pusat = Branch::where('name', 'Cabang Pusat - Jember')->first();

        $admin = User::firstOrCreate(
            ['email' => 'admin@retailpos.test'],
            [
                'name' => 'Admin Pusat',
                'password' => Hash::make('password'),
                'branch_id' => $pusat?->id,
            ]
        );

        $admin->assignRole('admin_pusat');
    }
}