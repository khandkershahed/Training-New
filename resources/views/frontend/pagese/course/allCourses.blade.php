@extends('frontend.master')
@section('content')
    <style>
        .showcase-courses {
            width: 100%;
            height: 300px;
            position: relative;
            color: white;
            text-align: center;
        }

        .showcase-courses img {
            width: 100%;
            height: 100%;
            position: absolute;
            object-fit: cover;
            /* Make the image cover the entire area */
            top: 0;
            left: 0;
            z-index: 99;
        }

        .showcase-courses .overlay-courses {
            width: 100%;
            height: 300px;
            background-color: rgba(0, 35, 82, 0.7);
            position: absolute;
            top: 0;
            left: 0;
            z-index: 99;
        }

        .showcase-courses h2 {
            margin-top: 100px;
            font-size: 3em;
        }

        .showcase-courses p {
            margin-top: 8px;
            font-size: 1.2em;
        }

        .cources-link {
            /* background-color: var(--primary-color); */
            border-radius: 0 !important;
            color: black;
            text-align: start;
            border-bottom: 1px dashed black !important;
            font-size: 15px;
            padding-left: 15px;
        }

        .nav-tabs .nav-item.show .cources-link,
        .nav-tabs .cources-link.active {
            /* background-color: var(--secondary-color); */
            border-bottom: 1px dashed var(--primary-color) !important;
            border-radius: 0 !important;
            color: var(--primary-color);
            text-align: start;
        }

        .sidebar-area-cources {
            padding-left: 0;
            padding-right: 0;
        }
    </style>
    <section class="">
        <img class="custom-banner" src="{{ asset('frontend/images/all-courses-banner.jpg') }}" alt="Picture">
        {{-- <div class="overlay-courses">
            <h2>Our All Courses</h2>
            <p>One-Stop Learning &amp; Development Solutions</p>
        </div> --}}
    </section>
    <section style="background-color: #eee;">
        <div class="container">
            <div class="text-center px-0 px-lg-5 py-0 py-lg-5">
                <h3 class="section-title">Popular Courses We Offer</h3>
                <div class="divider"></div>
                <p class="text-muted py-0 py-lg-3 px-lg-5 px-0">
                    NGenIT Training provides short workshops and seminars covering management, leadership, finance, HR, and Oil & Gas. Participants can connect with professionals from different organizations, gaining fresh insights into common workplace challenges.
                </p>
            </div>
        </div>
    </section>
    <section>
        <div class="container py-5">
            <div class="row">
                {{-- <div class="col-lg-3 sidebar-area-cources">
              <ul class="nav nav-tabs flex-column border-0 px-0" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link w-100 border-0 cources-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
                    Administration, Office Management &amp; Secretarial
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link w-100 border-0 cources-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false" tabindex="-1">
                    Management, Leadership &amp; Strategy
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link w-100 border-0 cources-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false" tabindex="-1">
                    Finance, Accounting &amp; Budgeting
                  </button>
                </li>
              </ul>
            </div> --}}
                <div class="col-lg-12">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">

                                @forelse ($courses as $course)
                                    <div class="col-lg-3 mb-4">
                                        <div class="card border-0 bg-light shadow-sm rounded-2">
                                            <div class="card-header p-0 bg-transparent">

                                                <div>
                                                    <img class="rounded-2 img-fluid course-images"
                                                        src="{{ asset(!empty($course->thumbnail_image) ? url('storage/course/' . $course->thumbnail_image) : url('images/no-shop-imge.png')) }}"
                                                        alt="">
                                                </div>

                                                <div class="p-2 text-center">

                                                    <small class="pe-3">
                                                        <span class="cource-badge rounded-2">
                                                            <i class="fa-solid fa-graduation-cap"></i>
                                                            Batch 2
                                                        </span>
                                                    </small>
                                                    <small class="pe-3">
                                                        <span class="cource-badge rounded-2">
                                                            {{-- <i class="fa-solid fa-chair pe-2" aria-hidden="true"></i> --}}
                                                            <i class="fa-solid fa-user"></i>
                                                            {{ $course->available_seats }}
                                                        </span>
                                                    </small>
                                                    @php
                                                        // Convert registration end date to Unix timestamp
                                                        $registrationEndTimestamp = strtotime(
                                                            $course->registration_end_date,
                                                        );
                                                        // Current time
                                                        $currentTime = time();
                                                        // Calculate remaining time in seconds
                                                        $remainingTime = $registrationEndTimestamp - $currentTime;
                                                        // Convert remaining time to days
                                                        $remainingDays = floor($remainingTime / (60 * 60 * 24));
                                                    @endphp

                                                    <small class="pe-3">
                                                        <span class="course-badge rounded-2">
                                                            {{-- <i class="far fa-clock " aria-hidden="true"></i> --}}
                                                            <i class="fa-solid fa-clock"></i>
                                                            {{ $remainingDays }} Days
                                                        </span>
                                                    </small>

                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="course-title">
                                                    <h6 class="mb-0">
                                                        {{ $course->name }}
                                                    </h6>
                                                </div>
                                                <div class="pt-2">
                                                    <a href="{{ url('course' . '/' . $course->id . '/' . $course->slug) }}"
                                                        class="btn btn-light border w-100">See Details
                                                        <i class="fa-solid fa-arrow-right ps-2" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <p>No Course Avaiable</p>
                                @endforelse

                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            Management, Leadership &amp; Strategy
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            Finance, Accounting &amp; Budgeting
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection