<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaixasController;

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

Route::redirect('rota-a', 'rota-b');

Route::get('users', function(){
    return "Hello world!";
})->name('users');
//Route::get('/',[FaixasController::class, 'index'])->name('site.index');
//Route::get('/categoria/{id}', [FaixasController::class, 'categoria'])->name('site.categoria');