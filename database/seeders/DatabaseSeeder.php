<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin Rivvana',
            'email' => 'admin@rivvana',
            'password' => Hash::make('admin')
        ]);

        DB::table('company_profiles')->insert([
            'name' => 'Rivvana Inc',
            'email' => 'team@rivvana.id',
            'address' => 'Yogyakarta',
            'phone' => '0815-7368-4910',
            'logo' => '-',
            'description' => 'Masih Tes',
            'vision' => 'Masih Tes',
            'mission' => 'Masih Tes'
        ]);
    }
}
