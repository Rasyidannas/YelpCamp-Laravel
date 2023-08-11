<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Policies\CommentPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //camp auth
        Gate::define('camps.update', CommentPolicy::class, 'update');
        Gate::define('camps.delete', CommentPolicy::class, 'delete');
        
        //comments auth
        Gate::define('comments.update', CommentPolicy::class, 'update');
        Gate::define('comments.delete', CommentPolicy::class, 'delete');
    }
}
