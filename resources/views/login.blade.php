@extends('master')
@section('content')
<!-- Subcategory Title -->
	<div class="jumbotron jumbotron-fluid subtitle">
  		<div class="container">
    		<h1 class="text-center text-white"> Login </h1>
  		</div>
	</div>
	
	<!-- Content -->
<<<<<<< HEAD
	<div class="container my-5">

		<div class="row justify-content-center">
			<div class="col-5">
				<form method="POST" action="{{ route('loginpage') }}">
					@csrf

		      		<div class="form-group">
		      			<label class="small mb-1" for="inputEmailAddress">Email</label>
		      			<input class="form-control py-4" id="inputEmailAddress" type="email" placeholder="Enter email address" name="email" />
		      		</div>
		      		
		      		<div class="form-group">
		      			<label class="small mb-1" for="inputPassword">Password</label>
		      			<input class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password" name="password" />
		      		</div>
		      
		      		<div class="form-group">
		          		<div class="custom-control custom-checkbox">
		          			<input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
		          			<label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>


		          		</div>

		          		<a class="small" href="#">Forgot Password?</a>

		      		</div>
		      		
		      		<div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
		        		
		        		<button type="submit" class="btn btn-secondary mainfullbtncolor btn-block">Login</button>
		      		</div>


		  		</form>

		  		<div class=" mt-3 text-center ">
		  			<a href="{{ route('registerpage') }}" class="loginLink text-decoration-none">Need an account? Sign Up!</a>
		  		</div>
			</div>
		</div>
		
		
		

	</div>
	
=======
  <div class="container my-5">

    <div class="row justify-content-center">
      <div class="col-5">
        <form action="{{ route('login') }}" method="POST">
          @csrf
              <div class="form-group">
                <label class="small mb-1" for="inputEmailAddress">Email</label>
                <input class="form-control py-4 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" id="inputEmailAddress" type="email" placeholder="Enter email address" name="email" />

                 @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              
              <div class="form-group">
                <label class="small mb-1" for="inputPassword">Password</label>
                <input class="form-control py-4 @error('password') is-invalid @enderror"  value="{{ old('password') }}" id="inputPassword" type="password" placeholder="Enter password" name="password" />
                 @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
              </div>
            
              <div class="form-group">
                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
                    <label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>


                  </div>

                  <a class="small" href="#">Forgot Password?</a>

              </div>
              
              <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                
                <button type="submit" class="btn btn-secondary mainfullbtncolor btn-block">Login</button>
              </div>


          </form>

          <div class=" mt-3 text-center ">
            <a href="{{route('registerpage')}}" class="loginLink text-decoration-none">Need an account? Sign Up!</a>
          </div>
      </div>
    </div>

  </div>

>>>>>>> bb8145b54abc33af465d04baa14bb779e34a4b61
@endsection