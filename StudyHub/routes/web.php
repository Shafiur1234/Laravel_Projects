<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});


///Question
Route::get('/user/ques', [UserController::class, 'userQues'])->name('user.ques');
Route::post('/user/ques', [UserController::class, 'userQuesSubmit'])->name('user.ques.submit');

/// Question list
Route::get('/user/ques/list', [UserController::class, 'userQuesList'])->name('user.ques.list');

//Question Edit
Route::get('/user/ques/edit/{id}', [UserController::class, 'userQuesEdit'])->name('user.ques.edit');
Route::post('user/ques/edit', [UserController::class, 'userQuesEditSubmit'])->name('user.ques.edit.submit');

///Question Delete
Route::get('/user/ques/delete/{id}',[UserController::class,'userQuesDelete'])->name('user.ques.delete');

///panel
Route::get('/user/panel',[UserController::class,'userPanel'])->name('user.panel');

//review
Route::get('/user/review', [UserController::class, 'userReview'])->name('user.review');
Route::post('/user/review', [UserController::class, 'userReviewSubmit'])->name('user.review.submit');

/// review list
Route::get('/user/review/list', [UserController::class, 'userReviewList'])->name('user.review.list');

//Courses
Route::get('/user/courses',[UserController::class,'courses'])->name('user.courses');


///Course book
Route::get('/course/book', [UserController::class, 'courseBook'])->name('user.course.book');
Route::post('/course/book', [UserController::class, 'courseBookSubmit'])->name('user.course.book.submit');

/// book list
Route::get('/course/booklist', [UserController::class, 'courseBookList'])->name('user.course.book.list');

///Delete room book
// Route::get('/course/book/delete/{id}',[UserController::class,'courseBookDelete'])->name('user.course.book.delete');

// edit room book
// Route::get('/course/book/edit/{id}',[UserController::class,'courseBookEdit'])->name('user.course.book.edit');
// Route::post('/course/book/edit',[UserController::class,'courseBookEditSubmit'])->name('user.course.book.edit.submit');



