<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //Controladores para las rutas

    public function index(){

        if(request()->has('empty')) {
            $titulo = "No hay";
            $users = [];
        }else{
            $titulo = "Gente Guapa";
            $users = ['Ernesto', 'Lesly', 'El Queris', 'La Queris' ];
        }

        return view('users', [
            'users' => $users,
            'titulo' => "$titulo"
        ]);
    }
}
