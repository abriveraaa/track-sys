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

Route::get('/', function () {
    if(Auth::check()){
        return redirect()->route('dashboard');
    }else{
        return redirect()->route('login');
    }
});

Route::get('test', ['as' => 'test', 'uses' => 'RequestController@BorrowedItem']);
//LOGIN
Route::group(['prefix' => '/login'], function() {
    Route::get('', ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);
    Route::post('', ['as' => '', 'uses' => 'Auth\LoginController@login']);
});

//PASSWORD
Route::group(['prefix' => '/password'], function() {
    Route::get('/confirm', ['as' => 'password.confirm', 'uses' => 'Auth\ConfirmPasswordController@showConfirmForm']);
    Route::post('/confirm', ['as' => '', 'uses' => 'Auth\ConfirmPasswordController@confirm']);
    Route::post('/email', ['as' => 'password.email', 'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail']);
    Route::get('/reset', ['as' => 'password.request', 'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm']);
    Route::post('/reset', ['as' => 'password.update', 'uses' => 'Auth\ResetPasswordController@reset']);
    Route::get('/reset/token/{token}', ['as' => 'password.reset', 'uses' => 'Auth\ResetPasswordController@showResetForm']);
});

Route::middleware(['route'])->group(function() {
    
    Route::resource('/roles-permission', RolesAssignmentController::class, ['middleware' => ['auth', 'web', 'permission:manage-dashboard'], 'as' => 'admintrust'])
    ->only(['index', 'edit', 'update']);

    //DASHBOARD
    Route::get('/dashboard', ['as' => 'dashboard', 'middleware' => ['permission:manage-dashboard'], 'uses' => 'RouteController@viewDashboard']);

    //ADMIN
    Route::get('/admin', ['as' => 'admin', 'middleware' => ['permission:users-view|users-create|users-update|users-delete'], 'uses' => 'RouteController@showUserPage']);
    Route::group(['prefix' => '/data/admin', 'middleware' => []], function() {
        Route::get('', ['middleware' => ['permission:users-view'], 'as' => 'admin.index', 'uses' => 'UserController@index']);
        Route::post('', ['middleware' => ['permission:users-create'], 'as' => 'admin.store', 'uses' => 'UserController@createAdmin']);
        Route::get('/{admin}', ['middleware' => ['permission:users-view'], 'as' => 'admin.show', 'uses' => 'UserController@getAdmin']);
        Route::post('/{admin}', ['middleware' => ['permission:users-update'], 'as' => 'admin.update', 'uses' => 'UserController@updateAdmin']);
        Route::delete('/{admin}', ['middleware' => ['permission:users-delete'], 'as' => 'admin.destroy', 'uses' => 'UserController@destroy']); 
        Route::put('/{admin}', ['middleware' => ['permission:users-delete'], 'as' => 'admin.restore', 'uses' => 'UserController@restore']); 
    });

    //LOGOUT
    Route::post('/logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);
    
});