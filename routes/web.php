<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\PageController;
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

Route::get('/', [LoginController::class, 'login']);
Route::post('/sign-in', [LoginController::class, 'auth']);
Route::get('/sign-up', [LoginController::class, 'register']);
Route::post('/create-user', [LoginController::class, 'create']);
Route::get('/log-out', [LoginController::class, 'logout']);

Route::group(['middleware' => 'auth'], function (){
    Route::get('/dashboard', [PageController::class, 'dashboard']);
    Route::get('/notes', [PageController::class, 'notes']);
    Route::get('/create-note', [PageController::class, 'createNote']);
    Route::get('{id}/detail', [PageController::class, 'detailNote']);
    Route::get('{id}/update-note', [PageController::class, 'updateNote']);

    Route::post('/create', [NoteController::class, 'create']);
    Route::patch('/{id}/update', [NoteController::class, 'update']);
    Route::get('/{id}/delete', [NoteController::class, 'delete']);
});
