@extends('layouts.public.app')

@section('content')
    <!-- Product Catagories Area Start -->
    <div class="products-catagories-area clearfix">
        <div class="amado-pro-catagory clearfix">
        @foreach($categories as $category)
            <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                    <a href="/shop/category/{{$category->slug}}">
                        <img src="{{asset("/imgs/$category->img_src")}}" alt="">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <p>From $180</p>
                            <h4>{{$category->category}}</h4>
                        </div>
                    </a>
                </div>
        @endforeach

        </div>
    </div>
    <!-- Product Catagories Area End -->
@endsection
