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

Auth::routes();

//マルチログイン機能用処理
Route::view('/admin', 'admin')->middleware('auth:admin')->name('admin-home');
Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
Route::get('password/admin/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::get('password/admin/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
Route::get('/admin/welcome', 'Admin\MainController@welcome');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin')->name('admin-register');
Route::post('password/admin/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::post('password/admin/reset', 'Auth\AdminResetPasswordController@reset')->name('admin.password.update');


//User処理
Route::group(['prefix' => 'user','middleware' => 'auth'], function() {
    Route::get('/home', 'HomeController@index');
    Route::get('/mypage', 'User\UserController@index');
    
    Route::get('/catalog', 'User\CatalogController@index');
    Route::resource('/catalog/display', 'User\CatalogController', ['only' => ['show']]);

    Route::get('/checksheet', 'User\ChecksheetController@index');
    Route::get('/checksheet/check', 'User\ChecksheetController@checkfront');
    Route::post('/checksheet/check', 'User\ChecksheetController@checksend');
    Route::resource('/checksheet/display', 'User\ChecksheetController', ['only' => ['show']]);

    Route::get('/information', 'User\InformationController@index');
    Route::resource('/information/display', 'User\InformationController', ['only' => ['show']]);

    
    Route::get('/learning', 'User\LearningController@index');
    Route::resource('/learning/display', 'User\LearningController', ['only' => ['show']]);
    
    Route::get('/troubleshooting', 'User\TroubleshootingController@index');
    Route::resource('/troubleshooting/display', 'User\TroubleshootingController', ['only' => ['show']]);
    
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/talk', 'ChatController@index')->name('talk');
    Route::post('/add', 'ChatController@add')->name('add');
    Route::get('/result/ajax', 'ChatController@getData');

});

//Admin処理
Route::group(['prefix' => 'admin'], function() {
    Route::get('/welcome', 'Admin\MainController@welcome');
    Route::get('/mypage', 'Admin\UserController@index');
    
    Route::get('/information', 'Admin\InformationController@index');
    Route::get('/information/create', 'Admin\InformationController@add');
    Route::post('/information/create', 'Admin\InformationController@create');
    Route::resource('/information/display', 'Admin\InformationController', ['only' => ['show']]);
    
    Route::get('/catalog', 'Admin\CatalogController@index');
    Route::get('/catalog/create', 'Admin\CatalogController@add');
    Route::post('/catalog/create', 'Admin\CatalogController@create');
    Route::resource('/catalog/display', 'Admin\CatalogController', ['only' => ['show']]);
    
    Route::get('/learning', 'Admin\LearningController@index');
    Route::get('/learning/create', 'Admin\LearningController@add');
    Route::post('/learning/create', 'Admin\LearningController@create');
    Route::resource('/learning/display', 'Admin\LearningController', ['only' => ['show']]);
    
    Route::get('/troubleshooting', 'Admin\TroubleshootController@index');
    Route::get('/troubleshooting/create', 'Admin\TroubleshootController@add');
    Route::post('/troubleshooting/create', 'Admin\TroubleshootController@create');
    Route::resource('/troubleshooting/display', 'Admin\TroubleshootController', ['only' => ['show']]);
    
    
    Route::get('/checksheet', 'Admin\ChecksheetController@index');
    Route::resource('/information/display', 'Admin\InformationController', ['only' => ['show']]);
    
    Route::get('/talkAdmin', 'ChatController@indexAdmin')->name('talkAdmin');
    Route::post('/addAdmin', 'ChatController@addAdmin')->name('addAdmin');
    Route::get('/result/ajax', 'ChatController@getData');
});