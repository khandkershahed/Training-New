@extends('frontend.master')
@section('content')
    

    <section class="">
        @if (!empty($service->banner_image))
            <img class="img-fluid" src="{{ asset('storage/service/' . $service->banner_image) }}" alt="Picture" />
        @endif
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb" class="py-3">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="{{ route('homepage') }}" class="text-decoration-none main-color">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="" class="text-decoration-none main-color">{{ $service->name }}</a>
                            </li>

                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container py-3">
            <div class="row">
                <div class="col-lg-9">
                    <div class="text-start py-2 pt-0">
                        <h1 class="main-color">
                            {{ $service->name }}
                        </h1>
                        <div class="section-devider"
                            style="
                  background-color: #0a1d5b;
                  height: 2px;
                  width: 10%;
                  margin: start;
                ">
                        </div>
                        <p class="pt-3" style="text-align: justify">
                            {{ $service->header }}
                        </p>
                    </div>
                    {{-- <div>
                        <img class="img-fluid w-100"
                            src="https://www.promisetrainingglobal.com/wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2017/12/public-course.jpg.webp"
                            alt="" />
                    </div> --}}
                    <div>
                        <p class="py-5" style="text-align: justify">
                            {!! $service->description !!}
                        </p>
                    </div>
                </div>

                <div class="col-lg-3">
                    <h3 class="main-color">Search a Course</h3>

                    @php
                        $courseSections = App\Models\CourseSection::orderBy('name', 'ASC')->limit(8)->latest()->get();
                    @endphp

                    <form action="" method="post">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row gx-1">

                                    <div class="col-lg-6">
                                        <select class="form-select rounded-0" name="course_section_id"
                                            aria-label="Default select example">
                                            <option selected disabled>Select Type</option>
                                            @foreach ($courseSections as $courseSection)
                                                <option value="{{ $courseSection->id }}">{{ $courseSection->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-lg-6">
                                        <select class="form-select rounded-0" name="course_category_id"
                                            aria-label="Default select example">
                                            <option selected disabled>Select Course</option>
                                        </select>
                                    </div>


                                </div>
                                <div class="table-responsive mt-3">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover table-bordered">
                                            <thead>
                                                <tr>
                                                    <th style="background-color: #0a1d5b; color: white">
                                                        Course Title
                                                    </th>
                                                    <th style="background-color: #0a1d5b; color: white">
                                                        Venue
                                                    </th>
                                                    <th style="background-color: #0a1d5b; color: white">
                                                        Fees
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-group-divider">
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-decoration-none text-muted"
                                                            title="Administration, Office Management & Secretarial"
                                                            onclick="toggleText('text1')">Administration<span>...</span></a>
                                                        <p id="text1" class="more-text">
                                                            Administration, Office Management &
                                                            Secretarial
                                                        </p>
                                                    </td>
                                                    <td class="text-muted">Offline</td>
                                                    <td class="text-muted">$5000</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="#" class="primary-btn-one me-2 rounded-0">Connect Us</a>
                                    <a href="#" class="primary-btn-one rounded-0">Register</a>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="mt-3">
                        <div class="card border-0 rounded-0 shadow-none" style="background-color: #43a8e8">
                            <div class="card-body">
                                <div class="d-flex justify-content-center flex-column text-center p-5 px-3">
                                    <h4 class="text-center text-white pb-4">
                                        Global Training Venues
                                    </h4>
                                    <a href="" class="btn bg-white rounded-pill btn w-100">Explore Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 rounded-0 shadow-none" style="background-color: #0084d9">
                            <div class="card-body">
                                <div class="d-flex justify-content-center flex-column text-center p-5 px-3">
                                    <h4 class="text-center text-white pb-4">
                                        Choice of Training Categories
                                    </h4>
                                    <a href="" class="btn bg-white rounded-pill btn w-100">Check Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 rounded-0 shadow-none" style="background-color: #eaf6f5">
                            <div class="card-body">
                                <div class="d-flex justify-content-center flex-column text-center p-5 px-3">
                                    <h6 class="text-center pb-4" style="color: #00a3af">
                                        Need more information?
                                    </h6>
                                    <a href="" class="btn bg-white rounded-pill btn w-100">Connect With Us</a>
                                    <p class="pt-3">
                                        <i class="fa-solid fa-phone"></i> +97154 459 0666
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section>
        <div class="container mb-5">
            <div class="row align-items-center" style="background-color: #eaf6f5">
                <div class="col-lg-6">
                    <div class="row p-2 py-3" style="background-color: #eaf6f5">
                        <div class="col-lg-4">
                            <select class="form-select bg-white rounded-0" aria-label="Default select example">
                                <option selected>Course Type</option>
                                <option value="1">Online</option>
                                <option value="2">Offline</option>
                            </select>
                        </div>
                        <div class="col-lg-4">
                            <select class="form-select bg-white rounded-0" aria-label="Default select example">
                                <option selected>Category</option>
                                <option value="1">
                                    Administration, Office Management & Secretarial
                                </option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-4">
                            <select class="form-select bg-white rounded-0" aria-label="Default select example">
                                <option selected>Class Type</option>
                                <option value="1">Online</option>
                                <option value="2">Offline</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 text-end">
                    <form class="d-flex w-50 ms-auto" role="search">
                        <input class="form-control border-0 rounded-0" type="search" placeholder="Search"
                            aria-label="Search" />
                        <button class="btn btn-light text-white" style="background-color: #0a1d5b" type="submit">
                            <i class="fa-solid fa-search"></i>
                        </button>
                    </form>
                </div>
            </div>
            <!-- All Courses Table -->
            <div class="row">
                <div class="col-lg-12 px-0">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover">
                            <thead class="">
                                <tr>
                                    <th style="
                        background-color: #0a1d5b !important;
                        color: white;
                      "
                                        scope="col">
                                        Code
                                    </th>
                                    <th style="
                        background-color: #0a1d5b !important;
                        color: white;
                      "
                                        scope="col">
                                        Course Title
                                    </th>
                                    <th style="
                        background-color: #0a1d5b !important;
                        color: white;
                      "
                                        scope="col">
                                        Venue
                                    </th>
                                    <th style="
                        background-color: #0a1d5b !important;
                        color: white;
                      "
                                        scope="col">
                                        Starting Date
                                    </th>
                                    <th style="
                        background-color: #0a1d5b !important;
                        color: white;
                      "
                                        scope="col">
                                        Duration
                                    </th>
                                    <th style="
                        background-color: #0a1d5b !important;
                        color: white;
                      "
                                        scope="col">
                                        Fees
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="">
                                    <td>OG45</td>
                                    <td>
                                        Well Test Design and Analysis
                                        <span><a href=""><i class="fa-solid fa-eye ps-2"></i></a></span>
                                    </td>
                                    <td>Dubai - UAE</td>
                                    <td>24 - Jun - 2024</td>
                                    <td>5 - Day</td>
                                    <td>$4,950</td>
                                </tr>
                                <tr class="">
                                    <td>OG45</td>
                                    <td>
                                        Well Test Design and Analysis
                                        <span><a href=""><i class="fa-solid fa-eye ps-2"></i></a></span>
                                    </td>
                                    <td>Dubai - UAE</td>
                                    <td>24 - Jun - 2024</td>
                                    <td>5 - Day</td>
                                    <td>$4,950</td>
                                </tr>
                                <tr class="">
                                    <td>OG45</td>
                                    <td>
                                        Well Test Design and Analysis
                                        <span><a href=""><i class="fa-solid fa-eye ps-2"></i></a></span>
                                    </td>
                                    <td>Dubai - UAE</td>
                                    <td>24 - Jun - 2024</td>
                                    <td>5 - Day</td>
                                    <td>$4,950</td>
                                </tr>
                                <tr class="">
                                    <td>OG45</td>
                                    <td>
                                        Well Test Design and Analysis
                                        <span><a href=""><i class="fa-solid fa-eye ps-2"></i></a></span>
                                    </td>
                                    <td>Dubai - UAE</td>
                                    <td>24 - Jun - 2024</td>
                                    <td>5 - Day</td>
                                    <td>$4,950</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="text-center">For More Courses or Our Services</p>
                    <div class="d-flex justify-content-center">
                        <nav aria-label="...">
                            <ul class="pagination">
                                <li class="page-item disabled">
                                    <span class="page-link">Previous</span>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item active" aria-current="page">
                                    <span class="page-link">2</span>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('select[name="course_section_id"]').on('change', function() {
                var course_section_id = $(this).val();
                var url= "/course/ajax/" + course_section_id;
                alert(url);
                if (course_section_id) {
                    $.ajax({
                        url: "/course/ajax/" + course_section_id,
                        type: "GET",
                        dataType: "json",

                        success: function(data) {
                            $('select[name="course_category_id"]').empty(); // Clear existing options
                            $.each(data, function(key, value) {
                                $('select[name="course_category_id"]').append('<option value="' +
                                    value.id + '">' + value.name + '</option>');
                            });
                        },

                        error: function(xhr, status, error) {
                            console.error("AJAX request failed: " + status + ", " + error);
                        }
                    });
                } else {
                    $('select[name="course_category_id"]').empty(); // Clear options if no section selected
                }
            });
        });
    </script>
@endsection
