<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\SectionsController;
use App\Http\Controllers\SignInController;
use App\Http\Controllers\SignOutController;
// use App\Models\Course;
// use App\Http\Controllers\HomeController;
// use App\Http\Controllers\SectionController;
// use App\Http\Controllers\SignInController;
// use App\Http\Controllers\SignUpController;
// use App\Http\Controllers\HistoryController;
// use App\Http\Controllers\ErrorController;



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

Route::get('/', [CoursesController::class, 'index']);
Route::get('/sections/{id}', [SectionsController::class, 'show']);
Route::get('/sections/{course_id}/{section_id}', [SectionsController::class, 'show'])->name('sections.show');
Route::get('/courses/{id}', [CoursesController::class, 'show'])->name('courses.show');
Route::get('/detail/{course_id}/{section_id}', [SectionsController::class, 'detail'])->name('detail');

// サインインページの表示
Route::get('/signin', [SignInController::class, 'show'])->name('signin');
// サインインの処理
Route::post('/signin_post', [SignInController::class, 'signin'])->name('signin.post');
Route::get('/index', [CoursesController::class, 'index'])->name('index');
// サインアウトの処理
Route::get('/signout', [SignOutController::class, 'signout'])->name('signout');
