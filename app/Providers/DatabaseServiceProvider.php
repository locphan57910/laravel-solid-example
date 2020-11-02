<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Repositories\BaseRepositoryInterface;
use App\Http\Repositories\BaseRepository;
use App\Http\Repositories\Server\EloquentServerRepositoryInterface;
use App\Http\Repositories\Server\EloquentServerRepository;

class DatabaseServiceProvider extends ServiceProvider
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
        // Database service providers
        $this->app->singleton(BaseRepositoryInterface::class,BaseRepository::class);
        $this->app->singleton(EloquentServerRepositoryInterface::class, EloquentServerRepository::class);
    }
}
