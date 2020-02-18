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

// Route::get('/', function () {
//     return view('welcome');
// });

use App\Http\Controllers\UserController;

Route::get('/', function(){
    return 'home';
});
Route::get('/usuarios' , 'UserController@index');

Route::get('/usuarios/{id}', 'UserController@show')
->where('id','[0-9]+');

Route::get('/usuarios/nuevo','UserControlles@create');

Route::get('/usuarios/edit','UserControlles@edit');

Route::get('/saludo/{name}', 'WelcomeController@index');
Route::get('/saludo/{name}/{nickname}','WelcomeController@nickname');
