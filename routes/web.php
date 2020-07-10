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

Route::post('/create-my-revelation','RevelationsController@validateRevelation');
Route::delete('/delete-revelation/{revelation_id}','RevelationsController@deleteRevelation');
Route::get('/get-my-revelations/{trainee_id}','RevelationsController@getMyRevelations');
Route::get('/get-all-revelations','RevelationsController@getAllRevelations');
Route::post('/test-api','PaymentsController@acceptMoneyFromSubscriber');
Route::get('/get-my-revelations','RevelationsController@getRevelationsPage');
Route::get('/',function(){ return view('template');});
Route::get('/get-enrollment-form','EnrollmentController@getEnrollmentForm');
Route::get('/get-assessment-form','AssessmentControlller@getAssessmentForm');
Route::get('/get-courses','CoursesController@getCourses');
Route::get('/get-payment-methods','PaymentsController@getPaymentMethod');
Route::get('/get-sub-courses','CoursesController@getSubCourses');
