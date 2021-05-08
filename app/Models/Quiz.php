<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\User;
use App\Models\Result;

class Quiz extends Model
{
    use HasFactory;

    protected $fillable = [
    	'name',
    	'description',
    	'minutes',
    ];

    public function questions() {
    	return $this->hasMany(Question::class);
    }

    public function users() {
        return $this->belongsTomany(User::class, 'quiz_user');
    }

    public function storeQuiz($data) {
    	return Quiz::create($data);
    }

    public function allQuiz() {
        return Quiz::all();
    }

    public function getQuizById($id) {
        return Quiz::find($id);
    }

    public function updateQuiz($data, $id) {
        return Quiz::find($id)->update($data);
    }

    public function deleteQuiz($id) {
    	return Quiz::find($id)->delete();
    } 

    public function assignExam($data) {
        $quizId = $data['quiz'];
        $quiz = Quiz::find($quizId);
        $userId = $data['user_id'];
        return $quiz->users()->syncWithoutDetaching($userId);
    }

    public function hasQuizAttempted() {
        $attemptedQuiz = [];
        $authUser = auth()->user()->id;
        $user = Result::where('user_id', $authUser)->get();
        foreach ($user as $u) {
            array_push($attemptedQuiz, $u->quiz_id);
        }
        return $attemptedQuiz;
    }
}
