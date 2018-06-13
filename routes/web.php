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

Route::resource('ques','QuestionsController');
Route::get('/startexam','ExamController@index');
Route::post('/submitPaper','QuestionsController@submitPaper');
Route::get('/seederview','ExamController@seed')->name('seederview');
Route::get('/loginview','ExamController@login')->name('loginview');
Route::get('/adminview','ExamController@admin_login')->name('adminview');
Route::get('/dashboardview','ExamController@dash_redirect')->name('dashboardview');
Route::get('/seedpage','ExamController@seeder_page')->name('seedpage');
Route::post('/insert','ExamController@insertTodb')->name('insert');
Route::get('/new', function () {
    return view('exam.carousel');
});

Route::get('/newc', function(){
  return view('exam.optseed');
});
