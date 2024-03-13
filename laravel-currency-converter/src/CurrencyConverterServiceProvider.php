<?php

namespace CurrencyConverter;

use Illuminate\Support\ServiceProvider;

class CurrencyConverterServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(CurrencyConverter::class, function ($app) {
            return new CurrencyConverter(
                new GuzzleHttp\Client(),
                config('currency-exchange.url')
            );
        });
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/currency-exchange.php' => config_path('currency-exchange.php'),
        ]);
    }
}
