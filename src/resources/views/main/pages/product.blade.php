@extends('main.layouts.main')



@section('content')

    @include('main.includes.breadcrumb', ['page_name' => 'Grooming'])

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
                                            <div class="product-img-box col-lg-5 col-sm-6 col-xs-12">
                                                <div class="new-label new-top-left">New</div>
                                                <div class="product-image">
                                                    <div class="product-full">
                                                        <img id="product-zoom" src="{{ asset('assets/images/product10.jpg') }}"
                                                            data-zoom-image="{{ asset('assets/images/product10.jpg') }}"
                                                            alt="product-image" />
                                                    </div>
                                                    <div class="more-views">
                                                        <div class="slider-items-products">
                                                            <div id="gallery_01"
                                                                class="product-flexslider hidden-buttons product-img-thumb">
                                                                <div class="slider-items slider-width-col4 block-content">
                                                                    <div class="more-views-items">
                                                                        <a href="#"
                                                                            data-image="{{ asset('assets/images/product10.jpg') }}"
                                                                            data-zoom-image="{{ asset('assets/images/product10.jpg') }}">
                                                                            <img id="product-zoom"
                                                                                src="{{ asset('assets/images/product10.jpg') }}"
                                                                                alt="product-image" />
                                                                        </a>
                                                                    </div>
                                                                    <div class="more-views-items">
                                                                        <a href="#"
                                                                            data-image="{{ asset('assets/images/product3.jpg') }}"
                                                                            data-zoom-image="{{ asset('assets/images/product3.jpg') }}">
                                                                            <img id="product-zoom"
                                                                                src="{{ asset('assets/images/product3.jpg') }}"
                                                                                alt="product-image" />
                                                                        </a>
                                                                    </div>
                                                                    <div class="more-views-items">
                                                                        <a href="#"
                                                                            data-image="{{ asset('assets/images/product4.jpg') }}"
                                                                            data-zoom-image="{{ asset('assets/images/product4.jpg') }}">
                                                                            <img id="product-zoom"
                                                                                src="{{ asset('assets/images/product4.jpg') }}"
                                                                                alt="product-image" />
                                                                        </a>
                                                                    </div>
                                                                    <div class="more-views-items">
                                                                        <a href="#"
                                                                            data-image="{{ asset('assets/images/product5.jpg') }}"
                                                                            data-zoom-image="{{ asset('assets/images/product5.jpg') }}">
                                                                            <img id="product-zoom"
                                                                                src="{{ asset('assets/images/product5.jpg') }}"
                                                                                alt="product-image" />
                                                                        </a>
                                                                    </div>
                                                                    <div class="more-views-items">
                                                                        <a href="#"
                                                                            data-image="{{ asset('assets/images/product6.jpg') }}"
                                                                            data-zoom-image="{{ asset('assets/images/product6.jpg') }}">
                                                                            <img id="product-zoom"
                                                                                src="{{ asset('assets/images/product6.jpg') }}"
                                                                                alt="product-image" />
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end: more-images -->
                                            </div>
                                            <div class="product-shop col-lg-7 col-sm-6 col-xs-12">
                                                <div class="product-next-prev">
                                                    <a class="product-next" href="#"><span></span></a>
                                                    <a class="product-prev" href="#"><span></span></a>
                                                </div>
                                                <div class="product-name">
                                                    <h1>Natural Beauty Products</h1>
                                                </div>

                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div style="width: 60%" class="rating">
                                                            <div class="rating-box">
                                                                <span class="fa fa-stack"><i
                                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="rating-links">
                                                        <a href="#">1 Review(s)</a>
                                                        <span class="separator">|</span>
                                                        <a href="#">Add Your Review</a>
                                                    </p>
                                                </div>
                                                <div class="price-block">
                                                    <div class="price-box">
                                                        <p class="availability in-stock">
                                                            <span>In Stock</span>
                                                        </p>
                                                        <p class="special-price">
                                                            <span class="price-label">Special Price</span>
                                                            <span id="product-price-48" class="price">
                                                                $309.99
                                                            </span>
                                                        </p>
                                                        <p class="old-price">
                                                            <span class="price-label">Regular Price:</span>
                                                            <span class="price"> $315.99 </span>
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="add-to-box">
                                                    <div class="add-to-cart">
                                                        <div class="pull-left">
                                                            <div class="custom pull-left">
                                                                <button
                                                                    onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) result.value--;return false;"
                                                                    class="reduced items-count" type="button">
                                                                    <i class="fa fa-minus">&nbsp;</i>
                                                                </button>
                                                                <input type="text" class="input-text qty"
                                                                    title="Qty" value="1" maxlength="12"
                                                                    id="qty" name="qty" />
                                                                <button
                                                                    onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;"
                                                                    class="increase items-count" type="button">
                                                                    <i class="fa fa-plus">&nbsp;</i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <button onClick="productAddToCartForm.submit(this)"
                                                            class="button btn-cart" title="Add to Cart" type="button">
                                                            Add to Cart
                                                        </button>
                                                    </div>
                                                    <div class="email-addto-box">
                                                        <ul class="add-to-links">
                                                            <li>
                                                                <a class="link-wishlist" href="wishlist.html"><span>Add to
                                                                        Wishlist</span></a>
                                                            </li>
                                                            <li>
                                                                <span class="separator">|</span>
                                                                <a class="link-compare" href="compare.html"><span>Add to
                                                                        Compare</span></a>
                                                            </li>
                                                        </ul>
                                                        <p class="email-friend">
                                                            <a href="#" class=""><span>Email to a
                                                                    Friend</span></a>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="short-description">
                                                    <p>
                                                        Lorem Ipsum is simply dummy text of the printing
                                                        and typesetting industry. Lorem Ipsum has been
                                                        the industry's standard dummy text ever since
                                                        the 1500s, when an unknown printer took a galley
                                                        of type and scrambled it to make a type specimen
                                                        book. It has survived not only five centuries,
                                                        but also the leap into electronic typesetting,
                                                        remaining essentially unchanged.
                                                    </p>
                                                </div>
                                                <div class="social">
                                                    <ul>
                                                        <li class="fb pull-left"><a href="#"></a></li>
                                                        <li class="tw pull-left">
                                                            <a href="#" target="_blank"></a>
                                                        </li>
                                                        <li class="googleplus pull-left">
                                                            <a href="#" target="_blank"></a>
                                                        </li>
                                                        <li class="rss pull-left">
                                                            <a href="#" target="_blank"></a>
                                                        </li>
                                                        <li class="pintrest pull-left">
                                                            <a href="#" target="_blank"></a>
                                                        </li>
                                                        <li class="linkedin pull-left">
                                                            <a href="#" target="_blank"></a>
                                                        </li>
                                                        <li class="youtube pull-left">
                                                            <a href="#" target="_blank"></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="product-collateral col-lg-12 col-sm-12 col-xs-12">
                            <div class="add_info">
                                <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
                                    <li class="active">
                                        <a href="#product_tabs_description" data-toggle="tab">
                                            Description
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#product_tabs_tags" data-toggle="tab">Tags</a>
                                    </li>
                                    <li>
                                        <a href="#reviews_tabs" data-toggle="tab">Reviews</a>
                                    </li>
                                    <li>
                                        <a href="#product_tabs_custom" data-toggle="tab">Custom Tab</a>
                                    </li>
                                    <li>
                                        <a href="#product_tabs_custom1" data-toggle="tab">Custom Tab1</a>
                                    </li>
                                </ul>
                                <div id="productTabContent" class="tab-content">
                                    <div class="tab-pane fade in active" id="product_tabs_description">
                                        <div class="std">
                                            <p>
                                                Lorem Ipsum is simply dummy text of the printing and
                                                typesetting industry. Lorem Ipsum has been the
                                                industry's standard dummy text ever since the 1500s,
                                                when an unknown printer took a galley of type and
                                                scrambled it to make a type specimen book. It has
                                                survived not only five centuries, but also the leap
                                                into electronic typesetting, remaining essentially
                                                unchanged. It was popularised in the 1960s with the
                                                release of Letraset sheets containing Lorem Ipsum
                                                passages, and more recently with desktop publishing
                                                software like Aldus PageMaker including versions of
                                                Lorem Ipsum Lorem Ipsum is simply dummy text of the
                                                printing and typesetting industry. Lorem Ipsum has
                                                been the industry's standard dummy text ever since
                                                the 1500s, when an unknown printer took a galley of
                                                type and scrambled it to make a type specimen book.
                                                It has survived not only five centuries, but also
                                                the leap into electronic typesetting, remaining
                                                essentially unchanged. It was popularised in the
                                                1960s with the release of Letraset sheets containing
                                                Lorem Ipsum passages, and more recently with desktop
                                                publishing software like Aldus PageMaker including
                                                versions of Lorem Ipsum
                                            </p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="product_tabs_tags">
                                        <div class="box-collateral box-tags">
                                            <div class="tags">
                                                <form id="addTagForm" action="#" method="get">
                                                    <div class="form-add-tags">
                                                        <label for="productTagName">Add Tags:</label>
                                                        <div class="input-box">
                                                            <input class="input-text" name="productTagName"
                                                                id="productTagName" type="text" />
                                                            <button type="button" title="Add Tags"
                                                                class="button btn-add" onClick="submitTagForm()">
                                                                <span>Add Tags</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <p class="note">
                                                Use spaces to separate tags. Use single quotes (')
                                                for phrases.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="reviews_tabs">
                                        <div class="woocommerce-Reviews">
                                            <div>
                                                <h2 class="woocommerce-Reviews-title">
                                                    2 reviews for
                                                    <span>Bacca Bucci Men's Running Shoes</span>
                                                </h2>
                                                <ol class="commentlist">
                                                    <li class="comment">
                                                        <div>
                                                            <img alt="" src="images/member1.png"
                                                                class="avatar avatar-60 photo" />
                                                            <div class="comment-text">
                                                                <div class="ratings">
                                                                    <div class="rating-box">
                                                                        <div style="width: 100%" class="rating"></div>
                                                                    </div>
                                                                </div>
                                                                <p class="meta">
                                                                    <strong>John Doe</strong>
                                                                    <span>–</span> April 19, 2019
                                                                </p>
                                                                <div class="description">
                                                                    <p>
                                                                        Vivamus magna justo, lacinia eget
                                                                        consectetur sed, convallis at tellus.
                                                                        Nulla quis lorem ut libero malesuada
                                                                        feugiat. Proin eget tortor risus. Donec
                                                                        rutrum congue leo eget malesuada. Lorem
                                                                        ipsum dolor sit amet, consectetur
                                                                        adipiscing elit.
                                                                    </p>
                                                                    <p>
                                                                        Donec sollicitudin molestie malesuada.
                                                                        Vivamus suscipit tortor eget felis
                                                                        porttitor volutpat. Lorem ipsum dolor
                                                                        sit amet, consectetur adipiscing elit.
                                                                        Nulla quis lorem ut libero malesuada
                                                                        feugiat. Vivamus magna justo, lacinia
                                                                        eget consectetur sed, convallis at
                                                                        tellus.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <!-- #comment-## -->
                                                    <li class="comment">
                                                        <div>
                                                            <img alt="" src="images/member2.png"
                                                                class="avatar avatar-60 photo" />
                                                            <div class="comment-text">
                                                                <div class="ratings">
                                                                    <div class="rating-box">
                                                                        <div style="width: 100%" class="rating"></div>
                                                                    </div>
                                                                </div>
                                                                <p class="meta">
                                                                    <strong>Stephen Smith</strong>
                                                                    <span>–</span> June 02, 2019
                                                                </p>
                                                                <div class="description">
                                                                    <p>
                                                                        Donec rutrum congue leo eget malesuada.
                                                                        Lorem ipsum dolor sit amet, consectetur
                                                                        adipiscing elit.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <!-- #comment-## -->
                                                </ol>
                                            </div>
                                            <div>
                                                <div>
                                                    <div class="comment-respond">
                                                        <span class="comment-reply-title">Add a review
                                                        </span>
                                                        <form action="#" method="post" class="comment-form"
                                                            novalidate="">
                                                            <p class="comment-notes">
                                                                <span id="email-notes">Your email address will not be
                                                                    published.</span>
                                                                Required fields are marked
                                                                <span class="required">*</span>
                                                            </p>
                                                            <div class="comment-form-rating">
                                                                <label id="rating">Your rating</label>
                                                                <p class="stars">
                                                                    <span>
                                                                        <a class="star-1" href="#">1</a>
                                                                        <a class="star-2" href="#">2</a>
                                                                        <a class="star-3" href="#">3</a>
                                                                        <a class="star-4" href="#">4</a>
                                                                        <a class="star-5" href="#">5</a>
                                                                    </span>
                                                                </p>
                                                            </div>
                                                            <p class="comment-form-comment">
                                                                <label>Your review
                                                                    <span class="required">*</span></label>
                                                                <textarea id="comment" name="comment" cols="45" rows="8" required=""></textarea>
                                                            </p>
                                                            <p class="comment-form-author">
                                                                <label for="author">Name
                                                                    <span class="required">*</span></label>
                                                                <input id="author" name="author" type="text"
                                                                    value="" size="30" required="" />
                                                            </p>
                                                            <p class="comment-form-email">
                                                                <label for="email">Email
                                                                    <span class="required">*</span></label>
                                                                <input id="email" name="email" type="email"
                                                                    value="" size="30" required="" />
                                                            </p>
                                                            <p class="form-submit">
                                                                <input name="submit" type="submit" id="submit"
                                                                    class="submit" value="Submit" />
                                                            </p>
                                                        </form>
                                                    </div>
                                                    <!-- #respond -->
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="product_tabs_custom">
                                        <div class="product-tabs-content-inner clearfix">
                                            <p>
                                                <strong>Lorem Ipsum</strong><span>&nbsp;is simply dummy text of the printing
                                                    and
                                                    typesetting industry. Lorem Ipsum has been the
                                                    industry's standard dummy text ever since the
                                                    1500s, when an unknown printer took a galley of
                                                    type and scrambled it to make a type specimen
                                                    book. It has survived not only five centuries, but
                                                    also the leap into electronic typesetting,
                                                    remaining essentially unchanged. It was
                                                    popularised in the 1960s with the release of
                                                    Letraset sheets containing Lorem Ipsum passages,
                                                    and more recently with desktop publishing software
                                                    like Aldus PageMaker including versions of Lorem
                                                    Ipsum.</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="product_tabs_custom1">
                                        <div class="product-tabs-content-inner clearfix">
                                            <p>
                                                <strong> Comfortable </strong><span>&nbsp;preshrunk shirts. Highest Quality
                                                    Printing.
                                                    6.1 oz. 100% preshrunk heavyweight cotton
                                                    Shoulder-to-shoulder taping Double-needle sleeves
                                                    and bottom hem Lorem Ipsumis simply dummy text of
                                                    the printing and typesetting industry. Lorem Ipsum
                                                    has been the industry's standard dummy text ever
                                                    since the 1500s, when an unknown printer took a
                                                    galley of type and scrambled it to make a type
                                                    specimen book. It has survived not only five
                                                    centuries, but also the leap into electronic
                                                    typesetting, remaining essentially unchanged. It
                                                    was popularised in the 1960s with the release of
                                                    Letraset sheets containing Lorem Ipsum passages,
                                                    and more recently with desktop publishing software
                                                    like Aldus PageMaker including versions of Lorem
                                                    Ipsum.</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="pro_details">
        <div class="bestsell-pro">
            <div class="slider-items-products">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="bestsell-block">
                                <p class="h2 products-section-title">
                                    <span>Related Products</span>
                                </p>
                                <div id="bestsell-slider" class="product-flexslider hidden-buttons">
                                    <div class="slider-items slider-width-col4 products-grid block-content">
                                        <div class="item">
                                            <div class="item-inner">
                                                <div class="productborder">
                                                    <div class="item-img">
                                                        <div class="item-img-info">
                                                            <a class="product-image" title="Sample"
                                                                href="product_detail.html">
                                                                <img alt="Sample" src="{{ asset('assets/images/product10.jpg') }}" />
                                                            </a>
                                                            <div class="new-label new-top-right">new</div>
                                                            <!-- <div class="quickview top-right"> <a class="link-quickview" href="quick_view.html"> <i class="fa fa-search" aria-hidden="true"></i></a> </div> -->
                                                            <div class="item-box-hover">
                                                                <div class="box-inner">
                                                                    <div class="add_cart">
                                                                        <button class="button btn-cart" type="button">
                                                                            <span>Add to Cart</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="product-detail-bnt">
                                                                        <a class="button detail-bnt"><span>Quick
                                                                                View</span></a>
                                                                    </div>
                                                                    <div class="actions">
                                                                        <span class="add-to-links"><a href="#"
                                                                                class="link-wishlist"
                                                                                title="Add to Wishlist"><span>Add to
                                                                                    Wishlist</span></a>
                                                                            <a href="#"
                                                                                class="link-compare add_to_compare"
                                                                                title="Add to Compare"><span>Add to
                                                                                    Compare</span></a></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="right-block">
                                                        <div class="item-info">
                                                            <div class="info-inner">
                                                                <div class="item-title">
                                                                    <a title="Bluetooth Smart Watch"
                                                                        href="product_detail.html">Natural Beauty
                                                                        Products</a>
                                                                </div>
                                                                <div class="item-content">
                                                                    <p class="product-manufacturer">
                                                                        Cosmetics
                                                                    </p>
                                                                </div>
                                                                <div class="item-price">
                                                                    <div class="price-box">
                                                                        <span class="regular-price">
                                                                            <span class="price">$109.20</span>
                                                                        </span>
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
                                                        <div class="item-img-info">
                                                            <a class="product-image" title="Sample"
                                                                href="product_detail.html">
                                                                <img alt="Sample" src="{{ asset('assets/images/product11.jpg') }}" />
                                                            </a>
                                                            <!-- <div class="quickview top-right"> <a class="link-quickview" href="quick_view.html"> <i class="fa fa-search" aria-hidden="true"></i></a> </div> -->
                                                            <div class="item-box-hover">
                                                                <div class="box-inner">
                                                                    <div class="add_cart">
                                                                        <button class="button btn-cart" type="button">
                                                                            <span>Add to Cart</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="product-detail-bnt">
                                                                        <a class="button detail-bnt"><span>Quick
                                                                                View</span></a>
                                                                    </div>
                                                                    <div class="actions">
                                                                        <span class="add-to-links"><a href="#"
                                                                                class="link-wishlist"
                                                                                title="Add to Wishlist"><span>Add to
                                                                                    Wishlist</span></a>
                                                                            <a href="#"
                                                                                class="link-compare add_to_compare"
                                                                                title="Add to Compare"><span>Add to
                                                                                    Compare</span></a></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="right-block">
                                                        <div class="item-info">
                                                            <div class="info-inner">
                                                                <div class="item-title">
                                                                    <a title="Bluetooth Smart Watch"
                                                                        href="product_detail.html">Natural Beauty
                                                                        Products</a>
                                                                </div>
                                                                <div class="item-content">
                                                                    <p class="product-manufacturer">
                                                                        Cosmetics
                                                                    </p>
                                                                </div>
                                                                <div class="item-price">
                                                                    <div class="price-box">
                                                                        <span class="regular-price">
                                                                            <span class="price">$109.20</span>
                                                                        </span>
                                                                    </div>
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
                                                        <div class="item-img-info">
                                                            <a class="product-image" title="Sample"
                                                                href="product_detail.html">
                                                                <img alt="Sample" src="{{ asset('assets/images/product12.jpg') }}" />
                                                            </a>
                                                            <!-- <div class="quickview top-right"> <a class="link-quickview" href="quick_view.html"> <i class="fa fa-search" aria-hidden="true"></i></a> </div> -->
                                                            <div class="item-box-hover">
                                                                <div class="box-inner">
                                                                    <div class="add_cart">
                                                                        <button class="button btn-cart" type="button">
                                                                            <span>Add to Cart</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="product-detail-bnt">
                                                                        <a class="button detail-bnt"><span>Quick
                                                                                View</span></a>
                                                                    </div>
                                                                    <div class="actions">
                                                                        <span class="add-to-links"><a href="#"
                                                                                class="link-wishlist"
                                                                                title="Add to Wishlist"><span>Add to
                                                                                    Wishlist</span></a>
                                                                            <a href="#"
                                                                                class="link-compare add_to_compare"
                                                                                title="Add to Compare"><span>Add to
                                                                                    Compare</span></a></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="right-block">
                                                        <div class="item-info">
                                                            <div class="info-inner">
                                                                <div class="item-title">
                                                                    <a title="Bluetooth Smart Watch"
                                                                        href="product_detail.html">Natural Beauty
                                                                        Products</a>
                                                                </div>
                                                                <div class="item-content">
                                                                    <p class="product-manufacturer">
                                                                        Cosmetics
                                                                    </p>
                                                                </div>
                                                                <div class="item-price">
                                                                    <div class="price-box">
                                                                        <span class="regular-price">
                                                                            <span class="price">$109.20</span>
                                                                        </span>
                                                                    </div>
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
                                                        <div class="item-img-info">
                                                            <a class="product-image" title="Omega J8004 Juicer"
                                                                href="product_detail.html">
                                                                <img alt="sample" src="{{ asset('assets/images/product8.jpg') }}" />
                                                            </a>
                                                            <div class="new-label new-top-right">new</div>
                                                            <!-- <div class="quickview top-right"> <a class="link-quickview" href="quick_view.html"> <i class="fa fa-search" aria-hidden="true"></i></a> </div> -->
                                                            <div class="item-box-hover">
                                                                <div class="box-inner">
                                                                    <div class="add_cart">
                                                                        <button class="button btn-cart" type="button">
                                                                            <span>Add to Cart</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="product-detail-bnt">
                                                                        <a class="button detail-bnt"><span>Quick
                                                                                View</span></a>
                                                                    </div>
                                                                    <div class="actions">
                                                                        <span class="add-to-links"><a href="#"
                                                                                class="link-wishlist"
                                                                                title="Add to Wishlist"><span>Add to
                                                                                    Wishlist</span></a>
                                                                            <a href="#"
                                                                                class="link-compare add_to_compare"
                                                                                title="Add to Compare"><span>Add to
                                                                                    Compare</span></a></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="right-block">
                                                        <div class="item-info">
                                                            <div class="info-inner">
                                                                <div class="item-title">
                                                                    <a title="Bluetooth Smart Watch"
                                                                        href="product_detail.html">Natural Beauty
                                                                        Products</a>
                                                                </div>
                                                                <div class="item-content">
                                                                    <p class="product-manufacturer">
                                                                        Cosmetics
                                                                    </p>
                                                                </div>
                                                                <div class="item-price">
                                                                    <div class="price-box">
                                                                        <span class="regular-price">
                                                                            <span class="price">$109.20</span>
                                                                        </span>
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
                                                        <div class="item-img-info">
                                                            <a class="product-image" title="HI114 Dry Iron"
                                                                href="product_detail.html">
                                                                <img alt="HI114 Dry Iron"
                                                                    src="{{ asset('assets/images/product9.jpg') }}" />
                                                            </a>
                                                            <!-- <div class="quickview top-right"> <a class="link-quickview" href="quick_view.html"> <i class="fa fa-search" aria-hidden="true"></i></a> </div> -->
                                                            <div class="item-box-hover">
                                                                <div class="box-inner">
                                                                    <div class="add_cart">
                                                                        <button class="button btn-cart" type="button">
                                                                            <span>Add to Cart</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="product-detail-bnt">
                                                                        <a class="button detail-bnt"><span>Quick
                                                                                View</span></a>
                                                                    </div>
                                                                    <div class="actions">
                                                                        <span class="add-to-links"><a href="#"
                                                                                class="link-wishlist"
                                                                                title="Add to Wishlist"><span>Add to
                                                                                    Wishlist</span></a>
                                                                            <a href="#"
                                                                                class="link-compare add_to_compare"
                                                                                title="Add to Compare"><span>Add to
                                                                                    Compare</span></a></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="right-block">
                                                        <div class="item-info">
                                                            <div class="info-inner">
                                                                <div class="item-title">
                                                                    <a title="Bluetooth Smart Watch"
                                                                        href="product_detail.html">Natural Beauty
                                                                        Products</a>
                                                                </div>
                                                                <div class="item-content">
                                                                    <p class="product-manufacturer">
                                                                        Cosmetics
                                                                    </p>
                                                                </div>
                                                                <div class="item-price">
                                                                    <div class="price-box">
                                                                        <span class="regular-price">
                                                                            <span class="price">$109.20</span>
                                                                        </span>
                                                                    </div>
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
                                                        <div class="item-img-info">
                                                            <a class="product-image" title="Sample product"
                                                                href="product_detail.html">
                                                                <img alt="Sample product"
                                                                    src="{{ asset('assets/images/product16.jpg') }}" />
                                                            </a>
                                                            <!-- <div class="quickview top-right"> <a class="link-quickview" href="quick_view.html"><i class="fa fa-search" aria-hidden="true"></i></a> </div> -->
                                                            <div class="item-box-hover">
                                                                <div class="box-inner">
                                                                    <div class="add_cart">
                                                                        <button class="button btn-cart" type="button">
                                                                            <span>Add to Cart</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="product-detail-bnt">
                                                                        <a class="button detail-bnt"><span>Quick
                                                                                View</span></a>
                                                                    </div>
                                                                    <div class="actions">
                                                                        <span class="add-to-links"><a href="#"
                                                                                class="link-wishlist"
                                                                                title="Add to Wishlist"><span>Add to
                                                                                    Wishlist</span></a>
                                                                            <a href="#"
                                                                                class="link-compare add_to_compare"
                                                                                title="Add to Compare"><span>Add to
                                                                                    Compare</span></a></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="right-block">
                                                        <div class="item-info">
                                                            <div class="info-inner">
                                                                <div class="item-title">
                                                                    <a title="Bluetooth Smart Watch"
                                                                        href="product_detail.html">Natural Beauty
                                                                        Products</a>
                                                                </div>
                                                                <div class="item-content">
                                                                    <p class="product-manufacturer">
                                                                        Cosmetics
                                                                    </p>
                                                                </div>
                                                                <div class="item-price">
                                                                    <div class="price-box">
                                                                        <span class="regular-price">
                                                                            <span class="price">$109.20</span>
                                                                        </span>
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
                                                        <div class="item-img-info">
                                                            <a class="product-image" title="sample"
                                                                href="product_detail.html">
                                                                <img alt="sample" src="{{ asset('assets/images/product10.jpg') }}" />
                                                            </a>
                                                            <!-- <div class="quickview top-right"> <a class="link-quickview" href="quick_view.html"> <i class="fa fa-search" aria-hidden="true"></i></a> </div> -->
                                                            <div class="item-box-hover">
                                                                <div class="box-inner">
                                                                    <div class="add_cart">
                                                                        <button class="button btn-cart" type="button">
                                                                            <span>Add to Cart</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="product-detail-bnt">
                                                                        <a class="button detail-bnt"><span>Quick
                                                                                View</span></a>
                                                                    </div>
                                                                    <div class="actions">
                                                                        <span class="add-to-links"><a href="#"
                                                                                class="link-wishlist"
                                                                                title="Add to Wishlist"><span>Add to
                                                                                    Wishlist</span></a>
                                                                            <a href="#"
                                                                                class="link-compare add_to_compare"
                                                                                title="Add to Compare"><span>Add to
                                                                                    Compare</span></a></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="right-block">
                                                        <div class="item-info">
                                                            <div class="info-inner">
                                                                <div class="item-title">
                                                                    <a title="Bluetooth Smart Watch"
                                                                        href="product_detail.html">Natural Beauty
                                                                        Products</a>
                                                                </div>
                                                                <div class="item-content">
                                                                    <p class="product-manufacturer">
                                                                        Cosmetics
                                                                    </p>
                                                                </div>
                                                                <div class="item-price">
                                                                    <div class="price-box">
                                                                        <span class="regular-price">
                                                                            <span class="price">$109.20</span>
                                                                        </span>
                                                                    </div>
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
    <!-- Main Container End -->

@stop


@section('js')
<script type="text/javascript" src="{{ asset('assets/js/jquery.flexslider.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/cloud-zoom.js') }}"></script>
@stop
