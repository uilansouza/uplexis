<?php

namespace estoque\Http\Controllers;

use estoque\Http\Requests;
use estoque\Http\Controllers\Controller;
use Auth;
use Request;

class LoginController extends Controller
{
    //
    
  
/*
    public function authenticate(Request $request){
        dd($request);
        
        $credenciais = Request::only('username','password');
        if(Auth::attempt($credenciais)){
            return "Usuário ".Auth::user()->name." logado com sucesso";
            
        }

        return "As credenciais nao são validas";

    }
    */
}