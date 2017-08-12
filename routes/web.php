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

Route::get('/', 'PagesController@index');

// Pages Route Configuration
// About Study Choice Routes
Route::prefix('about')->group(function(){
  Route::get('/', 'PagesController@about')->name('about');
  Route::get('/story', 'PagesController@aboutStory')->name('about.story');
  Route::get('/team', 'PagesController@aboutTeam')->name('about.team');
  Route::get('/partner', 'PagesController@aboutPartner')->name('about.partner');
});

// Student Menu Routes
Route::prefix('student')->group(function(){
  Route::get('/portal', 'PagesController@studentPortal')->name('student.portal');
  Route::get('/fof', 'PagesController@studentFof')->name('student.fof');
  Route::get('/study-abroad', 'PagesController@studyAbroad')->name('student.study-abroad');
  Route::get('/study-smart', 'PagesController@studySmart')->name('student.study-smart');
});

// Career Choice Routes
Route::prefix('career')->group(function(){
  Route::get('/', 'PagesController@career')->name('career');
  Route::get('/institution', 'PagesController@aboutTeam')->name('career.institution');
  Route::get('/consulting', 'PagesController@aboutPartner')->name('career.consulting');
});

// Scholarship Routes
  Route::get('/scholarship', 'PagesController@scholarship')->name('scholarship');

// News Routes
  Route::get('/news', 'PagesController@news')->name('news');

// Events Routes
  Route::get('/event', 'PagesController@event')->name('event');

// Blog Routes
  Route::get('/blog', 'PagesController@blog')->name('blog');

// Contact Route
Route::get('contact', 'PagesController@contact')->name('contact');

// Sign Up to Student Portal
Route::get('signup', 'PagesController@signUp')->name('singup');

Route::get('/welcome', function () {
    return view('student');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::prefix('admin')->group(function(){

  Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
  Route::get('/', 'AdminController@index')->name('admin.dashboard');
  Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

  //Password reset routes
  Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
  Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkResquestForm')->name('admin.password.request');
  Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
  Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');

});



// Route::get('about', 'PagesController@about');
// Route::get('contact', 'PagesController@contact');
//
// Route::get('blog', 'PagesController@index');
// Route::get('blog', 'PagesController@index');
