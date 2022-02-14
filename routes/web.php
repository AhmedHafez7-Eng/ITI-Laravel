<?php

namespace App\Http\Middleware;

use App\Mail\MyTestMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ArticleController;

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

// =============== Categories Routes

Route::get('/showCategories', [
    CategoryController::class,
    'showCategories',
])->name('categories.list');

Route::get('/create', [CategoryController::class, 'createCategory'])->middleware(['auth'])->middleware('checkAge');

Route::get('/create1', [CategoryController::class, 'save'])->name('categories.save')->middleware(['auth'])->middleware('checkAge');

Route::get('/delete/{id}', [CategoryController::class, 'delete'])->middleware(['auth'])->middleware('admin');

Route::get('/show/{id}', [CategoryController::class, 'showOneCategory']);

Route::get('/update/{id}', [CategoryController::class, 'updateCategory'])->middleware(['auth'])->middleware('admin');

Route::get('/update1', [CategoryController::class, 'update'])->name('categories.update')->middleware(['auth'])->middleware('admin');

// =============== Articles Routes

Route::get('/showArticles', [ArticleController::class, 'showArticles'])->name(
    'article.list'
);
Route::get('/createArticle', [ArticleController::class, 'createArticle'])->middleware(['auth'])->middleware('checkAge');
Route::get('/createArticle1', [ArticleController::class, 'saveArticle'])->name(
    'article.save'
)->middleware(['auth'])->middleware('checkAge');

Route::get('/deleteArticle/{id}', [ArticleController::class, 'deleteArticle'])->middleware(['auth'])->middleware('admin');

Route::get('/showArticle/{id}', [ArticleController::class, 'showOneArticle']);

Route::get('/updateArticle/{id}', [ArticleController::class, 'updateArticle'])->middleware(['auth'])->middleware('admin');

Route::get('/updateArticle1', [ArticleController::class, 'updateArt'])->name(
    'article.update'
)->middleware(['auth'])->middleware('admin');

// =============== Auth Routes

Route::get('/', function () {
    return view('welcome');
})->name('guest');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';


//============= Mails Routes

Route::get('/send-mail', function () {

    $mailInfo = [
        'title' => 'Mail from Ahmed Hafez',
        'body' => 'This is for testing email using smtp, Mailtrap in Laravel'
    ];

    $sent = Mail::to('ahmedhafezoffic@gmail.com')->send(new MyTestMail($mailInfo));

    // return response()->json([
    //     'message' => 'Mail has sent.'
    // ], Response::HTTP_OK);
    // return view('emails/myTestMail');
});
