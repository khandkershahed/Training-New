@extends('frontend.master')
@section('content')
    <style>
        .common_button2 {
            padding: 10px 15px;
            cursor: pointer;
            font-family: "Allumi Std Extended";
            font-size: 18px;
            font-weight: 500;
            text-align: center;
            display: inline-block;
            background-color: var(--crimson);
            transition: 0.3s;
            outline: none;
            border: none;
            color: white;
        }

        .product_quantity_wraper {
            background-color: #ebebeb;
            padding: 10px;
            margin-bottom: 10px;
        }

        /*
                    *
                    * ==========================================
                    * CUSTOM UTIL CLASSES
                    * ==========================================
                    */
        .nav-pills-custom .nav-link {
            color: #aaa;
            background: #fff;
            position: relative;
        }

        .nav-pills-custom .nav-link.active {
            color: #ffffff !important;
            background: #ae0a46;
        }

        .tab-pane {
            height: 25rem !important;
        }

        /* Add indicator arrow for the active tab */
        @media (min-width: 992px) {
            .nav-pills-custom .nav-link::before {
                content: '';
                display: block;
                border-top: 8px solid transparent;
                border-bottom: 8px solid transparent;
                position: absolute;
                top: 50%;
                right: -10px;
                transform: translateY(-50%);
                opacity: 0;
            }
        }

        @media (min-width: 992px) {
            .nav-pills-custom .nav-link::before {
                content: '';
                display: block;
                border-top: 8px solid transparent;
                border-right: 10px solid transparent;
                border-bottom: 8px solid transparent;
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
                opacity: 0;
            }
        }

        .nav-pills-custom .nav-link.active::before {
            opacity: 1;
        }
    </style>

    <section class="container py-5">
        <div class="row">
            <!-- images -->
            <div class="col-lg-4 col-sm-12 single_product_images">
                <!-- gallery pic -->
                <div class="mx-auto d-block">
                    <img id="expand" class="geeks img-fluid rounded mx-auto d-block"
                        src="{{ !empty($sproduct->thumbnail) && file_exists(public_path($sproduct->thumbnail)) ? asset($sproduct->thumbnail) : asset('frontend/images/random-no-img.png') }}">
                    {{-- src="{{ asset($sproduct->thumbnail) }}"> --}}

                </div>
                @php
                    $imgs = App\Models\Admin\MultiImage::where('product_id', $sproduct->id)->get();
                @endphp

                <div class="img_gallery_wrapper row pt-1">
                    @foreach ($imgs as $data)
                        <div class="col-3">
                            {{-- <img class="img-fluid" src="{{ asset($data->photo) }}" onclick="gfg(this);"> --}}
                            <img class="img-fluid"
                                src="{{ !empty($data->photo) && file_exists(public_path($data->photo)) ? asset($data->photo) : asset('frontend/images/random-no-img.png') }}"
                                onclick="gfg(this);">
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- content -->
            <div class="col-lg-8 col-sm-12 pl-4">
                <h3>{{ $sproduct->name }}</h3>
                <h6 class="text-dark product_code">SKU #{{ $sproduct->sku_code }} | MF #{{ $sproduct->mf_code }} | NG
                    #{{ $sproduct->product_code }}
                </h6>
                <div class="row">
                    <div class="col-lg-10">
                        <p>{!! $sproduct->short_desc !!}</p>
                    </div>
                </div>
                <div class="row product_quantity_wraper justify-content-between"
                    style="background-color: transparent !important;">
                    @if ($sproduct->rfq == 1)
                        <div class="bg-light d-flex justify-content-between align-items-center" style="width: 80%;">
                            <button class="btn-color" data-bs-toggle="modal" data-bs-target="#rfqModal"
                                style="width: 35%;">Ask For Price</button>
                            {{-- <a class="common_button" href="{{route('contact')}}">Call Ngen It for price</a> --}}
                            <div class="need_help col-lg-4 col-sm-12">
                                <h6 class="m-2">Need Help Ordering?</h6>
                                <h6>Call <strong>{{ App\Models\Admin\Setting::first()->mobile }}</strong></h6>
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-12 d-flex align-items-center justify-content-between py-2 mt-2 px-4"
                            style="width: 80%; background: #f9f6f0;">
                            <div class="stock-info">
                                <p tabindex="0" class="prod-stock mb-0" id="product-avalialability-by-warehouse">
                                    <span aria-label="Stock Availability" class="js-prod-available"> <i
                                            class="fa fa-info-circle text-success"></i> Stock</span> <br>
                                    @if ($sproduct->qty > 0)
                                        <span class="text-success" style="font-size:17px">{{ $sproduct->qty }}
                                            in stock</span>
                                    @else
                                        <span class="text-danger pb-2"
                                            style="font-size:17px">{{ ucfirst($sproduct->stock) }}</span>
                                    @endif
                                </p>
                            </div>
                            <div>
                                <p class="list_price mb-0 me-3">Custom Pricing</p>
                                <a href="" data-bs-toggle="modal" data-bs-target="#askProductPrice">
                                    <span class="fw-bold" style="color: #ae0a46;">Get A Quote</span>
                                </a>
                            </div>
                        </div>
                    @elseif ($sproduct->price_status && $sproduct->price_status == 'rfq')
                        <div class="bg-light d-flex justify-content-between align-items-center" style="width: 80%;">
                            <button class="common_button" id="modal_view_left" data-bs-toggle="modal"
                                data-bs-target="#rfqModal" style="width: 35%;">Ask For Price</button>

                            {{-- <a class="common_button" href="{{route('contact')}}">Call Ngen It for price</a> --}}
                            <div class="need_help col-lg-4 col-sm-12">
                                <h6 class="m-2">Need Help Ordering?</h6>
                                <h6>Call <strong>{{ App\Models\Admin\Setting::first()->mobile }}</strong></h6>
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-12 d-flex align-items-center justify-content-between py-2 mt-2 px-4"
                            style="width: 80%; background: #f9f6f0;">
                            <div class="stock-info">
                                <p tabindex="0" class="prod-stock mb-0" id="product-avalialability-by-warehouse">
                                    <span aria-label="Stock Availability" class="js-prod-available"> <i
                                            class="fa fa-info-circle text-success"></i> Stock</span> <br>
                                    @if ($sproduct->qty > 0)
                                        <span class="text-success" style="font-size:17px">{{ $sproduct->qty }}
                                            in stock</span>
                                    @else
                                        <span class="text-danger pb-2"
                                            style="font-size:17px">{{ ucfirst($sproduct->stock) }}</span>
                                    @endif
                                </p>
                            </div>
                            <div>
                                <p class="list_price mb-0 me-3">Custom Pricing</p>
                                <a href="" data-bs-toggle="modal" data-bs-target="#askProductPrice">
                                    <span class="fw-bold" style="color: #ae0a46;">Get A Quote</span>
                                </a>
                            </div>
                        </div>
                    @else
                        @php
                            $cart = Gloudemans\Shoppingcart\Facades\Cart::content();
                        @endphp
                        @if ($cart->where('id', $sproduct->id)->count())
                            <div class="col-lg-4 col-sm-12 d-flex justify-content-center">
                                <div class="common_button2">
                                    <a class="text-white" href="javascript:void(0);"> Already in Cart</a>
                                </div>
                            </div>
                        @else
                            <form action="{{ route('add.cart') }}" method="post">
                                @csrf
                                <input type="hidden" name="product_id" id="product_id" value="{{ $sproduct->id }}">
                                <input type="hidden" name="name" id="name" value="{{ $sproduct->name }}">
                                <div class="row ">
                                    <div class="col-lg-12 col-sm-12 d-flex align-items-center justify-content-between bg-light py-2"
                                        style="width: 80%;">
                                        <div class="pro-qty">
                                            <input type="hidden" name="product_id" id="product_id"
                                                value="{{ $sproduct->id }}">
                                            <input type="hidden" name="name" id="name"
                                                value="{{ $sproduct->name }}">
                                            <div class="counter">
                                                <span class="down" onClick='decreaseCount(event, this)'>-</span>
                                                <input type="text" name="qty" value="1" class="count_field">
                                                <span class="up" onClick='increaseCount(event, this)'>+</span>

                                            </div>
                                        </div>
                                        <button class="common_button2 ms-3" type="submit">Add to Basket</button>
                                    </div>

                                </div>
                            </form>
                        @endif
                        <div class="col-lg-12 col-sm-12 d-flex align-items-center justify-content-between py-2 mt-2 px-5"
                            style="width: 80%; background: #f9f6f0;">
                            <div>
                                @if ($sproduct->rfq != 1)
                                    <p class="list_price mb-0">List Price</p>
                                    <div class="product__details__price ">
                                        @if (!empty($sproduct->discount))
                                            <p class="mb-0" style="font-size: 14px !important; color: #ae0a46;">
                                                <span style="text-decoration: line-through; color:#ae0a46;">$
                                                    {{ $sproduct->price }}</span>
                                                <span style="color: black">$ {{ $sproduct->discount }}</span>
                                                <span style="font-size: 14px;">USD</span>
                                            </p>
                                            @php
                                                $amount = $sproduct->price - $sproduct->discount;
                                                $discount = ($amount / $sproduct->price) * 100;
                                            @endphp
                                            <span class="badge rounded-pill bg-success" style="font-size: 14px;">
                                                {{ round($discount) }}%</span>
                                        @else
                                            <p class="mb-0" style="font-size: 14px !important; color: #ae0a46;">$
                                                <span style="font-size: 22px;">{{ $sproduct->price }}</span> US
                                            </p>
                                        @endif
                                    </div>
                                @else
                                    <div id="tpl-product-detail-order-target" class="prod-ordering-section"
                                        data-outofstock="Out of stock.">
                                        <div class="row js-add-to-cart-container">
                                            <div class="columns small-12 ds-v1 text-center">
                                                <a type="button" style="font-weight: 600" class="text-danger"
                                                    data-toggle="modal" data-target="#exampleModalCenter">
                                                    <h5>This product has sell requirements</h5>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <div class="stock-info">
                                <p tabindex="0" class="prod-stock mb-0" id="product-avalialability-by-warehouse">
                                    <span aria-label="Stock Availability" class="js-prod-available"> <i
                                            class="fa fa-info-circle text-success"></i> Stock</span> <br>
                                    @if ($sproduct->qty > 0)
                                        <span class="text-success" style="font-size:17px">{{ $sproduct->qty }}
                                            in stock</span>
                                    @else
                                        <span class="text-danger pb-2"
                                            style="font-size:17px">{{ ucfirst($sproduct->stock) }}</span>
                                    @endif
                                </p>
                            </div>
                            <div>
                                <p class="list_price mb-0">Custom Pricing</p>
                                <a href="" data-bs-toggle="modal" data-bs-target="#askProductPrice">
                                    <span class="fw-bold" style="color: #ae0a46;">Get A Quote</span>
                                </a>
                            </div>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </section><br>
    <!-------End-------->
    <section class="py-5 header pt-0">
        <div class="container py-4">
            <div class="row">
                <div class="col-md-3 p-0">
                    <!-- Tabs nav -->
                    <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist"
                        aria-orientation="vertical">
                        <a class="nav-link p-3 shadow-sm rounded-0 active" id="v-pills-overview-tab" data-toggle="pill"
                            href="#v-pills-overview" role="tab" aria-controls="v-pills-overview"
                            aria-selected="true" style="margin-bottom: 1px;">
                            <i class="fa-solid fa-circle-info mr-2" style="font-size: 15px !important;"></i>
                            <span class="font-weight-bold small text-uppercase">OVERVIEW</span></a>

                        <a class="nav-link p-3 shadow-sm rounded-0" id="v-pills-specification-tab" data-toggle="pill"
                            href="#v-pills-specification" role="tab" aria-controls="v-pills-specification"
                            aria-selected="false" style="margin-bottom: 1px;">
                            <i class="fa-solid fa-file mr-2" style="font-size: 15px !important;"></i>
                            <span class="font-weight-bold small text-uppercase">SPECIFICATION</span></a>

                        <a class="nav-link p-3 shadow-sm rounded-0" id="v-pills-accessories-tab" data-toggle="pill"
                            href="#v-pills-accessories" role="tab" aria-controls="v-pills-accessories"
                            aria-selected="false" style="margin-bottom: 1px;">
                            <i class="fa-solid fa-boxes-stacked mr-2" style="font-size: 15px !important;"></i>
                            <span class="font-weight-bold small text-uppercase">ACCESSORIES</span></a>

                        <a class="nav-link p-3 shadow-sm rounded-0" id="v-pills-warranties-tab" data-toggle="pill"
                            href="#v-pills-warranties" role="tab" aria-controls="v-pills-warranties"
                            aria-selected="false" style="margin-bottom: 1px;">
                            <i class="fa-solid fa-shield-halved mr-2" style="font-size: 15px !important;"></i>
                            <span class="font-weight-bold small text-uppercase">WARRANTIES</span></a>
                    </div>
                </div>


                <div class="col-md-9 px-0">
                    <!-- Tabs content -->
                    <div class="tab-content p-0" id="v-pills-tabContent">
                        <div class="tab-pane fade shadow-sm rounded-0 bg-white show active" id="v-pills-overview"
                            role="tabpanel" aria-labelledby="v-pills-overview-tab"
                            style="width: 100% !important;overflow: auto;">
                            <h4 class="mb-2 text-center bg-light p-2 mt-0 pb-3">Product Overview</h4>
                            <div class="p-2">
                                @if (!empty($sproduct->overview))
                                    <p class="text-muted mb-2" style="width: 100% !important;overflow: auto;">
                                        {!! $sproduct->overview !!}</p>
                                @else
                                    <p class="text-muted mb-2"> No overview Available</p>
                                @endif
                            </div>
                        </div>

                        <div class="tab-pane fade shadow-sm rounded-0 bg-white" id="v-pills-specification"
                            role="tabpanel" aria-labelledby="v-pills-specification-tab"
                            style="width: 100% !important;overflow: auto;">
                            <h4 class="mb-2 text-center bg-light p-2 mt-0 pb-3">Product Specification</h4>
                            <div class="p-2">
                                @if (!empty($sproduct->specification))
                                    <p class="text-muted mb-2" style="width: 100% !important;overflow: auto;">
                                        {!! $sproduct->specification !!}</p>
                                @else
                                    <p class="text-muted mb-2"> No Specification Available</p>
                                @endif
                            </div>
                        </div>

                        <div class="tab-pane fade shadow-sm rounded-0 bg-white" id="v-pills-accessories" role="tabpanel"
                            aria-labelledby="v-pills-accessories-tab" style="width: 100% !important;overflow: auto;">
                            <h4 class="mb-2 text-center bg-light p-2 mt-0 pb-3">Product Accessories</h4>
                            <div class="p-2">
                                @if (!empty($sproduct->accessories))
                                    <p class="text-muted mb-2" style="width: 100% !important;overflow: auto;">
                                        {!! $sproduct->accessories !!} </p>
                                @else
                                    <p class="text-muted mb-2"> No Accessories Available</p>
                                @endif
                            </div>
                        </div>

                        <div class="tab-pane fade shadow-sm rounded-0 bg-white" id="v-pills-warranties" role="tabpanel"
                            aria-labelledby="v-pills-warranties-tab" style="width: 100% !important;overflow: auto;">
                            <h4 class="mb-2 text-center bg-light p-2 mt-0 pb-3">Product Warranties</h4>
                            <div class="p-2">
                                @if (!empty($sproduct->warranty))
                                    <p class="text-muted mb-2"> {!! $sproduct->warranty !!} </p>
                                @else
                                    <p class="text-muted mb-2"> No Warranty Available</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-------End-------->


    <!--=======// Popular products //======-->
    <section>
        <div class="container p-0 my-4">
            <div class="Container spacer">
                <h3 class="Head main_color">Popular Products <span class="Arrows"></span></h3>
                <!-- Carousel Container -->
                <div class="SlickCarousel">
                    @if ($products)
                        @foreach ($products as $item)
                            <!-- Item -->
                            <div class="ProductBlock mb-3 mt-3">
                                <div class="Content">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="custom-product-grid">
                                                <div class="custom-product-image">
                                                    <a href="{{ route('product.details', $item->slug) }}" class="image">
                                                        {{-- <img class="pic-1" src="{{ asset($item->thumbnail) }}"> --}}
                                                        <img class="img-fluid"
                                                            src="{{ !empty($item->thumbnail) && file_exists(public_path($item->thumbnail)) ? asset($item->thumbnail) : asset('frontend/images/random-no-img.png') }}"
                                                            alt="NGEN IT">
                                                    </a>
                                                    <ul class="custom-product-links">
                                                        <li><a href="#"><i class="fa fa-random text-white"></i></a>
                                                        </li>
                                                        <li><a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#productDetails{{ $item->id }}"><i
                                                                    class="fa fa-search text-white"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="custom-product-content">
                                                    <a href="{{ route('product.details', $item->slug) }}">
                                                        <h3 class="custom-title"> {{ Str::words($item->name, 10) }}</h3>
                                                    </a>

                                                    @if ($item->rfq == 1)
                                                        <div>
                                                            <div class="price py-3">
                                                                {{-- <small class="price-usd">USD</small>
                                                            --.-- $ --}}
                                                            </div>
                                                            <a href=""
                                                                class="d-flex justify-content-center align-items-center"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#rfq{{ $item->id }}">
                                                                <button class="btn-color popular_product-button">
                                                                    Ask For Price
                                                                </button>
                                                            </a>
                                                        </div>
                                                    @elseif ($item->price_status && $item->price_status == 'rfq')
                                                        <div>
                                                            <div class="price py-3">
                                                                {{-- <small class="price-usd">USD</small>
                                                        --.-- $ --}}
                                                            </div>
                                                            <a href=""
                                                                class="d-flex justify-content-center align-items-center"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#rfq{{ $item->id }}">
                                                                <button class="btn-color popular_product-button">
                                                                    Ask For Price
                                                                </button>
                                                            </a>
                                                        </div>
                                                    @elseif ($item->price_status && $item->price_status == 'offer_price')
                                                        <div>
                                                            <div class="price py-3">
                                                                <small class="price-usd">USD</small>
                                                                $ {{ number_format($item->price, 2) }}
                                                            </div>
                                                            <a href=""
                                                                class="d-flex justify-content-center align-items-center"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#rfq{{ $item->id }}">
                                                                <button class="btn-color" data-bs-toggle="modal"
                                                                    data-bs-target="#askProductPrice">
                                                                    Your Price
                                                                </button>
                                                            </a>
                                                        </div>
                                                    @else
                                                        <div>
                                                            <div class="price py-3">
                                                                <small class="price-usd">USD</small>
                                                                $ {{ number_format($item->price, 2) }}
                                                            </div>
                                                            <a href="" data-mdb-toggle="popover"
                                                                title="Add To Cart Now"
                                                                class="cart_button{{ $item->id }}"
                                                                data-mdb-content="Add To Cart Now"
                                                                data-mdb-trigger="hover">
                                                                <button type="button" class="btn-color add_to_cart"
                                                                    data-id="{{ $item->id }}"
                                                                    data-name="{{ $item->name }}" data-quantity="1">
                                                                    Add to Cart
                                                                </button>
                                                            </a>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
                <!-- Carousel Container -->
                @include('frontend.pages.home.rfq_modal')
            </div>
        </div>
    </section>
    <!---------End -------->

    {{-- Ask For Price Modal Modal --}}
    <!-- Modal -->
    <div class="modal fade" id="askProductPrice" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header py-2" style="background: #ae0a46;">
                    <h5 class="modal-title text-white" id="staticBackdropLabel">Your Price Form
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container px-0" id="sign-up-container-area" style="display: block">
                        <form>
                            <div class="py-2 px-2 bg-light rounded">
                                <div class="row mb-1">
                                    <div class="col">
                                        <div class="row">
                                            <div class="col-sm-4 d-flex justify-content-between align-items-center">
                                                <span style="font-size: 12px;">Name</span>
                                                <span style="font-size: 12px;"> :</span>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="text" name="name"
                                                    class="form-control form-control-sm rounded-0 w-100" maxlength="100"
                                                    placeholder="Enter Your Name" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="row">
                                            <div class="col-sm-4 d-flex justify-content-between align-items-center">
                                                <span style="font-size: 12px;">Email</span>
                                                <span style="font-size: 12px;"> :</span>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="email" name="email"
                                                    class="form-control form-control-sm rounded-0 w-100" maxlength="100"
                                                    placeholder="Enter Your Email" required>

                                                <span class="text-danger text-start p-0 m-0 email_validation"
                                                    style="display: none;">Please input
                                                    valid email</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col">
                                        <div class="row">
                                            <div class="col-sm-4 d-flex justify-content-between align-items-center">
                                                <span style="font-size: 12px;">Mobile</span>
                                                <span style="font-size: 12px;"> :</span>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="number" name="name"
                                                    class="form-control form-control-sm rounded-0 w-100" maxlength="100"
                                                    placeholder="Enter Mobile Number" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="row">
                                            <div class="col-sm-4 d-flex justify-content-between align-items-center">
                                                <span style="font-size: 12px;">Company Name</span>
                                                <span style="font-size: 12px;"> :</span>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="text" name="comapny"
                                                    class="form-control form-control-sm rounded-0 w-100" maxlength="100"
                                                    placeholder="Enter Company Name" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col">
                                        <div class="row">
                                            <div class="col-sm-4 d-flex justify-content-between align-items-center">
                                                <span style="font-size: 12px;">Quantity </span>
                                                <span style="font-size: 12px;"> :</span>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="number" name="qty"
                                                    class="form-control form-control-sm rounded-0 w-100" maxlength="100"
                                                    placeholder="Enter Your Quantity" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="row">
                                            <div class="col-sm-4 d-flex justify-content-between align-items-center">
                                                <span style="font-size: 12px;">Product</span>
                                                <span style="font-size: 12px;"> :</span>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="file" name="custom_image"
                                                    class="form-control form-control-sm rounded-0 w-100" maxlength="100"
                                                    placeholder="Enter Product Image" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <span style="font-size: 12px;">Type Message :</span>
                                                <textarea class="form-control form-control-sm rounded-0 w-100" id="message" name="message" rows="2"
                                                    placeholder="Enter Your Name"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer me-2" style="padding: 0px;border: 0px;">
                    <button class="btn btn-sm" style="background: #ae0a46; color: white;" role="button">Submit</button>
                    <!-- HTML !-->
                </div>
            </div>
        </div>
    </div>
    {{-- Ask For Price Modal Modal End --}}
    <div class="modal fade" id="rfqModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header py-2" style="background: #ae0a46;">
                    <h5 class="modal-title text-white" id="staticBackdropLabel">Get Quote
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <form action="{{ route('rfq.add') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="row mb-4">
                                <div class="col-lg-9">
                                    <label class="mb-2" for="product_name">Product Name <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="product_name" id="product_name"
                                        value="{{ old('product_name') }}" required>
                                </div>
                                <div class="col-lg-3">
                                    <label class="mb-2" for="qty">Custom Quantity</label>
                                    <input type="text" class="form-control" name="qty" id="qty"
                                        value="{{ old('qty') }}">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-lg-4 mb-3 pe-0">
                                    <input type="text" class="form-control rounded-0" required id="name"
                                        name="name" placeholder="Your Name *"
                                        value="{{ Auth::guard('client')->check() ? Auth::guard('client')->user()->name : '' }}" />
                                </div>
                                <div class="col-lg-4 mb-3 pe-0">
                                    <input type="number" class="form-control rounded-0" id="phone" name="phone"
                                        placeholder="Your Phone Number *" required
                                        value="{{ Auth::guard('client')->check() ? Auth::guard('client')->user()->phone : '' }}" />
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <input type="text" class="form-control rounded-0" id="contact"
                                        name="company_name" placeholder="Your Company Name *" required
                                        value="{{ Auth::guard('client')->check() ? Auth::guard('client')->user()->company_name : '' }}" />
                                </div>
                                <div class="col-lg-5 mb-3 pe-0">
                                    <input type="email" required class="form-control rounded-0" id="email"
                                        name="email" placeholder="Your Email *"
                                        value="{{ Auth::guard('client')->check() ? Auth::guard('client')->user()->email : '' }}" />
                                    <span class="text-danger text-start p-0 m-0 email_validation"
                                        style="display: none">Please input valid email</span>
                                </div>
                                <div class="col-lg-7 mb-3">
                                    <input type="file" name="image" class="form-control rounded-0" id="image"
                                        accept="image/*" placeholder="Your Custom Image" />
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <textarea class="form-control rounded-0" id="message" name="message" rows="3" placeholder="Your Message"></textarea>
                                </div>
                            </div>


                            <div class="row align-items-center">
                                <div class="col-lg-3 mb-3">
                                    <div class="form-check border-0">
                                        <input class="form-check-input" type="checkbox" value="1"
                                            id="flexCheckDefault" name="call" placeholder="Call Me"
                                            style="left: 3rem;" />
                                        <label class="form-check-label" for="flexCheckDefault"> Call Me
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <div class="form-group px-3 mx-1 message g-recaptcha w-100"
                                        data-sitekey="{{ config('app.recaptcha_site_key') }}">
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-3">
                                    <button type="submit" class="btn rounded-0 p-2"
                                        style="background: #ae0a46; color: white; width:150px; font-size:20px"
                                        role="button">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- HTML !-->
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background: #ae0a46;color: white;">
                    <h5 class="modal-title" id="exampleModalCenterTitle">RFQ Secton</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-header">
                            <p>This Product requires the following information to complete your order.
                                You will be prompted to enter the required information during checkout.</p>
                        </div>
                        <div class="card-body px-4">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <p class="m-0">Contact Email</p>
                                        <p class="m-0">Contact Name</p>
                                    </div>
                                    <div class="col-lg-4">
                                        <p class="m-0">License</p>
                                        <p class="m-0">Contact Phone</p>
                                    </div>
                                    <div class="col-lg-4">
                                        <p class="m-0">Deal Reg </p>
                                        <p class="m-0">PCN No</p>
                                        <p class="m-0">Authorization</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- left modal -->
    {{-- <div class="modal modal_outer fade" id="get_quote_modal" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel2">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">


            <div class="modal-content">

                <div class="modal-header py-2" style="background: #ae0a46;color: white;">
                    <h5 class="modal-title text-white">Get a Quote</h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @if (Auth::guard('client')->user())
                    <form action="{{ route('rfq.add') }}" method="post" id="get_quote_frm"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card mx-4">
                            <div class="card-body px-4 py-2">
                                <div class="row border" style="font-size: 0.8rem;">
                                    <div class="col-lg-3 pl-2">{{ Auth::guard('client')->user()->name }}</div>
                                    <div class="col-lg-4" style="margin: 5px 0px">
                                        {{ Auth::guard('client')->user()->email }}</div>
                                    <div class="col-lg-4" style="margin: 5px 0px">
                                        {{ Auth::guard('client')->user()->phone }}
                                        <div class="form-group" id="Rfquser" style="display:none">
                                            <input type="text" required="" class="form-control form-control-sm"
                                                id="phone" name="phone"
                                                value="{{ Auth::guard('client')->user()->phone }}"
                                                placeholder="Phone Number" style="font-size: 0.8rem;">
                                        </div>
                                    </div>
                                    <div class="col-lg-1" style="margin: 5px 0px"><a href="javascript:void(0);"
                                            id="editRfquser"><i class="fa fa-pencil" aria-hidden="true"></i></a></div>
                                </div>
                            </div>

                        </div>
                        <input type="hidden" name="product_id" value="{{ $sproduct->id }}">
                        <input type="hidden" name="client_id" value="{{ Auth::guard('client')->user()->id }}">
                        <input type="hidden" name="client_type" value="client">
                        <input type="hidden" name="name" value="{{ Auth::guard('client')->user()->name }}">
                        <input type="hidden" name="email" value="{{ Auth::guard('client')->user()->email }}">
                        <div class="modal-body get_quote_view_modal_body">


                            <div class="form-row">

                                <div class="form-group col-sm-4 m-0">

                                    <input type="text" class="form-control form-control-sm mt-4" id="contact"
                                        name="company_name" value="{{ Auth::guard('client')->user()->company_name }}"
                                        placeholder="Company Name" style="font-size: 0.7rem;">
                                </div>
                                <div class="form-group col-sm-4 m-0">

                                    <input type="number" class="form-control form-control-sm mt-4" id="contact"
                                        name="qty" placeholder="Quantity" style="font-size: 0.7rem;">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label class="m-0" for="image" style="font-size: 0.7rem;">Upload Image</label>
                                    <input type="file" name="image" class="form-control form-control-sm"
                                        id="image" accept="image/*" style="font-size: 0.7rem;" />
                                    <div class="form-text" style="font-size:11px;">Only png, jpg, jpeg images</div>

                                </div>

                                <div class="form-group col-sm-12 border text-white" style="background: #f9f6f0">
                                    <h6 class="text-center pt-1">Product Name : {{ $sproduct->name }}</h6>
                                </div>

                                <div class="form-group col-sm-12">

                                    <textarea class="form-control form-control-sm" id="message" name="message" rows="1"
                                        placeholder="Additional Information..."></textarea>
                                </div>

                                <div class="form-group  col-sm-12 px-3 mx-3">
                                    <input class="mr-2" type="checkbox" name="call" id="call" value="1">
                                    <label for="call">Also Please Call Me</label>

                                </div>
                                <div class="form-group col-sm-12 px-3 mx-3 message g-recaptcha"
                                    data-sitekey="{{ config('app.recaptcha_site_key') }}"></div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary col-lg-3" id="submit_btn">Submit &nbsp;<i
                                        class="fa fa-paper-plane"></i></button>
                            </div>
                        </div>

                    </form>
                @elseif (Auth::guard('partner')->user())
                    <form action="{{ route('rfq.add') }}" method="post" id="get_quote_frm"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card mx-4">
                            <div class="card-body p-4">
                                <div class="row border">
                                    <div class="col-lg-3 pl-2">Name: {{ Auth::guard('partner')->user()->name }}</div>
                                    <div class="col-lg-4" style="margin: 5px 0px">
                                        {{ Auth::guard('partner')->user()->primary_email_address }}</div>
                                    <div class="col-lg-4" style="margin: 5px 0px">
                                        {{ Auth::guard('partner')->user()->company_number }}</div>
                                    <div class="col-lg-1" style="margin: 5px 0px"><a href="javascript:void(0);"
                                            id="editRfqpartner"><i class="fa fa-pencil" aria-hidden="true"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="product_id" value="{{ $sproduct->id }}">
                        <input type="hidden" name="client_type" value="partner">
                        <input type="hidden" name="partner_id" value="{{ Auth::guard('partner')->user()->id }}">
                        <input type="hidden" name="name" value="{{ Auth::guard('partner')->user()->name }}">
                        <input type="hidden" name="email"
                            value="{{ Auth::guard('partner')->user()->primary_email_address }}">
                        <div class="modal-body get_quote_view_modal_body">

                            <div class="form-group col-sm-12 border text-white" style="background: #f9f6f0">
                                <h6 class="text-center pt-1 bg-white">Product Name : {{ $sproduct->name }}</h6>
                            </div>
                            <div class="row" id="Rfqpartner" style="display:none">
                                <div class="form-group col-sm-6">
                                    <input type="text" required="" class="form-control form-control-sm"
                                        id="phone" name="phone"
                                        value="{{ Auth::guard('partner')->user()->company_number }}"
                                        placeholder="Company Phone Number">
                                </div>
                                <div class="form-group  col-sm-6">
                                    <label for="contact">Company Name </label>
                                    <input type="text" class="form-control form-control-sm" id="contact"
                                        name="company_name" required
                                        value="{{ Auth::guard('partner')->user()->company_name }}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group  col-sm-6">

                                    <input type="number" class="form-control form-control-sm" id="contact"
                                        name="qty" placeholder="Quantity">
                                </div>
                                <div class="form-group  col-sm-6">
                                    <label for="contact">Upload Image </label>
                                    <input type="file" name="image" class="form-control form-control-sm"
                                        id="image" accept="image/*" />
                                    <div class="form-text" style="font-size:11px;">Accepts only png, jpg, jpeg images
                                    </div>
                                </div>

                                <div class="form-group  col-sm-12">
                                    <textarea class="form-control form-control-sm" id="message" name="message" rows="1"
                                        placeholder="Additional Text.."></textarea>
                                </div>

                                <div class="form-group  col-sm-12 px-3 mx-3">
                                    <input class="mr-2" type="checkbox" name="call" id="call" value="1">
                                    <label for="call">Also Please Call Me</label>
                                </div>
                                <div class="form-group col-sm-12 px-3 mx-3 message g-recaptcha"
                                    data-sitekey="{{ config('app.recaptcha_site_key') }}"></div>
                            </div>
                            <div class="modal-footer">

                                <button type="submit" class="btn btn-primary col-lg-3" id="submit_btn">Submit &nbsp;<i
                                        class="fa fa-paper-plane"></i></button>
                            </div>
                        </div>

                    </form>
                @else
                    <form action="{{ route('rfq.add') }}" method="post" id="get_quote_frm"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $sproduct->id }}">
                        <div class="modal-body get_quote_view_modal_body">
                            <div class="form-row">
                                <div class="form-group col-sm-12 border text-white" style="background: #f9f6f0">
                                    <h6 class="text-center pt-1">Product Name : {{ $sproduct->name }}</h6>
                                </div>

                                <div class="form-group col-sm-6">
                                    <label for="name">Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control form-control-sm" required=""
                                        id="name" name="name">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="email">Email <span class="text-danger">*</span></label>
                                    <input type="email" required="" class="form-control form-control-sm"
                                        id="email" name="email">
                                </div>
                                <div class="form-group  col-sm-6">
                                    <label for="contact">Mobile Number <span class="text-danger">*</span></label>
                                    <input type="text" required="" class="form-control form-control-sm"
                                        id="phone" name="phone">
                                </div>

                                <div class="form-group  col-sm-6">
                                    <label for="contact">Company Name </label>
                                    <input type="text" class="form-control form-control-sm" id="contact"
                                        name="company_name">
                                </div>
                                <div class="form-group  col-sm-6">
                                    <label for="contact">Quantity </label>
                                    <input type="number" class="form-control form-control-sm" id="contact"
                                        name="qty">
                                </div>
                                <div class="form-group  col-sm-6">
                                    <label for="contact">Custom Image </label>
                                    <input type="file" name="image" class="form-control form-control-sm"
                                        id="image" accept="image/*" />
                                    <div class="form-text" style="font-size:11px;">Accepts only png, jpg, jpeg images
                                    </div>
                                </div>

                                <div class="form-group  col-sm-12">
                                    <label for="message">Type Message</label>
                                    <textarea class="form-control form-control-sm" id="message" name="message" rows="4"></textarea>
                                </div>

                                <div class="form-group  col-sm-12 px-3 mx-3">
                                    <input class="mr-2" type="checkbox" name="call" id="call"
                                        value="1">
                                    <label for="call">Also Please Call Me</label>
                                </div>
                                <div class="form-group col-sm-12 px-3 mx-3 message g-recaptcha"
                                    data-sitekey="{{ config('app.recaptcha_site_key') }}"></div>
                            </div>
                            <div class="modal-footer">

                                <button type="submit" class="btn btn-primary col-lg-3" id="submit_btn">Submit
                                    &nbsp;<i class="fa fa-paper-plane"></i></button>
                            </div>
                        </div>
                    </form>
                @endif
            </div>
        </div>
    </div> --}}
    <!-- modal -->

    <script>
        function gfg(imgs) {
            var expandImg = document.getElementById("expand");
            var imgText = document.getElementById("geeks");
            expandImg.src = imgs.src;
            imgText.innerHTML = imgs.alt;
            expandImg.parentElement.style.display = "block";
        }
    </script>

    <script>
        //----- Quantity
        function increaseCount(a, b) {
            var input = b.previousElementSibling;
            var value = parseInt(input.value, 10);
            value = isNaN(value) ? 0 : value;
            value++;
            input.value = value;
        }

        function decreaseCount(a, b) {
            var input = b.nextElementSibling;
            var value = parseInt(input.value, 10);
            if (value > 1) {
                value = isNaN(value) ? 0 : value;
                value--;
                input.value = value;
            }
        }
    </script>

    <script>
        //---- Sidebar Tab Product
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>


    <script>
        $(document).ready(function() {
            $('#editRfquser').click(function() {
                $("#Rfquser").toggle(this.checked);
            });

        });
    </script>
@endsection
