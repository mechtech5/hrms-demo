@extends('layouts.master')
@section('content')
	<main class="app-content">
		<div class="row">
			<div class="col-md-12 col-xl-12">
				<h1 style="font-size: 24px">Approval Permissions
					{{-- <span class="ml-2">
						<a href="{{route('permissions.create')}}" class="btn btn-sm btn-success" style="font-size: 13px">
							<span class="fa fa-plus "></span> Add New</a>
					</span>
					<span class="ml-2">
						<button  class="btn btn-sm btn-info"  data-toggle="modal" data-target="#import-modal" style="font-size:13px">
							<span class="fa fa-upload"></span> Import
						</button>
					</span>
					<span class="ml-2">
						<a href="#" class="btn btn-sm btn-primary" style="font-size:13px">
							<span class="fa fa-download"></span> Export
						</a>
					</span> --}}
				</h1>
				<hr>
			</div>
		</div>
		@if($message = Session::get('success'))
			<div class="alert alert-success">
				{{$message}}
			</div>
		@endif
			<div class="row">
      <div class="col-md-12 col-xl-12">
        <div class="card shadow-xs">
          
          <div class="card-body table-responsive">
            <table class="table table-striped table-hover">
              <thead>
                <tr class="text-center">
                  <th>ID</th>
                  <th>ROLES</th>
                  <th>ACTIONS</th>
                </tr>
              </thead>
              <tbody>
              @foreach($designations as $desig)
              <tr class="text-center">
                <td>{{$desig->id}}</td>
                <td>{{$desig->name}}</td>
                <td><a class="btn btn-info" href="{{Route('permissions.edit', [$desig->id])}}" role="button">Set Permissions</a></td>
              </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
	</main>
@endsection