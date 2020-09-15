@extends('master')

@section('content')

<div class="container">
	<div class="col-12">
		  <div class="input-group">
			<form  class="form-inline" action="{{ route('diseasepage') }}" method="get">
				 <input class="form-control pl-4 border-right-0 border" type="search" placeholder="Search" name="search" id="">
				              
				 <button class="btn  my-2 my-sm-0 btn-success" type="submit">Search</button>
			</form>
				           
		</div>
	</div>
	<div class="row">
		@foreach($disease as $disease)
		<div class="col-xl-3 col-lg-3 col-md-3 col-sm-2 my-3">
			<img src="{{ asset($disease->photo) }}" style="width:200px;height: 150px">
			<h5>{{$disease->name}}</h5>
		</div>
		@endforeach


	 
	 
		
	 
	</div>

</div>


@endsection