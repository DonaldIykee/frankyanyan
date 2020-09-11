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
                        <form action="{{route('services.store')}}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}


                            <div class="form-group">
                                <label for="exampleInputEmail1">Image</label>
                                <input type="file" class="form-control" name="image" id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Services Description</label>
                                <input type="text" class="form-control" name="description" id="exampleInputPassword1">
                            </div>

                            <div class="form-group">
                                <label class="control-label">Product Category</label>
                                <select required name="category" class="form-control" title="Category">
                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->category_name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
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
