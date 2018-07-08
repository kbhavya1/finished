<?php

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


Route::middleware(['auth'])->group(function () {
Route::resource('ques','QuestionsController');
Route::post('/submitPaper','QuestionsController@submitPaper');
Route::get('/startexam','ExamController@startExam');
Route::get('/seeder_dashboard','SeederController@dashboard');
Route::get('/seedQuestions','SeederController@seedQuestions');
Route::post('/insert','ExamController@insertTodb')->name('insert');
Route::get('/student_dashboard','StudentController@stu_dashbard')->name('stu_dash');
});


//Route::get('/loginview','ExamController@login')->name('loginview');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/frontend', function () {
  return view('exam.frontend');
});
