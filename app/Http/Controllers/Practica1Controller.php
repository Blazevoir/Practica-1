<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Practica1Controller extends Controller
{

	function login(Request $request){
	    $nombre=$request->input('nombre');
	    $pass=$request->input('password');
	    $valores=['nombre' => $nombre,
	    			'password' => $pass];
	    if(strcmp($nombre,'pepe')===0 && strcmp($pass,'PEPE')===0){
	        return view('base.home') ;
	    }else{
	        return redirect('login')->withInput($valores);
	    }
	}
}
