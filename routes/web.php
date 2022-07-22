<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\FinanceiroController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['middleware' => 'auth:sanctum'], function() {
    Route::get('/financeiro', [FinanceiroController::class, 'index'])->middleware(['auth', 'verified'])->name('financeiro');

    // Route::post('sugerir', [BabyNameController::class, 'store'])->name('criarsugestao');

    // // Route::get('/liked/{id_babyname}', [LikeController::class, 'getLiked'])->name('getLiked');
    // Route::post('/like/{id_babyname}', [LikeController::class, 'like'])->name('like');
    // Route::post('/dislike/{id_babyname}', [LikeController::class, 'dislike'])->name('dislike');
});

require __DIR__.'/auth.php';
