<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;
    protected $fillable = [
    	'user_id',
    	'question_id',
    	'answer_id',
    	'quiz_id',
    ];
}
