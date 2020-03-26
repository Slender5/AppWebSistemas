<?php

namespace WebSistemas\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Route;


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
        // function boot()
        Route::resourceVerbs([
          'create' => 'nueva',
          'edit' => 'editar',

      ]);
        Schema::defaultStringLength(191);
    }
}
