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

Route::get('/create-my-revelation','RevelationsController@validateRevelation');
Route::delete('/delete-revelation/{revelation_id}','RevelationsController@deleteRevelation');
Route::get('/get-my-revelations/{trainee_id}','RevelationsController@getMyRevelations');
Route::get('/get-all-revelations','RevelationsController@getAllRevelations');
Route::post('/test-api','PaymentsController@acceptMoneyFromSubscriber');
Route::get('/get-my-revelations','RevelationsController@getRevelationsPage')->name("My Revelations");
Route::get('/create-new-revelation','RevelationsController@getRevelationsForm');
Route::get('/get-all-bible-marathon-trainees','RevelationsController@getAllRevelations')->name('All Revelations');
Route::get('/get-individual-revelations/{trainee_id}','RevelationsController@getIndividualRevelations')->name('Individual Revelations');
Route::get('/get-all-trainees','TraineesController@getAllTrainees')->name('All Trainees');
Route::get('/get-new-trainees','TraineesController@getNewTrainees')->name('New Trainees');
Route::get('/get-old-trainees','TraineesController@getOldTrainees')->name('Old Trainees');
Route::get('/',function(){ return view('template');});
Route::get('/get-enrollment-form','EnrollmentController@getEnrollmentForm')->name('Enrollment Form');
Route::get('/get-assessment-form','AssessmentControlller@getAssessmentForm')->name('Assessment Form');
Route::get('/get-courses','CoursesController@getCourses')->name('Courses');
Route::get('/get-payment-methods','PaymentsController@getPaymentMethod')->name('Payment Methods');
Route::get('/get-sub-courses','CoursesController@getSubCourses')->name('Subcourses');
Route::get('/start-lectures/{id}','CoursesController@getLecture');
Route::get('/view-course/{id}','CoursesController@viewCourse')->name("Lectures");
Route::get('/get-forum','ForumController@getForum')->name('Forum');
