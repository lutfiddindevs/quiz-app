@extends('layouts.app')

@section('content')

<example-component
:times = "{{ $quiz->minutes }}"
:quizId = "{{ $quiz->id }}"
:quiz-questions = "{{ $quizQuestions }}"
:has-quiz-played = "{{ $authUserHasPlayedQuiz }}"
>
	
</example-component>

@endsection
