<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Tasks\TasksController;
use Illuminate\Support\Facades\Route;


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

//Route::get('/tasks', [TasksController::class, 'index']);

Route::get('/', [LoginController::class, 'showLoginForm']);
Route::post('/', [LoginController::class, 'login']);

Route::get('/register', [RegisterController::class, 'showRegisterForm']);
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/tasks', [TasksController::class, 'index']);
Route::prefix('/task')->group(function (){
    Route::post('/create', [TasksController::class, 'store']);
    Route::get('/create', [TasksController::class, 'showStoreForm']);
    Route::put('/{id}', [TasksController::class, 'edit']);
    Route::get('/{id}', [TasksController::class, 'showEditForm']);
    Route::delete('/{id}', [TasksController::class, 'destroy']);
});
