<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CollegeController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ApplyController;
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

Route::get('/', function () {
    // $admin = User::whereName('Admin')->first();
    // dd(admin->toArray());
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/blog', [BlogController::class, 'index']);
Route::get('/college', [CollegeController::class, 'index']);
Route::get('/review', [ReviewController::class, 'index']);
Route::get('/careers', [ReviewController::class, 'career']);
Route::get('/course',[CourseController::class,'index'])->name("course");
Route::get('/addcollege',[CollegeController::class,'addcollege'])->name("college");
Route::get('/apply',[ApplyController::class,'index'])->name("apply");
Route::get('/addblog',[BlogController::class,'addblog'])->name("blog");