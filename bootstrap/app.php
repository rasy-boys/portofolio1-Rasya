<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Foundation\Configuration\Exceptions;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up'
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'admin' => \App\Http\Middleware\Admin::class,
        ]);

        // Tambahkan SweetAlert middleware ke grup web
        $middleware->web(append: [
            \RealRashid\SweetAlert\ToSweetAlert::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        // Tambahkan konfigurasi pengecualian jika diperlukan
    })
    ->create();
