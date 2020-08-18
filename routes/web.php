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
Route::get('/dashbourd', function () {
    return view('admin.home');
});
//admin
Route::resource('/category','QuestionController');
Route::resource('/subject','SubjectController');
Route::resource('/doctor','DoctorController');
Route::resource('/class','ClassController');
Route::get('/survey/showuser/{id}','SurveyController@show_survey_for_user')->name('survey.showuser');
Route::get('show/user','SurveyController@show_user_for_survey');
Route::get('/show/subject','SurveyController@show_subject_for_survey');
Route::post('/show/survey','SurveyController@show_survey_for_subject');
Route::get('/survey/pdf/{id}','SurveyController@pdf');
//student
Route::group(['middleware'=>'auth'],function(){
Route::resource('/survey','SurveyController')->except(['show']);
Route::resource('/answer','AnswerController');
Route::get('create/answer/{id}','AnswerController@create_answer')->name('create_answer');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
