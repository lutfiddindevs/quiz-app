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
			<form action="{{ route('quiz.update', [$quiz->id]) }}" method="post">
				@csrf
				@method('put')
			<div class="module">
				<div class="module-head">
					<h3>Update Quiz</h3>
				</div>
				<div class="module-body">
					<div class="control-group">
						<label class="control-label">Quiz Name</label>
						<div class="controls">
							<input type="text" name="name" class="span8" placeholder="Enter the name of a quiz" value="{{ $quiz->name }}"> <br>
							@error('name')
							    <span class="invalid-feedback" role="alert">
							        <strong>{{ $message }}</strong>
							    </span>
							@enderror
						</div>
						<label class="control-label">Quiz Description</label>
						<div class="controls">
							<textarea name="description" class="span8" placeholder="Enter the description of a quiz">
								{{ $quiz->description }}
							</textarea> <br>
							@error('description')
							    <span class="invalid-feedback" role="alert">
							        <strong>{{ $message }}</strong>
							    </span>
							@enderror
						</div>
						<label class="control-label">Quiz Duration</label>
						<div class="controls">
							<input type="text" name="minutes" class="span8" placeholder="Enter Quiz Duration" value="{{ $quiz->minutes }}"> <br>
							@error('minutes')
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