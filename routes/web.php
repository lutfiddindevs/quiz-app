<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\QuizController;
use App\Http\Controllers\ExamController;

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



Auth::routes([
	// 'register' => false,
	'reset' => false,
	'verify' => false,
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/quiz/{quizId}', [ExamController::class, 'getQuizQuestions'])->middleware('auth');
Route::group(['middleware' => 'isAdmin'], function() {
	Route::get('/', function () {
	    return view('admin.index');
	});
	Route::resource('quiz', 'QuizController');
	Route::resource('question', 'QuestionController');
	Route::resource('user', 'UserController');
	Route::get('/quiz/{id}/questions', [QuizController::class, 'question'])->name('quiz.question');
	Route::get('exam/assign', [ExamController::class, 'create'])->name('assign.exam');
	Route::post('exam/assign', [ExamController::class, 'assignExam'])->name('exam.assign');
	Route::get('exam/user', [ExamController::class, 'userExam'])->name('exam.view');
	Route::post('exam/remove', [ExamController::class, 'removeExam'])->name('exam.remove');
});
