@extends('layouts.admin')

@section('content')

<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Members Management</h4>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        Articles
                        <a href="{{route('teamMembers.create')}}"
                            class="btn btn-primary btn-sm float-right text-white">Add
                            Team member</a>
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
                                    <th scope="col">Member name</th>
                                    <th scope="col">Member Position</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Date Created</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($members as $member)
                                <tr>
                                    <td>
                                        {{$loop->iteration}}

                                    </td>
                                    <td>{{$member->name}}</td>
                                    <td>{{$member->position}}</td>
                                    <td> <img src="{{ asset('storage/'.$member->image )}}" height=" 100px"
                                            width="100px">
                                    </td>

                                    <td>{{$member->created_at->diffForHumans()}}</td>
                                    <td>
                                        <a class="btn btn-info btn-xs"
                                            href="{{route('teamMembers.edit', $member->id)}}">
                                            Edit Member
                                        </a>

                                        <form action="{{route('teamMembers.destroy', $member->id)}}"
                                            id="{{$member->id}}" method="post">
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}

                                            <button type="submit" class="btn btn-danger btn-xs delete"
                                                data-target="{{$member->id}}">Delete Member
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
