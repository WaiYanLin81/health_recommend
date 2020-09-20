@extends('master')
@section('category')
    'active'
@endsection
@section('content')

<section class="breadcrumb-section set-bg" data-setbg="{{ asset('frondend/img/fruits.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Health benefit of Eating {{$category->name}}</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Category-{{$category->name}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><br>
<div class="container">
        	<div class="col-12">
        		

            </div><br>

            <div class="row">
            <div class="input-group col-12" >
            <form  class="form-inline" action="{{ route('productsearchpage') }}" method="get">
                 <input class="form-control bg-light pl-4 border-right-0 border" type="search" placeholder="Search" name="search" id="">
                              
                 <button class="btn  my-2 my-sm-0 btn-success" type="submit">Search</button>
            </form>
        </div>
    </div>

            <br><div class="row featured__filter">
            	@foreach($category->products as $product)
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
                            <h5 ><a href="{{ route('productdetailpage',$product->id) }}" class="text-dark btn  container-fluid" style="text-decoration: none;border: 1px"> View Detail</a></h5>
                        </div>
                    </div>
              
            </div>
            @endforeach
        </div>
    </div>



@endsection