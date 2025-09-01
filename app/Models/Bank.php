<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    public function exchangeRates()
    {
        return $this->hasMany(ExchangeRate::class);
    }
    
}
