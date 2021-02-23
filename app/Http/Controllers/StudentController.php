<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function get_name() {
        return view('name',["name"=>'John']);
    }

    public function get_date_of_birth() {
        return view('dateOfBirth',["dateOfBirth"=>'25.01.2010']);
    }

    public function get_age() {
        return view('age',["age"=>11]);
    }
}
