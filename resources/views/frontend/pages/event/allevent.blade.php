@extends('frontend.pages.event.app')
@section('event-content')

    @if (!empty($eventPage->banner_title))
        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 px-0">
                        <div class="image-container">
                            <img src="{{ asset('frontend/event/img/bannerone.jpeg') }}" alt="Event Image" />
                            <div class="overlay"></div>


                            <div class="row">

                                <div class="col-lg-6">
                                    <div class="text-container content-box left-text">
                                        <h6>{{ $eventPage->banner_badge }}</h6>
                                        <h2 class="mb-0 pt-5 srpt-font">
                                            {{ $eventPage->banner_sub_title }}
                                        </h2>
                                        <h1>{{ $eventPage->banner_title }}</h1>
                                        <p class="pt-5 fw-bold">{{ $eventPage->organizer_text }}</p>
                                        <div class="pt-2">

                                            <a href="{{ $eventPage->map_link }}" target="blank"
                                                class="btn btn-outline-light me-2 rounded-pill">
                                                <i class="fa-solid fa-location-dot pe-2"></i>Map
                                            </a>

                                            <a href="{{ $eventPage->website_link }}" target="blank"
                                                class="btn btn-outline-light me-2 rounded-pill">
                                                <i class="fa-solid fa-globe"></i> Training
                                            </a>

                                            <a href="{{ $eventPage->whatsapp_link }}" target="blank"
                                                class="btn btn-outline-light rounded-pill">
                                                <i class="fa-solid fa-share-nodes pe-2"></i>Share
                                            </a>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">

                                    <div class="text-container calander-box right-text mobile-none">

                                        <div class="promotions-carousel row">

                                            @forelse ($events as $event)
                                                <div class="card slider-items">
                                                    <div class="card-body pt-5">
                                                        <h3 class="text-center fw-bold pb-2 first-color">
                                                            {{ $event->event_name }}
                                                        </h3>
                                                        <p class="text-center">
                                                            {!! $event->event_short_descp !!}
                                                        </p>
                                                        <div class="flip-countdown"></div>
                                                    </div>
                                                    <div
                                                        class="card-header border-0 d-flex justify-content-between align-items-end">
                                                        <p class="text-center mb-0">
                                                            <span
                                                                class="start-month">{{ date('M', strtotime($event->start_date)) }}</span>
                                                            <span
                                                                class="start-date">{{ date('d', strtotime($event->start_date)) }}</span>
                                                            <span
                                                                class="start-month">{{ date('Y', strtotime($event->start_date)) }}</span>
                                                        </p>
                                                        <p class="mb-0">
                                                            <small class="cst-font">Start At</small> <br />
                                                            <span
                                                                class="fs-6 fw-bold first-color cst-font">{{ date('g:i A', strtotime($event->start_time)) }}</span>
                                                        </p>
                                                    </div>
                                                    <div class="card-footer border-0 bg-white pb-0">
                                                        <div class="row align-items-center">
                                                            <div class="col-lg-12">
                                                                <div
                                                                    class="d-flex p-3 align-items-center justify-content-between">
                                                                    <h5
                                                                        class="mb-0 fw-bold cst-font first-color text-end pe-2">
                                                                        Event Registraion:
                                                                    </h5>
                                                                    <h6
                                                                        class="mb-0 fw-bold fee cst-font text-white text-end border rounded-pill px-3 p-2">
                                                                        Free
                                                                    </h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer border-0 bg-white">
                                                        <a href="#" class="animated-button1 w-100">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                            Registration </a>
                                                    </div>
                                                </div>
                                            @empty
                                                <p>No Event Avaiable</p>
                                            @endforelse

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
                        <h1 class="pb-3 cst-font first-color">{{ $eventPage->row_one_title }}</h1>
                        <p class="fw-semibold" style="text-align: justify">
                            {!! $eventPage->row_one_description !!}
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card rounded-2 border-0 bg-transparent">
                        <div class="card-body text-end">
                            <img class="img-fluid rounded-2 w-100" style="width: 250px !important"
                                src="{{ !empty($eventPage->row_one_image) ? url('storage/event-page/' . $eventPage->row_one_image) : 'https://ui-avatars.com/api/?name=' . urlencode($item->row_one_title) }}"
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
                        <a href="{{ route('event.details', $event->id) }}">
                            <div class="event-capsul">
                                <div class="event-capsul-expire">
                                    <div class="">
                                        {{ date('F j, Y', strtotime($event->start_date)) }}
                                    </div>
                                </div>
                                <div class="event-capsul-expire-title">
                                    <h6 class="event-title fw-bold">{{ $event->event_name }}</h6>
                                    <p class="mb-0">{!! $event->event_short_descp !!}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @empty
                    <p>No Event Avaiable</p>
                @endforelse
                <!-- First End-->


                {{-- <div class="col-lg-12 mt-5">
                    <div class="d-flex justify-content-center">
                        <a href="#" class="animated-button1">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            Registraion
                        </a>
                    </div>
                </div> --}}


            </div>
        </div>
    </section>
@endsection
