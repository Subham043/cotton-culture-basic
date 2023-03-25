@extends('main.layouts.main')



@section('content')

    @include('main.includes.breadcrumb', ['page_name' => $category->name])

    <!-- Main Container -->
    @if($products->total() > 0)
    <div class="main-container col2-left-layout bounceInUp animated">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-12">

                    <div class="">
                        <div class="">
                            <article class="col-main">

                                <div class="category-products">
                                    <ul class="products-grid">
                                        @foreach ($products->items() as $item)
                                        <li class="item col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <div class="item-inner">
                                                <div class="productborder">
                                                    @if($item->ProductImage->count() > 0)
                                                    <div class="item-img">
                                                        <div class="item-img-info"> <a class="product_image image-wrapper"
                                                                href="{{route('prodcuct_detail.get', $item->id)}}"> <img class="front_image"
                                                                    src="{{ $item->ProductImage[0]->image_link }}"> </a>
                                                        </div>
                                                    </div>
                                                    @endif
                                                    <div class="right-block">
                                                        <div class="item-info">
                                                            <div class="info-inner">
                                                                <div class="item-title"> <a
                                                                        href="{{route('prodcuct_detail.get', $item->id)}}">{{$item->name}}</a> </div>
                                                                <div class="item-content">
                                                                    <p class="product-manufacturer">{{$category->name}}</p>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </article>

                            <!--	///*///======    End article  ========= //*/// -->
                            @if($products->total() > 0)
                            <div class="toolbar bottom">
                                <div class="pager">
                                    <div class="pages">
                                        <ul class="pagination">
                                            <li><a href="{{ $products->currentPage() > 1 ? $products->previousPageUrl() : '#' }}">«</a></li>
                                            @for ($i = 1; $i <= $products->lastPage(); $i++)
                                            <li class="{{ $products->currentPage() == $i ? 'active' : '' }}"><a href="{{$products->url($i)}}">{{ $i }}</a></li>
                                            @endfor
                                            <li><a href="{{ $products->currentPage() == $products->lastPage() ? '#' : $products->nextPageUrl() }}">»</a></li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Container End -->

    </div>
    @endif

@stop
