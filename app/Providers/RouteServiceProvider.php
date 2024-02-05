<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to your application's "home" route.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    public const HOME = '/home';


        /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     */
    public function boot(): void
    {
        parent::boot();

    }
    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        $this->mapDashboardWebRoutes();

        $this->mapRoomWebRoutes();

        $this->mapUserWebRoutes();

        $this->mapBookingWebRoutes();

        $this->mapDraftWebRoutes();

        $this->mapAnnouncementWebRoutes();
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }

    /**
     * Define dashboard routes
     *
     * @return void
     */
    protected function mapDashboardWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->prefix('dashboard')
             ->group(base_path('routes/dashboard.php'));
    }

    /**
     * Define booking routes
     *
     * @return void
     */
    protected function mapBookingWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->prefix('dashboard/bookings')
             ->group(base_path('routes/web/booking.php'));
    }

    /**
     * Define room routes
     *
     * @return void
     */
    protected function mapRoomWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->prefix('dashboard/rooms')
             ->group(base_path('routes/web/room.php'));
    }

    /**
     * Define user routes
     *
     * @return void
     */
    protected function mapUserWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->prefix('dashboard/users')
             ->group(base_path('routes/web/user.php'));
    }


    protected function mapDraftWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->prefix('dashboard/bookings/drafts')
             ->group(base_path('routes/web/draft.php'));
    }

    /**
     * Define announcement routes
     *
     * @return void
     */
    protected function mapAnnouncementWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->prefix('dashboard/announcements')
             ->group(base_path('routes/web/announcement.php'));
    }


}
