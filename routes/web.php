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

/*Normal Pages */
Auth::routes(['verify'=>true]);
/*
Route::group(['middleware'=>'administrator'],function(){
Route::get('Adminhome', 'AdministratorController@Adminhome'); 
});*/
/*
Route::group(['middleware'=>'auth'],function(){
    Route::get('about',function(){
        return view('about');
    })->name('about');;
    Route::get('home', 'AdminlistratorController@home');
});*/


Route::get('app2', function () {
    return view('layouts.app');
});

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::get('about', function () {
    return view('Pages.about');
});
Route::get('job-page', function () {
    return view('Pages.job-page');
});
Route::get('job-detail', function () {
    return view('Pages.job-detail');
});
Route::get('resume-page', function () {
    return view('Pages.resume-page');
});

Route::get('common', function () {
    return view('layouts.common');
});

// Administrator routes
Route::get('Adminhome', 'AdministratorController@Adminhome')->name('admin')->middleware('Admin');
Route::get('inbox', 'AdministratorController@inbox');
Route::get('adminLogin', 'AdministratorController@adminLogin');

//Admin-Coordinator
Route::get('addCoordinator', 'AdministratorController@addCoordinator');
Route::get('coordinatorOverview', 'AdministratorController@coordinatorOverview');
Route::get('coordinatorNotification', 'AdministratorController@coordinatorNotification');

Route::post('/coordinators','CoordinatorController@store');
Route::get('coordinatorOverview','CoordinatorController@index');
Route::get('coordinatorOverview/{id}','CoordinatorController@edit');
Route::patch('coordinatorOverview/{id}','CoordinatorController@update');
Route::delete('coordinatorOverview/{id}','CoordinatorController@destroy');

//Admin-Student
Route::get('addStudent', 'AdministratorController@addStudent');
Route::get('studentOverview', 'AdministratorController@studentOverview');
Route::get('studentNotification', 'AdministratorController@studentNotification');

//Route::post('/addStudent','studentsController@store');


Route::post('/students','addController@store');
Route::get('studentOverview','addController@index');
Route::get('studentOverview/{id}','addController@edit');
Route::patch('studentOverview/{id}','addController@update');
Route::delete('studentOverview/{id}','addController@destroy');

//Admin-Company
Route::get('addCompany', 'AdministratorController@addCompany');
Route::get('companyOverview', 'AdministratorController@companyOverview');
Route::get('companyNotification', 'AdministratorController@companyNotification');

Route::post('/companies','CompanyController@store');
Route::get('companyOverview','CompanyController@index');
Route::get('companyOverview/{id}','CompanyController@edit');
Route::patch('companyOverview/{id}','CompanyController@update');
Route::delete('companyOverview/{id}','CompanyController@destroy');

//student
Route::get('profile', 'StudentController@profile')->name('student')->middleware('Student');
Route::get('addResume', 'StudentController@addResume');
Route::get('jobAlert', 'StudentController@jobAlert');
Route::get('changePassword', 'StudentController@changePassword');
Route::get('myMail', 'StudentController@myMail');
Route::get('student', 'StudentController@student');

Route::get('student', function () {
    return view('layouts.student');
});

//coordinator
Route::get('CoordinatorHome', 'CoordinatorController@CoordinatorHome')->name('coordinator')->middleware('Coordinator');
Route::get('changeCoPassword', 'CoordinatorController@changeCoPassword');
Route::get('CMail', 'CoordinatorController@CMail');
Route::get('CoCalender', 'CoordinatorController@CoCalender');
Route::get('CoLock', 'CoordinatorController@changeCoLock');
Route::get('coordinatorLogin', 'CoordinatorController@coordinatorLogin');
Route::get('studentDetail', 'CoordinatorController@studentDetail');
Route::get('studentRequest', 'CoordinatorController@studentRequest');

//company
Route::get('companyHome', 'CompanyController@viewCompany')->name('company')->middleware('Company');
Route::get('Login', 'CompanyController@login');
Route::get('registration', 'CompanyController@register');

//Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');


Auth::routes();
// Route::get('/home', 'HomeController@index');