<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidationRequest;
use App\Http\Controllers\Controller;

class ValidationController extends Controller
{
    
    function create(){
        return view('validate.create');
    }
    
    function store(ValidationRequest $request){
        /*$validatedData = $request->validate([
            'nombre'      =>  'required|min:5|max:10|alpha_num',
            'password'   =>  'required|min:4',
            ]); */
            $validatedData = $request->validated();
    }
}
