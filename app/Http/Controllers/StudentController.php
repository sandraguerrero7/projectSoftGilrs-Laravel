<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    function studentList(){
        return view ('pascual.student.list');
    }
}
