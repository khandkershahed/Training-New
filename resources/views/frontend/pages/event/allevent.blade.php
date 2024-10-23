@extends('frontend.pages.event.app')
@section('event-content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Demo styles -->
    <style>
        .swiper {
            width: 350px;
            height: 500px;
        }

        .swiper-slide {
            position: relative;
            /* Required for positioning the overlay */
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 18px;
            font-weight: bold;
            color: #fff;
            background-image: url('https://www.i-eventplanner.com/wp-content/uploads/2018/07/Event_planning.jpg');
            background-size: cover;
            background-position: center;
            overflow: hidden;
        }

        .swiper-slide::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to right,
                    rgba(61, 6, 109, 0.8),
                    rgba(186, 52, 166, 0.829));
            /* Black overlay with 50% opacity */
            z-index: 1;
            /* Ensures the overlay stays below the content */
            border-radius: 18px;
            /* Matches the border radius of the slide */
        }

        .swiper-slide .content {
            position: relative;
            z-index: 2;
            /* Ensures the text content stays above the overlay */
        }

        .events-card {
            background-color: rgba(255, 255, 255, 0.733);
        }

        .evenet-content {
            width: 80%;
            margin: auto;
        }

        .event-color {
            color: rgba(186, 52, 166, 0.829);
        }

        .swiper-button-next,
        .swiper-button-prev {
            color: #fff;
            /* Change icon color */
            font-size: 24px;
            /* Increase icon size */
            background-color: rgba(0, 0, 0, 0.5);
            /* Add a background for better visibility */
            border-radius: 50%;
            /* Make the background circular */
            padding: 10px;
            width: 50px;
            /* Adjust button width */
            height: 50px;
            /* Adjust button height */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-button-next:hover,
        .swiper-button-prev:hover {
            background-color: rgba(0, 0, 0, 0.8);
            /* Change background color on hover */
        }

        .swiper-button-next:after,
        .swiper-rtl .swiper-button-prev:after {
            content: 'none';
        }

        .swiper-button-prev:after,
        .swiper-rtl .swiper-button-prev:after {
            content: 'none';
        }
    </style>
    @if (!empty(optional($eventPage)->banner_title))
        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 px-0">
                        <div class="image-container">
                            <img src="{{ !empty(optional($eventPage)->banner_image) ? url('storage/event-page/' . optional($eventPage)->banner_image) : asset('frontend/images/banner-demo.png') }}"
                                alt="Event Image" />
                            <div class="overlay"></div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="text-container content-box left-text">
                                        <h6>{{ optional($eventPage)->banner_badge }}</h6>
                                        <h2 class="mb-0 pt-5 srpt-font">
                                            {{ optional($eventPage)->banner_sub_title }}
                                        </h2>
                                        <h1>{{ optional($eventPage)->banner_title }}</h1>

                                        <p class="pt-5 fw-bold">{{ optional($eventPage)->organizer_text }}</p>
                                        <div class="pt-2">
                                            <a href="javascript:void(0)" class="btn me-2 btn-outline-light rounded-pill"
                                                data-bs-toggle="modal" data-bs-target="#mapEvet">
                                                <i class="fa-solid fa-location-dot pe-2"></i>Map
                                            </a>
                                            <a href="{{ optional($eventPage)->website_link }}" class="btn btn-outline-light me-2 rounded-pill">
                                                <i class="fa-solid fa-globe"></i> Training
                                            </a>
                                            <a href="javascript:void(0)" class="btn btn-outline-light rounded-pill"
                                                data-bs-toggle="modal" data-bs-target="#shareEvet">
                                                <i class="fa-solid fa-share-nodes pe-2"></i>Share
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="text-container calander-box right-text mobile-none">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="swiper mySwiper">
                                                    <div class="swiper-wrapper">
                                                        @foreach ($events as $event)
                                                            <div class="swiper-slide">
                                                                <div class="content">
                                                                    <div class="card bg-transparent p-0 border-0">
                                                                        <div class="card-body evenet-content">
                                                                            <h4
                                                                                class="text-center pt-5 fw-bold pb-2 text-white">
                                                                                {{ $event->event_name }}
                                                                            </h4>
                                                                            <p class="text-center text-white"
                                                                                style="font-size: 14px;">
                                                                                {!! Str::words($event->event_short_descp, 20) !!}
                                                                            </p>
                                                                            {{-- <div class="flip-countdown"></div> --}}
                                                                        </div>
                                                                        <div
                                                                            class="card-body p-2 mt-3 d-flex justify-content-between align-items-end events-card">
                                                                            <p class="text-center mb-0">
                                                                                <span
                                                                                    class="start-month">{{ date('M', strtotime($event->start_date)) }}</span>
                                                                                <span
                                                                                    class="start-date">{{ date('d', strtotime($event->start_date)) }}</span>
                                                                                <span
                                                                                    class="start-month">{{ date('Y', strtotime($event->start_date)) }}</span>
                                                                            </p>
                                                                            <p class="mb-0">
                                                                                <small class="cst-font">Start At</small>
                                                                                <br />
                                                                                <span
                                                                                    class="fs-6 fw-bold event-color cst-font">{{ date('g:i A', strtotime($event->start_time)) }}</span>
                                                                            </p>
                                                                        </div>
                                                                        <div class="card-footer border-0 events-card pb-0">
                                                                            <div class="row align-items-center">
                                                                                <div class="col-lg-12">

                                                                                    <div
                                                                                        class="d-flex p-3 align-items-center justify-content-between ">
                                                                                        <h5
                                                                                            class="mb-0 fw-bold cst-font text-whtie text-end pe-2">
                                                                                            Registraion:
                                                                                        </h5>
                                                                                        <h6
                                                                                            class="mb-0 fw-bold cst-font text-end rounded-pill px-3 p-2 event-color">
                                                                                            <del>2000 TK</del>
                                                                                            Free
                                                                                        </h6>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                            <a href="{{ route('event.details', $event->slug) }}"
                                                                                class="animated-button1 w-100">
                                                                                Details
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <!-- Add Navigation -->
                                                    <div class="swiper-button-next custom-navigation-next">
                                                        <i class="fas fa-chevron-right"></i>
                                                    </div>
                                                    <div class="swiper-button-prev custom-navigation-prev">
                                                        <i class="fas fa-chevron-left"></i>
                                                    </div>
                                                </div>
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
    @endif


    <section style="background-color: #eee">
        <div class="container py-5 overview-section">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-8">
                    <div class="py-5">
                        <h1 class="pb-3 cst-font first-color">{{ optional($eventPage)->row_one_title }}</h1>
                        <p class="fw-semibold" style="text-align: justify">
                            {!! optional($eventPage)->row_one_description !!}
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card rounded-2 border-0 bg-transparent">
                        <div class="card-body text-end">
                            <img class="img-fluid rounded-2 w-100" style="width: 250px !important"
                                src="{{ !empty(optional($eventPage)->row_one_image) ? url('storage/event-page/' . optional($eventPage)->row_one_image) : asset('frontend/images/brandPage-prod-no-img(376-282).png') }}"
                                alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row g-2 justify-content-center">
                <div class="col-lg-12">
                    <h1 class="pb-3 text-center">All Events</h1>
                </div>
                <!-- First -->
                @forelse ($events as $event)
                    <div class="col-lg-4">
                        <a href="{{ route('event.details', $event->slug) }}">
                            <div class="event-capsul">
                                <div class="event-capsul-expire" style="width: 140px;">
                                    <div class="text-center" style="width: 92px; position: relative;left: -18px;">
                                        {{ \Carbon\Carbon::parse($event->start_date)->format('M') }}
                                        {{-- {{ date('F', strtotime($event->start_date)) }} <br> --}}
                                        <strong class="fs-5">{{ date('d', strtotime($event->start_date)) }}</strong> <br>
                                        {{ date('Y', strtotime($event->start_date)) }}
                                    </div>
                                </div>
                                <div class="event-capsul-expire-title">
                                    <h6 class="event-title fw-bold">{{ $event->event_name }}</h6>
                                    {{-- <p class="mb-0">{!! $event->event_short_descp !!}</p> --}}
                                </div>
                            </div>
                        </a>
                    </div>
                @empty
                    <p>No Event Avaiable</p>
                @endforelse
                <!-- First End-->

            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        // var swiper = new Swiper(".mySwiper", {
        //     effect: "cards",
        //     grabCursor: true,
        //     centeredSlides: true,
        //     slidesPerView: 'auto',
        //     loop: true,
        //     initialSlide: 2,
        //     autoplay: {
        //         delay: 3000,
        //         disableOnInteraction: false,
        //     },
        // });
        var swiper = new Swiper(".mySwiper", {
            effect: "cards", // Use the "cards" effect
            initialSlide: 1, // Start with the second slide if needed
            centeredSlides: true, // Center the active slide
            grabCursor: true, // Change the cursor to grab

            loop: false, // Disable infinite looping of slides
            autoplay: {
                delay: 5000, // Auto-slide with 5 seconds delay
                disableOnInteraction: false, // Auto-slide continues even after interaction
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

        });
        // Pause autoplay on hover
        var swiperContainer = document.querySelector('.mySwiper');

        swiperContainer.addEventListener('mouseenter', function() {
            swiper.autoplay.stop(); // Stop autoplay
        });

        swiperContainer.addEventListener('mouseleave', function() {
            swiper.autoplay.start(); // Start autoplay
        });
    </script>
@endsection
