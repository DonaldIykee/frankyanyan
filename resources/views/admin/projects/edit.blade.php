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
                        <h4 class="panel-title">Edit Project</h4>
                    </div>
                    <div class="panel-body">
                        <form action="{{route('Project.update', $project->id)}}" method="POST"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{method_field('PUT')}}


                            <div class="form-group">
                                <label for="exampleInputEmail1">Image</label>
                                <input type="file" class="form-control" name="image" id="exampleInputEmail1">
                                <div class="border-dark my-2">

                                    <img src="{{asset('storage/' .$project->image)}}" id="output" height="200px"
                                        width="200px" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Project Title</label>
                                <input type="text" class="form-control" value="{{$project->title}}" name="title"
                                    id="exampleInputPassword1">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Project Description</label>
                                <input type="text" class="form-control" value="{{$project->Description}}"
                                    name="description" id="exampleInputPassword1">
                            </div>

                            <div class="form-group">
                                <label class="control-label">Category</label>
                                <select required name="category" class="form-control" title="Category">
                                    @foreach($categories as $category)
                                    <option {{$project->category_id == $category->id ? 'selected': ''}}"
                                        value="{{$category->id}}">
                                        {{$category->category_name}}</option>
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
