@extends('backend.layouts.master')
@section('title','View quiz with questions')
@section('content')
<div class="span9">
    <div class="content">
       @foreach($quizzes as $quiz)
        <div class="module">
            <div class="module-head">
                
            </div>
            <div class="module-body">
               <p><h3 class="heading">{{ $quiz->name }}</h3></p>
               <div class="module-body table">
                   @foreach($quiz->questions as $ques)
                   <table class="table table-message">
                       <tbody>
                           <tr class="read">
                           	  {{ $ques->question }}
                               <td class="cell-author hidden-phone hidden-tablet">
                               @foreach($ques->answers as $answer)
                               		<p>{{ $answer->answer }} @if($answer->is_correct)<span class="badge badge-success">correct answer</span>@endif</p>
                               	@endforeach
                               </td>
                           </tr>   
                       </tbody>
                   </table>
                    @endforeach
               </div>
               @endforeach
               <div class="module-foot">
                    <td><a href="{{ route('quiz.index') }}"><button class="btn btn-inverse pull-center">Back</button></a></td>
               </div>
            </div>
        </div>

    </div>
</div>
@endsection
