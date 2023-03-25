@extends('main.layouts.main')



@section('content')

<div id="content">
    <!-- Slider -->
    <div class="home-slider5 active-block">
        <div id="thmg-slideshow" class="thmg-slideshow">
            <div id='rev_slider_4_wrapper' class='rev_slider_wrapper fullwidthbanner-container'>
                <div id='rev_slider_4' class='rev_slider fullwidthabanner'>
                    <ul>
                        <li data-transition='random' data-slotamount='7' data-masterspeed='1000'
                            data-thumb='{{ asset('assets/images/slide-1.jpg') }}'><img src='{{ asset('assets/images/slide-1.jpg') }}' data-bgfit='cover'
                                data-bgrepeat='no-repeat' alt="banner" />

                            <div class="container">
                                <div class="content_slideshow">
                                    <div class="row">

                                        <div class="info">
                                            <div class='tp-caption ExtraLargeTitle sft  tp-resizeme '
                                                data-endspeed='500' data-speed='500' data-start='1100'
                                                data-easing='Linear.easeNone' data-splitin='none'
                                                data-splitout='none' data-elementdelay='0.1'
                                                data-endelementdelay='0.1'
                                                style='z-index:2; white-space:nowrap;'><span>Winter Sale
                                                </span> </div>
                                            <div class='tp-caption LargeTitle sfl  tp-resizeme '
                                                data-endspeed='500' data-speed='500' data-start='1300'
                                                data-easing='Linear.easeNone' data-splitin='none'
                                                data-splitout='none' data-elementdelay='0.1'
                                                data-endelementdelay='0.1'
                                                style='z-index:3; white-space:nowrap;'><span
                                                    style="display:block">Modern Classic</span> incredible
                                            </div>
                                            <div class='tp-caption Title sft  tp-resizeme '
                                                data-endspeed='500' data-speed='500' data-start='1450'
                                                data-easing='Power2.easeInOut' data-splitin='none'
                                                data-splitout='none' data-elementdelay='0.1'
                                                data-endelementdelay='0.1'
                                                style='z-index:4; white-space:nowrap;'>Get 40% OFF on selected
                                                items.</div>
                                            <div class='tp-caption sfb  tp-resizeme ' data-endspeed='500'
                                                data-speed='500' data-start='1500'
                                                data-easing='Linear.easeNone' data-splitin='none'
                                                data-splitout='none' data-elementdelay='0.1'
                                                data-endelementdelay='0.1'
                                                style='z-index:4; white-space:nowrap;'><a href='#'
                                                    class="buy-btn">Shop Now</a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </li>
                        <li data-transition='random' data-slotamount='7' data-masterspeed='1000'
                            data-thumb='{{ asset('assets/images/slide-2.jpg') }}'><img src='{{ asset('assets/images/slide-2.jpg') }}' data-bgfit='cover'
                                data-bgrepeat='no-repeat' alt="banner" />
                            <div class="container">
                                <div class="content_slideshow">
                                    <div class="row">

                                        <div class="info">
                                            <div class='tp-caption ExtraLargeTitle sft  tp-resizeme '
                                                data-endspeed='500' data-speed='500' data-start='1100'
                                                data-easing='Linear.easeNone' data-splitin='none'
                                                data-splitout='none' data-elementdelay='0.1'
                                                data-endelementdelay='0.1'
                                                style='z-index:2; white-space:nowrap;'><span>Top Brands
                                                    2019</span> </div>
                                            <div class='tp-caption LargeTitle sfl  tp-resizeme '
                                                data-endspeed='500' data-speed='500' data-start='1300'
                                                data-easing='Linear.easeNone' data-splitin='none'
                                                data-splitout='none' data-elementdelay='0.1'
                                                data-endelementdelay='0.1'
                                                style='z-index:3; white-space:nowrap;'><span
                                                    style="display:block">Modern-classic</span> Decorative
                                            </div>
                                            <div class='tp-caption Title sft  tp-resizeme '
                                                data-endspeed='500' data-speed='500' data-start='1450'
                                                data-easing='Power2.easeInOut' data-splitin='none'
                                                data-splitout='none' data-elementdelay='0.1'
                                                data-endelementdelay='0.1'
                                                style='z-index:4; white-space:nowrap;'>Get 40% OFF on selected
                                                items.</div>
                                            <div class='tp-caption sfb  tp-resizeme ' data-endspeed='500'
                                                data-speed='500' data-start='1500'
                                                data-easing='Linear.easeNone' data-splitin='none'
                                                data-splitout='none' data-elementdelay='0.1'
                                                data-endelementdelay='0.1'
                                                style='z-index:4; white-space:nowrap;'><a href='#'
                                                    class="buy-btn">Shop Now</a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </li>
                    </ul>
                    <div class="tp-bannertimer"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- end Slider -->

    <!-- End Banner Blog -->
    <div class="best-pro-outer">
        <div class="container">
            <div class="row">
                <!-- Popular Products -->
                <div class="col-md-12">
                    <div class="bestsell-pro">
                        <div class="slider-items-products">
                            <div class="bestsell-block">
                                <div class="h2 products-section-title">Popular Products</div>

                                <div id="bestsell-slider" class="product-flexslider hidden-buttons">
                                    <div class="slider-items slider-width-col4 products-grid block-content">
                                        <div class="item">
                                            <div class="item-inner">
                                                <div class="productborder">
                                                    <div class="item-img">
                                                        <div class="item-img-info"> <a class="product-image"
                                                                title="Luz Modern Armchair"
                                                                href="product_detail.html"> <img
                                                                    alt="Luz Modern Armchair"
                                                                    src="{{ asset('assets/images/product10.jpg') }}"> </a>
                                                            <div class="new-label new-top-right">new</div>
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
                                                                    <div class="actions"><span
                                                                            class="add-to-links"><a
                                                                                href="#"
                                                                                class="link-wishlist"
                                                                                title="Add to Wishlist"><span>Add
                                                                                    to Wishlist</span></a> <a
                                                                                href="#"
                                                                                class="link-compare add_to_compare"
                                                                                title="Add to Compare"><span>Add
                                                                                    to Compare</span></a></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="right-block">
                                                        <div class="item-info">
                                                            <div class="info-inner">
                                                                <div class="item-title"> <a
                                                                        title="Luz Modern Armchair"
                                                                        href="product_detail.html">Natural
                                                                        Beauty Products</a>
                                                                    <h5> Cosmetics </h5>
                                                                </div>

                                                                <div class="item-price">
                                                                    <div class="price-box"> <span
                                                                            class="regular-price"> <span
                                                                                class="price">$915.00</span></span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Item -->
                                        <div class="item">
                                            <div class="item-inner">
                                                <div class="productborder">
                                                    <div class="item-img">
                                                        <div class="item-img-info"> <a class="product-image"
                                                                title="Echasse Vases"
                                                                href="product_detail.html"> <img
                                                                    alt="Echasse Vases"
                                                                    src="{{ asset('assets/images/product2.jpg') }}"> </a>
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
                                                                    <div class="actions"><span
                                                                            class="add-to-links"><a
                                                                                href="#"
                                                                                class="link-wishlist"
                                                                                title="Add to Wishlist"><span>Add
                                                                                    to Wishlist</span></a> <a
                                                                                href="#"
                                                                                class="link-compare add_to_compare"
                                                                                title="Add to Compare"><span>Add
                                                                                    to Compare</span></a></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="right-block">
                                                        <div class="item-info">
                                                            <div class="info-inner">
                                                                <div class="item-title"> <a
                                                                        title="Échasse Vases"
                                                                        href="product_detail.html"> Natural
                                                                        Beauty Products</a>
                                                                    <h5> Cosmetics </h5>
                                                                </div>

                                                                <div class="item-price">
                                                                    <div class="price-box"> <span
                                                                            class="regular-price"> <span
                                                                                class="price">$165.95</span>
                                                                        </span> </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Item -->

                                        <!-- Item -->
                                        <div class="item">
                                            <div class="item-inner">
                                                <div class="productborder">
                                                    <div class="item-img">
                                                        <div class="item-img-info"> <a class="product-image"
                                                                title=" XZ3 Table Round"
                                                                href="product_detail.html"> <img
                                                                    alt=" XZ3 Table Round"
                                                                    src="{{ asset('assets/images/product3.jpg') }}"> </a>
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
                                                                    <div class="actions"><span
                                                                            class="add-to-links"><a
                                                                                href="#"
                                                                                class="link-wishlist"
                                                                                title="Add to Wishlist"><span>Add
                                                                                    to Wishlist</span></a> <a
                                                                                href="#"
                                                                                class="link-compare add_to_compare"
                                                                                title="Add to Compare"><span>Add
                                                                                    to Compare</span></a></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="right-block">
                                                        <div class="item-info">
                                                            <div class="info-inner">
                                                                <div class="item-title"> <a
                                                                        title="  XZ3 Table Round "
                                                                        href="product_detail.html"> Natural
                                                                        Beauty Products </a>
                                                                    <h5> Cosmetics </h5>
                                                                </div>

                                                                <div class="item-price">
                                                                    <div class="price-box"> <span
                                                                            class="regular-price"> <span
                                                                                class="price">$472.00</span>
                                                                        </span> </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Item -->

                                        <div class="item">
                                            <div class="item-inner">
                                                <div class="productborder">
                                                    <div class="item-img">
                                                        <div class="item-img-info"> <a class="product-image"
                                                                title="Contemporary Talk Lamp"
                                                                href="product_detail.html"> <img
                                                                    alt="Contemporary Talk Lamp"
                                                                    src="{{ asset('assets/images/product4.jpg') }}"> </a>
                                                            <div class="new-label new-top-right">new</div>
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
                                                                    <div class="actions"><span
                                                                            class="add-to-links"><a
                                                                                href="#"
                                                                                class="link-wishlist"
                                                                                title="Add to Wishlist"><span>Add
                                                                                    to Wishlist</span></a> <a
                                                                                href="#"
                                                                                class="link-compare add_to_compare"
                                                                                title="Add to Compare"><span>Add
                                                                                    to Compare</span></a></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="right-block">
                                                        <div class="item-info">
                                                            <div class="info-inner">
                                                                <div class="item-title"> <a
                                                                        title="Contemporary Talk Lamp"
                                                                        href="product_detail.html">Natural
                                                                        Beauty Products</a>
                                                                    <h5>Cosmetics </h5>
                                                                </div>

                                                                <div class="item-price">
                                                                    <div class="price-box"> <span
                                                                            class="regular-price"> <span
                                                                                class="price">$199.00</span>
                                                                        </span> </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Item -->
                                        <div class="item">
                                            <div class="item-inner">
                                                <div class="productborder">
                                                    <div class="item-img">
                                                        <div class="item-img-info"> <a class="product-image"
                                                                title="Tripod Lamp"
                                                                href="product_detail.html"> <img
                                                                    alt="Tripod Lamp"
                                                                    src="{{ asset('assets/images/product5.jpg') }}"> </a>
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
                                                                    <div class="actions"><span
                                                                            class="add-to-links"><a
                                                                                href="#"
                                                                                class="link-wishlist"
                                                                                title="Add to Wishlist"><span>Add
                                                                                    to Wishlist</span></a> <a
                                                                                href="#"
                                                                                class="link-compare add_to_compare"
                                                                                title="Add to Compare"><span>Add
                                                                                    to Compare</span></a></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="right-block">
                                                        <div class="item-info">
                                                            <div class="info-inner">
                                                                <div class="item-title"> <a
                                                                        title="  Tripod Lamp "
                                                                        href="product_detail.html"> Cosmetics
                                                                    </a>
                                                                    <h5> Natural Beauty Products </h5>
                                                                </div>

                                                                <div class="item-price">
                                                                    <div class="price-box"> <span
                                                                            class="regular-price"> <span
                                                                                class="price">$199.95</span>
                                                                        </span> </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Item -->
                                        <div class="item">
                                            <div class="item-inner">
                                                <div class="productborder">
                                                    <div class="item-img">
                                                        <div class="item-img-info"> <a class="product-image"
                                                                title="Titanes Sideboard"
                                                                href="product_detail.html"> <img
                                                                    alt="Titanes Sideboard"
                                                                    src="{{ asset('assets/images/product6.jpg') }}"> </a>
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
                                                                    <div class="actions"><span
                                                                            class="add-to-links"><a
                                                                                href="#"
                                                                                class="link-wishlist"
                                                                                title="Add to Wishlist"><span>Add
                                                                                    to Wishlist</span></a> <a
                                                                                href="#"
                                                                                class="link-compare add_to_compare"
                                                                                title="Add to Compare"><span>Add
                                                                                    to Compare</span></a></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="right-block">
                                                        <div class="item-info">
                                                            <div class="info-inner">
                                                                <div class="item-title"> <a
                                                                        title="  Titanes Sideboard "
                                                                        href="product_detail.html"> Natural
                                                                        Beauty Products </a>
                                                                    <h5> Cosmetics </h5>
                                                                </div>

                                                                <div class="item-price">
                                                                    <div class="price-box"> <span
                                                                            class="regular-price"> <span
                                                                                class="price">$3,300.95</span>
                                                                        </span> </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Item -->
                                        <div class="item">
                                            <div class="item-inner">
                                                <div class="productborder">
                                                    <div class="item-img">
                                                        <div class="item-img-info"> <a class="product-image"
                                                                title="Heima Candlestick"
                                                                href="product_detail.html"> <img
                                                                    alt="Heima Candlestick"
                                                                    src="{{ asset('assets/images/product7.jpg') }}"> </a>
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
                                                                    <div class="actions"><span
                                                                            class="add-to-links"><a
                                                                                href="#"
                                                                                class="link-wishlist"
                                                                                title="Add to Wishlist"><span>Add
                                                                                    to Wishlist</span></a> <a
                                                                                href="#"
                                                                                class="link-compare add_to_compare"
                                                                                title="Add to Compare"><span>Add
                                                                                    to Compare</span></a></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="right-block">
                                                        <div class="item-info">
                                                            <div class="info-inner">
                                                                <div class="item-title"> <a
                                                                        title=" Heima Candlestick"
                                                                        href="product_detail.html"> Natural
                                                                        Beauty Products</a>
                                                                    <h5> Cosmetics </h5>
                                                                </div>

                                                                <div class="item-price">
                                                                    <div class="price-box"> <span
                                                                            class="regular-price"> <span
                                                                                class="price">$78.95</span>
                                                                        </span> </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Item -->
                                        <div class="item">
                                            <div class="item-inner">
                                                <div class="productborder">
                                                    <div class="item-img">
                                                        <div class="item-img-info"> <a class="product-image"
                                                                title="Steelwood Chair by Magis"
                                                                href="product_detail.html"> <img
                                                                    alt="Steelwood Chair by Magis"
                                                                    src="{{ asset('assets/images/product8.jpg') }}"> </a>
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
                                                                    <div class="actions"><span
                                                                            class="add-to-links"><a
                                                                                href="#"
                                                                                class="link-wishlist"
                                                                                title="Add to Wishlist"><span>Add
                                                                                    to Wishlist</span></a> <a
                                                                                href="#"
                                                                                class="link-compare add_to_compare"
                                                                                title="Add to Compare"><span>Add
                                                                                    to Compare</span></a></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="right-block">
                                                        <div class="item-info">
                                                            <div class="info-inner">
                                                                <div class="item-title"> <a
                                                                        title=" Steelwood Chair by Magis"
                                                                        href="product_detail.html"> Natural
                                                                        Beauty Products</a>
                                                                    <h5> Cosmetics </h5>
                                                                </div>

                                                                <div class="item-price">
                                                                    <div class="price-box"> <span
                                                                            class="regular-price"> <span
                                                                                class="price">$760.00</span>
                                                                        </span> </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- End Item -->


                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Popular Products end-->

    <!-- bottom banner section -->
    <div class="testimonials-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="testi-slider">
                        <div>
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                                <div class="carousel-inner">
                                    <div class="item active">
                                        <div class="item-desc">


                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam
                                                fringilla augue nec est tristique auctor. Donec non est at
                                                libero vulputate rutrum. Mauris vel tellus non nunc mattis
                                                lobortis</p>
                                            <div class="avatar">
                                                <img src="{{ asset('assets/images/member1.jpg') }}" alt="slide3">
                                            </div>
                                            <div class="clients_author">
                                                <a href="#" target="_blank">Karla Anderson
                                                    <span>Happy Customer</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-desc">


                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam
                                                fringilla augue nec est tristique auctor. Donec non est at
                                                libero vulputate rutrum. Mauris vel tellus non nunc mattis
                                                lobortis</p>
                                            <div class="avatar">
                                                <img src="{{ asset('assets/images/member2.png') }}" alt="slide3">
                                            </div>
                                            <div class="clients_author">
                                                <a href="#" target="_blank">John Smith
                                                    <span>Happy Customer</span>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam
                                                fringilla augue nec est tristique auctor. Donec non est at
                                                libero vulputate rutrum. Mauris vel tellus non nunc mattis
                                                lobortis</p>
                                            <div class="avatar"><img src="{{ asset('assets/images/member3.png') }}" alt="slide3">
                                            </div>
                                            <div class="clients_author">
                                                <a href="#" target="_blank"> Stephen Doe
                                                    <span>Happy Customer</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <ol class="carousel-indicators">
                                    <li class="active" data-target="#carousel-example-generic"
                                        data-slide-to="0"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1"
                                        class=""></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2"
                                        class=""></li>
                                </ol>
                                <a class="left carousel-control" href="#" data-slide="prev"> <span
                                        class="sr-only">Previous</span> </a> <a class="right carousel-control"
                                    href="#" data-slide="next"> <span class="sr-only">Next</span> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





</div>

@stop
