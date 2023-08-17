<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use PharIo\Manifest\Email;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // 
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
       

        // $user = Auth::attempt([
        //     'name' =>'admin',
        //     'email' => 'admin@admin.com',
        //     'password' =>123456789
        // ]) ? "true" : "false";

        // echo $user;
        // die;
    }
}
