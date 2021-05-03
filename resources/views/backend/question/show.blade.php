@extends('backend.layouts.master')
@section('title','create quiz')
@section('content')
<div class="span9">
    <div class="content">
       
        <div class="module">
            <div class="module-head">
                
            </div>
            <div class="module-body">
               <p><h3 class="heading">{{ $question->question}}</h3></p>
               <div class="module-body table">
                   <table class="table table-message">
                       <tbody>
                        @foreach($question->answers as $key => $answer)
                           <tr class="read">
                               <td class="cell-author hidden-phone hidden-tablet">{{ $key+1 }}.{{ $answer->answer }} @if($answer->is_correct)<span class="badge badge-success pull-right">correct</span>@endif</td>
                           </tr>
                        @endforeach   
                       </tbody>
                   </table>
               </div>
               <div class="module-foot">
                   <a href="{{ route('question.edit', [$question->id]) }}"><button class="btn btn-primary">Edit</button></a>
                                                  <form id="delete-form{{$question->id}}" method="post" action="{{ route('question.destroy',[$question
                                                    ->id]) }}">
                                                          @csrf
                                                          @method('delete')
                                                  </form>
                                                  <a href="#" onclick="if(confirm('Do you want to delete?')) {
                                                          event.preventDefault();
                                                          document.getElementById('delete-form{{$question->id}}').submit()
                                                  }else{
                                                          event.preventDefault();
                                                  }"><input type="submit" value="Delete" class="btn btn-danger"></a>
                                                  <a href="{{ route('question.index') }}"><button class="btn btn-inverse pull-right">Back</button></a>
               </div>
            </div>
        </div>

    </div>
</div>
@endsection
