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
            <li>Services</li>
        </ul>
    </div>
</section>
<!-- services 1-->
<section class="services-1" id="services">
    <div class="services1">
        <div class="wrapper">
            <h3 class="heading">The services we Provide</h3>
            <div class="services1-content">
                @foreach($services as $service)
                <div class="column ser-1">
                    <div class="service-info">
                        <img src="{{asset('storage/' . $service->image)}}" alt="" style="width: 50px; height:50px">
                        <div class="info">
                            {{-- <h4><a href="single.html">Wind Energy</a></h4> --}}
                            <p>{{$service->description}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
                {{-- <div class="column ser-1">
                    <div class="service-info">
                        <span class="fa fa-power-off"></span>
                        <div class="info">
                            <h4><a href="single.html">Renewable Energy</a></h4>
                            <p>Aliquam blandit vel sapien eget aliquam. Phasellus eget volutpat et, libero
                                justo pulvinar et.</p>
                        </div>
                    </div>
                </div>
                <div class="column ser-1">
                    <div class="service-info">
                        <span class="fa fa-wrench"></span>
                        <div class="info">
                            <h4><a href="single.html">Solar Energy</a></h4>
                            <p>Aliquam blandit vel sapien eget aliquam. Phasellus eget volutpat et, libero
                                justo pulvinar et.</p>
                        </div>
                    </div>
                </div>
                <div class="column ser-1">
                    <div class="service-info">
                        <span class="fa fa-leaf"></span>
                        <div class="info">
                            <h4><a href="single.html">Green Technology</a></h4>
                            <p>Aliquam blandit vel sapien eget aliquam. Phasellus eget volutpat et, libero
                                justo pulvinar et.</p>
                        </div>
                    </div>
                </div>
                <div class="column ser-1">
                    <div class="service-info">
                        <span class="fa fa-thumbs-up"></span>
                        <div class="info">
                            <h4><a href="single.html">Residential Panels</a></h4>
                            <p>Aliquam blandit vel sapien eget aliquam. Phasellus eget volutpat et, libero
                                justo pulvinar et.</p>
                        </div>
                    </div>
                </div>
                <div class="column ser-1">
                    <div class="service-info">
                        <span class="fa fa-lightbulb-o"></span>
                        <div class="info">
                            <h4><a href="single.html">Energy Saving</a></h4>
                            <p>Aliquam blandit vel sapien eget aliquam. Phasellus eget volutpat et, libero
                                justo pulvinar et.</p>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</section>
<!-- //services 1 -->

<div class="display-ad" style="margin: 8px auto; display: block; text-align:center;">
    <!---728x90--->

</div>
{{-- <section class="w3l-content-with-photo-6">
    <!-- /content-with-photo -->
    <div class="wrapper content-with-photo">
        <div class="float-lt photo-inn">
            <h4>Start Your Business Now</h4>
            <p>Aliquam blandit vel sapien eget aliquam. Phasellus eget volutpat et, libero justo
                pulvinar et. Lorem ipsum dolor sit amet,Ea consequuntur .Ea consequuntur illum
                facere aperiam sequi optio elit.</p>
            <div class="content-w-grids">
                <div class="sub-grid">
                    <h5>Wind Turbines </h5>
                    <p>Dolor sed amet illum ut facere sed aperiam sequi optio consectetur.</p>
                </div>
                <div class="sub-grid">
                    <h5>Green equipment</h5>
                    <p>Aperiam sequi init consequuntur illum, libero justo pulvinar et.</p>
                </div>
            </div>
            <a href="#read" class="read more">Read More</a>
        </div>
        <div class="float-rt photo-img">
            <img src="assets/images/start.jpg" class="img-responsive" alt="">
        </div>

    </div>

    <!-- /content-with-photo -->
</section>
<section class="content-16">
    <!-- /content-16 -->
    <div class="content-16-main">
        <div class="wrapper">
            <div class="grid">
                <div class="column">
                    <h3><a href="single.html">Types of green energy</a></h3>
                    <img src="assets/images/green.jpg" class="img-responsive" alt="" />
                    <p>Praesent vitae erat nunc. Sed lectus non orci aliquam. lorem
                        eros, sit amet sapien sit amet, dolor et varius justo. In vitae dolor.</p>
                </div>
                <div class="column">
                    <h3><a href="single.html">Energy Saving</a></h3>
                    <img src="assets/images/turbine.jpg" class="img-responsive" alt="" />
                    <p>Praesent vitae erat nunc. Sed lectus non orci aliquam. lorem
                        eros, sit amet sapien sit amet, dolor et varius justo. In vitae dolor.</p>
                </div>
                <div class="column">
                    <h3><a href="single.html">Almost 90% of new Power</a></h3>
                    <img src="assets/images/power.jpg" class="img-responsive" alt="" />
                    <p>Praesent vitae erat nunc. Sed lectus non orci aliquam. lorem
                        eros, sit amet sapien sit amet, dolor et varius justo. In vitae dolor.</p>
                </div>

            </div>
        </div>
    </div>
</section> --}}
<!-- //content-16 -->

<!-- cover1 -->
{{-- <section class="w3l-covers-1">
    <div class="cover">
        <div class="wrapper">
            <div class="cover-content">
                <h3>Go Solar & Save 10-30% on Your Energy Rate</h3>
                <a href="pricing.html" class="read-more black btn">Choose a plan</a>
            </div>
        </div>
    </div>
</section> --}}
<!-- //cover1 -->

@endsection
