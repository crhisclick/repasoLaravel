<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $titulo='Listado de usuarios';
        if (request()->has('empty')) {
            $users=[];
        }else{
        $users=['jose','pedro','juan','ellie','pacheco'];
        }
        return  view('users.index', compact('users', 'titulo'));
    }
    public function show($id){
        $titulo='Detalle de usuario';
        return view('users.show',compact('titulo','id'));
    }
    public function create(){
        $titulo='crear nuevo usuario';
        return view('users.create',compact('titulo'));
    }
    public function edit(){
        $titulo='Editar usuarios';
        return view('users.edit',compact('titulo'));
    }


}
