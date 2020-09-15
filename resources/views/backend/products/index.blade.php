@extends('backend.backendtemplate')

@section('content')



<div class="container-fluid">
		 	<div class="d-sm-flex align-items-center justify-content-between mb-4">
           <div class="row">
           	<div class="col-md-12">
           		 <h1 class="h3 mb-0 text-gray-800">Products List Form</h1>
           	</div>
           </div>
           <a href="{{ route('products.create')}}" class="btn btn-primary">Add New</a>
       </div>

       				<div class="row">
       					<div class="col-md-12">
       						<table class="table table-bordered">
       							<thead class="thead-dark">
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
       									
       									<td>
       									<a href="{{route('products.show',$product->id)}}" class="btn btn-outline-primary"><i class="fas fa-info"></i></a>&nbsp;&nbsp;
                        <a href="{{ route('products.edit',$product->id) }}" class="btn btn-outline-warning"><i class="fas fa-edit"></i></a>&nbsp;&nbsp;
       									<form action="{{route('products.destroy',$product->id)}}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure to Delete?')">
                                @csrf
                                @method('DELETE')
                                <!-- delete lote yin method ka post nat ma ya buu dar kout method ko delete so pe change pay ya mal update lo myoe pot -->
                                <button class="btn btn-outline-danger "><i class="fas fa-trash"></i></button>
                            </form>

       								</tr>
       								@endforeach
       							</tbody>
       						</table>
       					</div>
       				</div>
 </div>





@endsection