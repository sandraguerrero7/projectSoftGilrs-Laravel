<?php

namespace App\Http\Controllers\MyController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index(){
        return view('TestView');
    }

    function test(){
        return view('Admin.Teacher');
    }
}
