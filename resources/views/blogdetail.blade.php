@extends('master')
@section('blog')
    'active'
@endsection
@section('content')
<div class="contaier">
	
	
   <!-- Blog Details Hero Begin -->
    <section class="blog-details-hero set-bg" data-setbg="{{ asset('frondend/img/blog/details/details-hero.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog__details__hero__text">
                        <h2>{{ $blogs->title }}</h2>
                        <ul>
                            {{-- <li>By Michael Scofield</li> --}}
                            <li>{{ date('d m Y',strtotime($blogs->created_at)) }}</li>
                            {{-- <li>8 Comments</li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Hero End -->

    <!-- Blog Details Section Begin -->
    <section class="blog-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5 order-md-1 order-2">
                    <div class="blog__sidebar">
                        <div class="blog__sidebar__search">
                            <form action="#">
                                <input type="text" placeholder="Search...">
                                <button type="submit"><span class="icon_search"></span></button>
                            </form>
                        </div>
                        <div class="blog__sidebar__item">
                            <h4>Recent News</h4>
                            <div class="blog__sidebar__recent">
                                @foreach($latest as $posts)
                                <a href="{{ route('blogdetailpage',$posts->id) }}" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img src="{{ asset($posts->photo) }}" alt="" width="75" height="75">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h6>{{ $posts->title }}</h6>
                                        <span>{{ date('D m Y',strtotime($blogs->created_at)) }}</span>
                                    </div>
                                </a>
                                @endforeach
                            </div>
                        </div>
                       
                    </div>
                </div>
                <div class="col-lg-8 col-md-7 order-md-1 order-1">
                    <div class="blog__details__text">
                        <img src="{{ asset($blogs->photo) }}" alt="">
                        <p>{!! $blogs->description  !!}</p>
                     
                    </div>
                  
                </div>
            
        </div>
    </div>
    </section>
   


	
</div>
@endsection