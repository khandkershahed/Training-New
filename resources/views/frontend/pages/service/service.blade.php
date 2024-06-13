@extends('frontend.master')
@section('content')
    <style>
        .more-text {
            display: none;
        }
    </style>
    <!-- Banner Section -->
    <section class="">
        <img class="img-fluid w-100"
            src="https://t3.ftcdn.net/jpg/05/13/43/06/360_F_513430655_QYz2znBY9MJ0rf8hxrADZjHhKm9Vskhx.jpg" alt="Picture" />
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb" class="py-3">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="" class="text-decoration-none main-color">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                <span class="text-muted">Service</span>
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
                            Unmatched Professional Consultancy <br />
                            Services That Deliver Value
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
                            Our industry experience in building tailored solutions has
                            taught us how to deliver success to clients. We are confident
                            we can transfer this success to our new sector of consulting
                            services playing to our strengths of assembling high
                            performing teams and listening to our clients.
                        </p>
                    </div>
                    <div>
                        <img class="img-fluid w-100"
                            src="https://www.promisetrainingglobal.com/wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2017/12/public-course.jpg.webp"
                            alt="" />
                    </div>
                    <div>
                        <p class="py-5" style="text-align: justify">
                            You will gain knowledge and learn new things pertaining to
                            your industry away from your workplace. Participants of our
                            public training program will also have a chance to share their
                            experiences with professionals from other organisations. This
                            enables them to gain new perspectives on the common challenges
                            they face at the workplace. Being one of the best public
                            training seminar companies, we continually update our training
                            programs to suit the latest international management practices
                            and principles, field research and in-depth industry
                            knowledge. Our courses are taught by seasoned tutors who
                            possess knowledge and skills in their subject matter.
                            Furthermore, they use a wide range of facilitation and
                            training techniques to ensure participants learn and even
                            apply the different concepts. Our training seminars focus to
                            enhance both group and individual interactions and maximise
                            learning. We hold our training seminars is premium quality
                            venues around the world that are strategically located and
                            have unmatched service standards and facilities. Enrol your
                            team for the best corporate training programs available at
                            Promise Training & Consultancy!
                            <br />
                            <br />
                            You will gain knowledge and learn new things pertaining to
                            your industry away from your workplace. Participants of our
                            public training program will also have a chance to share their
                            experiences with professionals from other organisations. This
                            enables them to gain new perspectives on the common challenges
                            they face at the workplace. Being one of the best public
                            training seminar companies, we continually update our training
                            programs to suit the latest international management practices
                            and principles, field research and in-depth industry
                            knowledge. Our courses are taught by seasoned tutors who
                            possess knowledge and skills in their subject matter.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h3 class="main-color">Search a Course</h3>
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row gx-1">
                                    <div class="col-lg-6">
                                        <select class="form-select rounded-0" aria-label="Default select example">
                                            <option selected>Select Type</option>
                                            <option value="1">Corporate</option>
                                            <option value="2">Professional</option>
                                            <option value="3">Industry</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6">
                                        <select class="form-select rounded-0" aria-label="Default select example">
                                            <option selected>Select Course</option>
                                            <option value="1">
                                                Well Test Design and Analysis
                                            </option>
                                            <option value="2">
                                                Floating Production Storage and Offloading
                                            </option>
                                            <option value="3">
                                                Competency Development for Supervisory
                                            </option>
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
                                                        <a href="javascript:void(0)" class="text-decoration-none text-muted"
                                                            title="Administration, Office Management & Secretarial"
                                                            onclick="toggleText('text1')">Administration<span>...</span></a>
                                                        <p id="text1" class="more-text">Administration, Office
                                                            Management & Secretarial</p>
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
    <section>
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
    </section>
@endsection
@section('scripts')
    <script>
        function toggleText(id) {
            var element = document.getElementById(id);
            if (element.style.display === "none" || element.style.display === "") {
                element.style.display = "block";
            } else {
                element.style.display = "none";
            }
        }
    </script>
@endsection
