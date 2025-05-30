<?php

use App\Http\Middleware\Language;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //$middleware->statefulApi();

        //$middleware->append(\Illuminate\Session\Middleware\StartSession::class);
        //$middleware->append(\Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class);
        //$middleware->append(\Illuminate\View\Middleware\ShareErrorsFromSession::class);

        $middleware->alias([
            'role' => \Spatie\Permission\Middleware\RoleMiddleware::class,
            'permission' => \Spatie\Permission\Middleware\PermissionMiddleware::class,
            'role_or_permission' => \Spatie\Permission\Middleware\RoleOrPermissionMiddleware::class,
            'language' =>Language::class,
            'DebugBar' => Barryvdh\Debugbar\Facade::class,
            'ResponseFormat' => \App\Http\Middleware\ResponseFormat::class,
        ]);
//        $middleware->web(append: [
//            \App\Http\Middleware\Language::class,
//        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
