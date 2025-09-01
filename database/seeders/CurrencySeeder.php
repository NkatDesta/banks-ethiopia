<?php

namespace Database\Seeders;

use App\Models\Currency;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CurrencySeeder extends Seeder
{
    public function run()
    {
        DB::table('currencies')->insert([
            ['symbol' => 'USD', 'flag' => '🇺🇸', 'created_at' => now(), 'updated_at' => now()],
            ['symbol' => 'EUR', 'flag' => '🇪🇺', 'created_at' => now(), 'updated_at' => now()],
            ['symbol' => 'GBP', 'flag' => '🇬🇧', 'created_at' => now(), 'updated_at' => now()],
        ]);


        Currency::create([
            'symbol' => 'USD',
            'name' => 'US Dollar',
            'flag' => 'US',
        ]);

        Currency::create([
            'symbol' => 'EUR',
            'name' => 'Euro',
            'flag' => 'EU',
        ]);

    }
}
