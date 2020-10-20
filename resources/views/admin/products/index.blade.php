@extends('layouts.admin')

@section('content')

<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Products Management</h4>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        Articles

                        <a href="{{route('products.create')}}"
                            class="btn btn-primary btn-sm float-right text-white">Create
                            a Product</a>
                    </div>
                </div>
                <br />
                <div class="card-body">
                    {{-- @include('includes.admin.alert') --}}
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Date Created</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                <tr>
                                    <td>
                                        {{$loop->iteration}}

                                    </td>
                                    <td>{{$product->product_name}}</td>
                                    <td> <img src="{{ asset('storage/'.$product->img )}}" height=" 100px" width="100px">
                                    </td>
                                    <td>{{$product->product_description}}</td>
                                    <td>{{$product->created_at->diffForHumans()}}</td>
                                    <td>
                                        <a class="btn btn-info btn-xs" href="{{route('products.edit', $product->id)}}">
                                            Edit Product
                                        </a>

                                        <form action="{{route('products.destroy', $product->id)}}" id="{{$product->id}}"
                                            method="post">
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}

                                            <button type="submit" class="btn btn-danger btn-xs delete"
                                                data-target="{{$product->id}}">Delete Product
                                            </button>

                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
