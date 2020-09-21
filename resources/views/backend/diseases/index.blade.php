@extends('backend.backendtemplate')

@section('content')
	<div class="container-fluid">
    <!-- Page Heading -->
  	<div class="row">
  		<div class="col-md-12 mb-3">
    		<h1 class="h3 mb-0 text-gray-800 d-inline-block">Disease List</h1>
    		<a href="{{route('diseases.create')}}" class="btn btn-info float-right"><i class="fas fa-plus"></i>Add New</a>
  		</div>
  	</div>
    


            <br><div class="input-group col-12">
            <form  class="form-inline" action="{{ route('diseases.index') }}" method="get">
                 <input class="form-control bg-light pl-4 border-right-0 border" type="search" placeholder="Search" name="search" id="">
                              
                 <button class="btn  my-2 my-sm-0 btn-primary" type="submit"><i class="fa fa fa-search"></i></button>
            </form>
        </div><br>

    <div class="row">
    	<div class="col-md-12">
    		<table class="table table-bordered">
    			<thead class="thead-dark">
    				<tr>
    					<th>No</th>
    					<th>Name</th>
                        {{-- <th>About</th> --}}
                       
    					<th>Actions</th>
    				</tr>
    			</thead>
    			<tbody>
                    @php $i=1; @endphp
                    @foreach($diseases as $disease)
                    
    				<tr>
                        <td>{{$i++}}</td>    
                        <td>{{$disease->name}}</td>            
                        {{-- <td><img src="{{$brand->photo}}" class="rounded circle" width="150px" height="120px"></td>            
                        <td> --}}
                           {{--  <td>{{$disease->about}}</td> --}}
                            
                            <td>
                            <a href="{{ route('diseasedetailpage',$disease->id )}}" class="btn btn-outline-primary"><i class="fas fa-info"></i></a>&nbsp;&nbsp;
                            <a href="{{route('diseases.edit',$disease->id)}}" class="btn btn-outline-warning"><i class="fas fa-edit"></i></a>&nbsp;&nbsp;

                            <form action="{{route('diseases.destroy',$disease->id)}}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure to Delete?')">
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