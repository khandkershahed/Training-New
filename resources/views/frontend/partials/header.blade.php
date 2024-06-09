<section class="main_header_area">
    <div class="fixed-section header">
        {{-- Top Bar Area --}}
        <div class="container-fluid top-bar p-0">
            <div class="row gx-0 top-bar-bg">
                <div class="col-lg-8 top-bar-curve-area d-lg-block d-sm-none">
                    {{-- Empty Are --}}
                </div>
                <div class="col-lg-4 top-bar-right-side" style="z-index: 999;">
                    <div class="d-flex justify-content-between align-items-center top-menu-area">
                        <div class="">
                            {{-- <span class="text-white">My</span><span class="text-white">NGen It</span> --}}
                            <div class="dropdown drop-top">
                                <a href="javascript:void(0)"
                                    class="dropdown-toggle top-info-text top-info-text text-white" type="button"
                                    id="dropdownMenuClickableInside" data-bs-toggle="dropdown"
                                    data-bs-auto-close="outside" aria-expanded="false">
                                    <i class="fa-solid fa-phone-volume me-1" style="transform: rotate(7deg);"></i>
                                    SUPPORT <span class="number-font header_top_phone">|
                                        {{ optional($setting)->primary_phone }}</span>
                                </a>
                                <div class="dropdown-menu drop-down-menus2" aria-labelledby="dropdownMenuButton">
                                    <div class="popover__content text-start">
                                        {{-- <div class="text-muted">
                                            Call Us-
                                            <a href="tel:{{ optional($setting)->phone_one }}"
                                                class="main_color">{{ optional($setting)->phone_one }}</a>
                                        </div> --}}
                                        <hr class="text-muted" />
                                        <div class="d-flex flex-column align-items-center">
                                            <a href="https://wa.me/{{ optional($setting)->secondary_phone }}"
                                                class="mx-auto py-2 btn-color mb-2 top-info-text w-100"
                                                style="font-size: 13px">
                                                <i class="fa-brands fa-whatsapp"></i> <span>Whats App</span>
                                            </a>
                                            {{-- <a href="skype:<ngenit>?chat"
                                                class="mx-auto py-2 btn-color top-info-text w-100"
                                                style="font-size: 13px">
                                                <i class="fa-brands fa-skype"></i> <span>Skype</span>
                                            </a> --}}
                                        </div>
                                        <hr class="text-muted" />
                                        <div class="text-center">
                                            <small class="main_color">Hotline:</small> <br>
                                            <small><a href="">{{ optional($setting)->primary_phone }}</a></small>
                                            <small><a href="">{{ optional($setting)->primary_email }}</a></small>
                                        </div>
                                        {{-- <ul class="account p-0 text-muted text-start">
                                            <li>
                                                Check Our
                                                <a href="{{ route('shop') }}" target="_blank" class="main_color">Shop
                                                    Products</a>
                                            </li>
                                            <li>
                                                Check Our
                                                <a href="{{ route('all.solution') }}" target="_blank"
                                                    class="main_color">Solution</a>
                                            </li>
                                        </ul> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center ">
                            {{-- <div class="d-lg-block d-sm-none">
                                <a href="" class="top-info-text text-white pe-3"><i
                                        class="fa-regular fa-circle-question me-1"></i> RFQ</a>
                            </div> --}}
                            <div>
                                {{-- <span class="text-white">My</span><span class="text-white">NGen It</span> --}}
                                <div class="dropdown drop-top">
                                    <a href="javascript:void(0)"
                                        class="dropdown-toggle top-info-text top-info-text text-white" type="button"
                                        id="dropdownMenuClickableInside" data-bs-toggle="dropdown"
                                        data-bs-auto-close="outside" aria-expanded="false">
                                        <i class="fa-regular fa-star" style="font-size: 14px"></i>
                                        <span class="">MY</span><span class="">NGEN IT</span>
                                    </a>
                                    <div class="dropdown-menu drop-down-menus" aria-labelledby="dropdownMenuButton">
                                        <div class="popover__content-2 text-start">

                                            @if (Auth::user())
                                                <li>
                                                    <i class="fa fa-user m-2"></i>
                                                    <a href="{{ route('dashboard') }}" class="">My
                                                        Profile</a>
                                                </li>
                                                {{-- <li>
                                                    <i class="fa fa-envelope m-2"></i>
                                                    <a href="{{ route('orders') }}" class="">My Orders</a>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star m-2"></i>
                                                    <a href="{{ route('rfq') }}" class="">My RFQs/Deals</a>
                                                </li> --}}
                                                <li>
                                                    <i class="fa fa-list m-2"></i>
                                                    <a href="javascript:void(0)" class="">My Requests</a>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-right-from-bracket m-2"></i>
                                                    <a href="{{ route('logout') }}" class="">Log Out</a>
                                                </li>
                                                <hr class="text-muted" />
                                            @else
                                                <a href="{{ route('login') }}"
                                                    class="mx-auto py-2 btn-color top-info-text w-100"
                                                    style="font-size: 13px">
                                                    Sign In
                                                </a>

                                                <hr class="text-muted" />
                                            @endif
                                            <ul class="account p-0 text-muted text-start">
                                                @unless (Auth::user())
                                                    <li class="mb-2">
                                                        Sign In To Your
                                                        <a href="{{ route('login') }}" target="_blank"
                                                            class="main_color">Client Account</a>
                                                    </li>
                                                @endunless
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Menu And Logo Area --}}
        <div class="row px-2">
            <nav class="navbar navbar-expand-lg p-2 main-navbar bg-white menu-section">
                <div class="container-fluid d-flex align-items-center" style="height: 3.5rem">
                    <div class="step-img d-lg-block d-sm-none">
                        <img src="https://i.ibb.co/t3Zrbj2/Asset-1-8.png" alt="">
                    </div>
                    <a class="navbar-brand fw-bold upper-content-menu main-logo" href="{{ route('homepage') }}">
                        <img class="img-fluid site-main-logo"
                            src="{{ !empty(optional($setting)->site_logo) && file_exists(public_path('storage/' . optional($setting)->site_logo)) ? asset('storage/' . optional($setting)->site_logo) : asset('frontend/images/brandPage-logo-no-img(217-55).jpg') }}"
                            alt="NGEN IT">
                    </a>
                    <!---Category--->
                    {{-- <div class="category-mobile">
                        <div class="dropdown position-static header-category-button-60">
                            <a class="tab_btn_icon upper-content-menu" href="#" role="button"
                                id="dropdownMenuLink2" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                aria-expanded="false" style="padding-left: none !important;">
                                <i class="fa-solid fa-bars" style="font-size: 18px !important;"></i>
                            </a>
                            <ul class="dropdown-menu w-100 extra_category bg-none"
                                aria-labelledby="dropdownMenuLink2">
                                <section class="header">
                                    <div class="container-fluid">
                                        <div class="row tab_area_main category-center">
                                            <!-- Assuming $categories is already available in your controller or view -->

                                            <div class="col-md-2 tab_key_btns p-0 ">
                                                <div class="nav nav-custom flex-column nav-pills2 nav-pills-custom2"
                                                    id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                    @foreach ($categories as $key => $category)
                                                        <a class="nav-link catregory-side-key {{ $key === 0 ? 'show active' : '' }}"
                                                            id="v-pills-home-tab{{ $category->id }}"
                                                            data-toggle="pill"
                                                            href="#v-pills-home{{ $category->id }}" role="tab"
                                                            aria-controls="v-pills-home{{ $category->id }}"
                                                            aria-selected="true">
                                                            <span class="ps-1">-&nbsp;
                                                                {{ $category->title }}</span>
                                                        </a>
                                                    @endforeach
                                                </div>
                                            </div>

                                            <div class="col-md-10 p-0 bg-white">
                                                <div class="tab-content" id="v-pills-tabContent">
                                                    @foreach ($categories as $key => $category)
                                                        <div class="tab-pane fade rounded-0 p-1 {{ $key === 0 ? 'show active' : '' }}"
                                                            id="v-pills-home{{ $category->id }}" role="tabpanel"
                                                            aria-labelledby="v-pills-home-tab{{ $category->id }}"
                                                            style="height: 22rem;">

                                                            <div class="row p-4">
                                                                @foreach ($category->subCategorys as $sub_category)
                                                                    <div class="col-lg-3 col-sm-6">
                                                                        <div class="fw-bold nav_title mb-2"
                                                                            style="font-size: 17px;">
                                                                            <span
                                                                                style="border-top: 4px solid #ae0a46;">{{ \Illuminate\Support\Str::substr($sub_category->title, 0, 3) }}</span>{{ \Illuminate\Support\Str::substr($sub_category->title, 3) }}
                                                                        </div>

                                                                        @foreach ($sub_category->subsubCategorys as $item)
                                                                            <li class="py-2"
                                                                                style="line-height: 1 !important;">
                                                                                <a class="p-0"
                                                                                    href="{{ route('category.html', $item->slug) }}">
                                                                                    <div>
                                                                                        {{ $item->title }}&nbsp;<i
                                                                                            class="ph ph-caret-right menu_icons"></i>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                        @endforeach
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </section>
                            </ul>
                        </div>
                    </div> --}}
                    <!---Category--->
                    <form method="post" action="{{ route('course.search') }}"
                        class="d-flex upper-content-menu justify-content-center align-items-center d-lg-none"
                        role="search">
                        @csrf
                        <div class="input-group flex-nowrap search-input-container">
                            <span class="input-group-text search-box-areas" id="addon-wrapping"><i
                                    class="fa-solid fa-magnifying-glass"></i></span>
                            <input class="form-control search-input-field search" id="mobile_search_text"
                                name="search" type="search" placeholder="Search From Here..."
                                aria-describedby="addon-wrapping">
                        </div>
                    </form>
                    <a href="javascript:void(0)" class="nvabar-toggler tab_btn_icon upper-content-menu d-lg-none"
                        type="button" data-bs-toggle="offcanvas" data-bs-target="#rightOffcanvas"
                        aria-controls="rightOffcanvas">
                        <i class="fa-solid fa-bars main_color" style="font-size: 15px !important;"></i>
                    </a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <form class="d-flex ms-auto upper-content-menu" method="post"
                            action="{{ route('course.search') }}" role="search">
                            @csrf
                            <div class="input-group flex-nowrap search-input-container">
                                <span class="input-group-text search-box-areas" id="addon-wrapping"><i
                                        class="fa-solid fa-magnifying-glass"></i></span>
                                <input class="form-control search-input-field search" id="search_text" name="search"
                                    type="search" placeholder="Search for products, solutions & more..."
                                    aria-describedby="addon-wrapping">
                            </div>
                        </form>
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <hr>
                            <li class="nav-item dropdown position-static main-menu-spacing">
                                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                    <li class="nav-item pe-3">
                                        <a class="nav-link pe-0" href="{{ route('homepage') }}" >
                                            Home
                                        </a>
                                    </li>
                                    <li class="nav-item pe-3">
                                        <a class="nav-link pe-0" href="{{ route('courses.all') }}" >
                                            All Courses
                                        </a>
                                    </li>
                                    <li class="nav-item pe-3">
                                        <a class="nav-link pe-0" href="{{ route('course.registration') }}" >
                                           Registration
                                        </a>
                                    </li>
                                    <li class="nav-item pe-3">
                                        <a class="nav-link pe-0" href="{{ route('contact') }}" >
                                           Contact Us
                                        </a>
                                    </li>
                                    {{-- <li class="nav-item dropdown position-static">
                                        <a class="nav-link dropdown-toggle pe-0" href="#" role="button"
                                            data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                            aria-expanded="false">
                                            CONNECT US
                                        </a>
                                        <ul class="dropdown-menu full-container-dropdown"
                                            style="border-top: 1px solid #ae0a460f !important; width:100%; ">
                                            <div class="container-fluid px-0">
                                                <div class="row header-menu-content">
                                                    <div class="col-lg-4 pt-5"style="background: #f7f6f5;">
                                                        <li class="d-flex justify-content-center flex-column py-3"
                                                            style="height: 22rem; max-height: 100%">
                                                            <p class="fw-bold text-center">
                                                                <span
                                                                    style="border-top: 4px solid #ae0a46">Soc</span>ial
                                                            </p>
                                                            <div
                                                                class="d-flex justify-content-center align-items-center">
                                                                <a
                                                                    href="{{ !empty(optional($setting)->facebook_url) ? optional($setting)->facebook_url : '' }}">
                                                                    <div
                                                                        class="social_icons me-2 text-center text-white">
                                                                        <i class="fa-brands fa-facebook-f"></i>
                                                                    </div>
                                                                </a>
                                                                <a
                                                                    href="{{ !empty(optional($setting)->twitter_url) ? optional($setting)->twitter_url : '' }}">
                                                                    <div
                                                                        class="social_icons me-2 text-center text-white">
                                                                        <i class="fa-brands fa-linkedin-in"></i>
                                                                    </div>
                                                                </a>
                                                                <a
                                                                    href="{{ !empty(optional($setting)->linkedin_url) ? optional($setting)->linkedin_url : '' }}">
                                                                    <div
                                                                        class="social_icons me-2 text-center text-white">
                                                                        <i class="fa-brands fa-twitter"></i>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div
                                                                class="d-flex justify-content-center align-items-center">
                                                                <a
                                                                    href="{{ !empty(optional($setting)->youtube_url) ? optional($setting)->youtube_url : '' }}">
                                                                    <div
                                                                        class="social_icons me-2 text-center text-white">
                                                                        <i class="fa-brands fa-youtube"></i>
                                                                    </div>
                                                                </a>
                                                                <a
                                                                    href="{{ !empty(optional($setting)->instagram_url) ? optional($setting)->instagram_url : '' }}">
                                                                    <div
                                                                        class="social_icons me-2 text-center text-white">
                                                                        <i class="fa-brands fa-instagram"></i>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div
                                                                class="d-flex justify-content-center align-items-center">
                                                                <a href="#">
                                                                    <div
                                                                        class="social_icons me-2 text-center text-white">
                                                                        <i class="fa-solid fa-user"></i>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </li>
                                                    </div>
                                                    <div class="col-lg-8 pt-5 pe-4">
                                                        <div class="row connect-us-header">
                                                            <div class="col-lg-4">
                                                                <p class="fw-bold pb-3">
                                                                    <span
                                                                        style="border-top: 4px solid #ae0a46">Our</span>
                                                                    Company
                                                                </p>
                                                                <div class="row">
                                                                    <div class="col-lg-12 mb-2">
                                                                        <a class="d-flex align-items-center pb-2"
                                                                            href="{{ route('about') }}">
                                                                            <div>About Us</div>
                                                                            <div>
                                                                                <i
                                                                                    class="ph ph-caret-right menu_icons"></i>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-lg-12 mb-2">
                                                                        <a class="d-flex align-items-center pb-2"
                                                                            href="{{ route('portfolio') }}">
                                                                            <div>Portfolio</div>
                                                                            <div>
                                                                                <i
                                                                                    class="ph ph-caret-right menu_icons"></i>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-lg-12 mb-2">
                                                                        <a class="d-flex align-items-center pb-2"
                                                                            href="{{ route('contact') }}">
                                                                            <div>Contact Us</div>
                                                                            <div>
                                                                                <i
                                                                                    class="ph ph-caret-right menu_icons"></i>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <p class="fw-bold pb-3">
                                                                    <span
                                                                        style="border-top: 4px solid #ae0a46">Car</span>eer
                                                                    With Us
                                                                </p>
                                                                <div class="row">
                                                                    <div class="col-lg-12 mb-2">
                                                                        <a class="d-flex align-items-center pb-2"
                                                                            href="">
                                                                            <div>Find Jobs</div>
                                                                            <div>
                                                                                <i
                                                                                    class="ph ph-caret-right menu_icons"></i>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-lg-12 mb-2">
                                                                        <a class="d-flex align-items-center pb-2"
                                                                            href="">
                                                                            <div>Job Applicant Login</div>
                                                                            <div>
                                                                                <i
                                                                                    class="ph ph-caret-right menu_icons"></i>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-lg-12 mb-2">
                                                                        <a class="d-flex align-items-center pb-2"
                                                                            href="{{ route('job.registration') }}">
                                                                            <div>Make Your CV</div>
                                                                            <div>
                                                                                <i
                                                                                    class="ph ph-caret-right menu_icons"></i>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <p class="fw-bold pb-3">
                                                                    <span
                                                                        style="border-top: 4px solid #ae0a46">Par</span>tner
                                                                    With Us
                                                                </p>
                                                                <div class="row">
                                                                    <div class="col-lg-12 mb-2">
                                                                        <a class="d-flex align-items-center pb-2"
                                                                            href="">
                                                                            <div>Partner Registration</div>
                                                                            <div>
                                                                                <i
                                                                                    class="ph ph-caret-right menu_icons"></i>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-lg-12 mb-2">
                                                                        <a class="d-flex align-items-center pb-2"
                                                                            href="javascript:void(0);">
                                                                            <div>Investor</div>
                                                                            <div>
                                                                                <i
                                                                                    class="ph ph-caret-right menu_icons"></i>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-lg-12 mb-2">
                                                                        <a class="d-flex align-items-center pb-2"
                                                                            href="javascript:void(0);">
                                                                            <div>News Room</div>
                                                                            <div>
                                                                                <i
                                                                                    class="ph ph-caret-right menu_icons"></i>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row header-bottom-link">
                                                            <div class="col-lg-12">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center py-1">
                                                                    <div class="m-0 d-flex"
                                                                        style="font-family: 'Libre Franklin', sans-serif;">
                                                                        <h2>Help </h2>
                                                                        <h2>
                                                                            <i class="fa-solid fa-arrow-right-long ps-3" style="font-size: 24px;color: #ae0a46;"></i>
                                                                        </h2>
                                                                    </div>
                                                                    <div>
                                                                        <p class="m-0 p-0 mb-1">
                                                                            <span>
                                                                                <i class="fa-brands fa-whatsapp help-icons"></i>
                                                                            </span>
                                                                            <span class="ps-2">+880 1714243446</span>
                                                                        </p>
                                                                        <p class="m-0 p-0 mb-1">
                                                                            <span>
                                                                                <i class="fa-brands fa-skype help-icons"></i>
                                                                            </span>
                                                                            <span class="ps-2">+1 917-720-3055</span>
                                                                        </p>
                                                                    </div>
                                                                    <div>
                                                                        <p class="m-0 p-0 mb-1">
                                                                            <span>
                                                                                <i class="fa-solid fa-envelope-open-text help-icons"></i>
                                                                            </span>
                                                                            <span class="ps-2">sales@ngenitltd.com</span>
                                                                        </p>
                                                                        <p class="m-0 p-0 mb-1">
                                                                            <span>
                                                                                <i class="fa-solid fa-handshake help-icons"></i>
                                                                            </span>
                                                                            <span
                                                                                class="ps-2">partners@ngenitltd.com</span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </ul>
                                    </li> --}}
                                </ul>
                            </li>
                    </div>
                </div>
            </nav>
        </div>
        <div class="row container mx-auto sticky-top">
            <div class="card d-none shadow-lg bg-white border rounded-0 mt-0" id="search_container">

            </div>
        </div>
        <div class="row container mx-auto sticky-top">
            <div class="card d-none shadow-lg bg-white border rounded-0 mt-0" id="mobile_search_container">

            </div>
        </div>
    </div>
</section>


{{-- Mobile Menu Offcanvas --}}
<div class="offcanvas offcanvas-end" tabindex="-1" id="rightOffcanvas" aria-labelledby="rightOffcanvasLabel">
    <div class="offcanvas-header">
        <a class="navbar-brand fw-bold upper-content-menu main-logo" href="">
            <img height="50px"
                src="{{ !empty(optional($setting)->site_logo) && file_exists(public_path('storage/' . optional($setting)->site_logo)) ? asset('storage/' . optional($setting)->site_logo) : asset('frontend/images/brandPage-logo-no-img(217-55).jpg') }}"
                alt="NGEN IT">
            {{-- <img height="50px"
                src="{{asset('storage/' . optional($setting)->site_logo)}}"
                alt="NGEN IT"> --}}
        </a>



        <button class="offcanvas-icons upper-content-menu text-reset" data-bs-dismiss="offcanvas" aria-label="Close"
            style="padding-left: none !important;">
            <i class="fa-solid fa-xmark" style="font-size: 18px !important;"></i>
        </button>
    </div>
    <div class="offcanvas-body pt-0 px-0">
        <div>
            <form method="post" action="{{ route('course.search') }}"
                class="d-flex ms-auto upper-content-menu justify-content-center align-items-center d-none" role="search">
                @csrf
                <div class="input-group flex-nowrap search-input-container">
                    <span class="input-group-text search-box-areas" id="addon-wrapping"><i
                            class="fa-solid fa-magnifying-glass"></i></span>
                    <input type="text" class="form-control search-input-field" id="search_text" name="search"
                        type="search" placeholder="Search for products, solutions & more..."
                        aria-describedby="addon-wrapping">
                </div>
            </form>
            <hr>
            <ul class="navbar-nav justify-content-end flex-grow-1 mt-0 ps-4">
                <li class="nav-item dropdown cool-link">
                    <a class="nav-link" href="{{ route('homepage') }}" role="button" >
                        Home
                    </a>
                </li>
                <li class="nav-item dropdown cool-link">
                    <a class="nav-link" href="{{ route('courses.all') }}" role="button">
                        All Courses
                    </a>
                </li>
                <li class="nav-item dropdown cool-link">
                    <a class="nav-link" href="{{ route('register') }}" role="button">
                        Registration
                    </a>
                </li>
                <li class="nav-item dropdown cool-link">
                    <a class="nav-link" href="{{ route('contact') }}" role="button">
                        Contact Us
                    </a>
                </li>
            </ul>


            {{-- <div class="search-container">
                <form method="post" action="{{ route('course.search') }}">
                    @csrf
                    <input class="search" id="search_text" name="search" type="search" placeholder="Search"
                        style="width: 296px;">
                    <label class="search_buttons searchbutton" for="search_text"><span
                            class="mglass">&#9906;</span></label>
                </form>
            </div> --}}
        </div>
    </div>
</div>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Get all dropdown links
        var dropdownLinks = document.querySelectorAll('.navbar-nav .nav-link');

        // Add click event listener to each dropdown link
        dropdownLinks.forEach(function(link) {
            link.addEventListener('click', function() {
                // Remove the 'active' class from all dropdown links
                dropdownLinks.forEach(function(otherLink) {
                    otherLink.parentNode.classList.remove('active');
                });

                // Add the 'active' class to the clicked dropdown link's parent
                this.parentNode.classList.add('active');
            });
        });

        // Add an event listener for when the dropdown is hidden
        document.querySelector('.navbar-nav').addEventListener('hidden.bs.dropdown', function() {
            // Remove the 'active' class from all dropdown links when the dropdown is hidden
            dropdownLinks.forEach(function(link) {
                link.parentNode.classList.remove('active');
            });
        });
    });
</script>
