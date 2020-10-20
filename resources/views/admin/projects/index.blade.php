@extends('layouts.admin')

@section('content')

<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Projects Management</h4>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        Articles
                        <a href="{{route('Project.create')}}"
                            class="btn btn-primary btn-sm float-right text-white">Create
                            a Project</a>
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
                                    <th scope="col">Project Description</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Date Created</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($projects as $project)
                                <tr>
                                    <td>
                                        {{$loop->iteration}}

                                    </td>
                                    <td>{{$project->title}}</td>
                                    <td>{{$project->description}}</td>
                                    <td> <img src="{{ asset('storage/'.$project->image )}}" height=" 100px"
                                            width="100px">
                                    </td>
                                    <td>{{$project->created_at->diffForHumans()}}</td>
                                    <td>
                                        <a class="btn btn-info btn-xs" href="{{route('Project.edit', $project->id)}}">
                                            Edit Project
                                        </a>

                                        <form action="{{route('Project.destroy', $project->id)}}" id="{{$project->id}}"
                                            method="post">
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}
                                            <button type="submit" class="btn btn-danger btn-xs delete"
                                                data-target="{{$project->id}}">Delete Project
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
