<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\DB;
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
        config(['app.locale' => 'id']);
	    Carbon::setLocale('id');

        Blade::if('member', function () {
            return auth()->user() && (DB::table('subscriptions')->where('user_id', Auth()->user()->id)->exists() == true);
        });

        Blade::if('notMember', function () {
            return auth()->user() && (DB::table('subscriptions')->where('user_id', Auth()->user()->id)->exists() == false);
        });
    }
}
