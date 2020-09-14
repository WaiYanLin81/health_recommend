@extends('backend.backendtemplate')

@section('content')



<div class="container-fluid">
		 	<div class="d-sm-flex align-items-center justify-content-between mb-4">
           <div class="row">
           	<div class="col-md-12">
           		 <h1 class="h3 mb-0 text-gray-800">Products Create Form</h1>
           	</div>
           </div>
       </div>

       				<div class="row">
       					<div class="col-md-12">
       						<table class="table table-bordered">
       							<thead>
       							<tr>
       								<th>No</th>
	       							<th>Title</th>
                      <th>View</th>
	       							<th>Action</th>
       							</tr>
       							</thead>
       							<tbody>

       								@php $i=1; @endphp
       								@foreach($posts as $post)
       								<tr>
       									<td>{{$i++}}</td>
       									<td>{{ $post->title}}</td>
       									<td><a href="" class="btn btn-primary">View Post</a></td>
       									
       									<td><a href="{{ route('posts.edit',$post->id) }}" class="btn btn-warning"><i class="icofont-edit"></i></a>
       									<a href="" class="btn btn-danger"><i class="icofont-bin"></i></i></a>
       										</td>

       								</tr>
       								@endforeach
       							</tbody>
       						</table>
       					</div>
       				</div>
 </div>





@endsection