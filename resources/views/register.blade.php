@extends('master')
@section('content')
<div class="jumbotron jumbotron-fluid subtitle">
  		<div class="container">
    		<h1 class="text-center text-white"> Create Account </h1>
  		</div>
	</div>
	
	<!-- Content -->
	<div class="container my-5">

		<div class="row justify-content-center">
			<div class="col-8">
				<form>
		      		<div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                              <label class="small mb-1"> Name</label>
                              <input class="form-control py-4" type="text" placeholder="Enter Name" name="name" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                              <label class="small mb-1">Phone Number</label>
                              <input class="form-control py-4"type="text" placeholder="Enter Phone Number" name="phone" />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                      	<label class="small mb-1">Email</label>
                      	<input class="form-control py-4" type="email" aria-describedby="emailHelp" placeholder="Enter email address" name="email" />
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                              <label class="small mb-1">Password</label>
                              <input class="form-control py-4" type="password" placeholder="Enter password" name="password" />
                              <font id="error" color="red"></font>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                              <label class="small mb-1">Confirm Password</label>
                              <input class="form-control py-4" type="password" placeholder="Confirm password" />
                              <font id="cerror" color="red"></font>

                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                      	<label class="small mb-1"> Address </label>
                      	<textarea class="form-control" name="address"></textarea>
                    </div>
		      		
		      		<div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
		        		
		        		<button type="submit" class="btn btn-secondary mainfullbtncolor btn-block"> Create Account </button>
		      		</div>
		  		</form>

		  		<div class=" mt-3 text-center ">
		  			<a href="#" class="loginLink text-decoration-none">Have an account? Go to login</a>
		  		</div>
			</div>
		</div>
		
		
		

	</div>


@endsection