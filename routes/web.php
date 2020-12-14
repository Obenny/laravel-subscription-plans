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

//Route::get('/', function () {
//    return view('welcome');
//});

// for operations on welcome page
Route::get('/', 'WelcomeController@index')->name('welcome');

// for operations on plans page
Route::get('/plans', 'PlansController@index')->name('plans');

//Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');
Auth::routes(['home' => false]);// disables home page

// user's routes' url, route name, authentication and role type
Route::get('/user/home', 'User\HomeController@index')->name('user.home')->middleware('auth');


// admin's routes' url, route name, authentication and role type
// for admin home
Route::get('/admin/home', 'Admin\HomeController@index')->name('admin.home')->middleware('admin');

// for admin operations on users
Route::get('/admin/users/list', 'Admin\Users\ListUsersController@index')->name('admin.users.list')->middleware('admin');
Route::get('/admin/users/create', 'Admin\Users\CreateUserController@create')->name('admin.user.create')->middleware('admin');
Route::post('/admin/users/store', 'Admin\Users\StoreUserController@store')->name('admin.user.store')->middleware('admin');
Route::get('/admin/users/{id}/show', 'Admin\Users\ShowUserController@show')->name('admin.user.show')->middleware('admin');
Route::get('/admin/users/{id}/edit', 'Admin\Users\EditUserController@edit')->name('admin.user.edit')->middleware('admin');
Route::put('/admin/users/{id}/update', 'Admin\Users\UpdateUserController@update')->name('admin.user.update')->middleware('admin');
Route::delete('/admin/users/{id}/delete', 'Admin\Users\DeleteUserController@destroy')->name('admin.user.delete')->middleware('admin');
Route::get('/admin/users/{id}/deactivate', 'Admin\Users\DeactivateUserController@deactivate')->name('admin.user.deactivate')->middleware('admin');
Route::get('/admin/users/{id}/activate', 'Admin\Users\ActivateUserController@activate')->name('admin.user.activate')->middleware('admin');

// for admin operations on subscriptions
Route::get('/admin/subscriptions/list', 'Admin\Subscriptions\ListSubscriptionsController@index')->name('admin.subscriptions.list')->middleware('admin');
//Route::get('/admin/subscriptions/create', 'Admin\Subscriptions\CreateSubscriptionController@create')->name('admin.subscription.create')->middleware('admin');
//Route::post('/admin/subscriptions/store', 'Admin\Subscriptions\StoreSubscriptionController@store')->name('admin.subscription.store')->middleware('admin');
Route::get('/admin/subscriptions/{id}/show', 'Admin\Subscriptions\ShowSubscriptionController@show')->name('admin.subscription.show')->middleware('admin');
//Route::get('/admin/subscriptions/{id}/edit', 'Admin\Subscriptions\EditSubscriptionController@edit')->name('admin.subscription.edit')->middleware('admin');
//Route::put('/admin/subscriptions/{id}/update', 'Admin\Subscriptions\UpdateSubscriptionController@update')->name('admin.subscription.update')->middleware('admin');
Route::delete('/admin/subscriptions/{id}/delete', 'Admin\Subscriptions\DeleteSubscriptionController@destroy')->name('admin.subscription.delete')->middleware('admin');
Route::get('/admin/subscriptions/{id}/deactivate', 'Admin\Subscriptions\DeactivateSubscriptionController@deactivate')->name('admin.subscription.deactivate')->middleware('admin');
Route::get('/admin/subscriptions/{id}/activate', 'Admin\Subscriptions\ActivateSubscriptionController@activate')->name('admin.subscription.activate')->middleware('admin');

// for admin operations on plans
Route::get('/admin/plans/list', 'Admin\Plans\ListPlansController@index')->name('admin.plans.list')->middleware('admin');
Route::get('/admin/plans/create', 'Admin\Plans\CreatePlanController@create')->name('admin.plan.create')->middleware('admin');
Route::post('/admin/plans/store', 'Admin\Plans\StorePlanController@store')->name('admin.plan.store')->middleware('admin');
Route::get('/admin/plans/{id}/show', 'Admin\Plans\ShowPlanController@show')->name('admin.plan.show')->middleware('admin');
Route::get('/admin/plans/{id}/edit', 'Admin\Plans\EditPlanController@edit')->name('admin.plan.edit')->middleware('admin');
Route::put('/admin/plans/{id}/update', 'Admin\Plans\UpdatePlanController@update')->name('admin.plan.update')->middleware('admin');
Route::delete('/admin/plans/{id}/delete', 'Admin\Plans\DeletePlanController@destroy')->name('admin.plan.delete')->middleware('admin');
