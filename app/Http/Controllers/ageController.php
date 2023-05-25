<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ageController extends Controller
{
    public function AgeView(Request $request){
        $age=$request->input('age');
        return view('age', compact('age'));
    }
    //
}
