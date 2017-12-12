<?php

namespace App\Providers;

use App\Models\User;
use App\Models\Topic;
use App\Observers\TopicObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
//        User::creating(function (User $user){
//            $user->setAttribute('password', \Hash::make($user->password));
//        });

        \Carbon\Carbon::setLocale('zh');
        Topic::observe(TopicObserver::class);
    }



    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }



}
