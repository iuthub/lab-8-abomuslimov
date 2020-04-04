<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
    $x = 10;  
$y = 6;

echo $x * $y;
$x = 50;
$y = 50;

var_dump($x >= $y); // returns true because $x is greater than or equal to $y
}
