<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BankSeeder extends Seeder
{
    public function run()
    {
        DB::table('banks')->insert([
            ['name' => 'Commercial Bank of Ethiopia', 'logo' => 'cbe_logo.png', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Dashen Bank', 'logo' => 'dashen_logo.png', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Awash Bank', 'logo' => 'awash_logo.png', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
