<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculateController extends Controller
{
    public function operation($number1,$sign,$number2) {
        switch ($sign) {
            case '+':
                $result=$number1+$number2;
                return view('contact', ["result"=>$result]);
                # code...
                break;
            case '-':
                $result=$number1-$number2;
                return view('contact', ["result"=>$result]);
                # code...
                break;
            case '*':
                $result=$number1*$number2;
                return view('contact', ["result"=>$result]);
                # code...
                break;
            case 'divide':
                $result=$number1/$number2;
                return view('contact', ["result"=>$result]);
                # code...
                break;
            default:
                # code...
                break;
        }
    }
    //
}
