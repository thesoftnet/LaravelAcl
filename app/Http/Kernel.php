<?php namespace TheSoftNet\LaravelAcl\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel {

    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array
     */
    protected $middleware = [
            \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
    ];
    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
            'web' => [
                    'Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse',
                    'Illuminate\Session\Middleware\StartSession',
                    'Illuminate\View\Middleware\ShareErrorsFromSession',
                    'TheSoftNet\LaravelAcl\Http\Middleware\VerifyCsrfToken',
                    'TheSoftNet\LaravelAcl\Http\Middleware\EncryptCookies',
            ],
            'api' => [
                    'throttle:60,1',
            ],
    ];

	/**
	 * The application's route middleware.
	 *
	 * @var array
	 */
	protected $routeMiddleware = [
        // 5.2 laravel default middleware
        //            'auth' => \App\Http\Middleware\Authenticate::class,
        //            'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        //            'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        //            'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
        'admin_logged' => \TheSoftNet\LaravelAcl\Http\Middleware\AdminLogged::class,
        'can_see' => \TheSoftNet\LaravelAcl\Http\Middleware\CanSee::class,
        'has_perm' => \TheSoftNet\LaravelAcl\Http\Middleware\HasPerm::class,
	];
}
