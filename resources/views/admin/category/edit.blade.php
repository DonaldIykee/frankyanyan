@extends('layouts.admin')
@section('content')


<div class="page-inner">
    <div class="page-title">
        <h3 class="breadcrumb-header"> ADOIU</h3>
    </div>
    @if(session('message'))
    <div class="card-sub bg-success">
        {{session('message')}}
    </div>
    @endif
    @if($errors->count())
    <div class="card-sub bg-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div id="main-wrapper">
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">Edit Category</h4>
                    </div>
                    <div class="panel-body">
                        <form action="{{route('categories.update', $category->id)}}" method="POST"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{method_field('PUT')}}


                            <div class="form-group">
                                <label for="exampleInputEmail1">Image</label>
                                <input type="file" class="form-control" name="image" id="exampleInputEmail1"
                                    onchange="loadFile(event)" required>
                                <div class="border-dark my-2">

                                    <img src="{{asset('storage/' .$category->image)}}" id="output" height="200px"
                                        width="200px" />
                                </div>
                                {{-- <script>
                                    const loadFile =function(event){
                                            var output =document.getElementById('output');
                                            output.src = window.URL.createObjectURL(event.target.files[0]);
                                        }
                                </script> --}}
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Category Name</label>
                                <input type="text" class="form-control" name="category_name"
                                    value="{{$category->category_name}}" id="exampleInputPassword1">
                            </div>

                            <button type="submit" class="btn btn-primary">Update Category</button>
                        </form>
                    </div>
                </div>
            </div>


        </div><!-- Row -->
    </div><!-- Main Wrapper -->
    <div class="page-footer">
        <p>Made with <i class="fa fa-heart"></i> by skcats</p>
    </div>
</div>
@endsection
