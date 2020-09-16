@extends('master')

@section('content')


<div class="container">
	
	<div class="row">

		<div class="col-lg-12 justify-content-center " >
			<h3>{{ $product->name }} <span>Healh Benefit</span></h3>
			
		</div>
		<div class="col-lg-12">
			<img src="{{ asset($product->photo) }} " style="width: 300px;height: 200px">
			<p class="container-fluid">{!!$product->benefit !!}</p>
		</div>
		

	</div>


</div>
	  
	 
        
  


@endsection