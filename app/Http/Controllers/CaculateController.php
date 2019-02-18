<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaculateController extends Controller
{
    function caculate (Request $request){
        $input = $request->input;
        $input2 = $request->input2;
        $select = $request->select;

        if($select == '+'){
            $resul = $input + $input2;
        }else if($select == '-'){
            $resul = $input + $input2;
        }else if($select == '*'){
            $resul = $input * $input2;
        }else{
            $resul = $input / $input2;
        }
        return view('show' , compact('resul'));
    }
}
