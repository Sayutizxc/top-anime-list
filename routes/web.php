<?php

use App\Http\Controllers\TopAnimeController;
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

Route::get('/', [TopAnimeController::class, 'index']);

// Jika routnya adalah /page/1 maka akan diredirect ke /
Route::get('/page/1', function () {
    return redirect('/');
});


Route::get('/page/{page}', [TopAnimeController::class, 'index']);

// Jika terdapat page not found maka akan di redirect ke /
Route::fallback(function () {
    return redirect('/');
});
