<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index($name){
             return "Bienvenido {$name}";
    }
    public function nickname($name,$nickname=NULL){
        return "Bienvenido {$name}, alias {$nickname}";
    }
}
