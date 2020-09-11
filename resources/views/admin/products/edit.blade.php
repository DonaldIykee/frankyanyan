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
                        <h4 class="panel-title">Edit Product</h4>
                    </div>
                    <div class="panel-body">
                        <form action="{{route('products.update', $product->id)}}" method="POST"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{method_field('PUT')}}
                            <div class="form-group">
                                <label for="exampleInputPassword1">Product Name</label>
                                <input type="text" class="form-control" name="product_name"
                                    value="{{$product->product_name}}" id="exampleInputPassword1">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Image</label>
                                <input type="file" class="form-control" name="img" id="exampleInputEmail1" required>
                                <div class="border-dark my-2">

                                    <img src="{{asset('storage/' .$product->img)}}" id="output" height="200px"
                                        width="200px" />
                                </div>

                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Product category</label>
                                <select required name="category" class="form-control" title="Category">
                                    @foreach($categories as $category)
                                    <option {{$product->category_id == $category->id ? 'selected' : ''}}
                                        value="{{$category->id}}">
                                        {{$category->category_name}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Product Description</label>
                                <input type="text" class="form-control" name="product_description"
                                    value="{{$product->product_description}}" id="exampleInputPassword1">
                            </div>

                            <button type="submit" class="btn btn-primary">Update Product</button>
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
