@extends('layouts.app')

@section('content')
@include('includes.public.banner')
<div class="display-ad" style="margin: 8px auto; display: block; text-align:center;">
    <!---728x90--->

</div>

{{-- @include('includes.public.features') --}}

<div class="display-ad" style="margin: 8px auto; display: block; text-align:center;">
    <!---728x90--->

</div>
<section class="w3l-products-2" id="ecommerce-products">
    <div class="product">
        <div class="wrapper">
            <h3 class="heading">Recent Products</h3>
            <div class="main">
                <div class="grid grid-column-2">
                    @foreach($products as $product)
                    <div class="column1">
                        <a href="{{route('single.product', $product->id)}}" class="a-block"><img
                                src="{{asset('storage/'. $product->img)}}" style="height: 247px; width:185px"
                                class="img-responsive img-fluid" /></a>
                        <a href="{{route('single.product', $product->id)}}">
                            <p class="product-para" style="float: none;">{{$product->product_name,}} </p>
                        </a>

                        <a href="{{route('single.product', $product->id)}}">
                            <p class="paragraph">{{Str::limit($product->product_description, 20)}}</p>
                        </a>
                        <br />
                        <span>
                            <em>{{$product->created_at->diffForHumans()}}</em>
                        </span>
                    </div>

                    @endforeach

                </div>
            </div>
            {{$products->links()}}

        </div>
    </div>
</section>

<div class="display-ad" style="margin: 8px auto; display: block; text-align:center;">
    <!---728x90--->

</div>

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
                                <img src="{{asset('storage/' . $project->image)}}" class="img-responsive"
                                    style="height:247px;" alt="" />
                            </figure>
                        </a>
                        <div class="info-bg">
                            <h5><a href="{{route('single.project', $project->id)}}">{{$project->title}}</a></h5>
                            {{-- <span class="price">Safety</span> --}}
                            <p>{{$project->Description}}</p>

                            <br />

                            <span>
                                <em>{{$project->created_at->diffForHumans()}}</em>
                            </span>
                        </div>
                    </div>
                    @endforeach

                </div>
            </section>


        </div>
    </div>
    <!-- Products4 block -->
</div>
<!-- form 29 block -->
{{-- <section class="forms-29">
    <div class="form-29">
        <div class="wrapper">
            <h3 class="heading">Keep in Touch with us</h3>
            <div class="form-main-cont-29">
                <div class="content-29-form d-grid">
                    <div class="content-left">
                        <h4 class="">Call <a href="tel:+7-800-999-800">+234 8039710034</a> now to get a free
                            quote or fill out the form</h4>
                        <p>We will get back to you shortly. Thank you for contacting us.</p>
                    </div>
                    <form action="#" method="post" class="forms-29-form">
                        <input type="text" name="name" placeholder="First Name" required>
                        <input type="text" name="name" placeholder="Last Name" required>
                        <input type="number" name="phone" placeholder="Phone Number" required>
                        <input type="number" name="zipcode" placeholder="Zip Code" required>
                        <input type="email" name="email" placeholder="Your email" required>
                        <button type="submit" class="btn">Request Quote</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section> --}}

@endsection
