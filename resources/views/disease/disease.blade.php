@extends('master')

@section('content')

<div class="container">
	
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
	
	<div class="row">
		@foreach($disease as $disease)
		<div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-6 my-3">
			<img src="{{ asset($disease->photo) }}" style="width:200px;height: 150px">
			<h5>{{$disease->name}}</h5>
		</div>
		@endforeach


	 
	 
		
	 
	</div>

</div>


@endsection