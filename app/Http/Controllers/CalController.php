<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class CalController extends Controller
{

    public function add(Request $request)
    {

        $number1 = $request['num1'];
        $number2 = $request['num2'];
        $tot = $number1 + $number2;

     
        return view('result', ['tot' => $tot]);
    }
}