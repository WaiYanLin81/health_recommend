@extends('master')

@section('content')


<div class="container">
	
	<div class="row">

		<div class="col-lg-12 justify-content-center " >
			<h3>{{ $disease->name }} <span>Disease Description</span></h3>
			
		</div>
		<div class="col-lg-12">
			<img src="{{ asset($disease->photo) }} " style="width: 300px;height: 200px">
			<p class="container-fluid">{!!$disease->about !!}</p>
		</div>
		

	</div>


	<ul class="list-group">
		<li class="list-group-item {{-- active --}} bg-success text-light">
			<b>Comments({{count($disease->comments)}})</b>
		</li>
		@foreach($disease->comments as $comment)
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
		<input type="hidden" name="disease_id" value="{{$disease->id}}">
		<textarea name="content" class="form-control mb-2" placeholder="New Comment"></textarea>
		<input type="submit" value="Add Comment" class="btn btn-success">

	</form>
	@endauth
</div>
<br>
	  
	 
@endsection