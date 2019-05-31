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

//  User page -------------------------------------------------------
Route::get('/',[
	'as'=>'trangchu',
	'uses'=>'PageController@getIndex'
]);

Route::get('lienhe',[
	'as'=>'lienhe',
	'uses'=>'PageController@getLienHe'
]);


Route::post('mail',
	['as'=> 'mail',
	'uses'=>'PageController@getmail'
]);	

Route::post('mailComment',
	['as'=> 'mailComment',
	'uses'=>'PageController@getmailComment'
]);	


Route::get('login',
	['as'=> 'getlogin',
	'uses'=>'PageController@getLogin'
]);	
Route::post('login',
	['as'=> 'postlogin',
	'uses'=>'PageController@postLogin'
]);	

Route::get('hash/{password}', [
	'as'=> 'getlogin',
	function($password) {
		return Hash::make($password);
	}
]);	

Route::get('form_device', [
		'as' 	=> 'damaged_device',
		'uses' 	=> 'DeviceController@getDamaged_Device'
	]);

Route::post('add', [
		'as' 	=> 'post.infor.user',
		'uses' 	=> 'DeviceController@postAdd'
	]);

Route::get('yeucau', [
		'as' 	=> 'form.yeucau',
		'uses' 	=> 'DeviceController@getYeuCau'
	]);


Route::get('dangnhap', [
		'as' 	=> 'form.DangNhap',
		'uses' 	=> 'PageController@getDangNhap'
	]);


Route::post('dangnhap', [
		'as' 	=> 'form.dangnhap',
		'uses' 	=> 'PageController@postLogin'
	]);

	Route::get('dang-xuat',[
		'as'=>'logout',
		'uses'=>'PageController@postLogout'
	]);
	
	
	Route::get('dang-ki',[
		'as'=>'register',
		'uses'=>'PageController@getSignin'
	]);
	
	Route::post('dang-ki',[
		'as'=>'page.register',
		'uses'=>'PageController@postSignin'
	]);




// Admin --------------------------------------------------------------

Route::post('admin',['as'=>'postLogin','uses'=>'AdminController@postLogin']);

Route::post('login',['as'=>'postLogin','uses'=>'AdminController@postLogin']);

Route::get('admin',['as'=>'admin.index','uses'=>'AdminController@getIndex']);

Route::get('tables',['as'=>'admin.tables','uses'=>'AdminController@getTables']);

Route::get('add', ['as'=>'Equipment.getAdd','uses'=>'AdminController@getAdd']);
Route::post('addprod',['as'=>'Equipment.postAdd','uses'=>'AdminController@postAdd']);
Route::get('list', ['as'=>'Equipment.getList','uses'=>'AdminController@getList']);

Route::get('listUser', ['as'=>'Equipment.getListUser','uses'=>'AdminController@getListUser']);

Route::get('edit/{id}',[ 'as'=>'Equipment.getEdit','uses'=>'AdminController@getEdit']);

Route::post('saveEdit/{id}',['as'=> 'Equipment.postEdit','uses'=>'AdminController@postEdit']);

Route::get('deleteEquipment/{id}',['as'=> 'Equipment.getDelete','uses'=>'AdminController@getDelete']);

Route::get('deleteUser/{id}',['as'=> 'Equipment.getDeleteUser','uses'=>'AdminController@getDeleteUser']);

Route::post('search-Equipment', 'SearchajaxController@getSearchAjax')->name('search');