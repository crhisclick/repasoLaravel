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

Route::get('/', function(){
    return 'home';
});


Route::get('/usuarios' , function(){
    return 'usuarios';
});


Route::get('/usuarios/{id}', function($id){
    return "mostrando detalle del id {$id} ";
})->where('id','[0-9]+');
Route::get('/usuarios/nuevo', function($id){
    return "crear nuevo usuario";
});
Route::get('/saludo/{name}/{nickname?}', function($name,$nickname=NULL){

    if($nickname){
       return "Bienvenido {$name}, alias {$nickname}";
    }else{
        return "Bienvenido {$name}";
    }

});
