<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use Illuminate\Http\Request;

class ExchangeRateController extends Controller
{
    /*public function index()
    {
        $currencies = \App\Models\Currency::with(['exchangeRates.bank'])->get();

        return view('exchange_rates.index', compact('currencies'));
    }*/

    public function home()
    {
        //$currencies = Currency::with(['exchangeRates.bank'])->get();
        $currencies = Currency::with('exchangeRates.bank')->get();
        return view('home', compact('currencies'));
    }
}
