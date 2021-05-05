@extends('backend.layouts.master')

@section('title','update user')

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
					<h3>Update User</h3>
				</div>
				<div class="module-body">
					<form action="{{ route('user.update', [$user->id]) }}" method="post">
						@csrf
						@method('put')
						<div class="control-group">
							<label class="control-label">Full Name</label>
							<div class="controls">
								<input type="text" name="name" class="span8 @error('name') border-red @enderror" placeholder="enter your name" value="{{ $user->name}}">
							</div>
							@error('name')
							<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
							@enderror
						</div>
						<div class="control-group">
							<label class="control-label" for="password">Password</label>
							<div class="controls">
								<input type="text" name="password" class="span8 @error('password') border-red @enderror" placeholder="enter your password" value="{{ $user->visible_password }}">
							</div>
							@error('password')
							<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
							@enderror
						</div>
						<div class="control-group">
							<label class="control-label" for="occupation">Occupation</label>
							<div class="controls">
								<input type="text" name="occupation" class="span8 @error('question') border-red @enderror" placeholder="enter your occupation" value="{{ $user->occupation }}">
							</div>
							@error('occupation')
							<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
							@enderror
						</div>
						<div class="control-group">
							<label class="control-label" for="address">Address</label>
							<div class="controls">
								<input type="text" name="address" class="span8 @error('address') border-red @enderror" placeholder="enter your address" value="{{ $user->address }}">
							</div>
							@error('address')
							<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
							@enderror
						</div>
						<div class="control-group">
							<label class="control-label" for="phone">Phone Number</label>
							<div class="controls">
								<input type="number" name="phone" class="span8 @error('phone') border-red @enderror" placeholder="enter your phone" value="{{ $user->phone }}">
							</div>
							@error('phone')
							<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
							@enderror
						</div>
						<div class="control-group">
							<button class="btn btn-success" type="submit">Update User</button>
						</div>
					</form>
				</div>
			</div>
		  </form>
		</div>
	</div>
	
@endsection