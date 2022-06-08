<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\PinBoardController;
use App\Http\Controllers\NotificationController;

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
    return view('welcome');
});

Route::middleware( ['auth'] )->group( function ()
{
    Route::resources(
        [
            'dashboards' => DashboardController::class,
            'movies' => MovieController::class,
            'musics' => MusicController::class,
            'favorites' => FavoriteController::class,
            'tasks' => TaskController::class,
            'pin-boards' => PinBoardController::class,
        ]
    );
    Route::get('/notifications/{notification_id}', [NotificationController::class, 'notification.index']);
    Route::get('/notification', [NotificationController::class, 'notification.index']);
});

require __DIR__.'/auth.php';
