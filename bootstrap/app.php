<?php

use App\Http\Middleware\Administrator;
use App\Http\Middleware\Bendahara;
use App\Http\Middleware\Kaban;
use App\Http\Middleware\KabidPerben;
use App\Http\Middleware\PPK;
use App\Http\Middleware\Verifikator;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'Administrator' => Administrator::class,
            'Kaban' => Kaban::class,
            'Kabid' => KabidPerben::class,
            'Verifikator' => Verifikator::class,
            'PPK'=> PPK::class,
            'Bendahara' => Bendahara::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
