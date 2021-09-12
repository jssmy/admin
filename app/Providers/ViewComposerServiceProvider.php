<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Views\MenuComposer;
use Illuminate\Support\Facades\View;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        View::composer('layouts.partials.sidebar',  MenuComposer::class);
    }
}
