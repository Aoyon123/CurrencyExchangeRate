<?php

namespace CurrencyExchange\Facades;

use Illuminate\Support\Facades\Facade;

/*
@see CurrencyConverter\CurrencyConverterFacade
*/
class CurrencyExchangeFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return CurrencyExchange::class;
        // return 'laravel-currency-converter';
    }
}
