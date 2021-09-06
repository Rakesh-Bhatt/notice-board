<?php
Auth::routes();
Route::group(['namespace' => 'Admin', 'prefix' => 'admin','middleware'=>['auth:web']], function () {
Route::get('/', 'DashboardController@index')->name('dashboard');

Route::resource('notice-category', 'NoticeCategoryController');
Route::get('/notice-category', 'NoticeCategoryController@index')->name('admin.notice-category');

Route::resource('notice', 'NoticeController');
Route::get('/notice', 'NoticeController@index')->name('admin.notice');

Route::resource('student', 'StudentController');
Route::get('/student', 'StudentController@index')->name('admin.student');
});
Route::get('/','HomeController@index')->name('index');
// Route::get('/notice','HomeController@index')->name('notice');

Route::group(['namespace' => 'Student', 'prefix' => 'student'], function () {
Route::get('/', 'StudentDashboardController@index')->name('studentdashboard');

Route::resource('user', 'UserController');
Route::get('/user', 'UserController@index')->name('student.user');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
