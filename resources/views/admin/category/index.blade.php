@extends('layouts.admin')

@section('content')

<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Category Management</h4>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        Articles
                        <a href="{{route('categories.create')}}"
                            class="btn btn-primary btn-sm float-right text-white">Create
                            a Category</a>
                    </div>
                </div>
                <div class="card-body">
                    {{-- @include('includes.admin.alert') --}}
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Category Name</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Date Created</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                <tr>
                                    <td>
                                        {{$loop->iteration}}

                                    </td>
                                    <td>{{$category->category_name}}</td>
                                    <td> <img src="{{ asset('storage/'.$category->image )}}" height=" 100px"
                                            width="100px">
                                    </td>
                                    <td>{{$category->created_at->diffForHumans()}}</td>
                                    <td>
                                        <a class="btn btn-info btn-xs"
                                            href="{{route('categories.edit', $category->id)}}">
                                            Edit Category
                                        </a>

                                        <form action="{{route('categories.destroy', $category->id)}}"
                                            id="{{$category->id}}" method="post">
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}

                                            <button type="submit" class="btn btn-danger btn-xs delete"
                                                data-target="{{$category->id}}">Delete Category
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
