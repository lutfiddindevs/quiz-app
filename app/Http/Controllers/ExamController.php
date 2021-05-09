<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Result;

class ExamController extends Controller
{
    public function create() {
    	return view('backend.exam.assign');
    }

    public function assignExam(Request $req) {
    	$quiz = (new Quiz)->assignExam($req->all());
    	return redirect()->back()->with('message', 'Exam assigned to user successfully!');
    }

    public function userExam(Request $req) {
    	$quizzes = Quiz::get();
    	return view('backend.exam.index', compact('quizzes'));
    }

    public function removeExam(Request $req) {
        $userId = $req->user_id;
        $quizId = $req->quiz_id;
        $quiz = Quiz::find($quizId);
        $result = Result::where('quiz_id', $quizId)->where('user_id', $userId)->exists();
        if ($result) {
            return redirect()->back()->with('message', 'This Quiz is already played by user, so, it can not be removed!');
        } else {
            $quiz->users()->detach($userId);
            return redirect()->back()->with('message', 'Quiz has been removed successfully and is not assigned to this user!');
        }
    }

    public function getQuizQuestions(Request $req, $quizId) {
        $authUser = auth()->user()->id;
        $quiz = Quiz::find($quizId);
        $time = Quiz::where('id', $quizId)->value('minutes');
        $quizQuestions = Question::where('quiz_id', $quizId)->with('answers')->get(); 
        $authUserHasPlayedQuiz = Result::where(['user_id' => $authUser, 'quiz_id' => $quizId])->get();
        return view('quiz', compact('quiz', 'time', 'quizQuestions', 'authUserHasPlayedQuiz'));
    }
}
