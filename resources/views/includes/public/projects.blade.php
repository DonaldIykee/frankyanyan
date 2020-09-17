@extends('layouts.app')

@section('content')
<div class="display-ad" style="margin: 10px auto; display: block; text-align:center;">
    <!---728x90--->

</div>

<div class="inner-banner">

</div>

<section class="w3l-breadcrumns">
    <div class="wrapper">
        <ul>
            <li><a href="{{route('home')}}">Home</a> /</li>
            <li>Projects</li>
        </ul>
    </div>
</section>

<div class="products-4">
    <!-- Products4 block -->
    <div id="products4-block" class="text-center">
        <div class="wrapper">
            <h3 class="heading">Our Projects</h3>
            <input id="tab1" type="radio" name="tabs" checked>
            {{-- <label class="tabtle" for="tab1">All Projects</label> --}}

            <input id="tab2" type="radio" name="tabs">
            {{-- <label class="tabtle" for="tab2">Solar Energy</label> --}}

            <input id="tab3" type="radio" name="tabs">
            {{-- <label class="tabtle" for="tab3">Installation</label> --}}

            <input id="tab4" type="radio" name="tabs">
            {{-- <label class="tabtle" for="tab4">Saving</label> --}}

            <section id="content1" class="tab-content text-left">
                <div class="d-grid grid-col-3">
                    @foreach ($projects as $project)


                    <div class="product">
                        <a href="{{route('single.project', $project->id)}}" data-lightbox="example-set"
                            data-title="Solar Power and Renewable energy service website.">
                            <figure>
                                <img src="{{asset('storage/' . $project->image)}}" class="img-responsive" alt=""
                                    style="height:245px;" />
                            </figure>
                        </a>
                        <div class="info-bg">
                            <h5><a href="{{route('single.project', $project->id)}}">{{$project->title}}</a></h5>
                            {{-- <span class="price">Safety</span> --}}
                            <p>{{$project->Description}}</p>
                        </div>
                    </div>
                    @endforeach

                </div>
            </section>


        </div>
    </div>
    <!-- Products4 block -->
</div>

@endsection
