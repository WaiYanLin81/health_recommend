@extends('master')
@section('home')
    'active'
@endsection
@section('content')
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Recent New</span>
                        </div>
                        <ul>
                            @foreach($latests as $latest)
                            @role('Customer')
                            <li><a href="{{ route('productdetailpage',$latest->id) }}" style="text-decoration: none">{{$latest->name}}</a></li>
                            @else
                             <li><a href="{{ route('loginpage') }}" style="text-decoration: none">{{$latest->name}}</a></li>
                             @endrole
                            @endforeach
                         {{--    <li><a href="#">Vegetables</a></li>
                            <li><a href="#">Fruit & Nut Gifts</a></li>
                            <li><a href="#">Fresh Berries</a></li>
                            <li><a href="#">Ocean Foods</a></li>
                            <li><a href="#">Butter & Eggs</a></li>
                            <li><a href="#">Fastfood</a></li>
                            <li><a href="#">Fresh Onion</a></li>
                            <li><a href="#">Papayaya & Crisps</a></li>
                            <li><a href="#">Oatmeal</a></li>
                            <li><a href="#">Fresh Bananas</a></li>
                        </ul> --}}
                    </div>

                </div>
               <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">


                            <form action="{{ route('productsearchpage') }}" method="get" >
                               {{--  <div class="hero__search__categories">

                            <form action="{{ route('productsearchpage') }}" method="get">
                                <div class="hero__search__categories">


                            <form  class="form-inline" action="{{ route('diseasepage') }}" method="get">
                           {{ <form action="#"> --}}
                                {{-- <div class="hero__search__categories">

                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div> --}}
                                <input type="text" placeholder="What do yo u need?" name="search">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+65 11.188.888</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                    <div class="hero__item set-bg" data-setbg="{{ asset('frondend/img/hero/banner.jpg') }}">
                        <div class="hero__text">
                            <span>Health <br>Recommendation</span>
                            <h2>Health Is<br />Wealth</h2>
                          {{--   <p>Free Pickup and Delivery Available</p> --}}
                            <a href="{{ route('registerpage') }}" class="primary-btn" >Free Register</a>
                        </div>
                    </div>
                </div>
    </div>
</div>
    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title from-blog__title">
                        <h2>Fruits</h2>
                    </div>
                </div>
                <div class="categories__slider owl-carousel">
                     @foreach($fruits as $fruit )
                     @role('Customer')
                     <a href="{{ route('productdetailpage',$fruit->id)}}">
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{asset($fruit->photo)}}" style="width: 200px;height: 150px">
                            {{-- <h5><a href="#">Fresh Fruit</a></h5> --}}
                        </div>
                        
                    </div>
                    </a>
                    @else
                        <a href="{{ route('loginpage')}}">
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{asset($fruit->photo)}}" style="width: 200px;height: 150px">
                            {{-- <h5><a href="#">Fresh Fruit</a></h5> --}}
                        </div>
                    </div>
                        </a>
                        @endrole
                    @endforeach

                </div>


                <div class="col-lg-12">

               <br> </div><br>


                <br><div class="col-lg-12">
                    <div class="section-title from-blog__title">
                        <h2>Herbs</h2>
                    </div>
                </div>
                 <div class="categories__slider owl-carousel">


                     @foreach($herbs as $fruit )
                     @role('Customer')
                     <a href="{{ route('productdetailpage',$fruit->id)}}">
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{asset($fruit->photo)}}" style="width: 200px;height: 150px">
                            {{-- <h5><a href="#">Fresh Fruit</a></h5> --}}
                        </div>
                        
                    </div>
                    </a>
                    @else

                      <a href="{{ route('loginpage')}}">
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{asset($fruit->photo)}}" style="width: 200px;height: 150px">
                            {{-- <h5><a href="#">Fresh Fruit</a></h5> --}}
                        </div>
                        
                    </div>
                    </a>

                    @endrole


                    @endforeach


                    
                  
                </div>


            </div>
        </div>
    </section>
    <!-- Categories Section End -->


    <!-- Blog Section Begin -->
    <section class="from-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title from-blog__title">
                        <h2>From The Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($posts as $post)
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="{{asset($post->photo)}}" alt="" width="300" height="200">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> &nbsp;{{ date('d m Y',strtotime($post->created_at)) }}</li>
                                
                            </ul>
                            <h5><a href="#">{{$post->title}}</a></h5>
                            <div class="p">
                        <p>{!! substr($post->description, 0, 500 ) !!} </p>
                        </div>
                            <div class="container-fluid">
                             <a href="{{ route('blogdetailpage',$post->id) }}" class="blog__btn">READ MORE <span class="arrow_right"></span></a>
                         </div>
                                
                        </div>
                    </div>
                </div>
                @endforeach
                {{-- <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="{{asset('frondend/img/blog/blog-2.jpg')}}" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">6 ways to prepare breakfast for 30</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="{{asset('frondend/img/blog/blog-3.jpg')}}" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">Visit the clean farm in the US</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- Blog Section End -->
@endsection