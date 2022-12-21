<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JamController;
use App\Http\Controllers\TutorController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\KloterController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\UserController;

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

//Route::get('/', [KloterController::class, 'members']);

Route::get('/', function () {
    return view('members', [
        "title" => "Global English"
    ]);
});

Route::get('/home', [KloterController::class, 'home']);
Route::resource('jams', JamController::class);
Route::resource('tutors', TutorController::class);
Route::resource('subjects', SubjectController::class);
Route::resource('ruangans', RuanganController::class);
Route::resource('kloters', KloterController::class);
Route::resource('members', MemberController::class);
Route::resource('dashboard', UserController::class);
Route::delete('members', [MemberController::class, 'deleteAll']);
Route::delete('kloters', [KloterController::class, 'deleteAll']);
Route::post('members/import', [MemberController::class, 'import']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
