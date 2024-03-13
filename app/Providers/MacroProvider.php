<?php

namespace App\Providers;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\ServiceProvider;

class MacroProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        Response::macro('data', function (string $message = '', $data = [], int $status = 200) {
            return response()->json([
                'message' => $message,
                'data'    => $data,
            ], $status);
        });

        Response::macro('dataWithAdditional', function (string $message = '', $data = [], $additional = [], int $status = 200) {
            return $data->additional(array_merge([
                'message' => $message
            ], $additional))->response()->setStatusCode($status);
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
