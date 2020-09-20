@extends('master')
@section('disease')
    'active'
@endsection
@section('content')

<div class="container">
 <div class="row">
   <div class="col-lg-12">
     <img src="{{ asset($diseases->photo) }}">
      <h2>{{$diseases->name}}</h2>
     <p>{!! $diseases->about !!}</p>
   </div>
 </div>
 
      <ul class="list-group">
    <li class="list-group-item {{-- active --}}  comment">
      <b>Comments({{count($diseases->comments)}})</b>
    </li>
    @foreach($diseases->comments as $comment)
    <li class="list-group-item">
      {{$comment ->content}}
    <a href="{{url("/comments/delete/$comment->id")}}" class="close">
      &times;
    </a>
    <div class="small mt-2">
      By <b>{{ $comment->user->name }}</b>,
      {{$comment->created_at->diffForHumans()}}
    </div>
    </li>
    @endforeach
  </ul>
  @auth

  <form action="{{url('/comments/add')}}" method="post">
    @csrf
    <input type="hidden" name="disease_id" value="{{$diseases->id}}">


    <textarea name="content" class="form-control mb-2" placeholder="New Comment"></textarea>
    <input type="submit" value="Add Comment" class="btn  add__comment">

  </form>
  @endauth
      {{-- <hr> --}}
    </div>

        <div class="col-12 col-lg-12 justify-content-center my-5">
          <h2 class="text-center">Recommend For:{{$diseases->name}}</h2>
        </div>

        <div class="row">
        @foreach($diseases->products as $product) 
        <div class="col-lg-8 py-5">
          <h3>{{ $product->name }}</h3>
          <a href="{{ route('productdetailpage',$product->id) }}">
          <img src="{{ asset($product->photo) }}" width="200" height="150">
          <a/>
          <p>{{ $product->pivot->description }}</p>
            <a href="{{ route('productdetailpage',$product->id) }}" class="disease___btn btn">Read other benefit of {{ $product->name }}<span class="arrow_right"></span></a>
          

          
        </div>
        @endforeach
      </div>

      <style >
        .disease___btn, .comment, .add__comment
        {
          background: #A0EA1D

        }
      </style>

  {{--     <div class="row row-cols-1 row-cols-md-2">
      @foreach($diseases->products as $product)
  <div class="col mb-4">
    <div class="card">
      <a href="">
      <img src="{{ asset($product->photo) }}" class="card-img-top img-fluid" alt="...">
    </a>
      <div class="card-body">
        <h3 class="card-title">{{$product->name}}</h3>
        <p class="card-text">{{ $product->pivot->description }}</p>
      </div>
    </div>
  </div>
  @endforeach

    </div> --}}

  {{--   <div class="row">
      @foreach($diseases->products as $product)
      <div class="col-lg-4 col-12">
        <div class="card" style="width: 18rem;">
  <img src="{{ asset($product->photo) }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h3 class="card-title">{{$product->name}}</h3>
    <p class="card-text">{{ $product->pivot->description }}</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
      </div>
      @endforeach
    </div> --}}

 
</div>
	
@endsection

