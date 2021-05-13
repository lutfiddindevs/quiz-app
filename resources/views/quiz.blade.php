@extends('layouts.app')

@section('content')

<quiz-component
:times = "{{ $quiz->minutes }}"
:quizId = "{{ $quiz->id }}"
:quiz-questions = "{{ $quizQuestions }}"
:has-quiz-played = "{{ $authUserHasPlayedQuiz }}"
>
	
</quiz-component>
<script type="text/javascript">
	window.oncontextmenu = function () {
		console.log('Right Click Disabled');
		return false;
	}
</script>
@endsection
