@extends('frontend.master')
@section('content')
    {{-- <style>
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
    </style> --}}
    <section class="showcase">
        <img class="img-fluid" src="{{ asset('storage/common_banner/' . optional($common_banner)->course_banner) }}"
            alt="Picture">
        {{-- <div class="overlay-courses">
            <h2>Our All Courses</h2>
            <p>One-Stop Learning &amp; Development Solutions</p>
        </div> --}}
    </section>

    <div class="container">
        <div class="text-center px-0 px-lg-5 py-0 py-lg-5">
            <h3 class="section-title">Search By Course</h3>
        </div>
    </div>

    <section>
        <div class="container py-5">

            <div class="row">

                {{-- <div class="col-lg-12">

                    <form action="{{ route('courses.all.search') }}" method="POST">
                        @csrf

                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="d-flex">
                                <div class="me-3">
                                    <select class="form-select primary-btn-one" aria-label="Default select example">
                                        <option selected>Select Category</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="me-3">
                                    <select class="form-select primary-btn-one" aria-label="Default select example">
                                        <option selected>Select Service</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>

                            <div>
                                <div class="input-group">

                                    <input type="text" class="form-control" autocomplete="off" placeholder="Course Name"
                                        aria-label="Recipient's username" name="course_name_search" aria-describedby="basic-addon2">

                                    <button type="submit" class="input-group-text primary-btn-one w-25" id="basic-addon2">
                                        <i class="fa-solid fa-search"></i>
                                    </button>

                                </div>
                            </div>

                        </div>
                    </form>

                </div> --}}

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
                                        $registrationEndTimestamp = strtotime($course->registration_end_date);

                                        // Current time
                                        $currentTime = time();

                                        // Calculate remaining time in seconds
                                        $remainingTime = $registrationEndTimestamp - $currentTime;

                                        // Convert remaining time to days
                                        $remainingDays = floor($remainingTime / (60 * 60 * 24));
                                    @endphp

                                    @if ($remainingDays > 0)
                                        <small class="pe-3">
                                            <span class="course-badge rounded-2">
                                                {{-- <i class="far fa-clock " aria-hidden="true"></i> --}}
                                                <i class="fa-solid fa-clock"></i>

                                                {{ $remainingDays }} Days

                                            </span>
                                        </small>
                                    @endif


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
                                        class="btn btn-light border w-100 text-center">See Details
                                        <i class="fa-solid fa-arrow-right ps-2" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="text-center py-3">
                        <img class="img-fluid" width="210px"
                            src="https://i.ibb.co/Vg8gqx5/hand-drawn-no-data-illustration-23-2150696455.jpg"
                            alt="No Content">
                    </div>
                    <h5 class="text-center text-warning">No Course available right now.</h5>
                @endforelse
            </div>
        </div>
    </section>
@endsection
