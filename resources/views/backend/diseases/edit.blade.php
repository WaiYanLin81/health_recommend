
@extends('backend.backendtemplate')

@section('content')
	<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    	<div class="row">
    		<div class="col">
      		<h1 class="h3 mb-0 text-gray-800">Disease Edit Form</h1>
    		</div>
    	</div>
    </div>
    
    <div class="container">
      <div class="row">
      	<div class="col-md-12">
      		<form action="{{route('diseases.update',$disease->id)}}" method="post" enctype="multipart/form-data">
			      @csrf
			      @method('PUT')
			      
			       
			      <div class="form-group row {{ $errors->has('name') ? 'has-error' : '' }}">
			        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
			        <div class="col-sm-5">
			          <input type="text" class="form-control" id="inputName" name="name" value="{{$disease->name}}">
			          <span class="text-danger">{{ $errors->first('name') }}</span>
			        </div>
			      </div>

           			<div class="form-group row">
           				<label for="photo" class="col-sm-2 col-form-label">Photo</label>
           				<div class="col-sm-5">
           					<input type="file"  id="photo" name="photo">
                      <img src="{{ asset($disease->photo)}}" class="img-fluid w-5">
                    <input type="hidden" name="oldphoto" value="{{$disease->photo}}">
           				</div>
           			</div>
			      <div class="form-group row {{ $errors->has('about') ? 'has-error' : '' }}">
			        <label for="about" class="col-sm-2 col-form-label">About</label>
			        <div class="col-sm-5">
			          <input type="text" class="form-control" id="about" name="about" value="{{$disease->about}}">
			          <span class="text-danger">{{ $errors->first('about') }}</span>
			        </div>
			      </div>
{{-- 
			    <div class="form-group row {{ $errors->has('photo') ? 'has-error' : '' }}">
			        <label for="inputPhoto" class="col-sm-2 col-form-label">Photo</label>
			        <div class="col-sm-5">
			        	<nav>
						  <div class="nav nav-tabs" id="nav-tab" role="tablist">
						    <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Old Photo</a>
						    <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">New Photo</a>
						    
						  </div>
						</nav>
						<div class="tab-content" id="nav-tabContent">
						  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
						  	<img src="{{asset($category->photo)}}" width="200px" height="150px" class="mt-3">
						  	<input type="hidden" name="oldphoto" value="{{$category->photo}}">
						  </div>
						  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
			          			<input type="file" id="inputPhoto" name="photo" class="d-block mt-3">
						  	
						  </div>
						 
						</div>
			          	<span class="text-danger">{{ $errors->first('photo') }}</span>


			        </div>
			    </div>
 --}}
			      <div class="form-group row">
			        <div class="col-sm-5">
			          <input type="submit" class="btn btn-primary" name="btnsubmit" value="Update" onsubmit="return confirm('Update Successful')">
			        </div>
			      </div>
			    </form>
      	</div>
      </div>
    </div>
 	</div>
@endsection