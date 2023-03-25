@extends('main.layouts.main')

@section('css')
    <link href="{{ asset('admin/css/iziToast.min.css') }}" rel="stylesheet" type="text/css" />
@stop

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
                                            @if ($product->ProductImage->count() > 0)
                                                <div class="product-img-box col-lg-5 col-sm-6 col-xs-12">
                                                    <div class="new-label new-top-left">New</div>
                                                    <div class="product-image">
                                                        <div class="product-full">
                                                            <img id="product-zoom"
                                                                src="{{ $product->ProductImage[0]->image_link }}"
                                                                data-zoom-image="{{ $product->ProductImage[0]->image_link }}"
                                                                alt="product-image" />
                                                        </div>
                                                        <div class="more-views">
                                                            <div class="slider-items-products">
                                                                <div id="gallery_01"
                                                                    class="product-flexslider hidden-buttons product-img-thumb">
                                                                    <div
                                                                        class="slider-items slider-width-col4 block-content">
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
                                                        <button class="button btn-cart" type="button" data-toggle="modal" data-target="#exampleModal">
                                                            Enquire Now
                                                        </button>
                                                        @if ($product->catalogue)
                                                            <a href="{{ $product->catalogue_link }}" download
                                                                class="button btn-cart" style="line-height:2;"
                                                                type="button">
                                                                Download Catalogue
                                                            </a>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="short-description">
                                                    {!! $product->description !!}
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
    @if (count($popular_products) > 0)
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
                                                            @if ($item->ProductImage->count() > 0)
                                                                <div class="item-img">
                                                                    <div class="item-img-info">
                                                                        <a class="product-image"
                                                                            href="{{ route('prodcuct_detail.get', $item->id) }}">
                                                                            <img alt="Sample"
                                                                                src="{{ $item->ProductImage[0]->image_link }}" />
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            @endif
                                                            <div class="right-block">
                                                                <div class="item-info">
                                                                    <div class="info-inner">
                                                                        <div class="item-title">
                                                                            <a
                                                                                href="{{ route('prodcuct_detail.get', $item->id) }}">{{ $item->name }}</a>
                                                                        </div>
                                                                        <div class="item-content">
                                                                            <p class="product-manufacturer">
                                                                                {{ $item->Category->name }}
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Enquire Now</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="countryForm" method="POST" class="static-contain">
                        <fieldset class="group-select">
                            <ul>
                                <li>
                                    <div class="customer-name">
                                        <div class="input-box name-firstname">
                                            <label for="first_name"> First Name<span
                                                    class="required">*</span></label>
                                            <br>
                                            <input type="text" id="first_name" name="first_name"
                                                value="" title="First Name" class="input-text ">
                                        </div>
                                        <div class="input-box name-lastname">
                                            <label for="last_name"> Last Name<span
                                                    class="required">*</span></label>
                                            <br>
                                            <input type="text" id="last_name" name="last_name"
                                                value="" title="Last Name" class="input-text ">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="input-box name-lastname">
                                        <label for="email"> Email Address <span class="required">*</span>
                                        </label>
                                        <br>
                                        <input type="text" id="email" name="email"
                                            value="" title="Email" class="input-text">
                                    </div>
                                    <div class="input-box">
                                        <label for="phone">Telephone <span class="required">*</span></label>
                                        <br>
                                        <input type="text" name="phone" id="phone" value=""
                                            title="Telephone" class="input-text validate-email">
                                    </div>
                                </li>
                                <li class="">
                                    <label for="message">Message<em class="required">*</em></label>
                                    <br>
                                    <div style="float:none" class="">
                                        <textarea name="message" id="message" title="Comment" class="required-entry input-text" cols="5" rows="3"></textarea>
                                    </div>
                                </li>
                            </ul>
                            <input type="text" name="hideit" id="hideit" value=""
                                style="display:none !important;">
                            <div class="buttons-set">
                                <button type="submit" id="SubmitBtn" title="Submit" class="button submit"> <span> Submit </span>
                                </button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop


@section('js')
    <script type="text/javascript" src="{{ asset('assets/js/jquery.flexslider.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/cloud-zoom.js') }}"></script>
    <script src="{{ asset('admin/js/pages/just-validate.production.min.js') }}"></script>
    <script src="{{ asset('admin/js/pages/iziToast.min.js') }}"></script>
    <script src="{{ asset('admin/js/pages/axios.min.js') }}"></script>
    <script>
        const COMMON_REGEX = /^[a-z 0-9~%.:_\@\-\/\(\)\\\#\;\[\]\{\}\$\!\&\<\>\'\r\n+=,]+$/i;

        // initialize the validation library
        const validation = new JustValidate('#countryForm', {
            errorFieldCssClass: 'is-invalid',
        });
        // apply rules to form fields
        validation
            .addField('#first_name', [{
                    rule: 'required',
                    errorMessage: 'First Name is required',
                },
                {
                    rule: 'customRegexp',
                    value: COMMON_REGEX,
                    errorMessage: 'First Name is invalid',
                },
            ])
            .addField('#last_name', [{
                    rule: 'required',
                    errorMessage: 'Last Name is required',
                },
                {
                    rule: 'customRegexp',
                    value: COMMON_REGEX,
                    errorMessage: 'Last Name is invalid',
                },
            ])
            .addField('#email', [{
                    rule: 'required',
                    errorMessage: 'Email is required',
                },
                {
                    rule: 'email',
                    errorMessage: 'Email is invalid!',
                },
            ])
            .addField('#phone', [{
                    rule: 'required',
                    errorMessage: 'Phone is required',
                },
                {
                    rule: 'customRegexp',
                    value: COMMON_REGEX,
                    errorMessage: 'Phone is invalid',
                },
            ])
            .addField('#message', [{
                    rule: 'required',
                    errorMessage: 'Message is required',
                },
                {
                    rule: 'customRegexp',
                    value: COMMON_REGEX,
                    errorMessage: 'Message is invalid',
                },
            ])
            .onSuccess(async (event) => {
                event.target.preventDefault;
                const errorToast = (message) => {
                    iziToast.error({
                        title: 'Error',
                        message: message,
                        position: 'bottomCenter',
                        timeout: 7000
                    });
                }
                const successToast = (message) => {
                    iziToast.success({
                        title: 'Success',
                        message: message,
                        position: 'bottomCenter',
                        timeout: 6000
                    });
                }
                var submitBtn = document.getElementById('SubmitBtn')
                submitBtn.innerHTML = `
        <span class="d-flex align-items-center">
            <span class="spinner-border flex-shrink-0" role="status">
                <span class="visually-hidden"></span>
            </span>
            <span class="flex-grow-1 ms-2">
                &nbsp; Submiting...
            </span>
        </span>
        `
                submitBtn.disabled = true;
                try {
                    var formData = new FormData();
                    formData.append('first_name', document.getElementById('first_name').value)
                    formData.append('last_name', document.getElementById('last_name').value)
                    formData.append('email', document.getElementById('email').value)
                    formData.append('phone', document.getElementById('phone').value)
                    formData.append('message', document.getElementById('message').value)
                    const response = await axios.post('{{ route('contact.post') }}', formData)
                    successToast(response.data.message)
                    event.target.reset()
                } catch (error) {
                    if (error?.response?.data?.errors?.first_name) {
                        errorToast(error?.response?.data?.errors?.first_name[0])
                    }
                    if (error?.response?.data?.errors?.last_name) {
                        errorToast(error?.response?.data?.errors?.last_name[0])
                    }
                    if (error?.response?.data?.errors?.email) {
                        errorToast(error?.response?.data?.errors?.email[0])
                    }
                    if (error?.response?.data?.errors?.phone) {
                        errorToast(error?.response?.data?.errors?.phone[0])
                    }
                    if (error?.response?.data?.errors?.message) {
                        errorToast(error?.response?.data?.errors?.message[0])
                    }
                    if (error?.response?.data?.error) {
                        errorToast(error?.response?.data?.error)
                    }
                } finally {
                    submitBtn.innerHTML = `
            Submit
            `
                    submitBtn.disabled = false;
                }
            });
    </script>
@stop
