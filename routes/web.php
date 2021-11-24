<?php

use App\Http\Controllers\GitHubController;
use App\Http\Controllers\RedController;
use App\Http\Controllers\RelationController;
use Illuminate\Database\Eloquent\Relations\Relation;
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

Route::get('/', function () {
    return view('index');
});

Route::resource('Red', RedController::class);

Route::get('/relation', [RelationController::class,'showRelation'])->name('relation');
Route::post('/relation/store', [RelationController::class,'saveRelation'])->name('store_relation');

Route::get('auth/github', [GitHubController::class, 'gitRedirect']);
Route::get('auth/github/callback', [GitHubController::class, 'gitCallback']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
