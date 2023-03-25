@extends('main.layouts.main')



@section('content')

    @include('main.includes.breadcrumb', ['page_name' => 'Full Width Bar'])

    <!-- Main Container -->
    <div class="main-container col2-left-layout bounceInUp animated">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-12">

                    <div class="">
                        <div class="">
                            <article class="col-main">

                                <div class="category-products">
                                    <ul class="products-grid">
                                        <li class="item col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <div class="item-inner">
                                                <div class="productborder">
                                                    <div class="item-img">
                                                        <div class="item-img-info"> <a class="product_image image-wrapper"
                                                                href="product_detail.html"> <img class="front_image"
                                                                    src="{{ asset('assets/images/product1.jpg') }}"> </a>
                                                            <!-- <div class="quickview top-right"> <a class="link-quickview" href="quick_view.html"> <i class="fa fa-search" aria-hidden="true"></i></a> </div> -->
                                                            <div class="item-box-hover">
                                                                <div class="box-inner">
                                                                    <div class="add_cart">
                                                                        <button class="button btn-cart"
                                                                            type="button"><span>Add to Cart</span></button>
                                                                    </div>
                                                                    <div class="product-detail-bnt"><a
                                                                            class="button detail-bnt"><span>Quick
                                                                                View</span></a></div>
                                                                    <div class="actions"><span class="add-to-links"><a
                                                                                href="#" class="link-wishlist"
                                                                                title="Add to Wishlist"><span>Add to
                                                                                    Wishlist</span></a> <a href="#"
                                                                                class="link-compare add_to_compare"
                                                                                title="Add to Compare"><span>Add to
                                                                                    Compare</span></a></span> </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="right-block">
                                                        <div class="item-info">
                                                            <div class="info-inner">
                                                                <div class="item-title"> <a title="Bluetooth Smart Watch"
                                                                        href="product_detail.html">Natural Beauty
                                                                        Products</a> </div>
                                                                <div class="item-content">
                                                                    <p class="product-manufacturer">Cosmetics</p>
                                                                </div>
                                                                <div class="item-price">
                                                                    <div class="price-box"> <span class="regular-price">
                                                                            <span class="price">$225.00</span> </span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <div class="item-inner">
                                                <div class="productborder">
                                                    <div class="item-img">
                                                        <div class="item-img-info"> <a class="product_image image-wrapper"
                                                                href="product_detail.html"> <img class="front_image"
                                                                    src="{{ asset('assets/images/product2.jpg') }}">
                                                            </a>
                                                            <!-- <div class="quickview top-right"> <a class="link-quickview" href="quick_view.html"><i class="fa fa-search" aria-hidden="true"></i></a> </div> -->
                                                            <div class="item-box-hover">
                                                                <div class="box-inner">
                                                                    <div class="add_cart">
                                                                        <button class="button btn-cart"
                                                                            type="button"><span>Add to
                                                                                Cart</span></button>
                                                                    </div>
                                                                    <div class="product-detail-bnt"><a
                                                                            class="button detail-bnt"><span>Quick
                                                                                View</span></a></div>
                                                                    <div class="actions"><span class="add-to-links"><a
                                                                                href="#" class="link-wishlist"
                                                                                title="Add to Wishlist"><span>Add to
                                                                                    Wishlist</span></a> <a href="#"
                                                                                class="link-compare add_to_compare"
                                                                                title="Add to Compare"><span>Add to
                                                                                    Compare</span></a></span> </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="right-block">
                                                        <div class="item-info">
                                                            <div class="info-inner">
                                                                <div class="item-title"> <a title="Bluetooth Smart Watch"
                                                                        href="product_detail.html">Natural Beauty
                                                                        Products</a> </div>
                                                                <div class="item-content">
                                                                    <p class="product-manufacturer">Cosmetics</p>
                                                                </div>
                                                                <div class="item-price">
                                                                    <div class="price-box"> <span class="regular-price">
                                                                            <span class="price">$225.00</span> </span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <div class="item-inner">
                                                <div class="productborder">
                                                    <div class="item-img">
                                                        <div class="item-img-info"> <a class="product_image image-wrapper"
                                                                href="product_detail.html"> <img class="front_image"
                                                                    src="{{ asset('assets/images/product3.jpg') }}">
                                                            </a>
                                                            <!-- <div class="quickview top-right"> <a class="link-quickview" href="quick_view.html"><i class="fa fa-search" aria-hidden="true"></i></a> </div> -->
                                                            <div class="item-box-hover">
                                                                <div class="box-inner">
                                                                    <div class="add_cart">
                                                                        <button class="button btn-cart"
                                                                            type="button"><span>Add to
                                                                                Cart</span></button>
                                                                    </div>
                                                                    <div class="product-detail-bnt"><a
                                                                            class="button detail-bnt"><span>Quick
                                                                                View</span></a></div>
                                                                    <div class="actions"><span class="add-to-links"><a
                                                                                href="#" class="link-wishlist"
                                                                                title="Add to Wishlist"><span>Add to
                                                                                    Wishlist</span></a> <a href="#"
                                                                                class="link-compare add_to_compare"
                                                                                title="Add to Compare"><span>Add to
                                                                                    Compare</span></a></span> </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="right-block">
                                                        <div class="item-info">
                                                            <div class="info-inner">
                                                                <div class="item-title"> <a title="Bluetooth Smart Watch"
                                                                        href="product_detail.html">Natural Beauty
                                                                        Products</a> </div>
                                                                <div class="item-content">
                                                                    <p class="product-manufacturer">Cosmetics</p>
                                                                </div>
                                                                <div class="item-price">
                                                                    <div class="price-box"> <span class="regular-price">
                                                                            <span class="price">$225.00</span> </span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <div class="item-inner">
                                                <div class="productborder">
                                                    <div class="item-img">
                                                        <div class="item-img-info"> <a class="product_image image-wrapper"
                                                                href="product_detail.html"> <img class="front_image"
                                                                    src="{{ asset('assets/images/product4.jpg') }}">
                                                            </a>
                                                            <!-- <div class="quickview top-right"> <a class="link-quickview" href="quick_view.html"><i class="fa fa-search" aria-hidden="true"></i></a> </div> -->
                                                            <div class="item-box-hover">
                                                                <div class="box-inner">
                                                                    <div class="add_cart">
                                                                        <button class="button btn-cart"
                                                                            type="button"><span>Add to
                                                                                Cart</span></button>
                                                                    </div>
                                                                    <div class="product-detail-bnt"><a
                                                                            class="button detail-bnt"><span>Quick
                                                                                View</span></a></div>
                                                                    <div class="actions"><span class="add-to-links"><a
                                                                                href="#" class="link-wishlist"
                                                                                title="Add to Wishlist"><span>Add to
                                                                                    Wishlist</span></a> <a href="#"
                                                                                class="link-compare add_to_compare"
                                                                                title="Add to Compare"><span>Add to
                                                                                    Compare</span></a></span> </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="right-block">
                                                        <div class="item-info">
                                                            <div class="info-inner">
                                                                <div class="item-title"> <a title="Bluetooth Smart Watch"
                                                                        href="product_detail.html">Natural Beauty
                                                                        Products</a> </div>
                                                                <div class="item-content">
                                                                    <p class="product-manufacturer">Cosmetics</p>
                                                                </div>
                                                                <div class="item-price">
                                                                    <div class="price-box"> <span class="regular-price">
                                                                            <span class="price">$225.00</span> </span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <div class="item-inner">
                                                <div class="productborder">
                                                    <div class="item-img">
                                                        <div class="item-img-info"> <a class="product_image image-wrapper"
                                                                href="product_detail.html"> <img class="front_image"
                                                                    src="{{ asset('assets/images/product5.jpg') }}">
                                                            </a>
                                                            <!-- <div class="quickview top-right"> <a class="link-quickview" href="quick_view.html"><i class="fa fa-search" aria-hidden="true"></i></a> </div> -->
                                                            <div class="item-box-hover">
                                                                <div class="box-inner">
                                                                    <div class="add_cart">
                                                                        <button class="button btn-cart"
                                                                            type="button"><span>Add to
                                                                                Cart</span></button>
                                                                    </div>
                                                                    <div class="product-detail-bnt"><a
                                                                            class="button detail-bnt"><span>Quick
                                                                                View</span></a></div>
                                                                    <div class="actions"><span class="add-to-links"><a
                                                                                href="#" class="link-wishlist"
                                                                                title="Add to Wishlist"><span>Add to
                                                                                    Wishlist</span></a> <a href="#"
                                                                                class="link-compare add_to_compare"
                                                                                title="Add to Compare"><span>Add to
                                                                                    Compare</span></a></span> </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="right-block">
                                                        <div class="item-info">
                                                            <div class="info-inner">
                                                                <div class="item-title"> <a title="Bluetooth Smart Watch"
                                                                        href="product_detail.html">Natural Beauty
                                                                        Products</a> </div>
                                                                <div class="item-content">
                                                                    <p class="product-manufacturer">Cosmetics</p>
                                                                </div>
                                                                <div class="item-price">
                                                                    <div class="price-box"> <span class="regular-price">
                                                                            <span class="price">$225.00</span> </span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <div class="item-inner">
                                                <div class="productborder">
                                                    <div class="item-img">
                                                        <div class="item-img-info"> <a class="product_image image-wrapper"
                                                                href="product_detail.html"> <img class="front_image"
                                                                    src="{{ asset('assets/images/product6.jpg') }}">
                                                            </a>
                                                            <!-- <div class="quickview top-right"> <a class="link-quickview" href="quick_view.html"><i class="fa fa-search" aria-hidden="true"></i></a> </div> -->
                                                            <div class="item-box-hover">
                                                                <div class="box-inner">
                                                                    <div class="add_cart">
                                                                        <button class="button btn-cart"
                                                                            type="button"><span>Add to
                                                                                Cart</span></button>
                                                                    </div>
                                                                    <div class="product-detail-bnt"><a
                                                                            class="button detail-bnt"><span>Quick
                                                                                View</span></a></div>
                                                                    <div class="actions"><span class="add-to-links"><a
                                                                                href="#" class="link-wishlist"
                                                                                title="Add to Wishlist"><span>Add to
                                                                                    Wishlist</span></a> <a href="#"
                                                                                class="link-compare add_to_compare"
                                                                                title="Add to Compare"><span>Add to
                                                                                    Compare</span></a></span> </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="right-block">
                                                        <div class="item-info">
                                                            <div class="info-inner">
                                                                <div class="item-title"> <a title="Bluetooth Smart Watch"
                                                                        href="product_detail.html">Natural Beauty
                                                                        Products</a> </div>
                                                                <div class="item-content">
                                                                    <p class="product-manufacturer">Cosmetics</p>
                                                                </div>
                                                                <div class="item-price">
                                                                    <div class="price-box"> <span class="regular-price">
                                                                            <span class="price">$225.00</span> </span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <div class="item-inner">
                                                <div class="productborder">
                                                    <div class="item-img">
                                                        <div class="item-img-info"> <a class="product_image image-wrapper"
                                                                href="product_detail.html"> <img class="front_image"
                                                                    src="{{ asset('assets/images/product7.jpg') }}">
                                                            </a>
                                                            <!-- <div class="quickview top-right"> <a class="link-quickview" href="quick_view.html"><i class="fa fa-search" aria-hidden="true"></i></a> </div> -->
                                                            <div class="item-box-hover">
                                                                <div class="box-inner">
                                                                    <div class="add_cart">
                                                                        <button class="button btn-cart"
                                                                            type="button"><span>Add to
                                                                                Cart</span></button>
                                                                    </div>
                                                                    <div class="product-detail-bnt"><a
                                                                            class="button detail-bnt"><span>Quick
                                                                                View</span></a></div>
                                                                    <div class="actions"><span class="add-to-links"><a
                                                                                href="#" class="link-wishlist"
                                                                                title="Add to Wishlist"><span>Add to
                                                                                    Wishlist</span></a> <a href="#"
                                                                                class="link-compare add_to_compare"
                                                                                title="Add to Compare"><span>Add to
                                                                                    Compare</span></a></span> </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="right-block">
                                                        <div class="item-info">
                                                            <div class="info-inner">
                                                                <div class="item-title"> <a title="Bluetooth Smart Watch"
                                                                        href="product_detail.html">Natural Beauty
                                                                        Products</a> </div>
                                                                <div class="item-content">
                                                                    <p class="product-manufacturer">Cosmetics</p>
                                                                </div>
                                                                <div class="item-price">
                                                                    <div class="price-box"> <span class="regular-price">
                                                                            <span class="price">$225.00</span> </span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <div class="item-inner">
                                                <div class="productborder">
                                                    <div class="item-img">
                                                        <div class="item-img-info"> <a class="product_image image-wrapper"
                                                                href="product_detail.html"> <img class="front_image"
                                                                    src="{{ asset('assets/images/product8.jpg') }}">
                                                            </a>
                                                            <!-- <div class="quickview top-right"> <a class="link-quickview" href="quick_view.html"> <i class="fa fa-search" aria-hidden="true"></i></a> </div> -->
                                                            <div class="item-box-hover">
                                                                <div class="box-inner">
                                                                    <div class="add_cart">
                                                                        <button class="button btn-cart"
                                                                            type="button"><span>Add to
                                                                                Cart</span></button>
                                                                    </div>
                                                                    <div class="product-detail-bnt"><a
                                                                            class="button detail-bnt"><span>Quick
                                                                                View</span></a></div>
                                                                    <div class="actions"><span class="add-to-links"><a
                                                                                href="#" class="link-wishlist"
                                                                                title="Add to Wishlist"><span>Add to
                                                                                    Wishlist</span></a> <a href="#"
                                                                                class="link-compare add_to_compare"
                                                                                title="Add to Compare"><span>Add to
                                                                                    Compare</span></a></span> </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="right-block">
                                                        <div class="item-info">
                                                            <div class="info-inner">
                                                                <div class="item-title"> <a title="Bluetooth Smart Watch"
                                                                        href="product_detail.html">Natural Beauty
                                                                        Products</a> </div>
                                                                <div class="item-content">
                                                                    <p class="product-manufacturer">Cosmetics</p>
                                                                </div>
                                                                <div class="item-price">
                                                                    <div class="price-box"> <span class="regular-price">
                                                                            <span class="price">$225.00</span> </span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <div class="item-inner">
                                                <div class="productborder">
                                                    <div class="item-img">
                                                        <div class="item-img-info"> <a class="product_image image-wrapper"
                                                                href="product_detail.html"> <img class="front_image"
                                                                    src="{{ asset('assets/images/product9.jpg') }}">
                                                            </a>
                                                            <!-- <div class="quickview top-right"> <a class="link-quickview" href="quick_view.html"><i class="fa fa-search" aria-hidden="true"></i></a> </div> -->
                                                            <div class="item-box-hover">
                                                                <div class="box-inner">
                                                                    <div class="add_cart">
                                                                        <button class="button btn-cart"
                                                                            type="button"><span>Add to
                                                                                Cart</span></button>
                                                                    </div>
                                                                    <div class="product-detail-bnt"><a
                                                                            class="button detail-bnt"><span>Quick
                                                                                View</span></a></div>
                                                                    <div class="actions"><span class="add-to-links"><a
                                                                                href="#" class="link-wishlist"
                                                                                title="Add to Wishlist"><span>Add to
                                                                                    Wishlist</span></a> <a href="#"
                                                                                class="link-compare add_to_compare"
                                                                                title="Add to Compare"><span>Add to
                                                                                    Compare</span></a></span> </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="right-block">
                                                        <div class="item-info">
                                                            <div class="info-inner">
                                                                <div class="item-title"> <a title="Bluetooth Smart Watch"
                                                                        href="product_detail.html">Natural Beauty
                                                                        Products</a> </div>
                                                                <div class="item-content">
                                                                    <p class="product-manufacturer">Cosmetics</p>
                                                                </div>
                                                                <div class="item-price">
                                                                    <div class="price-box"> <span class="regular-price">
                                                                            <span class="price">$225.00</span> </span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <div class="item-inner">
                                                <div class="productborder">
                                                    <div class="item-img">
                                                        <div class="item-img-info"> <a class="product_image image-wrapper"
                                                                href="product_detail.html"> <img class="front_image"
                                                                    src="{{ asset('assets/images/product10.jpg') }}">
                                                            </a>
                                                            <!-- <div class="quickview top-right"> <a class="link-quickview" href="quick_view.html"> <i class="fa fa-search" aria-hidden="true"></i></a> </div> -->
                                                            <div class="item-box-hover">
                                                                <div class="box-inner">
                                                                    <div class="add_cart">
                                                                        <button class="button btn-cart"
                                                                            type="button"><span>Add to
                                                                                Cart</span></button>
                                                                    </div>
                                                                    <div class="product-detail-bnt"><a
                                                                            class="button detail-bnt"><span>Quick
                                                                                View</span></a></div>
                                                                    <div class="actions"><span class="add-to-links"><a
                                                                                href="#" class="link-wishlist"
                                                                                title="Add to Wishlist"><span>Add to
                                                                                    Wishlist</span></a> <a href="#"
                                                                                class="link-compare add_to_compare"
                                                                                title="Add to Compare"><span>Add to
                                                                                    Compare</span></a></span> </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="right-block">
                                                        <div class="item-info">
                                                            <div class="info-inner">
                                                                <div class="item-title"> <a title="Bluetooth Smart Watch"
                                                                        href="product_detail.html">Natural Beauty
                                                                        Products</a> </div>
                                                                <div class="item-content">
                                                                    <p class="product-manufacturer">Cosmetics</p>
                                                                </div>
                                                                <div class="item-price">
                                                                    <div class="price-box"> <span class="regular-price">
                                                                            <span class="price">$225.00</span> </span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <div class="item-inner">
                                                <div class="productborder">
                                                    <div class="item-img">
                                                        <div class="item-img-info"> <a class="product_image image-wrapper"
                                                                href="product_detail.html"> <img class="front_image"
                                                                    src="{{ asset('assets/images/product11.jpg') }}">
                                                            </a>
                                                            <!-- <div class="quickview top-right"> <a class="link-quickview" href="quick_view.html"> <i class="fa fa-search" aria-hidden="true"></i></a> </div> -->
                                                            <div class="item-box-hover">
                                                                <div class="box-inner">
                                                                    <div class="add_cart">
                                                                        <button class="button btn-cart"
                                                                            type="button"><span>Add to
                                                                                Cart</span></button>
                                                                    </div>
                                                                    <div class="product-detail-bnt"><a
                                                                            class="button detail-bnt"><span>Quick
                                                                                View</span></a></div>
                                                                    <div class="actions"><span class="add-to-links"><a
                                                                                href="#" class="link-wishlist"
                                                                                title="Add to Wishlist"><span>Add to
                                                                                    Wishlist</span></a> <a href="#"
                                                                                class="link-compare add_to_compare"
                                                                                title="Add to Compare"><span>Add to
                                                                                    Compare</span></a></span> </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="right-block">
                                                        <div class="item-info">
                                                            <div class="info-inner">
                                                                <div class="item-title"> <a title="Bluetooth Smart Watch"
                                                                        href="product_detail.html">Natural Beauty
                                                                        Products</a> </div>
                                                                <div class="item-content">
                                                                    <p class="product-manufacturer">Cosmetics</p>
                                                                </div>
                                                                <div class="item-price">
                                                                    <div class="price-box"> <span class="regular-price">
                                                                            <span class="price">$225.00</span> </span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <div class="item-inner">
                                                <div class="productborder">
                                                    <div class="item-img">
                                                        <div class="item-img-info"> <a class="product_image image-wrapper"
                                                                href="product_detail.html"> <img class="front_image"
                                                                    src="{{ asset('assets/images/product12.jpg') }}">
                                                            </a>
                                                            <!-- <div class="quickview top-right"> <a class="link-quickview" href="quick_view.html"> <i class="fa fa-search" aria-hidden="true"></i></a> </div> -->
                                                            <div class="item-box-hover">
                                                                <div class="box-inner">
                                                                    <div class="add_cart">
                                                                        <button class="button btn-cart"
                                                                            type="button"><span>Add to
                                                                                Cart</span></button>
                                                                    </div>
                                                                    <div class="product-detail-bnt"><a
                                                                            class="button detail-bnt"><span>Quick
                                                                                View</span></a></div>
                                                                    <div class="actions"><span class="add-to-links"><a
                                                                                href="#" class="link-wishlist"
                                                                                title="Add to Wishlist"><span>Add to
                                                                                    Wishlist</span></a> <a href="#"
                                                                                class="link-compare add_to_compare"
                                                                                title="Add to Compare"><span>Add to
                                                                                    Compare</span></a></span> </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="right-block">
                                                        <div class="item-info">
                                                            <div class="info-inner">
                                                                <div class="item-title"> <a title="Bluetooth Smart Watch"
                                                                        href="product_detail.html">Natural Beauty
                                                                        Products</a> </div>
                                                                <div class="item-content">
                                                                    <p class="product-manufacturer">Cosmetics</p>
                                                                </div>
                                                                <div class="item-price">
                                                                    <div class="price-box"> <span class="regular-price">
                                                                            <span class="price">$225.00</span> </span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </article>

                            <!--	///*///======    End article  ========= //*/// -->
                            <div class="toolbar bottom">
                                <div class="pager">
                                    <div class="pages">
                                        <label>Page:</label>
                                        <ul class="pagination">
                                            <li><a href="#">«</a></li>
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">»</a></li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Container End -->

    </div>
    </div>

@stop
