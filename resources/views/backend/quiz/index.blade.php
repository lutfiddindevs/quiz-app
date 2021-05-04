@extends('backend.layouts.master')
@section('title','create quiz')
@section('content')
<div class="span9">
    <div class="content">
        @if(Session::has('message'))
        <div class="alert alert-success">
            {{ Session::get('message') }}
        </div>
        @endif
        <div class="module">
            <div class="module-head">
                <h3>All Quiz</h3>
            </div>
            <div class="module-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Minutes</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(is_countable($quizzes) && count($quizzes) > 0)
                        @foreach($quizzes as $key => $quiz)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $quiz->name }}</td>
                            <td>{{ $quiz->description }}</td>
                            <td>{{ $quiz->minutes }}</td>
                            <td>
                                <a href="{{ route('quiz.question', [$quiz->id]) }}"><button class="btn btn-inverse">View Questions</button></a>
                            </td>
                            <td>
                                <a href="{{ route('quiz.edit', [$quiz->id]) }}">
                                    <button class="btn btn-primary">Edit</button>
                                </a>
                            </td>
                            <td>
                                <form id="delete-form{{$quiz->id}}" method="post" action="{{ route('quiz.destroy',[$quiz->id]) }}">
                                        @csrf
                                        @method('delete')
                                </form>
                                <a href="#" onclick="if(confirm('Do you want to delete?')) {
                                        event.preventDefault();
                                        document.getElementById('delete-form{{$quiz->id}}').submit()
                                }else{
                                        event.preventDefault();
                                }"><input type="submit" value="Delete" class="btn btn-danger"></a>
                            </td>
                            <td>
                               sss
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <td>No Quiz to display</td>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
