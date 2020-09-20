@extends('backend.backendtemplate')

@section('content')



<div class="container-fluid">
		 	<div class="d-sm-flex align-items-center justify-content-between mb-4">
           <div class="row">
           	<div class="col-md-12">
           		 <h1 class="h3 mb-0 text-gray-800">Products Create Form</h1>
           	</div>
           </div>
            <h1><a href="{{ route('posts.create') }}" class="btn btn-primary">Add New</a></h1>
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
       									<td><a href="{{ route('blogdetailpage',$post->id) }} " class="btn btn-primary">View Post</a></td>
       									
       									<td><a href="{{ route('posts.edit',$post->id) }}" class="btn btn-warning"><i class="icofont-edit"></i></a>
                          <form action="{{route('posts.destroy',$post->id)}}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure to Delete?')">
                                @csrf
                                @method('DELETE')
                                <!-- delete lote yin method ka post nat ma ya buu dar kout method ko delete so pe change pay ya mal update lo myoe pot -->
                                <button class="btn btn-outline-danger "><i class="fas fa-trash"></i></button>

                            </form>
       								
       										</td>

       								</tr>
       								@endforeach
       							</tbody>
       						</table>
       					</div>
       				</div>
 </div>





@endsection