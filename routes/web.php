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
//Route::get('/get-all-revelations','RevelationsController@getAllRevelations');
Route::post('/test-api','PaymentsController@acceptMoneyFromSubscriber');
Route::get('/get-my-revelations','RevelationsController@getRevelationsPage')->name("My Revelations");
Route::get('/create-new-revelation','RevelationsController@getRevelationsForm');
Route::get('/get-all-bible-marathon-trainees','RevelationsController@getAllRevelations')->name('All Revelations');
Route::get('/get-individual-revelations/{trainee_id}','RevelationsController@getIndividualRevelations')->name('Individual Revelations');
Route::get('/get-all-trainees','TraineesController@getAllTrainees')->name('All Trainees');
Route::get('/get-new-trainees','TraineesController@getNewTrainees')->name('New Trainees');
Route::get('/suspend-trainees/{id}','TraineesController@suspendTrainee');
Route::get('/approve-trainees/{id}','TraineesController@activateTrainee');
Route::get('/delete-trainees/{id}','TraineesController@deleteTrainee');
Route::get('/get-old-trainees','TraineesController@getOldTrainees')->name('Old Trainees');
Route::get('/dashboard',function(){ return view('template');});
Route::get('/get-enrollment-form/{id}','EnrollmentController@getEnrollmentForm')->name('Enrollment Form');
Route::post('/create-enrollment-information','EnrollmentController@validateEnrollment');
Route::get('/get-assessment-form','AssessmentControlller@getAssessmentForm')->name('Assessment Form');
Route::get('/get-courses','CoursesController@getCourses')->name('Courses');
Route::get('/get-payment-methods/{id}','PaymentsController@getPaymentMethod')->name('Payment Methods');
Route::get('/get-sub-courses/{id}','CoursesController@getSubCourses')->name('Subcourses');
Route::get('/start-lectures/{id}','CoursesController@getLecture');
Route::get('/view-course/{id}','CoursesController@viewCourse')->name("Lectures");
Route::get('/get-forum','ForumController@getForum')->name('Forum');
Route::post('/chat-in-forum','ForumController@validateForum');
Route::post('/upload-chat-photo','ForumController@uploadPhoto');
Route::post('/submit-assessment','AssessmentControlller@validateAssessment');
Route::get('/get-assignments','AssignmentController@getAssignment')->name('Assignments');
Route::get('/get-assignment-form','AssignmentController@getAssignmentForm')->name('Assignment Form');
Route::post('/updload-assignment','AssignmentController@createAssignment');
Route::get('/get-assignments-answers-form','AssignmentController@sendAssignmentAnswersForm')->name('Assignment Answers Form');
Route::post('/send-assignment-answers','AssignmentController@validateAnswer');
Route::get('/add-assignment-marks/{id}','AssignmentController@addAssignmentMarksForm')->name('Add Assignment Marks');
Route::get('/add-marks/{id}','AssignmentController@createAssignmentMarks');
Route::get('/get-assignments-uploaded','AssignmentController@getUploadedAssignments');
Route::get('/get-account-settings','RolesController@getRoleWithUsers')->name('Settings And Users');
Route::get('/display-role/{id}','RolesController@getPermissionRole')->name('Roles');
Route::get('/add-permission/{id}','RolesController@getPermissionInCheckboxes')->name('Permissions');
Route::get('/assign-permissions/{id}','RolesController@assignPermission');
Route::get('/unsign-permission/{id}','RolesController@unsignPermission');
Route::get('/get_user_and_roles/{id}','RolesController@getAccountRoles')->name('Account Setting Roles');
Route::get('/assign-roles/{id}','RolesController@updateRole');
Route::get('/add-role-form','RolesController@addRoleForm')->name('Add Role');
Route::get('/create-role','RolesController@createRole');
Route::get('/get-add-course','CoursesController@addCourseForm')->name('Add Course');
Route::get('/add-course','CoursesController@validateCourse');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
