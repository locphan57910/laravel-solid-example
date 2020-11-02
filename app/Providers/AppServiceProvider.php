<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Services\Server\ServerServiceInterface;
use App\Http\Services\Server\ServerService;
use App\Http\Services\BaseServiceInterface;
use App\Http\Services\BaseService;
use App\Http\Services\VideoGenerator\VideoGeneratorServiceInterface;
use App\Http\Services\VideoGenerator\VideoGeneratorService;

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
        // Service providers
        $this->app->singleton(BaseServiceInterface::class, BaseService::class);
        $this->app->singleton(ServerServiceInterface::class, ServerService::class);
        $this->app->singleton(VideoGeneratorServiceInterface::class, VideoGeneratorService::class);
    }
}
