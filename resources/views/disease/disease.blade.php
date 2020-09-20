@extends('master')
@section('disease')
    'active'
@endsection
@section('content')

<section class="breadcrumb-section set-bg" data-setbg="{{ asset('frondend/img/aa.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Food And Diease</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Disease</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><br>

<div class="container">
		<div class="row">
		  <div class="input-group col-12">
			<form  class="form-inline" action="{{ route('diseasepage') }}" method="get">
				 <input class="form-control bg-light pl-4 border-right-0 border" type="search" placeholder="Search" name="search" id="">
				              
				 <button class="btn  my-2 my-sm-0 btn-success" type="submit">Search</button>
			</form>

			{{--    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form> --}}
				           
		</div>
	</div>
	
	<div class="row">
		@foreach($diseases as $disease)
     @role('Customer')
		<div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-6 my-3">
      <a href="{{ route('diseasedetailpage',$disease->id) }}">
			<img src="{{ asset($disease->photo) }}" width="200" height="150">
			<h5>{{$disease->name}}</h5>
    </a>
		</div>
    @else
    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-6 my-3">
      <a href="{{ route('loginpage') }}">
      <img src="{{ asset($disease->photo) }}" width="200" height="150">
      <h5>{{$disease->name}}</h5>
    </a>
    </div>
    @endrole

		@endforeach


	 
	 
		
	 
	</div>

	 <div class="row justify-content-center ">
          <div class="col-md-12 text-center justify-content-center pagination">
            <p>{!! $diseases->render() !!}</p>
          </div>
        </div>

</div><br>
	
@endsection

