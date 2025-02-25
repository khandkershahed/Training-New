@extends('frontend.pages.event.app')
@section('event-content')
    @include('frontend.pages.event.partials.event-style')
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
                                        <h2 class="pt-2 event-titles-home">{{ optional($eventPage)->banner_title }}</h2>
                                        <p class="pt-5 fw-bold">{{ optional($eventPage)->organizer_text }}</p>
                                        <div class="pt-2">

                                            <a href="{{ optional($eventPage)->map_link }}"
                                                class="btn me-2 btn-outline-light rounded-pill" data-bs-toggle="modal"
                                                data-bs-target="#mapEvet">
                                                <i class="fa-solid fa-location-dot pe-2"></i>Map
                                            </a>

                                            <a href="{{ optional($eventPage)->website_link }}"
                                                class="btn btn-outline-light me-2 rounded-pill">
                                                <i class="fa-solid fa-globe"></i> Training
                                            </a>
                                            <a href="{{ optional($eventPage)->other_link }}"
                                                class="btn btn-outline-light rounded-pill" data-bs-toggle="modal"
                                                data-bs-target="#shareEvet">
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
                                                                            <h5
                                                                                class="text-center pt-5 fw-bold pb-2 text-white">
                                                                                {{ $event->event_name }}
                                                                            </h5>
                                                                            <p class="text-center text-white"
                                                                                style="font-size: 14px;">
                                                                                {!! Str::words($event->event_short_descp, 20) !!}
                                                                            </p>
                                                                            {{-- <div class="flip-countdown"></div> --}}
                                                                        </div>

                                                                        <div
                                                                            class="card-body p-2 px-4 mt-3 d-flex justify-content-between align-items-center events-card">
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
                                                                                        class="d-flex px-0 p-3 align-items-center justify-content-between ">
                                                                                        <h5
                                                                                            class="mb-0 fw-bold cst-font text-whtie text-end pe-2">
                                                                                            Registration:
                                                                                        </h5>
                                                                                        <div class="px-3">
                                                                                            <del class="text-end">2000
                                                                                                TK</del> <br>
                                                                                            <h5
                                                                                                class="mb-0 pe-0 pb-0 fw-bold cst-font text-end rounded-pill event-color">
                                                                                                Free
                                                                                            </h5>
                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                            <a href="{{ route('event.details', $event->slug) }}"
                                                                                class="animated-button1 w-100 mb-4">
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
        <div class="container py-lg-5 py-3  overview-section">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-7">
                    <div class="py-lg-5 py-3">
                        <h1 class="pb-3 cst-font first-color">{{ optional($eventPage)->row_one_title }}</h1>
                        <p class="fw-semibold" style="text-align: justify">
                            {!! optional($eventPage)->row_one_description !!}
                        </p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="card rounded-2 border-0 bg-transparent">
                        <div class="card-body text-end">
                            <img class="img-fluid rounded-2 w-100"
                                src="{{ !empty(optional($eventPage)->row_one_image) ? url('storage/event-page/' . optional($eventPage)->row_one_image) : asset('frontend/images/brandPage-prod-no-img(376-282).png') }}"
                                alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container-fluid">
            <div class="overview-section px-0">
                <div class="row">
                    {{-- <div class="col-lg-12">
                        <div class="py-5">
                            <h1 class="pb-3 cst-font first-color">Event Highlights</h1>
                        </div>
                    </div> --}}
                    <div class="col-lg-12 px-0">
                        <div class="stepsWrapper">
                            <div class="step">
                                <span class="counter">
                                    <span class="amount">1</span>
                                </span>
                                <div class="stepDetails">
                                    <h4 class="detailHeading">Technology Seminars</h4>
                                    <div class="detailText">
                                        Industry and academic experts will deliver keynotes on the latest innovations, offering
                                        insights and real-world examples of how these advancements are transforming sectors.
                                    </div>
                                </div>
                            </div>
                            <div class="step">
                                <span class="counter">
                                    <span class="amount">
                                        2
                                    </span>
                                </span>
                                <div class="stepDetails">
                                    <h4 class="detailHeading">Presentation Workshops</h2>
                                        <div class="detailText">
                                            Hands-on workshops provide experience with AI, blockchain, and data analysis,
                                            building skills and inspiring creative solutions.
                                        </div>
                                </div>
                            </div>
                            <div class="step">
                                <span class="counter">
                                    <span class="amount">
                                        3
                                    </span>
                                </span>
                                <div class="stepDetails">
                                    <h4 class="detailHeading">Discussion Sessions</h2>
                                        <div class="detailText">Open forums and panels enable participants to connect with
                                            experts and peers, fostering collaboration and inspiring innovative solutions.
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Event Benefit --}}
    <section style="background-color: #eee">
        <div class="container py-5 overview-section">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-5">
                    <div class="">
                        <h1 class="pb-3 cst-font first-color">Event Benifites</h1>
                    </div>
                    <div>
                        <img class="img-fluid rounded-2 " style="width: 400px"
                            src="{{ asset('frontend/images/Event-Benefits.png') }}" alt="" />
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="py-lg-0 py-3">
                        <strong>
                            Support for Innovation:
                        </strong> We are committed to nurturing the next generation of tech
                        leaders by
                        providing robust support for innovative project ideas. Participants will have access to mentorship
                        opportunities, allowing them to develop and refine their concepts with guidance from experienced
                        professionals.
                        <br><br>
                        <strong>
                            Career Advancement:
                        </strong> Our events also focus on facilitating work opportunities within the
                        IT industry.
                        We are dedicated to supporting innovative project ideas that emerge from our community. Participants
                        will have the opportunity to pitch their concepts, receive constructive feedback from mentors, and
                        collaborate with like-minded individuals. Our goal is to empower attendees to transform their ideas
                        into viable projects that contribute to the IT industry.
                        <br><br>
                        <strong>Community Building:</strong> By fostering a vibrant community of like-minded individuals
                        passionate about
                        technology, we aim to create a network that encourages continuous learning and collaboration long
                        after the events conclude. Additionally, our events will serve as a launchpad for career
                        development. We collaborate with leading organizations to provide networking opportunities,
                        internships, and job placements. Throughout the event, dedicated career support sessions will focus
                        on resume enhancement, interview strategies, and effective networking techniques to equip attendees
                        with the tools needed to advance their careers in tech.
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Event Benefit --}}
    <section class="py-5" style="background-color: #fff">
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
                                        <strong class="fs-5">{{ date('d', strtotime($event->start_date)) }}</strong>
                                        <br>
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
    {{-- Join Us Section --}}
    <section style="background-color: #eee">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="join-content">
                        <h1 class="cst-font first-color ">Join Us Now !</h1>
                        <p style="text-align: justify">Register now to secure your spot and become part of a
                            forward-thinking
                            community dedicated to exploring and shaping the future of technology. Together, we can harness
                            the
                            power of IoT, AI, Blockchain, Big Data, Cloud, and Cybersecurity to build a better, more
                            innovative
                            future. Don’t miss this opportunity to enhance your skills, expand your network, and drive your
                            career forward!</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="join-register">
                        <a href="{{ route('event.registration') }}" class="animated-button1 mt-4 py-lg-3 py-2 px-lg-3 px-2"
                            style="border-radius: 0">
                            Registration Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="mapEvet" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
        role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
            <div class="modal-content rounded-0">
                <div class="modal-header rounded-0" style=" background: rgba(61, 6, 109, 0.8); ">
                    <h5 class="modal-title text-white" id="modalTitleId">
                        Event Location
                    </h5>
                    <button type="button" class="btn-close btn btn-light" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                    <div>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.473499558464!2d90.35587677605153!3d23.76614748817024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8a568a70445%3A0x89dff0189e12966d!2sNGEN%20IT%20LTD.!5e0!3m2!1sen!2sbd!4v1729579396491!5m2!1sen!2sbd&zoom=1"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
    <div class="modal fade" id="shareEvet" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
        role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
            <div class="modal-content rounded-0">
                <div class="modal-header rounded-0" style=" background: rgba(61, 6, 109, 0.8); ">
                    <h5 class="modal-title text-white" id="modalTitleId">
                        Share This Event
                    </h5>
                    <button type="button" class="btn-close btn btn-light" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                    <div>
                        <img class="img-fluid"
                            src="{{ !empty(optional($event)->banner_image) ? url('storage/' . optional($event)->banner_image) : asset('frontend/images/no-banner(1920-330).png') }}"
                            alt="Event Image" />
                    </div>
                    <div class="p-3">
                        <h1 class="pb-3 cst-font first-color">{{ optional($event)->row_one_title }}</h1>
                        <p class="fw-semibold" style="text-align: justify">
                            {!! optional($event)->row_one_description !!}
                        </p>
                    </div>
                </div>
                <div class="modal-footer rounded-0 justify-content-center align-items-center"
                    style=" background: rgba(61, 6, 109, 0.8); ">
                    <span class="text-white">Share On:</span>
                    <div class="">
                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                            <a href="{{ optional($event)->other_link }}" type="button"
                                class="border-0 btn btn-outline-light">
                                <i class="fab fa-facebook-f"></i> Facebook
                            </a>
                            <a href="{{ optional($event)->whatsapp_link }}" type="button"
                                class="border-0 btn btn-outline-light">
                                <i class="fab fa-whatsapp"></i> WhatsApp
                            </a>
                            {{-- <a href="{{ optional($event)->website_link }}" type="button"
                                class="border-0 btn btn-outline-light">
                                <i class="fab fa-linkedin-in"></i> LinkedIn
                            </a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Share Modal End --}}
@endsection
