@extends('layouts.master')
@push('styles')
  <script src="{{asset('themes/vali/js/plugins/bootstrap-datepicker.min.js')}}"></script>
@endpush
@section('content')
<main class="app-content">
	<div class="row">
		<div class="col-md-12 col-xl-12">
			<h1 style="font-size: 24px">Edit Permission Here</h1>
		</div>
	</div>
	<div style="margin-top: 1.5rem; padding: 1.5rem; border: 1px solid grey;">
		@if($message = Session::get('success'))
			<div class="alert alert-success alert-block">
				<button type="button" class="close" data-dismiss="alert">×</button>
				{{$message}}
			</div>
		@endif 
		<div><h5>Write permission name here</h5></div><hr>
		<form action="{{route('permissions.update', $permission->id)}}" method="POST" enctype="multipart/form-data">
			@csrf
			@method('PATCH')
			<div class="row">
				<div class="col-12" style="text-align: center;">
					<input type="text" name="permission" value="{{old('start', $permission->name)}}" style="width:60%;">
					@error('start')
			          <span class="text-danger" role="alert">
			            <strong>* {{ $message }}</strong>
			          </span>
			      	@enderror
				</div>			
			</div>
			<br><br>
    		<div class="col-12 form-group text-center">
				<button class="btn btn-info btn-sm m-2" style="width: 40%">Save</button>
			</div>
		</form>
	</div>
</main>
@endsection
