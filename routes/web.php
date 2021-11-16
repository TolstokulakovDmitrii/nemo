<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Models\User;
use Illuminate\Support\Facades\DB;

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
//view
Route::get('/category/all', [CategoryController::class, 'AllCat'])->name('all.category');
//add
Route::post('/category/add', [CategoryController::class, 'AddCat'])->name('store.category');
//edit
Route::get('/category/edit/{id}', [CategoryController::class, 'Edit']);
Route::post('/category/update/{id}', [CategoryController::class, 'Update']);
//delete
Route::get('/softdelete/category/{id}', [CategoryController::class, 'SoftDelete']);
//restore
Route::get('/category/restore/{id}', [CategoryController::class, 'Restore']);
//delete
Route::get('/delete/category/{id}', [CategoryController::class, 'Delete']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $users = User::all();
    return view('dashboard', compact('users'));
})->name('dashboard');
