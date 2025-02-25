<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    DB::table('admin')->insert([
        'nama' => 'Admin',
        'email' => 'admin@admin.com',
        'password' => Hash::make('12345678'),
        'no_telp' => '08123456789',
    ]);
    }
}
