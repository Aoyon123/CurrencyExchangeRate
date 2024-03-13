<?php

namespace Fahamidul\LaravelCurrencyConverter;

use Illuminate\Support\ServiceProvider;

class CurrencyConverterServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(CurrencyExchange::class, function ($app) {
            return new CurrencyExchange(
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
