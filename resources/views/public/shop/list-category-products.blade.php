@extends('layouts.public.app')
@section('content')
    <div class="shop_sidebar_area">

        <!-- ##### Single Widget ##### -->
        <div class="widget catagory mb-50">
            <!-- Widget Title -->
            <h6 class="widget-title mb-30">Catagories</h6>

            <!--  Catagories  -->
            <div class="catagories-menu">
                <ul>
                        <li class="active"><a href="#">Chairs</a></li>
                    @foreach($categories as $category)
                        <li><a href="/shop/category/{{$category->slug}}">{{$category->category}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="amado_product_area section-padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="product-topbar d-xl-flex align-items-end justify-content-between">
                        <!-- Total Products -->
                        <div class="total-products">
                            <p>Showing 1-8 0f 25</p>
                            <div class="view d-flex">
                                <a href="#"><i class="fa fa-th-large" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <!-- Sorting -->
                        <div class="product-sorting d-flex">
                            <div class="sort-by-date d-flex align-items-center mr-15">
                                <p>Sort by</p>
                                <form action="#" method="get">
                                    <select name="select" id="sortBydate" style="display: none;">
                                        <option value="value">Date</option>
                                        <option value="value">Newest</option>
                                        <option value="value">Popular</option>
                                    </select>
                                    <div class="nice-select" tabindex="0"><span class="current">Newest</span>
                                        <ul class="list">
                                            <li data-value="value" class="option focus">Date</li>
                                            <li data-value="value" class="option selected">Newest</li>
                                            <li data-value="value" class="option">Popular</li>
                                        </ul>
                                    </div>
                                </form>
                            </div>
                            <div class="view-product d-flex align-items-center">
                                <p>View</p>
                                <form action="#" method="get">
                                    <select name="select" id="viewProduct" style="display: none;">
                                        <option value="value">12</option>
                                        <option value="value">24</option>
                                        <option value="value">48</option>
                                        <option value="value">96</option>
                                    </select>
                                    <div class="nice-select" tabindex="0"><span class="current">48</span>
                                        <ul class="list">
                                            <li data-value="value" class="option focus">12</li>
                                            <li data-value="value" class="option">24</li>
                                            <li data-value="value" class="option selected">48</li>
                                            <li data-value="value" class="option">96</li>
                                        </ul>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
            @foreach($products as $product)
                <!-- Single Product Area -->
                    <div class="col-12 col-sm-6 col-md-12 col-xl-6">
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                {{--                                <img src="{{$product['img_src']}}" alt="">--}}
                                <img src="{{$product['img_src']}}" alt="">
                                {{-- <!-- Hover Thumb -->
                                 <img class="hover-img" src="" alt="">--}}
                            </div>

                            <!-- Product Description -->
                            <div class="product-description d-flex align-items-center justify-content-between">
                                <!-- Product Meta Data -->
                                <div class="product-meta-data">
                                    <div class="line"></div>
                                    <p class="product-price">{{$product['price']}}</p>
                                    <a href="/shop/product/{{$product['slug']}}">
                                        <h6>{{$product['name']}}</h6>
                                    </a>
                                </div>
                                <!-- Ratings & Cart -->
                                <div class="ratings-cart text-right">
                                    <div class="ratings">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <div class="cart">
                                        <a href="cart.html" data-toggle="tooltip" data-placement="left" title=""
                                           data-original-title="Add to Cart"><img src="img/core-img/cart.png"
                                                                                  alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Pagination -->
                    <nav aria-label="navigation">
                        <ul class="pagination justify-content-end mt-50">
                            <li class="page-item active"><a class="page-link" href="#">01.</a></li>
                            <li class="page-item"><a class="page-link" href="#">02.</a></li>
                            <li class="page-item"><a class="page-link" href="#">03.</a></li>
                            <li class="page-item"><a class="page-link" href="#">04.</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
