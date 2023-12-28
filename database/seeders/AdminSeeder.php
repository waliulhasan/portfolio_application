<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = [
            'name' => 'Admin',
            'email' => 'waliul@admin.com',
            'password' => bcrypt('12345678'),
            // 'password' => Hash::make(12345678),
        ];

        Admin::create($admin);
    }
}
