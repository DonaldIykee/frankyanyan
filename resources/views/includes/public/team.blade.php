@extends('layouts.newApp')
@section('content')
<div class="display-ad" style="margin: 8px auto; display: block; text-align:center;">
    <!---728x90--->

</div>
<div class="inner-banner">

</div>
<section class="w3l-breadcrumns">
    <div class="wrapper">
        <ul>
            <li><a href="{{route('home.page')}}">Home</a> /</li>
            <li>Team</li>
        </ul>
    </div>
</section>
<section class="w3l-team-13">
    <!-- text-5 -->
    <div class="teams teams-2">
        <div class="wrapper">
            <h3 class="heading">Professional Team</h3>
            <div class="text-txt text-txt2">
                <div class="left-side">
                    @foreach($teams as $team)
                    <div class="image-one">
                        <a href="team-single.html">
                            <img src="{{asset('storage/' . $team->image)}}" class="arrow-png img-responsive"
                                style="height: 180px" />
                            <h4>{{$team->name}}</h4>
                            <p>{{$team->position}}</p>
                            {{-- <div class="buttons-teams2">
                                <a href="#team"><span class="fa fa-facebook-square" aria-hidden="true"></span></a>
                                <a href="#team"><span class="fa fa-twitter-square" aria-hidden="true"></span></a>
                                <a href="#team"><span class="fa fa-google-plus-square" aria-hidden="true"></span></a>
                            </div> --}}
                        </a>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>

<div class="display-ad" style="margin: 8px auto; display: block; text-align:center;">
    <!---728x90--->

</div>
@endsection
