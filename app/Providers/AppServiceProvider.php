<?php

namespace App\Providers;
use App\Category;
use Illuminate\Support\ServiceProvider;
use App\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;


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
        $categoreis = Category::all();
        View::share('categories', $categoreis);

        // $this->registerPolicies();
        Gate::allows('comment-delete', function($user,$comment){
            return $user->id == $comment->user_id;
        });
    }

    // public function boot()
    // {
    //     $this->registerPolicies();
    //     Gate::define('comment-delete', function($user,$comment){
    //         return $user->id == $comment->user_id;
    //     });
    // }
}
