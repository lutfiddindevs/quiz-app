@extends('backend.layouts.master')
@section('title','update question')
@section('content')
<div class="span9">
    <div class="content">
        @if(Session::has('message'))
        <div class="alert alert-success">
            {{ Session::get('message') }}
        </div>
        @endif
        <form action="{{ route('question.update', [$question->id]) }}" method="post">
            @csrf
            @method('put')
            <div class="module">
                <div class="module-head">
                    <h3>Update Question</h3>
                </div>
                <div class="module-body">
                    <div class="control-group">
                        <label class="control-label">Choose Quiz</label>
                        <div class="controls">
                           <select name="quiz" class="span8">
                           	@foreach(App\Models\Quiz::all() as $quiz)
                           	  <option value="{{ $quiz->id }}" @if($quiz->id == $question->quiz_id)selected @endif>{{ $quiz->name }}</option>
                            @endforeach
                           </select>
                            @error('question')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Question Name</label>
                        <div class="controls">
                            <input type="text" name="question" class="span8" placeholder="Enter the name of a question" value="{{ $question->question }}"> <br>
                            @error('question')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="options">Options</label>
                            <div class="controls">
                            	@foreach($question->answers as $key => $answer)
                                <input type="text" name="options[]" class="span7" value="{{ $answer->answer }}" placeholder="" required="">
                                <input type="radio" name="correct_answer" value="{{ $key }}" @if($answer->is_correct) {{ 'checked' }} @endif><span>Correct Answer</span>
                                @endforeach
                                @error('question')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                     
                        <div class="controls">
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
