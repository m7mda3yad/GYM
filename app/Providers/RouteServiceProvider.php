<?php
namespace App\Providers;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;
class RouteServiceProvider extends ServiceProvider
{    protected $namespace = 'App\Http\Controllers';
    protected $dashboard_namespace = 'App\Http\Controllers\Dashboard';
    public const HOME = '/';
    public function boot()
 {
        parent::boot();
}

    public function map()
    {
        $this->mapApiRoutes();
        
        $this->mapAdminRoutes();

        $this->mapWebRoutes();

        //
    }


    protected function mapWebRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/web.php'));
    }
    protected function mapAdminRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/admin.php'));
    }

    protected function mapApiRoutes()
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->namespace)
            ->group(base_path('routes/api.php'));
    }
}