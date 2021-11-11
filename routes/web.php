<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Models\User;
use Illuminate\Support\Facedes\DB;

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

Route::get('/home', function () {
    return view('welcome');
});


Route::get('/skills', function () {
    return view('skills');
});

//Category Controller

Route::get('/category/all', [CategoryController::class, 'AllCat'])->name('all.category');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $users = User::all();
    return view('dashboard', compact('users'));
})->name('dashboard');
