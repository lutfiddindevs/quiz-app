<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function create() {
    	return view('backend.exam.assign');
    }
}
