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
	
	{{-- <div class="row">
		@foreach($disease as $disease)
		<div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-6 my-3">
			<img src="{{ asset($disease->photo) }}" style="width:200px;height: 150px">
			<h5>{{$disease->name}}</h5>
		</div>
		@endforeach


	 
	 
		
	 
	</div>
 --}}

 	<br><div class="row featured__filter">
            	@foreach($disease as $disease)
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 mix oranges fresh-meat">
                    <div class="featured__item " style="border: 2px solid  #A0EA1D">
                        <div class="featured__item__pic set-bg container-fluid" data-setbg="{{ asset($disease->photo) }}" style="width:200px;height: 150px;margin-top:20px; ">
                            {{-- <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul> --}}
                        </div>
                        <div class="featured__item__text">
                            <h6>{{$disease->name}}</h6>
                            <h5 ><a href="{{ route('diseasedetailpage',$disease->id) }}" class="text-dark btn  container-fluid" style="text-decoration: none;border: 1px"> View Detail</a></h5>
                        </div>
                    </div>
              
            </div>
            @endforeach
        </div>
</div>


@endsection