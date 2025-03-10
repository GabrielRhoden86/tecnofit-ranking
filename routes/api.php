<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RankingController;
use App\Http\Controllers\AuthController;

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', action: [AuthController::class, 'logout'])->name('logout');
    Route::get('/ranking/{movementId}', [RankingController::class, 'getRanking']);
});
