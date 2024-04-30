<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
Use App\Models\Admin;

class AdminLoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'name' => 'Arti',
            'email' => 'arti@techysquad.com',
            'password' => bcrypt('1234567'),
        ]);
    }
}
