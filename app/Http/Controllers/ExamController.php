<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;

class ExamController extends Controller
{
    public function create() {
    	return view('backend.exam.assign');
    }

    public function assignExam(Request $req) {
    	$quiz = (new Quiz)->assignExam($req->all());
    	return redirect()->back()->with('message', 'Exam assigned to user successfully!');
    }
}
