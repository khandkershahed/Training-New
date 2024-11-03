@extends('frontend.pages.event.app')
@section('event-content')
    <style>
        @-webkit-keyframes last_rotate {
            0% {
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                z-index: 1;
            }

            100% {
                -webkit-transform: rotateX(-180deg);
                transform: rotateX(-180deg);
                z-index: 0;
            }
        }

        @keyframes last_rotate {
            0% {
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                z-index: 1;
            }

            100% {
                -webkit-transform: rotateX(-180deg);
                transform: rotateX(-180deg);
                z-index: 0;
            }
        }

        @-webkit-keyframes new_rotate {
            0% {
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                z-index: 0;
            }

            100% {
                -webkit-transform: rotateX(-180deg);
                transform: rotateX(-180deg);
                z-index: 1;
            }
        }

        @keyframes new_rotate {
            0% {
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                z-index: 0;
            }

            100% {
                -webkit-transform: rotateX(-180deg);
                transform: rotateX(-180deg);
                z-index: 1;
            }
        }

        .flip-countdown {
            display: flex;
            justify-content: center;
            font-family: "Roboto", sans-serif;
            font-size: 2.1em;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            overflow: hidden;
        }

        .interval_cont {
            display: flex;
            justify-content: space-around;
            width: auto;
            overflow: hidden;
        }

        .interval_cont:nth-child(n+1):not(:last-child) {
            margin-right: 0.15em;
        }

        .description {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 0.5em;
            margin-right: 0.55em;
            font-size: 0.29em;
            font-weight: bold;
            text-transform: uppercase;
            color: #7791a8;
            text-shadow: 0.05em 0.05em 0.1em rgba(136, 110, 87, 0.3);
            overflow: hidden;
        }

        .digit_cont {
            position: relative;
            width: 1.2em;
            height: 1.5em;
            font-weight: 900;
            line-height: 1.5em;
            border-radius: 0.25em;
            color: #4c6377;
            border-bottom: 0.01em solid rgba(76, 99, 119, 0.1);
            box-shadow: 0 0.2em 0.3em -0.1em rgba(76, 99, 119, 0.1);
            -webkit-perspective: 3em;
            perspective: 3em;
            box-sizing: border-box;
            overflow: hidden;
        }

        .digit_cont:after {
            content: "";
            position: absolute;
            top: 50%;
            width: 100%;
            height: 0.015em;
            background: rgba(141, 163, 182, 0.25);
            box-shadow: 0 0.01em 0.02em 0 rgba(255, 255, 255, 0.1);
            z-index: 1;
        }

        .digit_cont:nth-child(n+1):not(:last-child) {
            margin-right: 0.05em;
        }

        .digit_cont span {
            display: flex;
            justify-content: center;
            align-items: center;
            position: absolute;
            bottom: 50%;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .digit_cont .last_placeholder,
        .digit_cont .new_placeholder,
        .digit_cont .last_rotate,
        .digit_cont .new_rotate {
            position: absolute;
            left: 0;
            width: 100%;
            height: 50%;
            text-align: center;
            overflow: hidden;
            box-sizing: border-box;
        }

        .digit_cont .last_placeholder {
            bottom: 0;
            border-radius: 0 0 0.25em 0.25em;
            background: linear-gradient(to bottom, #dae1e8 -90%, #fff 100%), #dae1e8;
        }

        .digit_cont .new_placeholder {
            box-shadow: inset 0 0.01em 0 0 rgba(255, 255, 255, 0.5);
        }

        .digit_cont .new_placeholder,
        .digit_cont .last_rotate,
        .digit_cont .new_rotate {
            top: 0;
            border-radius: 0.25em 0.25em 0 0;
            background: linear-gradient(to bottom, #dae1e8 10%, #fff 200%), #dae1e8;
        }

        .digit_cont .last_rotate {
            -webkit-transform-origin: 100% 100%;
            transform-origin: 100% 100%;
            -webkit-animation: last_rotate 0.5s linear forwards;
            animation: last_rotate 0.5s linear forwards;
        }

        .digit_cont .new_rotate {
            border-top: 0.01em solid rgba(76, 99, 119, 0.3);
            background: linear-gradient(to top, #dae1e8 -90%, #fff 100%), #dae1e8;
            -webkit-transform-origin: 100% 100%;
            transform-origin: 100% 100%;
            -webkit-animation: new_rotate 0.5s linear forwards;
            animation: new_rotate 0.5s linear forwards;
        }

        .digit_cont .new_rotate .rotated {
            width: 100%;
            height: 100%;
            border-radius: 0 0 0.25em 0.25em;
            -webkit-transform: rotateX(180deg);
            transform: rotateX(180deg);
            overflow: hidden;
        }
    </style>
    <section id="homepage">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 px-0">
                    <div class="image-container">
                        <img src="{{ !empty($event->banner_image) ? url('storage/event/' . $event->banner_image) : asset('frontend/images/no-banner(1920-330).png') }}"
                            alt="Event Image" />
                        <div class="overlay"></div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="text-container content-box left-text">
                                    <h6>{{ optional($event)->banner_badge }}</h6>
                                    <h2 class="mb-0 pt-5 srpt-font">
                                        {{ optional($event)->banner_sub_title }}
                                    </h2>
                                    <h1 class="w-50">{{ optional($event)->banner_title }}</h1>
                                    <p class="pt-5 fw-bold">{{ optional($event)->organizer_text }}</p>
                                    <div class="pt-2">
                                        <a href="javascript:void(0)" class="btn me-2 btn-outline-light rounded-pill"
                                            data-bs-toggle="modal" data-bs-target="#mapEvet">
                                            <i class="fa-solid fa-location-dot pe-2"></i>Map
                                        </a>
                                        <a href="{{ optional($event)->website_link }}"
                                            class="btn btn-outline-light me-2 rounded-pill">
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
                                    <div class="card">
                                        <div
                                            class="card-header border-0 py-0 d-flex justify-content-between align-items-end">
                                            <p class="mb-0 pb-3">
                                                <small class="cst-font">Start At</small> <br />
                                                <span
                                                    class="fs-6 fw-bold first-color cst-font">{{ date('g:i A', strtotime(optional($event)->start_time)) }}</span>
                                            </p>
                                            <p class="text-center mb-0">
                                                <span
                                                    class="start-month">{{ date('M', strtotime(optional($event)->start_date)) }}</span>
                                                <span
                                                    class="start-date">{{ date('d', strtotime(optional($event)->start_date)) }}</span>
                                                <span
                                                    class="start-month">{{ date('Y', strtotime(optional($event)->start_date)) }}</span>
                                            </p>
                                            <p class="mb-0 pb-3">
                                                <small class="cst-font">End At</small> <br />
                                                <span
                                                    class="fs-6 fw-bold first-color cst-font">{{ date('g:i A', strtotime(optional($event)->end_time)) }}</span>
                                            </p>
                                        </div>

                                        <div class="card-body py-5">
                                            <h3 class="text-center fw-bold pb-2">
                                                Let's Countdown
                                            </h3>
                                            <div class="flip-countdown"></div>
                                        </div>

                                        <div class="card-footer border-0">
                                            <div class="row align-items-center">
                                                <div class="col-lg-12">
                                                    <div class="d-flex p-3 py-0 align-items-center justify-content-between">
                                                        <h5 class="mb-0 fw-bold cst-font first-color text-end pe-2">
                                                            Registration:
                                                        </h5>
                                                        <div>
                                                            <small><del>2000 Tk</del></small> <br>
                                                            <h4 class="mb-0 fw-bold cst-font second-color text-end pe-2">
                                                                Free
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer border-0">
                                            <a href="{{ route('event.registration') }}"
                                                class="animated-button1 mb-2 w-100">
                                                Registration Now
                                            </a>
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
    <section id="overview-section" style="background-color: #eee">
        <div class="container py-5 mobile-none">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <div class="py-5">
                        <h1 class="pb-3 cst-font first-color">{{ optional($event)->row_one_title }}</h1>
                        <p class="fw-semibold" style="text-align: justify">
                            {!! optional($event)->row_one_description !!}
                        </p>

                        <div class="pt-3">
                            <a href="{{ route('event.registration') }}" class="animated-button1 mb-2">
                                Registration Now
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card rounded-2 border-0 bg-transparent">
                        <div class="card-body">
                            <img class="img-fluid rounded-2 w-100"
                                src="{{ !empty(optional($event)->row_one_image) ? url('storage/event/' . optional($event)->row_one_image) : 'https://ui-avatars.com/api/?name=' . urlencode($event->row_one_title) }}"
                                alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="details-requirements">
        <div class="container py-5">
            <div class="row" style="text-align: justify">
                <div class="col-lg-12">

                    <h1 class="first-color cst-font">
                        {{ optional($event)->row_two_title }}
                    </h1>

                    <p class="pt-2">
                        {!! optional($event)->row_two_description !!}
                    </p>

                </div>
            </div>
        </div>
    </section>
    <section id="overview-section" style="background-color: #eee">
        <div class="container py-5 mobile-none">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-8">
                    <div class="py-5">
                        <h1 class="pb-3 cst-font first-color">Requirements for Participants:</h1>
                        <div>
                            <p>All project summaries and documentation must be submitted by</p>
                            <p class="fw-semibold" style="text-align: justify">
                            <ol>
                                <li>Team Composition: Projects can be developed individually or in teams of up to five
                                    members.
                                </li>
                                <li>Documentation: Participants must provide a project summary (1-2 pages) detailing:</li>
                                <li>The problem addressed</li>
                                <li>Technical stack used</li>
                                <li>Development process</li>
                                <li>Key features and functionalities</li>
                                <li>Future enhancements</li>
                                <li>Prototype/Demo: A working prototype or demo of the project must be available for the
                                    presentation.</li>
                                <li>Eligibility: Open to all participants of the NGen IT Training program. However, all
                                    submissions will be reviewed, and only selected projects will be showcased at the event.
                                </li>
                                <li>Submission Deadline: All project summaries and documentation must be submitted by
                                    [Insert
                                    Submission Date].</li>
                            </ol>
                            </p>
                            <p>This showcase is a fantastic platform to not only exhibit your work but also to receive
                                constructive feedback from industry professionals. We encourage all participants to engage
                                in discussions and network with fellow developers, potential employers, and investors.
                                Mark your calendars and prepare to showcase your hard work and innovation!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card rounded-2 border-0 bg-transparent">
                        <div class="card-body">
                            <img class="img-fluid rounded-2 w-100"
                                src="{{ !empty(optional($event)->row_one_image) ? url('storage/event/' . optional($event)->row_one_image) : 'https://ui-avatars.com/api/?name=' . urlencode($event->row_one_title) }}"
                                alt="" />
                            <div class="pt-3">
                                <a href="{{ route('event.registration') }}" class="animated-button1 mb-2 w-100">
                                    Registration Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="py-5">
                        <h1 class="cst-font first-color">Check your Eligibility to Participate</h1>
                        <p>To identify eligible work opportunities for visionary IIoT and AI projects, consider the
                            following criteria and areas of focus.</p>

                        <div class="d-flex">
                            <p class="pe-2">I want to Particiapte</p>
                            <div>
                                <div class="d-flex">
                                    <label class="list-group-item pe-2">
                                        <input class="form-check-input me-1" type="radio" name="options"
                                            value="seminar" />
                                        for Seminar Only
                                    </label>
                                    <label class="list-group-item pe-2">
                                        <input class="form-check-input me-1" type="radio" name="options"
                                            value="speech" />
                                        to give a speech and share my knowledge
                                    </label>
                                    <label class="list-group-item pe-2">
                                        <input class="form-check-input me-1" type="radio" name="options"
                                            value="project" />
                                        with Innovative Project Idea & Work
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="action-bg py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-10">
                    <div class="text-white">
                        <h3 class="srpt-font">{{ optional($event)->row_three_badge }}</h3>
                        <h1 class="action-title pb-2 cst-font">
                            {{ optional($event)->row_three_title }}
                        </h1>
                        <p class="fw-bold" style="text-align: justify">
                            {!! implode(' ', array_slice(explode(' ', optional($event)->row_three_description), 0, 15)) !!}
                        </p>
                    </div>
                </div>
                <div class="col-lg-2">
                    <a href="{{ route('event.registration') }}" class="btn btn-outline-light rouned-0 py-3 cst-font"
                        style="border-radius: 0">
                        Registration Now
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="overview-section">
        <div class="container py-5 mobile-none">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-4">
                    <div class="card rounded-2 border-0 bg-transparent">
                        <div class="card-body">
                            {{-- <img class="img-fluid rounded-2 w-100"
                                src="{{ !empty(optional($event)->row_one_image) ? url('storage/event/' . optional($event)->row_one_image) : 'https://ui-avatars.com/api/?name=' . urlencode($event->row_one_title) }}"
                                alt="" /> --}}
                            <img class="img-fluid rounded-2 w-100"
                                src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/event-participation-certificate-design-template-4e10460bc2b97c8064967dac0f69af5e_screen.jpg?ts=1639040403"
                                alt="" />
                            <div class="pt-3">
                                <a href="{{ route('event.registration') }}" class="animated-button1 mb-2 w-100">
                                    Registration Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="py-5">
                        <h1 class="pb-3 cst-font first-color">Evaluation Criteria:</h1>
                        <div>
                            <p>Projects will be evaluated based on the following criteria:</p>
                            <p class="fw-semibold" style="text-align: justify">
                            <ol>
                                <li>Team Composition: Projects can be developed individually or in teams of up to five
                                    members.</li>
                                <li>Documentation: Participants must provide a project summary (1-2 pages) detailing:</li>
                                <li>The problem addressed</li>
                                <li>Technical stack used</li>
                                <li>Development process</li>
                                <li>Key features and functionalities</li>
                                <li>Future enhancements</li>
                                <li>Prototype/Demo: A working prototype or demo of the project must be available for the
                                    presentation.</li>
                                <li>Eligibility: Open to all participants of the NGen IT Training program. However, all
                                    submissions will be reviewed, and only selected projects will be showcased at the event.
                                </li>
                                <li>Submission Deadline: All project summaries and documentation must be submitted by
                                    [Insert Submission Date].</li>
                            </ol>
                            </p>
                            <p>This showcase is a fantastic platform to not only exhibit your work but also to receive
                                constructive feedback from industry professionals. We encourage all participants to engage
                                in discussions and network with fellow developers, potential employers, and investors.
                                Mark your calendars and prepare to showcase your hard work and innovation!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="projects" style="background-color: #eee">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-4 mb-3 mb-lg-0">
                    <div>
                        <h3 class="first-color fw-bold"><span style="border-bottom: 4px solid #001430;">Loc</span>ation
                        </h3>
                        <div class="d-flex align-items-center pt-4">
                            <div class="pt-4">
                                <i class="fa fa-solid fa-location-dot fs-2 second-color"></i>
                            </div>
                            <p class="fw-semibold pt-3 ps-4 mb-0">
                                <a href="javascript:void(0)"
                                    class="btn me-2 btn-outline-light bg-none border-0 rounded-pill text-black"
                                    data-bs-toggle="modal" data-bs-target="#mapEvet">
                                    {{ optional($event)->location }}
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3 mb-lg-0">
                    <div>
                        <h3 class="first-color fw-bold"><span style="border-bottom: 4px solid #001430;">Con</span>tact
                        </h3>
                        <div class="d-flex align-items-center pt-4">
                            <div class="pt-4">
                                <i class="fa-solid fa-mobile-screen fa-fw fs-2 second-color"></i>
                            </div>
                            <p class="fw-semibold pt-3 ps-4 mb-0">
                                <span>Phone: <span class="ps-2">{{ optional($event)->contact }}</span></span>
                                <br />
                                <span>Email:
                                    <span class="ps-2">info@gmail.com</span></span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3 mb-lg-0">
                    <div>
                        <h3 class="first-color fw-bold"><span style="border-bottom: 4px solid #001430;">Eve</span>nt
                            Shedule</h3>
                        <div class="d-flex align-items-center pt-4">
                            <div class="pt-4">
                                <i class="fa-regular fa-clock fa-fw fs-2 second-color"></i>
                            </div>
                            <p class="fw-semibold pt-3 ps-4 mb-0">
                                {{-- <strong class="pe-2">Event Name:</strong>{{ optional($event)->event_name }} <br> --}}
                                <strong class="pe-2">Event Type:</strong>{{ optional($event)->event_type }} <br>
                                <strong class="pe-2">Date:</strong>
                                {{ date('D, M j, Y', strtotime(optional($event)->start_date)) }}

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Share Modal --}}
    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
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
    {{-- Share Modal End --}}
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
                            src="{{ !empty($event->banner_image) ? url('storage/event/' . $event->banner_image) : asset('frontend/images/no-banner(1920-330).png') }}"
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
                            <a href="{{ optional($event)->website_link }}" type="button"
                                class="border-0 btn btn-outline-light">
                                <i class="fab fa-facebook-f"></i> Facebook
                            </a>
                            <a href="{{ optional($event)->whatsapp_link }}" type="button"
                                class="border-0 btn btn-outline-light">
                                <i class="fab fa-whatsapp"></i> WhatsApp
                            </a>
                            <a href="{{ optional($event)->website_link }}" type="button"
                                class="border-0 btn btn-outline-light">
                                <i class="fab fa-linkedin-in"></i> LinkedIn
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Share Modal End --}}
    @push('scripts')
        <script>
            const lang = 'EN';
            const startDate = '2014-11-20T00:00:00'; // November 20, 2014
            const ColorDigitEnd = '#bfbfbf';

            // Language settings
            const dayLang = lang === 'EN' ? 'Days' : 'Дней';
            const hourLang = lang === 'EN' ? 'Hours' : 'Часов';
            const minLang = lang === 'EN' ? 'Minutes' : 'Минут';
            const secLang = lang === 'EN' ? 'Seconds' : 'Секунд';

            class CountUp {
                constructor({
                    cont,
                    startDate,
                    lang
                }) {
                    this.cont = cont;
                    this.startDate = new Date(startDate);
                    this.lang = lang;
                    this.interval = null;
                }

                start() {
                    this.interval = setInterval(() => {
                        const diff = Date.now() - this.startDate;
                        if (diff <= 0) {
                            clearInterval(this.interval);
                            this.cont.innerHTML = 'Time has not started yet';
                            return;
                        }

                        // Calculate time components
                        const days = Math.floor(diff / 86400000);
                        const hours = Math.floor((diff % 86400000) / 3600000);
                        const minutes = Math.floor((diff % 3600000) / 60000);
                        const seconds = Math.floor((diff % 60000) / 1000);

                        // Update the display
                        this.cont.innerHTML = `
                        <div>${days} ${this.lang.day}</div>
                        <div>${hours} ${this.lang.hour}</div>
                        <div>${minutes} ${this.lang.minute}</div>
                        <div>${seconds} ${this.lang.second}</div>
                    `;
                    }, 1000);
                }
            }

            const cu = new CountUp({
                cont: document.querySelector('.flip-countdown'),
                startDate: startDate,
                lang: {
                    day: dayLang,
                    hour: hourLang,
                    minute: minLang,
                    second: secLang
                }
            });
            cu.start();
        </script>
    @endpush
@endsection
