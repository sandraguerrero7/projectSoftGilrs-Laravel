<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeachersController extends Controller
{
    function teacherList(){
        return view ('pascual.teacher.list');
    }
}
