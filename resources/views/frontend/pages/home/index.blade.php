@extends('frontend.master')
@section('content')
@section('styles')
    <meta property="og:title" content="NGen IT Ltd.">
    <!--<meta property="og:description" content="Description of your blog post">-->
    <meta property="og:image" content="{{ asset('storage/' . optional($home)->branner1) }}">
    <!--<meta property="og:url" content="URL to your blog post">-->
    <style>
        .training-featuer {
            background-color: #F3F4F8;
            border: 1px dashed #e5e6e7;
            /* border-radius: 0px; */
        }

        .feature-title {
            font-size: 40px;
            width: 50%;
            margin: auto;
            line-height: 1.3;
            text-align: center;
            font-weight: 600;
        }

        @media screen and (max-width: 769px) {
            .feature-title {
                font-size: 17px;
            }
        }

        .devider {
            margin: auto;
            padding: 3px;
            width: 70px;
            margin-top: 10px;
            height: 0px;
            background-color: #07163b;
        }

        .action-btnss {
            padding: 5px 65px;
            background-color: transparent;
            width: 12.5%;
        }

        .action-btnss-2 {
            padding: 10px 50px;
            background-color: white;
            width: 12.5%;
            border-radius: 5px;
        }

        .buttons-area {
            width: 40%;
            margin: auto;
        }

        .recent-course-name {
            height: 2.5rem;
            display: flex;
            align-items: center;
        }
    </style>
@endsection
<section class="">
    <!--======// Banner Section //======-->
    @if (!empty(optional($home)->branner1) || !empty(optional($home)->branner2) || !empty(optional($home)->branner3))
        <section>
            <div class="Advance-Slider">
                <!-- Item -->
                @if (!empty(optional($home)->branner1))
                    <div class="item">
                        <div class="img-fill">
                            <img class="dots-img"
                                src="{{ isset(optional($home)->branner1) && file_exists(public_path('storage/' . optional($home)->branner1)) ? asset('storage/' . optional($home)->branner1) : asset('frontend/images/banner-demo.png') }}"
                                alt="">
                            <div class="contain-wrapper">
                                <div class="dots-contain">
                                    <img class="dots-img"
                                        src="{{ isset(optional($home)->branner1) && file_exists(public_path('storage/' . optional($home)->branner1)) ? asset('storage/' . optional($home)->branner1) : asset('frontend/images/banner-demo.png') }}"
                                        alt="">
                                </div>
                                <div class="info w-50 mb-3">
                                    @if (optional($home)->banner1_title)
                                        <div>
                                            <h3><strong>{{ optional($home)->banner1_title }}</strong></h3>
                                            <h5 class="text-white my-4 w-75 mx-auto">
                                                {{ optional($home)->banner1_short_description }}
                                            </h5>
                                        </div>
                                    @endif
                                    @if (optional($home)->banner1_button_link)
                                        <div class="my-4">
                                            <a class="btn-color"
                                                href="{{ optional($home)->banner1_button_link }}">{{ optional($home)->banner1_button_name }}</a>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                <!-- // Item -->

                <!-- Item -->
                @if (!empty(optional($home)->branner2))
                    <div class="item">
                        <div class="img-fill">
                            <img src="{{ isset(optional($home)->branner2) && file_exists(public_path('storage/' . optional($home)->branner2)) ? asset('storage/' . optional($home)->branner2) : asset('frontend/images/banner-demo.png') }} "
                                alt="">
                            <div class="contain-wrapper">
                                <div class="dots-contain">
                                    <img class="dots-img"
                                        src="{{ isset(optional($home)->branner2) && file_exists(public_path('storage/' . optional($home)->branner2)) ? asset('storage/' . optional($home)->branner1) : asset('frontend/images/banner-demo.png') }}"
                                        alt="">
                                </div>
                                <div class="info w-50 mb-3">
                                    @if (optional($home)->banner2_title)
                                        <div>
                                            <h3><strong>{{ optional($home)->banner2_title }}</strong></h3>
                                            <h5 class="text-white my-4 w-75 mx-auto">
                                                {{ optional($home)->banner2_short_description }}
                                            </h5>
                                        </div>
                                    @endif
                                    @if (optional($home)->banner2_button_link)
                                        <div class="my-4">
                                            <a class="btn-color"
                                                href="{{ optional($home)->banner2_button_link }}">{{ optional($home)->banner2_button_name }}</a>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                <!-- // Item -->

                <!-- Item -->
                @if (!empty(optional($home)->branner3))
                    <div class="item">
                        <div class="img-fill">
                            <img src="{{ isset(optional($home)->branner3) && file_exists(public_path('storage/' . optional($home)->branner3)) ? asset('storage/' . optional($home)->branner3) : asset('frontend/images/banner-demo.png') }} "
                                alt="">
                            <div class="contain-wrapper">
                                <div class="dots-contain">
                                    <img class="dots-img"
                                        src="{{ isset(optional($home)->branner3) && file_exists(public_path('storage/' . optional($home)->branner3)) ? asset('storage/' . optional($home)->branner1) : asset('frontend/images/banner-demo.png') }}"
                                        alt="">
                                </div>
                                <div class="info w-lg-50 mb-3">
                                    @if (optional($home)->banner3_title)
                                        <div>
                                            <h3><strong>{{ optional($home)->banner3_title }}</strong></h3>
                                            <h5 class="text-white my-4 w-lg-75 mx-auto">
                                                {{ optional($home)->banner3_short_description }}
                                            </h5>
                                        </div>
                                    @endif
                                    @if (optional($home)->banner3_button_link)
                                        <div class="my-4">
                                            <a class="btn-color"
                                                href="{{ optional($home)->banner3_button_link }}">{{ optional($home)->banner3_button_name }}</a>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                <!-- // Item -->
            </div>
        </section>
    @endif

    <!---------End -------->
</section>
<!--======// Action section //======-->
<section class="d-sm-none d-lg-block">
    <div class="container">
        <div class="row py-5">
            <div class="col-lg-1">

            </div>
            <div class="col-lg-2">
                <div class="card training-featuer">
                    <div class="card-body py-3 ">
                        <div class="d-flex justify-content-center flex-column text-center">
                            <div class="home-feature">
                                <img class="img-fluid" width="35px"
                                    src="{{ asset('frontend/images/icons/icons2/project.png') }}" alt="">
                            </div>
                            <h6 class="fw-bolder pt-2">20+ Practice <br> Project</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card training-featuer">
                    <div class="card-body py-3 ">
                        <div class="d-flex justify-content-center flex-column text-center">
                            <div class="home-feature">
                                <img class="img-fluid" width="35px"
                                    src="{{ asset('frontend/images/icons/icons2/SupportClasses.png') }}"
                                    alt="">
                            </div>
                            <h6 class="fw-bolder pt-2">Support <br> Classes</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card training-featuer">
                    <div class="card-body py-3 ">
                        <div class="d-flex justify-content-center flex-column text-center">
                            <div class="home-feature">
                                <img class="img-fluid" width="35px"
                                    src="{{ asset('frontend/images/icons/icons2/certificate.png') }}" alt="">
                            </div>
                            <h6 class="fw-bolder pt-2">After Course <br> Certificate</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card training-featuer">
                    <div class="card-body py-3 ">
                        <div class="d-flex justify-content-center flex-column text-center">
                            <div class="home-feature">
                                <img class="img-fluid" width="35px"
                                    src="{{ asset('frontend/images/icons/icons2/LifetimeVideoAccess.png') }}"
                                    alt="">
                            </div>
                            <h6 class="fw-bolder pt-2">Lifetime Video <br> Access</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card training-featuer">
                    <div class="card-body py-3 ">
                        <div class="d-flex justify-content-center flex-column text-center">
                            <div class="home-feature">
                                <img class="img-fluid" width="35px"
                                    src="{{ asset('frontend/images/icons/icons2/MarketplaceGuideLine.png') }}"
                                    alt="">
                            </div>
                            <h6 class="fw-bolder pt-2">Marketplace <br> Guideline</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-1">

            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h1 class="feature-title"> {{ optional($home)->header1 }}</h1>
                <div class="devider"></div>
                <p class="text-center py-3 fs-5" style="color: #4d4d58">{{ optional($home)->header2 }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="buttons-area pt-1">
                    <div class="p-2 py-3 text-center d-flex justify-content-between align-items-center"
                        style="background-color: #F3F4F8;border-radius: 5px;">
                        <div>
                            {{-- <a href="{{ optional($home)->btn1_link }}" class="action-btnss fw-bolder">
                                {{ optional($home)->btn1_name }}
                            </a> --}}
                            <a href="{{ optional($home)->btn1_link }}" class="action-btnss fw-bolder">
                                What We Do
                            </a>
                        </div>
                        <div>
                            {{-- <a href="{{ optional($home)->btn2_link }}" class="bg-white action-btnss-2 fw-bolder">
                                {{ optional($home)->btn2_name }}
                            </a> --}}
                            <a href="{{ optional($home)->btn2_link }}" class="bg-white action-btnss-2 fw-bolder">
                                Course Registration
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="d-sm-block d-lg-none">
    <div class="container">
        <div class="row py-3">
            <div class="col-lg-12">
                <div class="trainingFeature">
                    <div class="item border-0">
                        <div class="card training-featuer mx-2">
                            <div class="card-body py-3 text-center">
                                <div class="d-flex justify-content-center flex-column text-center align-items-center">
                                    <div class="home-feature">
                                        <img class="img-fluid" width="35px"
                                            src="{{ asset('frontend/images/icons/icons2/project.png') }}"
                                            alt="">
                                    </div>
                                    <h6 class="fw-bolder pt-2">20+ Practice <br> Project</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item border-0">
                        <div class="card training-featuer mx-2">
                            <div class="card-body py-3 text-center">
                                <div class="d-flex justify-content-center flex-column text-center align-items-center">
                                    <div class="home-feature">
                                        <img class="img-fluid" width="35px"
                                            src="{{ asset('frontend/images/icons/icons2/SupportClasses.png') }}"
                                            alt="">
                                    </div>
                                    <h6 class="fw-bolder pt-2">20+ Practice <br> Project</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item border-0">
                        <div class="card training-featuer mx-2">
                            <div class="card-body py-3 text-center">
                                <div class="d-flex justify-content-center flex-column text-center align-items-center">
                                    <div class="home-feature">
                                        <img class="img-fluid" width="35px"
                                            src="{{ asset('frontend/images/icons/icons2/certificate.png') }}"
                                            alt="">
                                    </div>
                                    <h6 class="fw-bolder pt-2">20+ Practice <br> Project</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item border-0">
                        <div class="card training-featuer mx-2">
                            <div class="card-body py-3 text-center">
                                <div class="d-flex justify-content-center flex-column text-center align-items-center">
                                    <div class="home-feature">
                                        <img class="img-fluid" width="35px"
                                            src="{{ asset('frontend/images/icons/icons2/LifetimeVideoAccess.png') }}"
                                            alt="">
                                    </div>
                                    <h6 class="fw-bolder pt-2">20+ Practice <br> Project</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item border-0">
                        <div class="card training-featuer mx-2">
                            <div class="card-body py-3 text-center">
                                <div class="d-flex justify-content-center flex-column text-center align-items-center">
                                    <div class="home-feature">
                                        <img class="img-fluid" width="35px"
                                            src="{{ asset('frontend/images/icons/icons2/MarketplaceGuideLine.png') }}"
                                            alt="">
                                    </div>
                                    <h6 class="fw-bolder pt-2">20+ Practice <br> Project</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h1 class="feature-title"> {{ optional($home)->header1 }}</h1>
                <p class="text-center py-3">{{ optional($home)->header2 }}</p>
            </div>
        </div>
    </div>
</section>
<!--======// Business section //======-->
<section class="">
    <div class="container pt-5">
        @if (!empty($features) && array_filter($features))
            <!-- home title -->

            <!-- business content -->
            @if (!empty($features))
                <div class="d-lg-block d-sm-none">
                    <div class="row d-flex justify-content-center">
                        @foreach ($features as $feature)
                            @if (!empty($feature))
                                <div class="custom_col-2 col-md-6 col-sm-12">
                                    <div class="text-center">
                                        <img class="" width="70px"
                                            src="{{ !empty($feature->logo) && file_exists(public_path('storage/' . $feature->logo)) ? asset('storage/' . $feature->logo) : asset('frontend/images/service-no-img.png') }}"
                                            alt="NGEN IT">
                                        <h5 class="business_services pt-2">
                                            {{ Str::words($feature->badge, 10, $end = '') }}
                                        </h5>
                                    </div>
                                    <div class="feature_description">
                                        <p class="feature_descrip">{{ Str::words($feature->header, 12, $end = '') }}
                                        </p>
                                    </div>
                                    <a href="{{ route('feature.details', $feature->id) }}"
                                        class="business_item_button pt-3">
                                        <span>Learn More</span>
                                        <span class="business_item_button_icon">
                                            <i class="fa-solid fa-arrow-right-long"></i>
                                        </span>
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="row d-lg-none d-sm-block">
                    <div class="d-flex justify-content-center align-items-center px-3 mb-3 border-bottom">
                        <div class="text-start w-75">
                            <h3 class="main_color">Feature Contents</h3>
                        </div>
                        <div class="text-end w-25 d-flex">
                            <a class="Arrows custom-responsive-slider-prev me-1">
                                <i class="fa-solid fa-chevron-left fa-2x"
                                    style="cursor: pointer;
    font: 18px / 36px FontAwesome;
    text-align: center;
    transition: all 0.5s;
    background: #000;
    width: 38px;
    color: white;"></i>
                            </a>
                            <a class="Arrows custom-responsive-slider-next">
                                <i class="fa-solid fa-chevron-right fa-2x"
                                    style="cursor: pointer;
    font: 18px / 36px FontAwesome;
    text-align: center;
    transition: all 0.5s;
    background: #000;
    width: 38px;
    color: white;"></i>
                            </a>
                        </div>
                    </div>

                    <div class="owl-carousel custom-responsive-slider" style="z-index: 0 !important;">
                        @foreach ($features as $key => $feature)
                            @if (!empty($feature))
                                <div class="item">
                                    <div class="text-center">
                                        <div class="d-flex justify-content-center align-items-center story-mb">
                                            <img src="{{ !empty($feature->logo) && file_exists(public_path('storage/' . $feature->logo)) ? asset('storage/' . $feature->logo) : asset('frontend/images/service-no-img.png') }}"
                                                alt="NGEN IT" style="width: 80px;">
                                        </div>
                                        <h5 class="business_services pt-2">
                                            {{ Str::words($feature->badge, 10, $end = '') }}</h5>
                                    </div>
                                    <div class="feature_description">
                                        <p class="feature_descrip">{{ Str::words($feature->header, 12, $end = '') }}
                                        </p>
                                    </div>
                                    <a href="{{ route('feature.details', $feature->id) }}"
                                        class="business_item_button pt-3">
                                        <span>Learn More</span>
                                        <span class="business_item_button_icon">
                                            <i class="fa-solid fa-arrow-right-long"></i>
                                        </span>
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            @endif
            <!-- button -->
            @if (!empty($features))
                <div class="d-flex justify-content-center my-5">
                    <a class="btn-color" href="{{ route('learn.more') }}">Learn More</a>
                </div>
            @endif
        @endif
    </div>
</section>

<!---------End -------->
<!--=======// Shop product //======-->
{{-- <section class="spacer learn_more py-lg-3">
    <div class="container py-lg-5 py-4">
        <div class="row align-items-center">
            <!-- content -->
            <div class="col-lg-8 col-sm-12">
                <div class="home_shop_product_wrapper home_shop_product">
                    <h5> Shop Products and Hardware</h5>
                    <p class="text-justify w-75 w-sm-100">
                        Among More than
                        <strong class="main_color number-font" style="font-size:20px;">
                            {{ $productCount }}
                            <small>products</small>
                        </strong>
                        and
                        <strong class="main_color number-font" style="font-size:20px;">
                            {{ $brandCount }}
                            <small>brands</small>
                        </strong>
                        at your service, we can provide you with the tools
                        you need to succeed. Additionally, you may easily ask your exact requirements or contact us at
                        anytime.
                    </p>
                    <div class="mt-lg-5 mt-4 btn-area">
                        <a href="{{ route('shop.html') }}" class="btn-color">Explore Shop</a>
                    </div>
                </div>
            </div>
            <!-- product brand -->
            <div class="col-lg-4 col-sm-12 product_brand">
                <div>
                    <p class="fw-bold top-line-title"><span style="border-top: 4px solid #ae0a46;">Exp</span>lore
                        Categories
                    </p>

                    <div class="">
                        <a href="{{ route('all.brand') }}">
                            <div id="fed-bg">
                                <div class="p-2">
                                    <h3 class="text-white brand_side_text">Brands ›</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="pt-2">
                        <a href="{{ route('all.category') }}">
                            <div id="fed-bg">
                                <div class="p-2">
                                    <h3 class="text-white brand_side_text">Product Categories ›</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class=" pt-2">
                        <a href="{{ route('software.common') }}">
                            <div id="fed-bg">
                                <div class="p-2">
                                    <h3 class="text-white brand_side_text">Software ›</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class=" pt-2">
                        <a href="{{ route('hardware.common') }}">
                            <div id="fed-bg">
                                <div class="p-2">
                                    <h3 class="text-white brand_side_text">Hardware ›</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section> --}}
<!---------End -------->
<!--=======// Client Story //======-->
{{-- @if (!empty($story) | !empty($story2) | !empty($story3) | !empty($story4)) --}}
@if (!empty($storys) && array_filter($storys))
    <section>
        <div class="container my-4 mb-5 d-lg-block d-sm-none">
            <h2 class="text-center">
                <span style="color: #07163b;font-weight: 600;">
                    Upcoming Courses
                </span>
            </h2>
            <div class="row">
                @foreach ($storys as $story)
                    @if (!empty($story))
                        <div class="col-lg-3">
                            <div class="client_story_box">
                                <div class="details-titles pt-4 ps-4 pb-3">
                                    <p class="pb-5">{{ $story->badge }}</p>
                                </div>
                                <div class="grid-river">
                                    <figure class="effect-oscar">
                                        <img src="{{ !empty($story->thumbnail_image) && file_exists(public_path('storage/' . $story->thumbnail_image)) ? asset('storage/' . $story->thumbnail_image) : asset('frontend/images/banner-demo.png') }}"
                                            alt="">
                                        <figcaption>
                                            {{-- <h6> {{ Str::words($story->title, 6) }}</h6> --}}
                                            {{-- <p>{{ Str::words($story->header, 10) }}</p> --}}
                                            <h5 class="download-hover-btn mt-5 pt-3">
                                                <a class="text-white"
                                                    href="{{ route('story.details', $story->id) }}">Read Story
                                                    <i class="fa-solid fa-chevron-right" style="font-size: 12px;"></i>
                                                </a>
                                            </h5>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        <div class="container my-4 mb-5 d-lg-none d-sm-block">
            <div class="d-flex justify-content-center align-items-center mx-3 border-bottom">
                <div class="text-start w-75">
                    <h3 style="color: #07163b;font-weight: 600;">Soon To Start Courses!</h3>
                </div>
                <div class="text-end w-25 d-flex">
                    <a class="Arrows custom-responsive-slider-prev me-1">
                        <i class="fa-solid fa-chevron-left fa-2x"
                            style="cursor: pointer;
    font: 18px / 36px FontAwesome;
    text-align: center;
    transition: all 0.5s;
    background: #000;
    width: 38px;
    color: white;"></i>
                    </a>
                    <a class="Arrows custom-responsive-slider-next me-1">
                        <i class="fa-solid fa-chevron-right fa-2x"
                            style="cursor: pointer;
    font: 18px / 36px FontAwesome;
    text-align: center;
    transition: all 0.5s;
    background: #000;
    width: 38px;
    color: white;"></i>
                    </a>
                </div>
            </div>

            <div class="owl-carousel custom-responsive-slider" style="z-index: 0 !important;">
                @foreach ($storys as $key => $story)
                    <div class="item border-0">
                        @if (!empty($story))
                            <div class="client_story_box">
                                <div class="details-titles pt-3 ps-4 pb-3">
                                    <p class="pb-5">{{ $story->badge }}</p>
                                </div>
                                <div class="grid-river">
                                    <figure class="effect-oscar">
                                        <img src="{{ !empty($story->thumbnail_image) && file_exists(public_path('storage/' . $story->thumbnail_image)) ? asset('storage/' . $story->thumbnail_image) : asset('frontend/images/no-shop-imge.png') }}"
                                            alt="">
                                        <figcaption>
                                            {{-- <h6> {{ Str::words($story->title, 6) }}</h6> --}}
                                            <p>{{ Str::words($story->header, 10) }}</p>
                                            <h5 class="download-hover-btn">
                                                <a class="text-white"
                                                    href="{{ route('story.details', $story->id) }}">Read Story
                                                    <i class="fa-solid fa-chevron-right" style="font-size: 12px;"></i>
                                                </a>
                                            </h5>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endif
<!--======// Magazine Section //======-->
@if (!empty($techglossy))
    <section>
        <div class="container spacer">
            <div class="row bg-white magazine_content">
                <div class="col-lg-12">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="holder-main-text ps-5">
                                {{-- <h6>{{ $techglossy->badge }}</h6> --}}
                                <h6 class="title-tag text-capitalize">{{ $techglossy->badge }}</h6>
                                <h2 class="container-title">
                                    {{ $techglossy->title }}
                                </h2>
                                <p class="pt-3" style="text-align: justify">
                                    {!! Str::words(strip_tags($techglossy->short_des), 50) !!}
                                    {{-- {{ $techglossy->header }} --}}
                                </p>
                                <a href="{{ route('techglossy.details', $techglossy->id) }}"
                                    class="pt-3 business_item_button d-flex justify-content-start">
                                    <span>Read More</span>
                                    <span class="business_item_button_icon">
                                        <i class="fa-solid fa-arrow-right-long" aria-hidden="true"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 p-0 d-lg-block d-sm-none">
                            <div class="showcase-industry-bottom" style="position: relative; overflow: hidden;">
                                <!-- Add a pseudo-element for the overlay -->
                                <div class="gradient-overlay"></div>
                                <img class="img-fluid overlays-img"
                                    src="{{ isset($techglossy->thumbnail_image) && file_exists(public_path('storage/' . $techglossy->thumbnail_image)) ? asset('storage/' . $techglossy->thumbnail_image) : asset('frontend/images/banner-demo.png') }}"
                                    alt="Picture" style="border-top-right-radius: 60px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
<!----------End--------->
<!--=======// Popular products //======-->

{{-- =========================== --}}
<!---------End -------->
<section>
    <div class="container p-0 my-4">
        <div class="Container spacer">
            <h3 class="Head main_color">Recent Courses <span class="Arrows"></span></h3>
            <!-- Carousel Container -->
            <div class="SlickCarousel">
                @if ($courses)
                    @foreach ($courses as $course)
                        <!-- Item -->
                        <div class="ProductBlock mb-3 mt-3">
                            <div class="card border-0 bg-light shadow-sm rounded-2">
                                <div class="card-header p-0 bg-transparent">

                                    <div>
                                        <img class="rounded-2 releted-course-home"
                                            src="{{ asset(!empty($course->thumbnail_image) ? url('storage/course/' . $course->thumbnail_image) : url('images/no-shop-imge.png')) }}"
                                            alt="">
                                    </div>

                                    <div class="p-2 text-center">

                                        <small class="pe-1"><span class="cource-badge rounded-2">ব্যাচ
                                                ২</span></small>

                                        <small class="pe-1"><span class="cource-badge rounded-2"><i
                                                    class="fa-solid fa-users pe-2" aria-hidden="true"></i>
                                                {{ $course->available_seats }}</span></small>

                                        <small class="pe-1">
                                            <span class="cource-badge rounded-2">
                                                <i class="fa-regular fa-clock pe-2" aria-hidden="true"></i>২৭দিন বাকি
                                            </span>
                                        </small>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h6 class="recent-course-name px-2">
                                        {{ $course->name }}
                                    </h6>
                                    <div class="pt-3">
                                        <a href="{{ url('course' . '/' . $course->id . '/' . $course->slug) }}"
                                            class="btn btn-light bg-white border w-100 bistatiro-btn">বিস্তারিত
                                            দেখি
                                            <i class="fa-solid fa-arrow-right ps-2" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
            <!-- Carousel Container -->
        </div>
    </div>
</section>
<!---------Our Success Section-------->

@if (!empty($successItems) && array_filter($successItems))
    <section class="success_section">
        <div class="container my-4 pb-4 d-lg-block d-sm-none">
            <h2 class="text-center pb-5">Our Success <span class="main_color">Starts With</span> Our Culture.</h2>
            <div class="row success-area">
                @foreach ($successItems as $key => $successItem)
                    @if (!empty($successItem->title))
                        <div class="col-lg-4">
                            <!---------Column  Content -------->
                            <div class="success-area-content">
                                <div class="pb-2">
                                    <img width="50px" src="{{ asset('storage/' . $successItem->image) }}"
                                        alt="">
                                </div>
                                <div class="success-divider-{{ $key }}"></div>
                                <h4 class="success-divider-title-{{ $key }} pb-2">{{ $successItem->title }}
                                </h4>
                                <p>{{ $successItem->description }}</p>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        <div class="container d-lg-none d-sm-block">
            <h3 class="text-center">Our Success <span class="main_color">Starts With</span> Our Culture.</h3>
            <div class="row">
                <div class="d-flex justify-content-between px-4">
                    <a class="Arrows custom-responsive-slider-prev">
                        <i class="fa-solid fa-chevron-left fa-2x"
                            style="cursor: pointer;
    font: 18px / 36px FontAwesome;
    text-align: center;
    transition: all 0.5s;
    background: #000;
    width: 38px;
    color: white;"></i>
                    </a>
                    <a class="Arrows custom-responsive-slider-next">
                        <i class="fa-solid fa-chevron-right fa-2x"
                            style="cursor: pointer;
    font: 18px / 36px FontAwesome;
    text-align: center;
    transition: all 0.5s;
    background: #000;
    width: 38px;
    color: white;"></i>
                    </a>
                </div>
                <div class="owl-carousel custom-responsive-slider" style="z-index: 0 !important;">
                    @foreach ($successItems as $key => $successItem)
                        @if (!empty($successItem->title))
                            <div class="item border-0">
                                <div class="success-area-content success-area-content-mobile">
                                    <div class="pb-2">
                                        <img src="{{ asset('storage/' . $successItem->image) }}" alt=""
                                            style="width: 50px;">
                                    </div>
                                    <div class="success-divider-{{ $key }}"></div>
                                    <h4 class="success-divider-title-{{ $key }} pb-2">
                                        {{ $successItem->title }}
                                    </h4>
                                    <p>{{ $successItem->description }}</p>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>

            </div>
        </div>
    </section>
@endif

<!---------End -------->
@endsection
@push('scripts')
<script>
    $(document).ready(function() {
        $('.trainingFeature').slick({
            autoplay: true,
            autoplaySpeed: 7000,
            speed: 1500,
            slidesToShow: 2,
            slidesToScroll: 1,
            dots: false,
            pauseOnHover: false,
            infinite: false,
            prevArrow: false
        });
    });
</script>
@endpush
