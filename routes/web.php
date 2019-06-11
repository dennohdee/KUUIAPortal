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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/contact', 'ContactController@getContacts')->name('contact');
Route::get('/users', 'UsersController@getUsers')->name('users');
Route::get('/feestructure', 'FeeStructureController@feestructure')->name('feestructure');
Route::get('/sessionreporting', 'SessionReportingController@sessionreporting')->name('sessionreporting');
Route::get('/admission', 'AdmissionController@admission')->name('admission');
Route::get('/profile', 'UsersController@getMe')->name('profile');
Route::get('/admin/dashboard', 'AdminDashController@admindash')->name('admindash');
Route::get('/admin/dashboard','AdminController@index')->name('admin');
Route::get('/report', 'ReportController@report')->name('report');
//Route::get('/report', 'ReportController@addSession');
Route::get('/repository', 'RepositoryController@repository')->name('repository');
Route::get('/calendar', 'CalendarController@calendar')->name('calendar');
Route::get('events', 'EventController@index')->name('calendar');
Route::get('/about', 'AboutController@about')->name('about');
Route::get('/help', 'HelpController@help')->name('help');
Route::post('/contact', 'ContactController@store');
Route::post('/repository', 'RepositoryController@store');
Route::put('/profile', 'UsersController@update');
Route::prefix('admin')->group(function () {
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/repository', 'AdminRepositoryController@repository')->name('admin.repository');
    Route::post('/repository', 'AdminRepositoryController@store');
    Route::delete('/repository','AdminRepDelController@destroy');

    Route::get('/calendar', 'AdminCalendarController@calendar')->name('admin.calendar');
    Route::get('events', 'AdminEventController@index')->name('admin.events');
    Route::post('events', 'AdminEventController@store');
    Route::get('/profile', 'AdminUserController@getMe')->name('admin.profile');
    Route::put('/profile', 'AdminUserController@updateMe');
    Route::get('/users', 'AdminUserController@getUsers')->name('admin.users');
    Route::get('/about', 'AdminAboutController@about')->name('admin.about');
    Route::get('/help', 'AdminController@help')->name('admin.help');
    Route::get('/sessionreporting', 'AdminController@sessionreporting')->name('admin.sessionreporting');
    Route::get('/report', 'AdminController@report')->name('admin.report');
    Route::get('/contact', 'AdminController@contact')->name('admin.contact');
    Route::post('/contact', 'AdminController@storecontact');
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
});