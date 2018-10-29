<?php

Route::group(['prefix' => LaravelLocalization::setLocale()], function(){
   Route::get('/', 'PagesController@getProfile')->name('profile');
   Route::get('/skills', 'PagesController@getSkills')->name('skills');
   Route::get('/portfolio', 'PagesController@getPortfolio')->name('portfolio');
   Route::get('/resume', 'PagesController@getResume')->name('resume');
   Route::get('/resume/download', 'PagesController@downloadResume');
   Route::post('/contact', 'PagesController@contact');
});

// Authentication Routes
$this->get('admindash/login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('admindash/login', 'Auth\LoginController@login');
$this->post('admindash/logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes
$this->get('admindash/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
$this->post('admindash/register', 'Auth\RegisterController@register');

// Password Reset Routes
$this->get('admindash/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
$this->post('admindash/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
$this->get('admindash/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('admindash/password/reset', 'Auth\ResetPasswordController@reset');

if (!env('ALLOW_REGISTRATION', false)) {
   Route::any('admindash/register', function() {
      abort(404);
   });
}

Route::group(['namespace' => 'Admin', 'middleware' => 'auth'], function () {
   Route::get('admindash', 'HomeController@getHome');
   Route::resource('admindash/portfolio', 'PortfolioController');
});
