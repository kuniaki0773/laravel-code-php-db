<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\SectionsController;
use App\Http\Controllers\SignInController;
use App\Http\Controllers\SignOutController;

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

// トップページへのアクセス
Route::get('/', [CoursesController::class, 'index']);
// コース詳細ページへのアクセス
Route::get('/courses/{id}', [CoursesController::class, 'show'])->name('courses.show');
// セクション詳細ページへのアクセス（名前付きルート）
Route::get('/sections/{course_id}/{section_id}', [SectionsController::class, 'show'])->name('sections.show');
// サインインページの表示
Route::get('/signin', [SignInController::class, 'show'])->name('signin');
// サインインの処理
Route::post('/signin_post', [SignInController::class, 'signin'])->name('signin.post');
// サインアウトの処理
Route::get('/signout', [SignOutController::class, 'signout'])->name('signout');
