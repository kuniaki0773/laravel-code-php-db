<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\SectionsController;
use App\Http\Controllers\SignInController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\SignOutController;
use App\Http\Controllers\HistoryController;

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
Route::get('/', [CoursesController::class, 'index'])->name('index');
// コース詳細ページへのアクセス
Route::get('/courses/{id}', [CoursesController::class, 'show'])->name('courses.show');
// セクション詳細ページへのアクセス（名前付きルート）
Route::get('/sections/{course_id}/{section_id}', [SectionsController::class, 'show'])->name('sections.show');
// サインインページの表示
Route::get('/signin', [SignInController::class, 'show'])->name('signin');
// サインインの処理
Route::post('/signin_post', [SignInController::class, 'signin'])->name('signin.post');
// サインアップパージの表示
Route::get('/signup', [SignUpController::class, 'show'])->name('signup.show');
// サインアップの処理
Route::post('/signup', [SignUpController::class, 'signup'])->name('signup.post');
// サインアウトの処理
Route::get('/signout', [SignOutController::class, 'signout'])->name('signout');
// 学習履歴画面の表示
Route::get('/history', [HistoryController::class, 'show'])->name('history');
// 学習履歴の処理
Route::post('/history', [HistoryController::class, 'postHistory'])->name('history.post');
