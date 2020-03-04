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
    return view('welcome');
});

// Product Route Start

	Route::get('/product/add', [
		'uses' => 'ProductsController@create',
		'as' => 'product.create'

	]);

	Route::get('/product/view', [
		'uses' => 'ProductsController@index',
		'as' => 'product.index'

	]);


	Route::post('/product/store',[

		'uses' => 'ProductsController@store',
		'as' => 'product.store'

	]);

// Order Route Start

	Route::get('/order/create',[
		'uses' => 'OrdersController@create',
		'as' => 'order.create'
	]);

	Route::post('/order/store',[

		'uses' => 'OrdersController@store',
		'as' => 'order.store'

	]);

	Route::get('/order/view',[
		'uses' => 'OrdersController@index',
		'as' => 'order.index'

	]);

// Customer Route Start
	Route::get('/customer/create',[
		'uses' => 'CustomerController@create',
		'as' => 'customer.create'

	]);


	Route::get('/customer/view',[
		'uses' => 'CustomerController@index',
		'as' => 'customer.index'

	]);

	Route::post('/customer/store',[
		'uses' => 'CustomerController@store',
		'as' => 'customer.store'

	]);

// Roles Route Start


Route::get('/roles/view',[
	'uses' => 'RolesController@index',
	'as' => 'role.index'

]);



Route::get('/roles/create',[
	'uses' => 'RolesController@create',
	'as' => 'role.create'

]);

Route::post('/roles/store',[
	'uses' => 'RolesController@store',
	'as' => 'role.store'

]);


// Permission Route Start

Route::get('/permission/view',[
'uses' => 'PermissionController@index',
	'as' => 'permission.index'

]);



Route::get('/permission/create',[
'uses' => 'PermissionController@create',
	'as' => 'permission.create'

]);

Route::post('/permission/store',[
'uses' => 'PermissionController@store',
	'as' => 'permission.store'

]);

// Assgin Permission
Route::post('assign/permission/store',[

'uses' => 'AssignPermissionController@store',
	'as' => 'assignpermission.store'

]);


Route::get('assign/permission',[
	'uses' => 'AssignPermissionController@create',
	'as' => 'assignpermission.create'

]);

// Assign Role

Route::post('assign/role/store',[

'uses' => 'AssignRoleController@store',
	'as' => 'assignrole.store'

]);


Route::get('assign/role',[
	'uses' => 'AssignRoleController@create',
	'as' => 'assignrole.create'

]);




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
