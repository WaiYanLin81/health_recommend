@extends('master')

@section('content')
<div class="container">
        	<div class="col-12">
        		<h3>All Fruit and Herbs</h3>
        	</div>
            <div class="row featured__filter">
            	@foreach($category->products as $product)
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{ asset($product->photo) }}" style="width:200px;height: 150px">
                            {{-- <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul> --}}
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="{{ route('productdetailpage',$product->id) }}" style="text-decoration: none">{{$product->name}} <span>:Health Benefit</span></a></h6>
                            <h5>Read More</h5>
                        </div>
                    </div>
              
            </div>
            @endforeach
        </div>



@endsection