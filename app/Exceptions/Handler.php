<?php

namespace App\Exceptions;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\JsonResponse;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    // protected function unauthenticated($request, AuthenticationException $exception): JsonResponse
    // {
    //     return response()->json([
    //         'message' => 'Você precisa estar autenticado para acessar esta rota.'
    //     ], 401);
    // }

    public function register(): void
    {
        $this->reportable(function (Throwable $e) {

        });
    }
}
