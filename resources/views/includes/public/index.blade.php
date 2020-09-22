@extends('layouts.newApp')

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
                        <a href="{{route('single.product', $product->slug)}}" class="a-block"><img
                                src="{{asset('storage/'. $product->img)}}" style="height: 247px; width:185px"
                                class="img-responsive img-fluid" /></a>
                        <a href="{{route('single.product', $product->slug)}}">
                            <p class="product-para" style="float: none;">{{$product->product_name,}} </p>
                        </a>

                        <a href="{{route('single.product', $product->slug)}}">
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
                        <a href="{{route('single.project', $project->slug)}}" data-lightbox="example-set"
                            data-title="Solar Power and Renewable energy service website.">
                            <figure>
                                <img src="{{asset('storage/' . $project->image)}}" class="img-responsive"
                                    style="height:247px;" alt="" />
                            </figure>
                        </a>
                        <div class="info-bg" style="height: 247px">
                            <h5><a href="{{route('single.project', $project->slug)}}">{{$project->title}}</a></h5>
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
            {{$projects->links()}}

        </div>

    </div>

    <!-- Products4 block -->
</div>
<!-- form 29 block -->


@endsection
