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
	       							<th>Name</th>
	       							<th>Photo</th>
	       							<th>Action</th>
       							</tr>
       							</thead>
       							<tbody>

       								@php $i=1; @endphp
       								@foreach($products as $product)
       								<tr>
       									<td>{{$i++}}</td>
       									<td>{{ $product->name}}</td>
       									<td><img src="{{ asset($product->photo)}}" class="img-fluid " width="200" height="150"> </td>
       									
       									<td><a href="{{ route('products.edit',$product->id) }}" class="btn btn-warning"><i class="icofont-edit"></i></a>
       									<a href="" class="btn btn-success"><i class="icofont-file-alt"></i></a>
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