<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ageVerifierController extends Controller
{
    public function showage(Request $request){
        $age =$request->input('age');
        return view('age', array("age"=>$age));
    }
    //
}
