@extends('layouts.admin')

@section('content')

<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Services Management</h4>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        Articles
                        <a href="{{route('services.create')}}"
                            class="btn btn-primary btn-sm float-right text-white">Create
                            a Service</a>
                    </div>
                </div>
                <div class="card-body">
                    {{-- @include('includes.admin.alert') --}}
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">service Description</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Date Created</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($services as $service)
                                <tr>
                                    <td>
                                        {{$loop->iteration}}

                                    </td>
                                    <td>{{$service->description}}</td>
                                    <td> <img src="{{ asset('storage/'.$service->image )}}" height=" 100px"
                                            width="100px">
                                    </td>
                                    <td>{{$service->created_at->diffForHumans()}}</td>
                                    <td>
                                        <a class="btn btn-info btn-xs" href="{{route('services.edit', $service->id)}}">
                                            Edit Services
                                        </a>

                                        <form action="{{route('services.destroy', $service->id)}}" id="{{$service->id}}"
                                            method="post">
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}

                                            <button type="submit" class="btn btn-danger btn-xs delete"
                                                data-target="{{$service->id}}">Delete Services
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
