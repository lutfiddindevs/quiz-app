@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            @if(Session::has('error'))
                <div class="alert alert-danger">
                    {{ Session::get('error') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header">Exam</div>
                
                    @if($isQuizAssigned)
                    @foreach($quizzes as $quiz)
                <div class="card-body">
                    <p><h3>{{ $quiz->name }}</h3></p>
                    <p>About Quiz: {{ $quiz->description }}</p>
                    <p>Time Allocated: {{ $quiz->minutes }} minutes</p>
                    <p>Number of Questions: {{ $quiz->questions->count() }}</p>
                    <p>
                        @if(!in_array($quiz->id, $wasQuizCompleted))
                        <a href="user/quiz/{{ $quiz->id }}"><button class="btn btn-success">Start Quiz</button></a>
                        @else
                        <a href="/result/user/{{auth()->user()->id}}/quiz/{{$quiz->id}}">View Result</a>
                            <span class="float-right">Completed</span>
                        @endif
                    </p>
                </div>
                @endforeach
                @else
                    <p>You have not assigned any quiz</p>
                @endif
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    User Profile
                </div>
                <div class="card-body">
                    <p>Email: {{ auth()->user()->email }}</p>
                    <p>Occupation: {{ auth()->user()->occupation }}</p>
                    <p>Address: {{ auth()->user()->address }}</p>
                    <p>Phone Number: {{ auth()->user()->phone }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
