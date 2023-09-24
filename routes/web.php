<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\gameController;
use App\Http\Controllers\DrinkingController;
use App\Http\Controllers\productController;
use App\Http\Controllers\lecturerController;


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

Route::get('/game', [gameController::class, "index"]);
Route::get('/drink',[DrinkingController::class,"index"]);
Route::get('drinking', [DrinkingController::class, "index"]);
Route::get('drinking/create', [DrinkingController::class, "createForm"]);
Route::post('drinking/create', [DrinkingController::class, "create"]);

Route::middleware(['auth'])->group(function () {
    Route::get('/product', [productController::class, 'index']);
});



Route::middleware(['auth'])->group(function () {
    Route::get('/lecturers',[lecturerController::class,"index"]);
    Route::post("/lecturers/insert",[lecturerController::class,"insert"]);
    Route::get("/lecturers/editForm/{lec_id}",[lecturerController::class,"editForm"]);
    Route::post("/lecturers/update",[lecturerController::class,"update"]);
    Route::get('/lecturers/delete/{lec_id}', [lecturerController::class,"delete"]);
    Route::delete('/lecturers/{lec_id}', [lecturerController::class,"destroy"]);
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
