@extends('master')

@section('content')

<section class="breadcrumb-section set-bg" data-setbg="{{ asset('frondend/img/fruits.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Health benefit of Eating {{$product->name}}</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Category-{{$product->name}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><br>

<div class="container">
	
	<div class="row">

		<div class="col-lg-12 justify-content-center " >
			<h3> <span>Healh Benefit of</span> {{ $product->name }}</h3>
			
		</div>
		<div class="col-lg-8 justify-content-center">
			<img src="{{ asset($product->photo) }} " style="width: 300px;height: 200px">
			<p class="">{!!$product->benefit !!}</p>
		</div>
		

	</div>


</div>
	  
	 
        
  


@endsection