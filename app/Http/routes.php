<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');  



Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


Route::get('/auth/login', 'Auth\AuthController@getLogin');  
Route::post('/auth/login', 'Auth\AuthController@postLogin');  
Route::get('auth/logout', 'Auth\AuthController@getLogout'); 


/*
Route::group(['prefix' => 'admin', 'namespace' => 'Admin','middleware' => 'auth'], function()  
{
  Route::get('/', 'AdminHomeController@index');
  Route::resource('pages', 'PagesController');
  Route::resource('comments', 'CommentsController');
});
*/
Route::get('pages/{id}', 'PagesController@show');  

//Route::post('comment/store', 'CommentsController@store'); 

//用户面板

Route::group(['prefix' => 'home', 'namespace' => 'User','middleware' => 'auth'], function()  
{
  Route::get('/', 'UserpanelController@index');
  Route::resource('booking', 'BookingController');
  Route::post('booking/create', 'BookingController@store');
  Route::resource('/setting','UserpanelController@setting');
  //Route::get('/booking/{name}', 'BookingController@index');
  Route::get('/booking/{name}', 'BookingController@index',function($name = null)
  {
      return $name;
  });
  
  Route::get('/ajax/{page}', 'UserpanelController@listPage');
  Route::post('/ajax/{page}', 'UserpanelController@listPage');
});