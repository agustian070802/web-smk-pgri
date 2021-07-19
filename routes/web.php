<?php

use App\Http\Controllers\DetailArticle;
use App\Http\Livewire\CreatenewArticle;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Home;
use App\Http\Livewire\UpdateArticle;
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

Route::get('/', Home::class)->name('/');
Route::get('/article/{article}/detail', [DetailArticle::class, 'show'] )->name('detail-article');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', Dashboard::class)->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/create-new-article', CreatenewArticle::class)->name('create-new-article');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/update-article/{id}', UpdateArticle::class)->name('update-article');
