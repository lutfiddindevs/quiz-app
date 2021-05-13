@extends('backend.layouts.master')
@section('title','exam assigned user')
@section('content')
<div class="span9">
    <div class="content">
        <div class="module">
            <div class="module-head">
                <h3>Result</h3>
            </div>
            <div class="module-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Test</th>
                            <th>Total Questions</th>
                            <th>Attempted Questions</th>
                            <th>Correct Answers</th>
                            <th>Wrong Answers</th>
                            <th>Percentage</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($quiz as $q)
                        <tr>
                            <td></td>
                            <td>{{ $q->name }}</td>
                            <td>{{ $totalQuestions }}</td>
                            <td>{{ $attemptedQuestions }}</td>
                            <td>{{ $userCorrectedAnswers }}</td>
                            <td>{{  $userWrongAnswers }}</td>
                            <td>{{   round($percentage,2) }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Question</th>
                            <th>Answer given</th>
                            <th>Result</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($results as $key => $result)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $result->question->question }}</td>
                            <td>{{ $result->answer->answer }}</td>
                            @if($result->answer->is_correct)
                            <td>Correct</td>
                            @else
                            <td>Wrong</td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
