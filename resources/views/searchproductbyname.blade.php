@extends('master')

@section('content')
<div class="container">
    @error('no_post_result')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
        	<div class="col-12">
        		<h3>Search Results</h3>

            </div><br>

             <div class="row featured__filter">
            <div class="input-group col-12">
            <form  class="form-inline" action="" method="get">
                 <input class="form-control bg-light pl-4 border-right-0 border" type="search" placeholder="Search" name="search" id="">
                              
                 <button class="btn  my-2 my-sm-0 btn-success" type="submit">Search</button>
            </form>
        </div>
    </div><br>

            <div class="row featured__filter">
            	@foreach($products as $product)
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 mix oranges fresh-meat">
                    <div class="featured__item " style="border: 2px solid  #A0EA1D">
                        <div class="featured__item__pic set-bg container-fluid" data-setbg="{{ asset($product->photo) }}" style="width:200px;height: 150px;">
                            {{-- <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul> --}}
                        </div>
                        <div class="featured__item__text">
                            <h6>{{$product->name}}</h6>
                            @role('Customer')
                            <h5 ><a href="{{ route('productdetailpage',$product->id) }}" class="text-dark btn  container-fluid" style="text-decoration: none;border: 1px"> View Detail</a></h5>
                            @else
                            <h5 ><a href="{{ route('loginpage') }}" class="text-dark btn  container-fluid" style="text-decoration: none;border: 1px"> View Detail</a></h5>
                            @endrole

                        </div>
                    </div>
              
            </div>
            @endforeach
        </div>
    </div>



@endsection