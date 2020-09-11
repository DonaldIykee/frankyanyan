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
                        <h4 class="panel-title">Add Services</h4>
                    </div>
                    <div class="panel-body">
                        <form action="{{route('services.update', $service->id)}}" method="POST"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{method_field('PUT')}}


                            <div class="form-group">
                                <label for="exampleInputEmail1">Image</label>
                                <input type="file" class="form-control" name="image" id="exampleInputEmail1" required>
                                <div class="border-dark my-2">
                                    <img src="{{asset('storage/' . $service->image)}}" id="output" height="200px"
                                        width="50%" />
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Services Description</label>
                                <input type="text" class="form-control" name="description"
                                    value="{{$service->description}}" id="exampleInputPassword1">
                            </div>

                            <button type="submit" class="btn btn-primary">Update Services</button>
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
