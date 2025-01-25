<?php

use App\Http\Middleware\IsLandlord;
use App\Http\Middleware\LandlordIsLoggedin;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Routing\Exceptions\InvalidSignatureException;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
        $middleware->alias([
            'IsLandlord' => IsLandlord::class,
            'LandlordIsLoggedin' => LandlordIsLoggedin::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
        $exceptions->render(function (InvalidSignatureException $e) {
            return response()->view('errors.link-expired', status: 403);
        });
    })->create();
