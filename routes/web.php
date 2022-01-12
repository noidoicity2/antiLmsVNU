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

Route::get('/',[\App\Http\Controllers\SingleQuestionController::class, 'getQuestion'] );
Route::get('q' , [\App\Http\Controllers\ClassQuestionController::class , 'getQuestion']);
Route::get('r' , [\App\Http\Controllers\ResultController::class , 'getQuestion']);
Route::get('qid' , [\App\Http\Controllers\AnswerController::class , 'getQuestionIdByForm']);


