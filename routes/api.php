<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});


Route::prefix('freelancers')->group(function(){
	Route::get('/', ['uses' => 'FreelancerController@get']);
	Route::get('/{freelancer_id}', ['uses' => 'FreelancerController@detail']);
	Route::post('/', ['uses' => 'FreelancerController@createFreelancer'])->name('create-freelancer');

	Route::delete('/{freelancer_id}', ['uses' => 'FreelancerController@delete'])
		->name('delete-freelancer')
		->where(['freelancer_id' => '[0-9+]']);

	Route::put('/{freelancer_id}', ['uses' => 'FreelancerController@update'])
		->name('update-freelancer')
		->where(['freelancer_id' => '[0-9+]']);
});

Route::prefix('customers')->group(function(){
	Route::get('/', ['uses' => 'CustomerController@get'])->name('get-customers');
	Route::get('/{customer_name}', ['uses' => 'CustomerController@detail'])->name('get-customer-detail');
	Route::post('/', ['uses' => 'CustomerController@createCustomer'])->name('create-customer');

	Route::delete('/{customer_id}', ['uses' => 'CustomerController@delete'])
		->name('delete-customer')
		->where(['customer_id' => '[0-9+]']);

	Route::put('/{customer_id}', ['uses' => 'CustomerController@update'])
		->name('update-customer')
		->where(['customer_id' => '[0-9+]']);
});

Route::prefix('orders')->group(function(){
	Route::get('/', ['uses' => 'OrderController@get'])->name('get-orders');
	Route::get('/{order_name}', ['uses' => 'OrderController@detail'])->name('get-order-detail');
	Route::post('/', ['uses' => 'OrderController@createOrder'])->name('create-order');

	Route::delete('/{order_id}', ['uses' => 'OrderController@delete'])
		->name('delete-order')
		->where(['order_id' => '[0-9+]']);

	Route::put('/{order_id}', ['uses' => 'OrderController@update'])
		->name('update-order')
		->where(['order_id' => '[0-9+]']);
});

Route::prefix('applications')->group(function(){
	Route::get('/', ['uses' => 'ApplicationController@get'])->name('get-applications');
	Route::get('/{application_name}', ['uses' => 'ApplicationController@detail'])->name('get-application-detail');
	Route::post('/', ['uses' => 'ApplicationController@createApplication'])->name('create-application');

	Route::delete('/{application_id}', ['uses' => 'ApplicationController@delete'])
		->name('delete-application')
		->where(['application_id' => '[0-9+]']);

	Route::put('/{application_id}', ['uses' => 'ApplicationController@update'])
		->name('update-application')
		->where(['application_id' => '[0-9+]']);
});

