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
            <li>Product</li>
        </ul>
    </div>
</section>
<!-- features-photo-7 -->
<section class="features-photo-7">
    <div class="features-photo-7_sur">
        <div class="wrapper">
            <div class="features-photo-7_top">
                <div class="features-photo-7_top-right">
                    <div class="galleryContainer">
                        <div class="gallery">

                            <input type="radio" name="controls" id="c1" checked><img class="galleryImage img-responsive"
                                id="i1" src="{{asset('storage/' . $project->image)}}" class="img" alt="">

                        </div>

                    </div>
                </div>
                <div class="features-photo-7_top-left">
                    <div class="single-right-left simpleCart_shelfItem">
                        <h3>{{$project->title}}</h3>

                        <div class="product-single-w3l">
                            <p>{{$project->Description}}
                            </p>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="display-ad" style="margin: 8px auto; display: block; text-align:center;">
    <!---728x90--->

</div>


<div class="display-ad" style="margin: 8px auto; display: block; text-align:center;">
    <!---728x90--->

</div>
@endsection
