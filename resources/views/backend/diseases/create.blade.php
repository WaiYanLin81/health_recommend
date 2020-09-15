@extends('backend.backendtemplate')

@section('content')


<div class="container-fluid">
		 	<div class="d-sm-flex align-items-center justify-content-between mb-4">
           <div class="row">
           	<div class="col-md-12">
           		 <h1 class="h3 mb-0 text-gray-800">Disease Create Form</h1>
               
           	</div>
           </div>
       </div>
           		<form action="{{route('diseases.store')}}" method="post" enctype="multipart/form-data">
                @csrf

           			
           			{{-- <div class="form-group row">
           				<label for="codeno" class="col-sm-2 col-form-label">Code No</label>
           				<div class="col-sm-5">
           					<input type="text" class="form-control" id="codeno" name="codeno">
                    @if ($errors->has('codeno'))
                    <span class="text-danger">{{ $errors->first('codeno')}}</span>
                    @endif
           				</div>
           			</div> --}}

           			<div class="form-group row">
           				<label for="name" class="col-sm-2 col-form-label">Name</label>
           				<div class="col-sm-5">
           					<input type="text" class="form-control" id="name" name="name">
                    @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name')}}</span>
                    @endif
           				</div>
           			</div>


           			<div class="form-group row">
           				<label for="photo" class="col-sm-2 col-form-label">Photo</label>
           				<div class="col-sm-5">
           					<input type="file"  id="photo" name="photo">
           				</div>
           			</div>
{{-- 
           			<div class="form-group row">
           				<label for="price" class="col-sm-2 col-form-label">Price</label>
           				<div class="col-sm-5">
           					<input type="number" class="form-control" id="price" name="price">
                    @if ($errors->has('price'))
                    <span class="text-danger">{{ $errors->first('price')}}</span>
                    @endif
           				</div>
           			</div> --}}

           			{{-- <div class="form-group row">
           				<label for="discount" class="col-sm-2 col-form-label">Discount</label>
           				<div class="col-sm-5">
           					<input type="number" class="form-control" value="0" id="discount" name="discount">
                    @if ($errors->has('discount'))
                    <span class="text-danger">{{ $errors->first('discount')}}</span>
                    @endif
           				</div>
           			</div> --}}

                <div class="form-group row">
                  <label for="about"  class="col-sm-2  col-form-label">About</label>
                  <div class="col-sm-5">
                    <textarea class="form-control" id="about" name="about"></textarea>
                    @if ($errors->has('about'))
                    <span class="text-danger">{{ $errors->first('about')}}</span>
                    @endif
                  </div>
                </div>

           			<div class="form-group row">
           				<label for="description"  class="col-sm-2  col-form-label">Description</label>
           				<div class="col-sm-5">
           					<textarea class="form-control" id="des" name="description"></textarea>
                    @if ($errors->has('description'))
                    <span class="text-danger">{{ $errors->first('description')}}</span>
                    @endif
           				</div>
           			</div>

           			<div class="form-group row">
           					<label for="product" class="col-sm-2">Product</label>
           				{{-- <select class="form-control-md" id="inputBrand" name="product[]" multiple ="multiple" id="product">
           					<optgroup label="Choose Product">
           						@foreach($products as $product)
           						<option value="{{$product->id}}">{{$product->name}}</option>
           						@endforeach
           						
           					</optgroup>
           				</select> --}}
                  <div class="col-sm-5">
                  <select class="custom-select" size="5" id="product" name="product[]" multiple="multiple" id="inputBrand">
                    <option selected>Choose Product</option>
                    @foreach($products as $product)
                    <option value="{{$product->id}}">{{$product->name}}</option>
                  @endforeach
                  </select>
                  </div>
           			  </div>

{{-- 
           			<div class="form-group row">
           				<label for="description" class="col-sm-2">category</label>
           				<select class="form-control-md" id="inputBrand" name="category">
           					<optgroup label="Choose Subcategory">
           						@foreach($categories as $category)
           						<option value="{{$category->id}}">{{$category->name}}</option>
           						@endforeach
           						
           					</optgroup>
           				</select>
           			</div> --}}


           <div class="form-group row">
    					<div class="col-sm-5">
      						<button type="submit" class="btn btn-primary" >Create</button>
    					</div>
 					</div>

           			
           		</form>

           	</div>



@endsection