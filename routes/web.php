<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

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

// Templates
Route::prefix('/templates')->name('templates.')->group(function () {

    // exemplo
    Route::get('/esportes', [TemplateController::class, 'esportes'])->name('esportes');

    // index
    Route::get('/', function () {
        return view('templates.index');
    })->name('index');
});







