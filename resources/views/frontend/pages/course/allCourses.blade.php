@extends('frontend.master')
@section('content')
    <section class="showcase">
        <img class="img-fluid" src="{{ asset('storage/common_banner/' . optional($common_banner)->course_banner) }}"
            alt="Picture">
    </section>
    <div class="container">
        <div class="text-center px-0 px-lg-5 py-0 py-lg-5">
            <h3 class="section-title">Popular Courses We Offer</h3>
        </div>
    </div>
    <section>
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex">
                            {{-- <div class="me-3">
                                <select class="form-select primary-btn-one" name="course_section" autocomplete="off"
                                    aria-label="Select Course Section">
                                    <option selected disabled>Choose Section</option>
                                    @forelse ($courseSections as $courseSection)
                                        <option value="{{ $courseSection->id }}">{{ $courseSection->name }}</option>
                                    @empty
                                        <option disabled>No Course Section Available</option>
                                    @endforelse
                                </select>
                            </div> --}}
                            <div class="me-3">
                                <select class="example form-select form-select-sm" id="select1" name="course_section"
                                    autocomplete="off" aria-label="Select Course Section"
                                    onchange="searchCoursesBySection(this.value)">
                                    @forelse ($courseSections as $courseSection)
                                        <option value="{{ $courseSection->id }}">{{ $courseSection->name }}</option>
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
                            <div class="me-3">
                                <select class="example form-select form-select-sm" id="select2" name="course_category"
                                    autocomplete="off" aria-label="Select Course Category"
                                    onchange="searchCoursesByCategory(this.value)">
                                    <option selected disabled>Choose Category</option>
                                    @forelse ($courseCategories as $courseCategory)
                                        <option value="{{ $courseCategory->id }}">{{ $courseCategory->name }}</option>
                                    @empty
                                        <option disabled>No Course Category Available</option>
                                    @endforelse
                                </select>
                            </div>
                            <script>
                                function searchCoursesByCategory(categoryId) {
                                    if (categoryId) {
                                        // Redirect to the courses page with the selected section ID
                                        window.location.href = `/all-courses?category=${categoryId}`;
                                    }
                                }
                            </script>
                        </div>
                        <form action="{{ route('courses.all.search') }}" method="POST">
                            @csrf
                            <div>
                                <div class="input-group">
                                    <input type="text" class="form-control" autocomplete="off" placeholder="Course Name"
                                        aria-label="Course Name" name="course_name_search" aria-describedby="basic-addon2">
                                    <button type="submit" class="input-group-text primary-btn-one w-25" id="basic-addon2">
                                        <i class="fa-solid fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                    {{-- </form> --}}


                </div>

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
