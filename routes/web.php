<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\stdcontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/' , [stdcontroller::class, 'home'])->name('homepage');
Route::get('/about' , [stdcontroller::class, 'about'])->name('aboutpage');
Route::get('/contact' , [stdcontroller::class, 'contact'])->name('contactpage');
Route::get('/gallery' , [stdcontroller::class, 'gallery'])->name('gallerypage');

