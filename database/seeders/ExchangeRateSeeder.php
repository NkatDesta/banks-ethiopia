<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExchangeRateSeeder extends Seeder
{
    public function run()
    {
        DB::table('exchange_rates')->insert([
            // USD
            ['bank_id' => 1, 'currency_id' => 1, 'buying' => 54.50, 'selling' => 55.20, 'created_at' => now(), 'updated_at' => now()],
            ['bank_id' => 2, 'currency_id' => 1, 'buying' => 54.40, 'selling' => 55.10, 'created_at' => now(), 'updated_at' => now()],
            ['bank_id' => 3, 'currency_id' => 1, 'buying' => 54.30, 'selling' => 55.00, 'created_at' => now(), 'updated_at' => now()],

            // EUR
            ['bank_id' => 1, 'currency_id' => 2, 'buying' => 58.10, 'selling' => 59.00, 'created_at' => now(), 'updated_at' => now()],
            ['bank_id' => 2, 'currency_id' => 2, 'buying' => 58.00, 'selling' => 58.90, 'created_at' => now(), 'updated_at' => now()],
            ['bank_id' => 3, 'currency_id' => 2, 'buying' => 57.90, 'selling' => 58.80, 'created_at' => now(), 'updated_at' => now()],

            // GBP
            ['bank_id' => 1, 'currency_id' => 3, 'buying' => 63.30, 'selling' => 64.30, 'created_at' => now(), 'updated_at' => now()],
            ['bank_id' => 2, 'currency_id' => 3, 'buying' => 63.20, 'selling' => 64.20, 'created_at' => now(), 'updated_at' => now()],
            ['bank_id' => 3, 'currency_id' => 3, 'buying' => 63.10, 'selling' => 64.10, 'created_at' => now(), 'updated_at' => now()],
        ]);

}
}