@extends('main.layouts.main')



@section('content')

    @include('main.includes.breadcrumb', ['page_name' => $product->name])

    <!-- Main Container -->
    <section class="main-container col1-layout">
        <div class="main">
            <div class="container">
                <div class="row">
                    <div class="col-main">
                        <div class="container">
                            <div class="row">
                                <div class="product-view">
                                    <div class="product-essential">
                                        <form action="#" method="post" id="product_addtocart_form">
                                            <input name="form_key" value="6UbXroakyQlbfQzK" type="hidden" />
                                            @if($product->ProductImage->count() > 0)
                                            <div class="product-img-box col-lg-5 col-sm-6 col-xs-12">
                                                <div class="new-label new-top-left">New</div>
                                                <div class="product-image">
                                                    <div class="product-full">
                                                        <img id="product-zoom" src="{{ $product->ProductImage[0]->image_link }}"
                                                            data-zoom-image="{{ $product->ProductImage[0]->image_link }}"
                                                            alt="product-image" />
                                                    </div>
                                                    <div class="more-views">
                                                        <div class="slider-items-products">
                                                            <div id="gallery_01"
                                                                class="product-flexslider hidden-buttons product-img-thumb">
                                                                <div class="slider-items slider-width-col4 block-content">
                                                                    @foreach ($product->ProductImage as $item)
                                                                        <div class="more-views-items">
                                                                            <a href="#"
                                                                                data-image="{{ $item->image_link }}"
                                                                                data-zoom-image="{{ $item->image_link }}">
                                                                                <img id="product-zoom"
                                                                                    src="{{ $item->image_link }}"
                                                                                    alt="product-image" />
                                                                            </a>
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end: more-images -->
                                            </div>
                                            @endif
                                            <div class="product-shop col-lg-7 col-sm-6 col-xs-12">

                                                <div class="add-to-box">
                                                    <div class="add-to-cart">
                                                        <button
                                                            class="button btn-cart" title="Add to Cart" type="button">
                                                            Enquire Now
                                                        </button>
                                                        @if($product->catalogue)
                                                        <button
                                                            class="button btn-cart" title="Add to Cart" type="button">
                                                            Download Catalogue
                                                        </button>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="short-description">
                                                    {!!$product->description!!}
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @if(count($popular_products) > 0)
    <div class="pro_details">
        <div class="bestsell-pro">
            <div class="slider-items-products">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="bestsell-block">
                                <p class="h2 products-section-title">
                                    <span>Popular Products</span>
                                </p>
                                <div id="bestsell-slider" class="product-flexslider hidden-buttons">
                                    <div class="slider-items slider-width-col4 products-grid block-content">
                                        @foreach ($popular_products as $item)
                                        <div class="item">
                                            <div class="item-inner">
                                                <div class="productborder">
                                                    @if($item->ProductImage->count() > 0)
                                                    <div class="item-img">
                                                        <div class="item-img-info">
                                                            <a class="product-image" title="Sample"
                                                                href="{{route('prodcuct_detail.get', $item->id)}}">
                                                                <img alt="Sample" src="{{ $item->ProductImage[0]->image_link }}" />
                                                            </a>
                                                        </div>
                                                    </div>
                                                    @endif
                                                    <div class="right-block">
                                                        <div class="item-info">
                                                            <div class="info-inner">
                                                                <div class="item-title">
                                                                    <a title="Bluetooth Smart Watch"
                                                                        href="{{route('prodcuct_detail.get', $item->id)}}">{{$item->name}}</a>
                                                                </div>
                                                                <div class="item-content">
                                                                    <p class="product-manufacturer">
                                                                        {{$item->Category->name}}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Item -->
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    <!-- Main Container End -->

@stop


@section('js')
<script type="text/javascript" src="{{ asset('assets/js/jquery.flexslider.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/cloud-zoom.js') }}"></script>
@stop
