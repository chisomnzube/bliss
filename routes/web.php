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


//other routes
Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact-store', 'LandingpageController@store')->name('contact.store');

//route for personal details
Route::get('/personal-detail', 'PersonalDetailController@index')->name('personal.index');
Route::get('/personal-detail-confirmation', 'PersonalDetailController@confirm')->name('personal.confirm');
Route::post('/personal-detail-store', 'PersonalDetailController@store')->name('personal.store');
Route::post('/psnlogin', 'PersonalDetailController@psnlogin')->name('psnlogin');
Route::get('/edit-personal-detail', 'PersonalDetailController@edit')->name('personal.edit');
Route::post('/personal-detail-update', 'PersonalDetailController@update')->name('personal.update');


//route for company info
Route::get('/company-detail', 'CompanyInfoController@index')->name('company.index');
Route::get('/company-detail-confirmation', 'CompanyInfoController@confirm')->name('company.confirm');
Route::post('/company-detail-store', 'CompanyInfoController@store')->name('company.store');
Route::post('/csnlogin', 'CompanyInfoController@csnlogin')->name('csnlogin');
Route::get('/edit-company-detail', 'CompanyInfoController@edit')->name('company.edit');
Route::post('/company-detail-update', 'CompanyInfoController@update')->name('company.update');


//route for particulars
Route::get('/particulars-detail', 'ParticularsController@index')->name('particulars.index');
Route::get('/particulars-detail-confirmation', 'ParticularsController@confirm')->name('particulars.confirm');
Route::post('/particulars-detail-store', 'ParticularsController@store')->name('particulars.store');
Route::get('/edit-particulars-detail', 'ParticularsController@edit')->name('particulars.edit');
Route::post('/particulars-detail-update', 'ParticularsController@update')->name('particulars.update');

Route::get('/the-Login', 'PersonalDetailController@login')->name('personal.login');



//route for authenticted functions
Route::middleware('auth')->group(function () {
	// Route::get('/search-csn', 'CompanyInfoController@search')->name('company.search');
	// Route::get('/search-psn', 'PersonalDetailController@search')->name('personal.search');

	Route::get('/', 'LandingpageController@index')->name('landingpage');
	Route::get('/{slug}/post', 'LandingpageController@show')->name('post.show');

	//route for search
	Route::get('/search', 'LandingpageController@search')->name('search');
	
	//my account
	Route::get('/my-profile', 'UsersController@index')->name('user.index');
	Route::post('/update-users', 'UsersController@update')->name('user.update');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
