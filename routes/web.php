<?php

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

Route::get('/',[\App\Http\Controllers\SingleQuestionController::class, 'getQuestion'] ); //lấy toàn bộ câu hỏi ko theo class
Route::get('q' , [\App\Http\Controllers\ClassQuestionController::class , 'getQuestion']); //lấy câu hỏi theo class
Route::get('r' , [\App\Http\Controllers\ResultController::class , 'getQuestion']);  // lấy kết quả bài thi
Route::get('rs' , [\App\Http\Controllers\ResultController::class , 'getTestResult']); //lây kết quả bài tập

Route::get('qid' , [\App\Http\Controllers\AnswerController::class , 'getQuestionIdByForm']); // lấy toàn bộ question id và ws request


