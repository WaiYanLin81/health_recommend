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
           		<form action="{{ route('products.store')}}" method="post" enctype="multipart/form-data">
                @csrf

           			
         
           			<div class="form-group row">
           				<label for="name" class="col-sm-2 col-form-label">Name</label>
           				<div class="col-sm-6">
           					<input type="text" class="form-control" id="name" name="name">
                    @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name')}}</span>
                    @endif
           				</div>
           			</div>


           			<div class="form-group row">
           				<label for="photo" class="col-sm-2 col-form-label">Photo</label>
           				<div class="col-sm-6">
           					<input type="file"  id="photo" name="photo">
           				</div>
           			</div>


                  <div class="form-group row">
                  <label for="description"  class="col-sm-2  col-form-label">Benefit</label>
                  <div class="col-sm-6">
                    <textarea class="form-control benefit" id="" name="benefit"></textarea>
                    @if ($errors->has('benefit'))
                    <span class="text-danger">{{ $errors->first('benefit')}}</span>
                    @endif
                  </div>
                  {{-- <script type="text/javascript">
                    $(document).ready(function() {
                          $('#summernote').summernote();
                      });
                  </script> --}}
                </div>


           			<div class="form-group row">
           				<label for="description" class="col-sm-2">category</label>
           				<select class="form-control-md summernote" id="inputBrand" name="category">
           					<optgroup label="Choose Subcategory">
           						@foreach($categories as $category)
           						<option value="{{$category->id}}">{{$category->name}}</option>
           						@endforeach
           						
           					</optgroup>
           				</select>
           			</div>


           <div class="form-group row">
    					<div class="col-sm-12">
      						<button type="submit" class="btn btn-primary" >Create</button>
    					</div>
 					</div>
        </form>

           	</div>
            


@endsection