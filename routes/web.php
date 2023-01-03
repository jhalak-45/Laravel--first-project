<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\IndexController;
use  App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Auth;
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

route::get('/',[App\Http\Controllers\IndexController::class,'index'])->name('index');
route::get('/about',[App\Http\Controllers\AboutController::class,'index'])->name('about');
route::get('/contact',[App\Http\Controllers\ContactController::class,'index'])->name('contact');
route::get('/services',[App\Http\Controllers\ServiceController::class,'index'])->name('services');
route::get('/blog',[App\Http\Controllers\BlogController::class,'index'])->name('blog');
route::get('/projects',[App\Http\Controllers\ProjectController::class,'index'])->name('projects');





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
