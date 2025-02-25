@extends('frontend.master')
@section('content')
    <section class="showcase">
        <img class="img-fluid" src="{{ asset('storage/common_banner/' . optional($common_banner)->course_banner) }}"
            alt="Picture">
    </section>
    <div class="container">
        <div class="text-center px-0 px-lg-5 py-0 py-lg-5">
            <h3 class="section-title">Popular Courses We Offer</h3>
            {{-- <div>
                <img decoding="async" width="137" height="21"
                    src="https://www.promisetrainingglobal.com/wp-content/uploads/2019/02/line.jpg"
                    class="vc_single_image-img attachment-full webpexpress-processed" alt="">
            </div> --}}
        </div>
    </div>
    <section>
        <div class="container py-5 pt-0">
            <div class="row">

                <div class="col-lg-12">
                    <div class="d-flex justify-content-between all-coueses-filter align-items-center mb-3 p-2 rounded-3"
                        style="background-color: #eee;">
                        <div class="d-flex all-coueses-filter">
                            <div class="me-0 me-lg-3">
                                <select class="example form-select form-select-sm w-100" id="select1" name="course_section"
                                    autocomplete="off" aria-label="Select Course Section"
                                    onchange="searchCoursesBySection(this.value)">
                                    <option selected disabled>Choose Section</option>
                                    @forelse ($courseSections as $courseSection)
                                        <option value="{{ $courseSection->id }}"
                                            {{ request()->get('section') == $courseSection->id ? 'selected' : '' }}>
                                            {{ $courseSection->name }}
                                        </option>
                                    @empty
                                        <option disabled>No Course Section Available</option>
                                    @endforelse
                                </select>
                            </div>

                            <script>
                                function searchCoursesBySection(sectionId) {
                                    if (sectionId) {
                                        // Redirect to the courses page with the selected section ID
                                        window.location.href = `/all-courses?section=${sectionId}`;
                                    }
                                }
                            </script>


                            <div class="me-0 me-lg-3">
                                <select class="example form-select form-select-sm w-100" id="select2" name="course_category"
                                    autocomplete="off" aria-label="Select Course Category"
                                    onchange="searchCoursesByCategory(this.value)">
                                    <option selected disabled>Choose Category</option>
                                    @forelse ($courseCategories as $courseCategory)
                                        <option value="{{ $courseCategory->id }}"
                                            {{ request()->get('category') == $courseCategory->id ? 'selected' : '' }}>
                                            {{ $courseCategory->name }}
                                        </option>
                                    @empty
                                        <option disabled>No Course Category Available</option>
                                    @endforelse
                                </select>
                            </div>

                            <script>
                                function searchCoursesByCategory(categoryId) {
                                    if (categoryId) {
                                        // Redirect to the courses page with the selected category ID
                                        window.location.href = `/all-courses?category=${categoryId}`;
                                    }
                                }
                            </script>


                        </div>

                        {{-- <form action="{{ route('courses.all.search') }}" method="POST"> --}}
                        {{-- @csrf --}}
                        <div class="w-100 w-lg-auto">
                            <div class="input-group">
                                <input type="text" id="serviceSearch" class="form-control" autocomplete="off"
                                    placeholder="Course Name" name="course_name_search">
                                <span class="input-group-text primary-btn-one text-center" style="width: 50px;">
                                    <i class="fa-solid fa-search"></i>
                                </span>
                            </div>
                        </div>
                        {{-- </form> --}}



                    </div>
                </div>

                <div class="row" id="servicesContainer">
                    @forelse ($courses as $course)
                        <div class="col-lg-3 mb-4">
                            <div class="card border-0 bg-light shadow-sm rounded-2">
                                <div class="card-header p-0 bg-transparent">

                                    <div>

                                        <a href="{{ url('course' . '/' . $course->id . '/' . $course->slug) }}">
                                            <img class="rounded-2 img-fluid course-images"
                                                src="{{ asset(!empty($course->thumbnail_image) ? url('storage/course/' . $course->thumbnail_image) : url('images/no-shop-imge.png')) }}"
                                                alt="">
                                        </a>

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
                                            $registrationEndTimestamp = strtotime($course->registration_end_date);
                                            $currentTime = time();
                                            $remainingTime = $registrationEndTimestamp - $currentTime;
                                            $remainingDays = floor($remainingTime / (60 * 60 * 24));
                                        @endphp

                                        @if ($remainingDays > 0)
                                            <small class="pe-3">
                                                <span class="course-badge rounded-2">
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
                                            class="primary-btn-one w-100 rounded-0">See Details
                                            <i class="fa-solid fa-arrow-right ps-2" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="text-center py-3">
                            {{-- <img class="img-fluid" width="210px"
                                src="https://i.ibb.co/Vg8gqx5/hand-drawn-no-data-illustration-23-2150696455.jpg"
                                alt="No Content"> --}}
                        </div>
                        <h5 class="text-center text-warning">No Course available right now.</h5>
                    @endforelse
                </div>




            </div>
        </div>
    </section>

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#serviceSearch').on('keyup', function() {
                var query = $(this).val();
                $.ajax({
                    url: "{{ route('courses.search') }}",
                    method: 'GET',
                    data: {
                        query: query
                    },
                    success: function(data) {
                        $('#servicesContainer').html(data);
                    }
                });
            });
        });
    </script>
@endsection
