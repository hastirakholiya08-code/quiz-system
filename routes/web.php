<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\McqController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\CategoryController;


Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');

Route::resource('mcqs', McqController::class);
Route::get('index',[McqController::class,'index']);
Route::get('create',[McqController::class,'create']);
Route::get('edit',[McqController::class,'edit']);
Route::resource('quizzes', QuizController::class);
Route::resource('categories', CategoryController::class);
//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/',[UserController::class,'welcome']);
Route::get('user-quiz-list/{id}/{category}',[UserController::class,'userQuizList']);
Route::get('start-quiz/{id}/{name}',[UserController::class,'startQuiz']);
Route::view('user-signup','user-signup');
Route::post('user-signup',[UserController::class,'userSignup']);
Route::get('user-logout',[UserController::class,'userLogout']);
Route::get('user-signup-quiz',[UserController::class,'userSignupQuiz']);


Route::view('user-login','user-login');
Route::post('user-login',[UserController::class,'userLogin']);
Route::get('user-login-quiz',[UserController::class,'userLoginQuiz']);
Route::get('mcq/{id}/{name}',[UserController::class,'mcq']);

Route::view('admin-login','admin-login');
Route::post('admin-login',[AdminController::class,'login']);
//Route::get('dashboard',[AdminController::class,'dashboard']);
//Route::get('dashboard',[AdminController::class,'dashboard']);
Route::get('admin-categories',[AdminController::class,'categories']);
Route::get('admin-logout',[AdminController::class,'logout']);
Route::post('add-category',[AdminController::class,'addCategory']);
Route::get('category/delete/{id}',[AdminController::class,'deleteCategory']);
Route::get('add-quiz',[AdminController::class,'addQuiz']);
Route::post('add-mcq',[AdminController::class,'addMCQs']);
Route::get('end-quiz',[AdminController::class,'endQuiz']);
Route::get('show-quiz/{id}/{quizName}',[AdminController::class,'showQuiz']);
Route::get('quiz-list/{id}/{category}',[AdminController::class,'quizList']);
