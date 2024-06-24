@extends('frontend.master')
@section('content')
    <!-- Banner Section -->
    <section>
        <div class="slider">
            <div class="slick-slide text-right banenr-main" style="background-image: url({{ asset('frontend/assets/img/banner1.jpg') }})"></div>
            <!-- slick-slide -->
            <div class="slick-slide text-right banenr-main" style="background-image: url({{ asset('frontend/assets/img/banner2.jpg') }})"></div>
            <!-- slick-slide -->
            <div class="slick-slide text-right banenr-main" style="background-image: url({{ asset('frontend/assets/img/banner3.jpg') }})"></div>
            <!-- slick-slide -->
        </div>
    </section>
    <!-- Filter Section -->
    <section class="filter_section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2">
                    <select class="form-select mb-lg-0 mb-2" aria-label="Default select example">
                        <option selected>Course Type</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-lg-2">
                    <select class="form-select mb-lg-0 mb-2" aria-label="Default select example">
                        <option selected>Category</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-lg-2">
                    <select class="form-select mb-lg-0 mb-2" aria-label="Default select example">
                        <option selected>Venue</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-lg-2">
                    <select class="form-select mb-lg-0 mb-2" aria-label="Default select example">
                        <option selected>Month</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-lg-2">
                    <select class="form-select mb-lg-0 mb-2" aria-label="Default select example">
                        <option selected>Year</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-lg-2 text-center">
                    <button class="primary-btn-one">Search</button>
                </div>
            </div>
        </div>
    </section>
    <!-- Bio Section -->
    <section>
        <div class="container">
            <div class="row py-5 align-items-center">
                <div class="col-lg-6 bio-area">
                    <h2 class="text-center text-lg-start special-text">
                        Specialized Corporate Training Courses Ensuring Optimum Results
                    </h2>
                    <p class="text-justify">
                        Training & Consultancy designs specialized and personalized
                        corporate training solutions for clients that guarantee optimal
                        knowledge evolution, skill development, and business growth. The
                        training courses cover diverse competency domains like
                        Administration and Secretarial Courses, Human Resources Courses,
                        Contract Management Courses, Finance, and Accounting Courses,
                        Customer Service Courses, Logistics, and Supply Chain Management
                        Courses, Management and Leadership Courses, Procurement and
                        Supply Chain Courses, Project Management Courses, Soft Skills
                        Training Courses, Health and Safety Courses, Oil & Gas Courses,
                        and more. We also offer executive coaching and domain-specific
                        consulting services that leave a positive impact on the
                        business. Our practical classroom sessions and live virtual
                        online training programs are offered in various venues across
                        the globe.
                    </p>
                    <a href="all-cources.html" class="primary-btn-one">All Courses</a>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid w-100"
                        src="https://www.promisetrainingglobal.com/wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2020/08/Home-Page-How-Can-We-Help-You-1-1.jpg.webp"
                        alt="" />
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section -->
    <section class="service-bg"
        style="background-image: url(https://images.pexels.com/photos/3377405/pexels-photo-3377405.jpeg?cs=srgb&dl=pexels-elina-araja-1743227-3377405.jpg&fm=jpg);">
        <div class="container">
            <div class="row py-5">
                <div class="text-center px-5">
                    <h3 class="section-title">Our Services</h3>
                    <div class="divider"></div>
                    <p class="text-white py-0 px-0 px-lg-5 py-lg-3">
                        We offering comprehensive learning solutions that provide
                        flexibility to opt face-to-face training, online courses.
                        consulting or coaching as an individual or blended solution in
                        today’s challenging economic times. Learn more about our various
                        solutions below:
                    </p>
                </div>
                <div class="col-lg-10 mx-auto">
                    <div class="service-slick-carousel">
                        <!-- Service One -->
                        <div>
                            <div class="card service-box-card border-0 rounded-0 service-one">
                                <div class="card-body service-card">
                                    <div class="text-center">
                                        <div class="py-3">
                                            <h4 class="text-white">E-Learning Solutions</h4>
                                            <div class="divider"></div>
                                        </div>
                                        <p class="text-white">
                                            Enjoy online learning in Virtual Instructor-Led
                                            Training (VILT) format.
                                        </p>
                                        <div class="text-center">
                                            <div class="py-3 learn-more-btn">
                                                <a href="" class="">Learn More</a>
                                            </div>
                                            <a href="" class="primary-btn-one">View Online Course</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Service One -->
                        <div>
                            <div class="card service-box-card border-0 rounded-0 service-two">
                                <div class="card-body service-card">
                                    <div class="text-center">
                                        <div class="py-3">
                                            <h4 class="text-white">Public Training Courses</h4>
                                            <div class="divider"></div>
                                        </div>
                                        <p class="text-white">
                                            Short term workshops and training seminars offered at
                                            20+ global locations
                                        </p>
                                        <div class="text-center">
                                            <div class="py-3 learn-more-btn">
                                                <a href="" class="">Learn More</a>
                                            </div>
                                            <a href="" class="primary-btn-one">View Online Course</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Service One -->
                        <div>
                            <div class="card service-box-card border-0 rounded-0 service-three">
                                <div class="card-body service-card">
                                    <div class="text-center">
                                        <div class="py-3">
                                            <h4 class="text-white">
                                                In- House Training Programs
                                            </h4>
                                            <div class="divider"></div>
                                        </div>
                                        <p class="text-white">
                                            Bespoke and cost-effective training solution for your
                                            precise needs.
                                        </p>
                                        <div class="text-center">
                                            <div class="py-3 learn-more-btn">
                                                <a href="" class="">Learn More</a>
                                            </div>
                                            <a href="" class="primary-btn-one">View Online Course</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Service One -->
                        <div>
                            <div class="card service-box-card border-0 rounded-0 service-four">
                                <div class="card-body service-card">
                                    <div class="text-center">
                                        <div class="py-3">
                                            <h4 class="text-white">
                                                Others <br />
                                                Coaching
                                            </h4>
                                            <div class="divider"></div>
                                        </div>
                                        <p class="text-white">
                                            Flexible Consulting & Coaching services based on your
                                            unique needs.
                                        </p>
                                        <div class="text-center">
                                            <div class="py-3 learn-more-btn">
                                                <a href="" class="">Learn More</a>
                                            </div>
                                            <a href="" class="primary-btn-one">View Online Course</a>
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
    <!-- Why Diffrent -->
    <section>
        <div class="container">
            <div class="row py-5">
                <div class="text-center px-5">
                    <h3 class="section-title">Why We Are Different</h3>
                    <div class="divider"></div>
                    <p class="text-muted py-3 px-5">
                        Checkout key reasons for reputed organisations partner with
                        Promise
                    </p>
                </div>
                <div class="col-lg-2">
                    <div class="text-center p-3" style="border-right: 1px solid black">
                        <div class="diffrent-icons">
                            <i class="fa-solid fa-lightbulb fs-2 text-white"></i>
                        </div>
                        <p class="pt-3">Comprehensive Portfolio of Solutions</p>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="text-center p-3" style="border-right: 1px solid black">
                        <div class="diffrent-icons">
                            <i class="fa-solid fa-user-graduate fs-2 text-white"></i>
                        </div>
                        <p class="pt-3">Center of Learning Expertise</p>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="text-center p-3" style="border-right: 1px solid black">
                        <div class="diffrent-icons">
                            <i class="fa-solid fa-star fs-2 text-white"></i>
                        </div>
                        <p class="pt-3">Focused on Guaranteed Results</p>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="text-center p-3" style="border-right: 1px solid black">
                        <div class="diffrent-icons">
                            <i class="fa-solid fa-arrow-right-arrow-left fs-2 text-white"></i>
                        </div>
                        <p class="pt-3">Customization with Relevance</p>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="text-center p-3" style="border-right: 1px solid black">
                        <div class="diffrent-icons">
                            <i class="fa-solid fa-gear fs-2 text-white"></i>
                        </div>
                        <p class="pt-3">Sustainable Change Facilitation</p>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="text-center p-3" style="border-right: 1px solid black">
                        <div class="diffrent-icons">
                            <i class="fa-solid fa-people-group fs-2 text-white"></i>
                        </div>
                        <p class="pt-3">Our Guiding <br />Principle</p>
                    </div>
                </div>
                <div class="col-lg-12 text-center pt-5">
                    <a href="" class="primary-btn-one">Know More Details</a>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="text-center px-5">
                <h3 class="section-title">Our Best Courses</h3>
                <div class="divider"></div>
                <p class="py-3 px-5">
                    Checkout key reasons for reputed organisations partner with
                    Promise
                </p>
            </div>
            <div class="row mb-5">
                <div class="col-lg-4">
                    <div class="card shadow-sm border-0">
                        <div class="card-body">
                            <div class="row align-items-center p-3">
                                <div class="col-lg-5">
                                    <img class="img-fluid" src="https://img.directindustry.com/buyingguide/di/en/501.jpg"
                                        alt="" />
                                </div>
                                <div class="col-lg-7">
                                    <div>
                                        <h6 class="" style="color: #001430">
                                            CHOOSING THE RIGHT PRESSURE GAUGE
                                        </h6>
                                        <p style="text-align: justify">
                                            A pressure gauge is an instrument for measuring
                                            pressure. The term pressure indicator may also be
                                            used. In industry, pressure is certainly the [...]
                                        </p>
                                        <button class="primary-btn-one w-100 rounded-0">
                                            Learn More
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card shadow-sm border-0">
                        <div class="card-body">
                            <div class="row align-items-center p-3">
                                <div class="col-lg-5">
                                    <img class="img-fluid" src="https://img.directindustry.com/buyingguide/di/en/501.jpg"
                                        alt="" />
                                </div>
                                <div class="col-lg-7">
                                    <div>
                                        <h6 class="" style="color: #001430">
                                            CHOOSING THE RIGHT PRESSURE GAUGE
                                        </h6>
                                        <p style="text-align: justify">
                                            A pressure gauge is an instrument for measuring
                                            pressure. The term pressure indicator may also be
                                            used. In industry, pressure is certainly the [...]
                                        </p>
                                        <button class="primary-btn-one w-100 rounded-0">
                                            Learn More
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card shadow-sm border-0">
                        <div class="card-body">
                            <div class="row align-items-center p-3">
                                <div class="col-lg-5">
                                    <img class="img-fluid" src="https://img.directindustry.com/buyingguide/di/en/501.jpg"
                                        alt="" />
                                </div>
                                <div class="col-lg-7">
                                    <div>
                                        <h6 class="" style="color: #001430">
                                            CHOOSING THE RIGHT PRESSURE GAUGE
                                        </h6>
                                        <p style="text-align: justify">
                                            A pressure gauge is an instrument for measuring
                                            pressure. The term pressure indicator may also be
                                            used. In industry, pressure is certainly the [...]
                                        </p>
                                        <button class="primary-btn-one w-100 rounded-0">
                                            Learn More
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Explore SEction -->
    <section
        style="
  background-image: url(https://t4.ftcdn.net/jpg/04/68/58/21/360_F_468582130_EOx6UIihZrCBKjXG1ePuOIVVBfSvYFGb.jpg);
">
        <div class="container">
            <div class="row py-5">
                <div class="text-center px-5">
                    <h3 class="section-title text-white">Explore Training Topics</h3>
                    <div class="divider"></div>
                    <p class="text-white py-3 px-5">
                        Checkout key reasons for reputed organisations partner with
                        Promise
                    </p>
                </div>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-3 mb-2 mb-lg-0">
                            <a href="" class="text-decoration-none text-muted">
                                <div
                                    class="p-3 bg-white d-flex align-items-center shadow-sm explore-service justify-content-between">
                                    <div>
                                        <p class="mb-0">Management, Leadership & Strategy</p>
                                    </div>
                                    <div class="">
                                        <i class="fa-solid fa-arrow-right diffrent-icons service-icons text-white"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 mb-2 mb-lg-0">
                            <a href="" class="text-decoration-none text-muted">
                                <div
                                    class="p-3 bg-white d-flex align-items-center shadow-sm explore-service justify-content-between">
                                    <div>
                                        <p class="mb-0">Oil, Gas & Process Engineering</p>
                                    </div>
                                    <div class="">
                                        <i class="fa-solid fa-arrow-right diffrent-icons service-icons text-white"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 mb-2 mb-lg-0">
                            <a href="" class="text-decoration-none text-muted">
                                <div
                                    class="p-3 bg-white d-flex align-items-center shadow-sm explore-service justify-content-between">
                                    <div>
                                        <p class="mb-0">
                                            Procurement, Logistics & Supply Chain
                                        </p>
                                    </div>
                                    <div class="">
                                        <i class="fa-solid fa-arrow-right diffrent-icons service-icons text-white"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 mb-2 mb-lg-0">
                            <a href="" class="text-decoration-none text-muted">
                                <div
                                    class="p-3 bg-white d-flex align-items-center shadow-sm explore-service justify-content-between">
                                    <div>
                                        <p class="mb-0">Human Resources Management</p>
                                    </div>
                                    <div class="">
                                        <i class="fa-solid fa-arrow-right diffrent-icons service-icons text-white"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-lg-3 mb-2 mb-lg-0">
                            <a href="" class="text-decoration-none text-muted">
                                <div
                                    class="p-3 bg-white d-flex align-items-center shadow-sm explore-service justify-content-between">
                                    <div>
                                        <p class="mb-0">Finance, Accounting & Budgeting</p>
                                    </div>
                                    <div class="">
                                        <i class="fa-solid fa-arrow-right diffrent-icons service-icons text-white"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 mb-2 mb-lg-0">
                            <a href="" class="text-decoration-none text-muted">
                                <div
                                    class="p-3 bg-white d-flex align-items-center shadow-sm explore-service justify-content-between">
                                    <div>
                                        <p class="mb-0">
                                            Administration, Office Management & Secretarial
                                        </p>
                                    </div>
                                    <div class="">
                                        <i class="fa-solid fa-arrow-right diffrent-icons service-icons text-white"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 mb-2 mb-lg-0">
                            <a href="" class="text-decoration-none text-muted">
                                <div
                                    class="p-3 bg-white d-flex align-items-center shadow-sm explore-service justify-content-between">
                                    <div>
                                        <p class="mb-0">Contract Management</p>
                                    </div>
                                    <div class="">
                                        <i class="fa-solid fa-arrow-right diffrent-icons service-icons text-white"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 mb-2 mb-lg-0">
                            <a href="" class="text-decoration-none text-muted">
                                <div
                                    class="p-3 bg-white d-flex align-items-center shadow-sm explore-service justify-content-between">
                                    <div>
                                        <p class="mb-0">Customer Service Management</p>
                                    </div>
                                    <div class="">
                                        <i class="fa-solid fa-arrow-right diffrent-icons service-icons text-white"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 text-center pt-5">
                    <a href="" class="primary-btn-two"> View All Categories </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Popular -->
    <section>
        <div class="container my-5">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shape">
                        <div class="card-header">
                            <h4 class="mb-0">Industry Courses | That Should Change Your Life !</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <a href="" class="text-decoration-none">
                                        <div class="card rounded-0 border-0 shadow-sm p-3">
                                            <div class="d-flex align-items-center">
                                                <h1 class="mb-0">
                                                    <i class="fa-brands fa-draft2digital pe-2"></i>
                                                </h1>
                                                <span class="px-2">|</span>
                                                <div>
                                                    <p class="mb-0 fw-bold text-muted">
                                                        Career Consulting
                                                    </p>
                                                    <small class="text-muted pt-3">
                                                        Career consulting offers tailored guidance for
                                                        career advancement, including job search
                                                        strategies, resume building, and goal setting.
                                                    </small>
                                                </div>
                                            </div>
                                            <div>
                                                <p class="text-end mb-0">
                                                    <a href="" class="text-decoration-none fs-4">+</a>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4">
                                    <a href="" class="text-decoration-none">
                                        <div class="card rounded-0 border-0 shadow-sm p-3">
                                            <div class="d-flex align-items-center">
                                                <h1 class="mb-0">
                                                    <i class="fa-brands fa-draft2digital pe-2"></i>
                                                </h1>
                                                <span class="px-2">|</span>
                                                <div>
                                                    <p class="mb-0 fw-bold text-muted">
                                                        Job Placement
                                                    </p>
                                                    <small class="text-muted">
                                                        Job placement involves matching qualified
                                                        candidates with opportunities, facilitating a
                                                        smooth transition into the workforce.
                                                    </small>
                                                </div>
                                            </div>
                                            <div>
                                                <p class="text-end mb-0">
                                                    <a href="" class="text-decoration-none fs-4">+</a>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4">
                                    <a href="" class="text-decoration-none">
                                        <div class="card rounded-0 border-0 shadow-sm p-3">
                                            <div class="d-flex align-items-center">
                                                <h1 class="mb-0">
                                                    <i class="fa-brands fa-draft2digital pe-2"></i>
                                                </h1>
                                                <span class="px-2">|</span>
                                                <div>
                                                    <p class="mb-0 fw-bold text-muted">
                                                        Trendy Professional Courses
                                                    </p>
                                                    <small class="text-muted">
                                                        Trendy professional courses offer cutting-edge
                                                        skills and knowledge in high-demand industries,
                                                        ensuring participants stay ahead.
                                                    </small>
                                                </div>
                                            </div>
                                            <div>
                                                <p class="text-end mb-0">
                                                    <a href="" class="text-decoration-none fs-4">+</a>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row pb-5">
                <div class="text-center px-5">
                    <h3 class="section-title">Our Popular Training Seminars</h3>
                    <div class="divider"></div>
                    <p class="text-muted py-lg-3 px-lg-5 py-0 px-0">
                        Checkout key reasons for reputed organisations partner with
                        Promise
                    </p>
                </div>
                <div class="col-lg-12">
                    <div id="sync1" class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="row gx-3">
                                <div class="col-lg-3 mb-lg-0 mb-3">
                                    <div class="card border-0 bg-light shadow-sm rounded-2">
                                        <div class="card-header p-0 bg-transparent">
                                            <div>
                                                <img class="rounded-2"
                                                    src="https://cdn.ostad.app/course/cover/2023-12-04T11-05-21.903Z-Flutter.jpg"
                                                    alt="" />
                                            </div>
                                            <div class="p-2 text-center">
                                                <small class="pe-1"><span class="cource-badge rounded-2">Batch
                                                        2</span></small>
                                                <small class="pe-1"><span class="cource-badge rounded-2"><i
                                                            class="fa-solid fa-users pe-2"></i>৭০ সিট
                                                        বাকি</span></small>
                                                <small class="pe-1"><span class="cource-badge rounded-2"><i
                                                            class="fa-regular fa-clock pe-2"></i>২৭ দিন
                                                        বাকি</span></small>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h6>
                                                Mastering Social Media Banner Design: The Next Level
                                            </h6>
                                            <div class="pt-3">
                                                <a href="" class="primary-btn-one rounded-0 border w-100">See
                                                    Details
                                                    <i class="fa-solid fa-arrow-right ps-2"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-lg-0 mb-3">
                                    <div class="card border-0 bg-light shadow-sm rounded-2">
                                        <div class="card-header p-0 bg-transparent">
                                            <div>
                                                <img class="rounded-2"
                                                    src="https://cdn.ostad.app/course/cover/2023-12-04T11-05-21.903Z-Flutter.jpg"
                                                    alt="" />
                                            </div>
                                            <div class="p-2 text-center">
                                                <small class="pe-1"><span class="cource-badge rounded-2">Batch
                                                        2</span></small>
                                                <small class="pe-1"><span class="cource-badge rounded-2"><i
                                                            class="fa-solid fa-users pe-2"></i>৭০ সিট
                                                        বাকি</span></small>
                                                <small class="pe-1"><span class="cource-badge rounded-2"><i
                                                            class="fa-regular fa-clock pe-2"></i>২৭ দিন
                                                        বাকি</span></small>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h6>
                                                Mastering Social Media Banner Design: The Next Level
                                            </h6>
                                            <div class="pt-3">
                                                <a href="" class="primary-btn-one rounded-0 border w-100">See
                                                    Details
                                                    <i class="fa-solid fa-arrow-right ps-2"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-lg-0 mb-3">
                                    <div class="card border-0 bg-light shadow-sm rounded-2">
                                        <div class="card-header p-0 bg-transparent">
                                            <div>
                                                <img class="rounded-2"
                                                    src="https://cdn.ostad.app/course/cover/2023-12-04T11-05-21.903Z-Flutter.jpg"
                                                    alt="" />
                                            </div>
                                            <div class="p-2 text-center">
                                                <small class="pe-1"><span class="cource-badge rounded-2">Batch
                                                        2</span></small>
                                                <small class="pe-1"><span class="cource-badge rounded-2"><i
                                                            class="fa-solid fa-users pe-2"></i>৭০ সিট
                                                        বাকি</span></small>
                                                <small class="pe-1"><span class="cource-badge rounded-2"><i
                                                            class="fa-regular fa-clock pe-2"></i>২৭ দিন
                                                        বাকি</span></small>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h6>
                                                Mastering Social Media Banner Design: The Next Level
                                            </h6>
                                            <div class="pt-3">
                                                <a href="" class="primary-btn-one rounded-0 border w-100">See
                                                    Details
                                                    <i class="fa-solid fa-arrow-right ps-2"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-lg-0 mb-3">
                                    <div class="card border-0 bg-light shadow-sm rounded-2">
                                        <div class="card-header p-0 bg-transparent">
                                            <div>
                                                <img class="rounded-2"
                                                    src="https://cdn.ostad.app/course/cover/2023-12-04T11-05-21.903Z-Flutter.jpg"
                                                    alt="" />
                                            </div>
                                            <div class="p-2 text-center">
                                                <small class="pe-1"><span class="cource-badge rounded-2">Batch
                                                        2</span></small>
                                                <small class="pe-1"><span class="cource-badge rounded-2"><i
                                                            class="fa-solid fa-users pe-2"></i>৭০ সিট
                                                        বাকি</span></small>
                                                <small class="pe-1"><span class="cource-badge rounded-2"><i
                                                            class="fa-regular fa-clock pe-2"></i>২৭ দিন
                                                        বাকি</span></small>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h6>
                                                Mastering Social Media Banner Design: The Next Level
                                            </h6>
                                            <div class="pt-3">
                                                <a href="" class="primary-btn-one rounded-0 border w-100">See
                                                    Details
                                                    <i class="fa-solid fa-arrow-right ps-2"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-lg-3 mb-lg-0 mb-3">
                                    <div class="card border-0 bg-light shadow-sm rounded-2">
                                        <div class="card-header p-0 bg-transparent">
                                            <div>
                                                <img class="rounded-2"
                                                    src="https://cdn.ostad.app/course/cover/2023-12-04T11-05-21.903Z-Flutter.jpg"
                                                    alt="" />
                                            </div>
                                            <div class="p-2 text-center">
                                                <small class="pe-1"><span class="cource-badge rounded-2">Batch
                                                        2</span></small>
                                                <small class="pe-1"><span class="cource-badge rounded-2"><i
                                                            class="fa-solid fa-users pe-2"></i>৭০ সিট
                                                        বাকি</span></small>
                                                <small class="pe-1"><span class="cource-badge rounded-2"><i
                                                            class="fa-regular fa-clock pe-2"></i>২৭ দিন
                                                        বাকি</span></small>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h6>
                                                Mastering Social Media Banner Design: The Next Level
                                            </h6>
                                            <div class="pt-3">
                                                <a href="" class="primary-btn-one rounded-0 border w-100">See
                                                    Details
                                                    <i class="fa-solid fa-arrow-right ps-2"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-lg-0 mb-3">
                                    <div class="card border-0 bg-light shadow-sm rounded-2">
                                        <div class="card-header p-0 bg-transparent">
                                            <div>
                                                <img class="rounded-2"
                                                    src="https://cdn.ostad.app/course/cover/2023-12-04T11-05-21.903Z-Flutter.jpg"
                                                    alt="" />
                                            </div>
                                            <div class="p-2 text-center">
                                                <small class="pe-1"><span class="cource-badge rounded-2">Batch
                                                        2</span></small>
                                                <small class="pe-1"><span class="cource-badge rounded-2"><i
                                                            class="fa-solid fa-users pe-2"></i>৭০ সিট
                                                        বাকি</span></small>
                                                <small class="pe-1"><span class="cource-badge rounded-2"><i
                                                            class="fa-regular fa-clock pe-2"></i>২৭ দিন
                                                        বাকি</span></small>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h6>
                                                Mastering Social Media Banner Design: The Next Level
                                            </h6>
                                            <div class="pt-3">
                                                <a href="" class="primary-btn-one rounded-0 border w-100">See
                                                    Details
                                                    <i class="fa-solid fa-arrow-right ps-2"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-lg-0 mb-3">
                                    <div class="card border-0 bg-light shadow-sm rounded-2">
                                        <div class="card-header p-0 bg-transparent">
                                            <div>
                                                <img class="rounded-2"
                                                    src="https://cdn.ostad.app/course/cover/2023-12-04T11-05-21.903Z-Flutter.jpg"
                                                    alt="" />
                                            </div>
                                            <div class="p-2 text-center">
                                                <small class="pe-1"><span class="cource-badge rounded-2">Batch
                                                        2</span></small>
                                                <small class="pe-1"><span class="cource-badge rounded-2"><i
                                                            class="fa-solid fa-users pe-2"></i>৭০ সিট
                                                        বাকি</span></small>
                                                <small class="pe-1"><span class="cource-badge rounded-2"><i
                                                            class="fa-regular fa-clock pe-2"></i>২৭ দিন
                                                        বাকি</span></small>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h6>
                                                Mastering Social Media Banner Design: The Next Level
                                            </h6>
                                            <div class="pt-3">
                                                <a href="" class="primary-btn-one rounded-0 border w-100">See
                                                    Details
                                                    <i class="fa-solid fa-arrow-right ps-2"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-lg-0 mb-3">
                                    <div class="card border-0 bg-light shadow-sm rounded-2">
                                        <div class="card-header p-0 bg-transparent">
                                            <div>
                                                <img class="rounded-2"
                                                    src="https://cdn.ostad.app/course/cover/2023-12-04T11-05-21.903Z-Flutter.jpg"
                                                    alt="" />
                                            </div>
                                            <div class="p-2 text-center">
                                                <small class="pe-1"><span class="cource-badge rounded-2">Batch
                                                        2</span></small>
                                                <small class="pe-1"><span class="cource-badge rounded-2"><i
                                                            class="fa-solid fa-users pe-2"></i>৭০ সিট
                                                        বাকি</span></small>
                                                <small class="pe-1"><span class="cource-badge rounded-2"><i
                                                            class="fa-regular fa-clock pe-2"></i>২৭ দিন
                                                        বাকি</span></small>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h6>
                                                Mastering Social Media Banner Design: The Next Level
                                            </h6>
                                            <div class="pt-3">
                                                <a href="" class="primary-btn-one rounded-0 border w-100">See
                                                    Details
                                                    <i class="fa-solid fa-arrow-right ps-2"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-lg-3 mb-lg-0 mb-3">
                                    <div class="card border-0 bg-light shadow-sm rounded-2">
                                        <div class="card-header p-0 bg-transparent">
                                            <div>
                                                <img class="rounded-2"
                                                    src="https://cdn.ostad.app/course/cover/2023-12-04T11-05-21.903Z-Flutter.jpg"
                                                    alt="" />
                                            </div>
                                            <div class="p-2 text-center">
                                                <small class="pe-1"><span class="cource-badge rounded-2">Batch
                                                        2</span></small>
                                                <small class="pe-1"><span class="cource-badge rounded-2"><i
                                                            class="fa-solid fa-users pe-2"></i>৭০ সিট
                                                        বাকি</span></small>
                                                <small class="pe-1"><span class="cource-badge rounded-2"><i
                                                            class="fa-regular fa-clock pe-2"></i>২৭ দিন
                                                        বাকি</span></small>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h6>
                                                Mastering Social Media Banner Design: The Next Level
                                            </h6>
                                            <div class="pt-3">
                                                <a href="" class="primary-btn-one rounded-0 border w-100">See
                                                    Details
                                                    <i class="fa-solid fa-arrow-right ps-2"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-lg-0 mb-3">
                                    <div class="card border-0 bg-light shadow-sm rounded-2">
                                        <div class="card-header p-0 bg-transparent">
                                            <div>
                                                <img class="rounded-2"
                                                    src="https://cdn.ostad.app/course/cover/2023-12-04T11-05-21.903Z-Flutter.jpg"
                                                    alt="" />
                                            </div>
                                            <div class="p-2 text-center">
                                                <small class="pe-1"><span class="cource-badge rounded-2">Batch
                                                        2</span></small>
                                                <small class="pe-1"><span class="cource-badge rounded-2"><i
                                                            class="fa-solid fa-users pe-2"></i>৭০ সিট
                                                        বাকি</span></small>
                                                <small class="pe-1"><span class="cource-badge rounded-2"><i
                                                            class="fa-regular fa-clock pe-2"></i>২৭ দিন
                                                        বাকি</span></small>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h6>
                                                Mastering Social Media Banner Design: The Next Level
                                            </h6>
                                            <div class="pt-3">
                                                <a href="" class="primary-btn-one rounded-0 border w-100">See
                                                    Details
                                                    <i class="fa-solid fa-arrow-right ps-2"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-lg-0 mb-3">
                                    <div class="card border-0 bg-light shadow-sm rounded-2">
                                        <div class="card-header p-0 bg-transparent">
                                            <div>
                                                <img class="rounded-2"
                                                    src="https://cdn.ostad.app/course/cover/2023-12-04T11-05-21.903Z-Flutter.jpg"
                                                    alt="" />
                                            </div>
                                            <div class="p-2 text-center">
                                                <small class="pe-1"><span class="cource-badge rounded-2">Batch
                                                        2</span></small>
                                                <small class="pe-1"><span class="cource-badge rounded-2"><i
                                                            class="fa-solid fa-users pe-2"></i>৭০ সিট
                                                        বাকি</span></small>
                                                <small class="pe-1"><span class="cource-badge rounded-2"><i
                                                            class="fa-regular fa-clock pe-2"></i>২৭ দিন
                                                        বাকি</span></small>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h6>
                                                Mastering Social Media Banner Design: The Next Level
                                            </h6>
                                            <div class="pt-3">
                                                <a href="" class="primary-btn-one rounded-0 border w-100">See
                                                    Details
                                                    <i class="fa-solid fa-arrow-right ps-2"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-lg-0 mb-3">
                                    <div class="card border-0 bg-light shadow-sm rounded-2">
                                        <div class="card-header p-0 bg-transparent">
                                            <div>
                                                <img class="rounded-2"
                                                    src="https://cdn.ostad.app/course/cover/2023-12-04T11-05-21.903Z-Flutter.jpg"
                                                    alt="" />
                                            </div>
                                            <div class="p-2 text-center">
                                                <small class="pe-1"><span class="cource-badge rounded-2">Batch
                                                        2</span></small>
                                                <small class="pe-1"><span class="cource-badge rounded-2"><i
                                                            class="fa-solid fa-users pe-2"></i>৭০ সিট
                                                        বাকি</span></small>
                                                <small class="pe-1"><span class="cource-badge rounded-2"><i
                                                            class="fa-regular fa-clock pe-2"></i>২৭ দিন
                                                        বাকি</span></small>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h6>
                                                Mastering Social Media Banner Design: The Next Level
                                            </h6>
                                            <div class="pt-3">
                                                <a href="" class="primary-btn-one rounded-0 border w-100">See
                                                    Details
                                                    <i class="fa-solid fa-arrow-right ps-2"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-lg-3 mb-lg-0 mb-3">
                                    <div class="card border-0 bg-light shadow-sm rounded-2">
                                        <div class="card-header p-0 bg-transparent">
                                            <div>
                                                <img class="rounded-2"
                                                    src="https://cdn.ostad.app/course/cover/2023-12-04T11-05-21.903Z-Flutter.jpg"
                                                    alt="" />
                                            </div>
                                            <div class="p-2 text-center">
                                                <small class="pe-1"><span class="cource-badge rounded-2">Batch
                                                        2</span></small>
                                                <small class="pe-1"><span class="cource-badge rounded-2"><i
                                                            class="fa-solid fa-users pe-2"></i>৭০ সিট
                                                        বাকি</span></small>
                                                <small class="pe-1"><span class="cource-badge rounded-2"><i
                                                            class="fa-regular fa-clock pe-2"></i>২৭ দিন
                                                        বাকি</span></small>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h6>
                                                Mastering Social Media Banner Design: The Next Level
                                            </h6>
                                            <div class="pt-3">
                                                <a href="" class="primary-btn-one rounded-0 border w-100">See
                                                    Details
                                                    <i class="fa-solid fa-arrow-right ps-2"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-lg-0 mb-3">
                                    <div class="card border-0 bg-light shadow-sm rounded-2">
                                        <div class="card-header p-0 bg-transparent">
                                            <div>
                                                <img class="rounded-2"
                                                    src="https://cdn.ostad.app/course/cover/2023-12-04T11-05-21.903Z-Flutter.jpg"
                                                    alt="" />
                                            </div>
                                            <div class="p-2 text-center">
                                                <small class="pe-1"><span class="cource-badge rounded-2">Batch
                                                        2</span></small>
                                                <small class="pe-1"><span class="cource-badge rounded-2"><i
                                                            class="fa-solid fa-users pe-2"></i>৭০ সিট
                                                        বাকি</span></small>
                                                <small class="pe-1"><span class="cource-badge rounded-2"><i
                                                            class="fa-regular fa-clock pe-2"></i>২৭ দিন
                                                        বাকি</span></small>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h6>
                                                Mastering Social Media Banner Design: The Next Level
                                            </h6>
                                            <div class="pt-3">
                                                <a href="" class="primary-btn-one rounded-0 border w-100">See
                                                    Details
                                                    <i class="fa-solid fa-arrow-right ps-2"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-lg-0 mb-3">
                                    <div class="card border-0 bg-light shadow-sm rounded-2">
                                        <div class="card-header p-0 bg-transparent">
                                            <div>
                                                <img class="rounded-2"
                                                    src="https://cdn.ostad.app/course/cover/2023-12-04T11-05-21.903Z-Flutter.jpg"
                                                    alt="" />
                                            </div>
                                            <div class="p-2 text-center">
                                                <small class="pe-1"><span class="cource-badge rounded-2">Batch
                                                        2</span></small>
                                                <small class="pe-1"><span class="cource-badge rounded-2"><i
                                                            class="fa-solid fa-users pe-2"></i>৭০ সিট
                                                        বাকি</span></small>
                                                <small class="pe-1"><span class="cource-badge rounded-2"><i
                                                            class="fa-regular fa-clock pe-2"></i>২৭ দিন
                                                        বাকি</span></small>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h6>
                                                Mastering Social Media Banner Design: The Next Level
                                            </h6>
                                            <div class="pt-3">
                                                <a href="" class="primary-btn-one rounded-0 border w-100">See
                                                    Details
                                                    <i class="fa-solid fa-arrow-right ps-2"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-lg-0 mb-3">
                                    <div class="card border-0 bg-light shadow-sm rounded-2">
                                        <div class="card-header p-0 bg-transparent">
                                            <div>
                                                <img class="rounded-2"
                                                    src="https://cdn.ostad.app/course/cover/2023-12-04T11-05-21.903Z-Flutter.jpg"
                                                    alt="" />
                                            </div>
                                            <div class="p-2 text-center">
                                                <small class="pe-1"><span class="cource-badge rounded-2">Batch
                                                        2</span></small>
                                                <small class="pe-1"><span class="cource-badge rounded-2"><i
                                                            class="fa-solid fa-users pe-2"></i>৭০ সিট
                                                        বাকি</span></small>
                                                <small class="pe-1"><span class="cource-badge rounded-2"><i
                                                            class="fa-regular fa-clock pe-2"></i>২৭ দিন
                                                        বাকি</span></small>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h6>
                                                Mastering Social Media Banner Design: The Next Level
                                            </h6>
                                            <div class="pt-3">
                                                <a href="" class="primary-btn-one rounded-0 border w-100">See
                                                    Details
                                                    <i class="fa-solid fa-arrow-right ps-2"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="sync2" class="owl-carousel owl-theme mt-3">
                        <div class="item">
                            <div>
                                <div class="card courses-cat-slide">
                                    <div class="card-body border-0 shadow-sm p-2">
                                        <p class="mb-0 course_title">
                                            Design Business & Marketing
                                        </p>
                                        <div>
                                            <small class="">• ১২ কোর্স • ৩ ওয়ার্কশপ</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div>
                                <div class="card courses-cat-slide">
                                    <div class="card-body border-0 shadow-sm p-2">
                                        <p class="mb-0 course_title">Data Engineering</p>
                                        <div>
                                            <small class="">• ১২ কোর্স • ৩ ওয়ার্কশপ</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div>
                                <div class="card courses-cat-slide">
                                    <div class="card-body border-0 shadow-sm p-2">
                                        <p class="mb-0 course_title">Creatives</p>
                                        <div>
                                            <small class="">• ১২ কোর্স • ৩ ওয়ার্কশপ</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div>
                                <div class="card courses-cat-slide">
                                    <div class="card-body border-0 shadow-sm p-2">
                                        <p class="mb-0 course_title">Blockchain Development</p>
                                        <div>
                                            <small class="">• ১২ কোর্স • ৩ ওয়ার্কশপ</small>
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
    <section style="background-color: var(--primary-color)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 py-5">
                    <h2 class="text-center text-white special-text">
                        Would you like to connect with <br />
                        a skills development expert?
                    </h2>
                    <div class="text-center py-3">
                        <a href="" class="btn primary-btn-two text-center">Start A Conversation</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial -->
    <!-- <section
    class="testimonial-area"
    style="
  background-image: url(https://go.trader.ca/wp-content/uploads/2018/06/testimonial-background-graphic.jpg);
"
    >
    <div class="container">
      <div class="row pt-5">
        <div class="text-center px-5">
          <h3 class="section-title">What our Clients have to Say</h3>
          <div class="divider"></div>
          <p class="text-muted py-3 px-5">Latest Testimonials</p>
        </div>
      </div>
      <div class="row pb-5">
        <div class="col-lg-12">
          <div class="slider-testimornial">
            <div class="pe-2">
              <div class="card border-0">
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <div>
                      <h6 class="mb-0 primary-text-color">Russel</h6>
                      <small class="mb-0">UX/UI Batch 6</small>
                    </div>
                    <div>
                      <img
                        class="rounded-circle"
                        width="50px"
                        src="https://cdn.ostad.app/public/upload/2023-08-06T10-47-40.618Z-626ffb21cc5b8d82e905f5ef.jfif"
                        alt=""
                      />
                    </div>
                  </div>
                  <p class="pt-3">
                    ওস্তাদ-এর MERN কোর্সটি স্কিল ডেভেলপমেন্টের জন্য অনেক
                    হেল্পফুল একটি কোর্স। আমার প্রতিটি প্রবলেমই তারা লাইভ
                    ক্লাসেই সলভ করার চেষ্টা করেছে। এছাড়াও সাপোর্ট
                    ইন্সট্রাক্টররাও অনেক ভালো। এসব কারণেই MERN এর লার্নিং
                    জার্নিটা আমার জন্য ছিল অসাধারণ।
                  </p>
                </div>
              </div>
            </div>
            <div class="pe-2">
              <div class="card border-0">
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <div>
                      <h6 class="mb-0 primary-text-color">Russel</h6>
                      <small class="mb-0">UX/UI Batch 6</small>
                    </div>
                    <div>
                      <img
                        class="rounded-circle"
                        width="50px"
                        src="https://cdn.ostad.app/public/upload/2023-08-06T10-47-40.618Z-626ffb21cc5b8d82e905f5ef.jfif"
                        alt=""
                      />
                    </div>
                  </div>
                  <p class="pt-3">
                    Ostad এর বিশেষত্ত্ব হচ্ছে ওনারা ডিজাইনের চেয়েও ডিজাইন
                    সাইকোলজিতে ফোকাস বেশি দেয়। যা একজন শিক্ষার্তীর চাকরির
                    ক্ষেত্রে খুব কাজে দেয় ও অন্য দশজন থেকে নিজেকে আলাদা করা
                    যায়। ইন্ডাস্ট্রি ফোকাসড এই প্র্যাক্টিস আমাকে প্রোফেশনালি
                    অনেক হেল্প করেছে।
                  </p>
                </div>
              </div>
            </div>
            <div class="pe-2">
              <div class="card border-0">
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <div>
                      <h6 class="mb-0 primary-text-color">Russel</h6>
                      <small class="mb-0">UX/UI Batch 6</small>
                    </div>
                    <div>
                      <img
                        class="rounded-circle"
                        width="50px"
                        src="https://cdn.ostad.app/public/upload/2023-08-06T10-47-40.618Z-626ffb21cc5b8d82e905f5ef.jfif"
                        alt=""
                      />
                    </div>
                  </div>
                  <p class="pt-3">
                    ক্লাস আলহামদুলিল্লাহ যেভাবে চেয়েছি পেয়েছি। ক্লাসের থেকে
                    অনেক কিছুই পেয়েছি। ইন্সট্রাক্টর অনেক ভালো ছিল। ওভারঅল
                    অনেক এঞ্জয় করেছি, ওভারঅল স্যাটিসফাইড।
                  </p>
                </div>
              </div>
            </div>
            <div class="pe-2">
              <div class="card border-0">
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <div>
                      <h6 class="mb-0 primary-text-color">Russel</h6>
                      <small class="mb-0">UX/UI Batch 6</small>
                    </div>
                    <div>
                      <img
                        class="rounded-circle"
                        width="50px"
                        src="https://cdn.ostad.app/public/upload/2023-08-06T10-47-40.618Z-626ffb21cc5b8d82e905f5ef.jfif"
                        alt=""
                      />
                    </div>
                  </div>
                  <p class="pt-3">
                    ক্লাস আলহামদুলিল্লাহ যেভাবে চেয়েছি পেয়েছি। ক্লাসের থেকে
                    অনেক কিছুই পেয়েছি। ইন্সট্রাক্টর অনেক ভালো ছিল। ওভারঅল
                    অনেক এঞ্জয় করেছি, ওভারঅল স্যাটিসফাইড।
                  </p>
                </div>
              </div>
            </div>
            <div class="pe-2">
              <div class="card border-0">
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <div>
                      <h6 class="mb-0 primary-text-color">Russel</h6>
                      <small class="mb-0">UX/UI Batch 6</small>
                    </div>
                    <div>
                      <img
                        class="rounded-circle"
                        width="50px"
                        src="https://cdn.ostad.app/public/upload/2023-08-06T10-47-40.618Z-626ffb21cc5b8d82e905f5ef.jfif"
                        alt=""
                      />
                    </div>
                  </div>
                  <p class="pt-3">
                    ক্লাস আলহামদুলিল্লাহ যেভাবে চেয়েছি পেয়েছি। ক্লাসের থেকে
                    অনেক কিছুই পেয়েছি। ইন্সট্রাক্টর অনেক ভালো ছিল। ওভারঅল
                    অনেক এঞ্জয় করেছি, ওভারঅল স্যাটিসফাইড।
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section> -->
    <!-- Pertners Section -->
    <section>
        <div class="container py-5">
            <div class="row">
                <div class="text-center px-5">
                    <h3 class="section-title">Our Partner</h3>
                    <div class="divider"></div>
                    <p class="text-muted py-3 px-5">
                        Checkout key reasons for reputed organisations partner with
                        NGen IT Training
                    </p>
                </div>
                <div class="col-lg-12">
                    <div class="slider-pertners">
                        <div class="pe-2">
                            <div class="card partners-logo">
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    <img class="img-fluid"
                                        src="https://www.ngenitltd.com/storage/RZlRwzfUA8get0PcCzQphbeIJu6OhSL7ltNc4xiZ.png"
                                        alt="ngenit" />
                                </div>
                            </div>
                        </div>
                        <div class="pe-2">
                            <div class="card partners-logo">
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    <img class="img-fluid"
                                        src="https://jaragroups.com/wp-content/uploads/2023/09/logo200.png"
                                        alt="jaragroups" />
                                </div>
                            </div>
                        </div>
                        <div class="pe-2">
                            <div class="card partners-logo">
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    <img class="img-fluid"
                                        src="https://gamersbd.com/wp-content/uploads/2022/05/GamersBD-Final-1-AI-File.png.png"
                                        alt="gamersbd" />
                                </div>
                            </div>
                        </div>
                        <div class="pe-2">
                            <div class="card partners-logo">
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    <img class="img-fluid"
                                        src="https://www.dadabhaai.com/storage/main/jaragroups404413.png"
                                        alt="dadabhaai" />
                                </div>
                            </div>
                        </div>
                        <div class="pe-2">
                            <div class="card partners-logo">
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    <img class="img-fluid" src="./assets/img/logo.png" alt="techfocusltd" />
                                </div>
                            </div>
                        </div>
                        <div class="pe-2">
                            <div class="card partners-logo">
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    <img class="img-fluid"
                                        src="https://www.promisetrainingglobal.com/wp-content/uploads/2017/12/accreditations-03.jpg"
                                        alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Carier Goal Area -->
    <!-- <section>
    <div class="container">
      <div class="row pb-5">
        <div class="text-center px-5">
          <h3 class="section-title">Set Career Goals</h3>
          <div class="divider"></div>
          <p class="text-muted py-3 px-5">
            Checkout key reasons for reputed organisations partner with
            Promise
          </p>
        </div>
        <div class="col-lg-3 mb-lg-0 mb-3">
          <div class="card border-0">
            <div class="card-body p-0 text-center bg-light p-3">
              <div>
                <div class="goal-bg">
                  <img
                    width="20px"
                    height="20px"
                    src="https://cdn.ostad.app/public/upload/2023-06-22T06-40-41.054Z-code-box-line.png"
                    alt=""
                  />
                </div>
                <p class="mb-0">Web & App Development</p>
                <small> ২৯ টি কোর্স | ৫ টি ওয়ার্কশপ</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 mb-lg-0 mb-3">
          <div class="card border-0">
            <div class="card-body p-0 text-center bg-light p-3">
              <div>
                <div class="goal-bg">
                  <img
                    width="20px"
                    height="20px"
                    src="https://cdn.ostad.app/public/upload/2023-06-22T06-40-41.054Z-code-box-line.png"
                    alt=""
                  />
                </div>
                <p class="mb-0">Web & App Development</p>
                <small> ২৯ টি কোর্স | ৫ টি ওয়ার্কশপ</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 mb-lg-0 mb-3">
          <div class="card border-0">
            <div class="card-body p-0 text-center bg-light p-3">
              <div>
                <div class="goal-bg">
                  <img
                    width="20px"
                    height="20px"
                    src="https://cdn.ostad.app/public/upload/2023-06-22T06-40-41.054Z-code-box-line.png"
                    alt=""
                  />
                </div>
                <p class="mb-0">Web & App Development</p>
                <small> ২৯ টি কোর্স | ৫ টি ওয়ার্কশপ</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 mb-lg-0 mb-3">
          <div class="card border-0">
            <div class="card-body p-0 text-center bg-light p-3">
              <div>
                <div class="goal-bg">
                  <img
                    width="20px"
                    height="20px"
                    src="https://cdn.ostad.app/public/upload/2023-06-22T06-40-41.054Z-code-box-line.png"
                    alt=""
                  />
                </div>
                <p class="mb-0">Web & App Development</p>
                <small> ২৯ টি কোর্স | ৫ টি ওয়ার্কশপ</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section> -->
    <!-- Blogs Area -->
    <!-- <section>
    <div class="container">
    <div class="row pb-5">
        <div class="col-lg-6">
          <div class="row">
            <div class="col-lg-6 mb-4">
              <div class="d-flex align-items-center shadow-sm">
                <div class="me-2 p-2 bg-black rounded-2">
                  <p class="mb-0 text-white">APR</p>
                  <h4 class="mb-0 text-white">16</h4>
                </div>
                <div>
                  <p class="mb-0 primary-text-color">
                    Why Does Customer Service Matter?
                  </p>
                  <small>Learn the Importance Before.</small>
                </div>
              </div>
            </div>
            <div class="col-lg-6 mb-4">
              <div class="d-flex align-items-center shadow-sm">
                <div class="me-2 p-2 bg-black rounded-2">
                  <p class="mb-0 text-white">APR</p>
                  <h4 class="mb-0 text-white">16</h4>
                </div>
                <div>
                  <p class="mb-0 primary-text-color">
                    Why Does Customer Service Matter?
                  </p>
                  <small>Learn the Importance Before.</small>
                </div>
              </div>
            </div>
            <div class="col-lg-6 mb-4">
              <div class="d-flex align-items-center shadow-sm">
                <div class="me-2 p-2 bg-black rounded-2">
                  <p class="mb-0 text-white">APR</p>
                  <h4 class="mb-0 text-white">16</h4>
                </div>
                <div>
                  <p class="mb-0 primary-text-color">
                    Why Does Customer Service Matter?
                  </p>
                  <small>Learn the Importance Before.</small>
                </div>
              </div>
            </div>
            <div class="col-lg-6 mb-4">
              <div class="d-flex align-items-center shadow-sm">
                <div class="me-2 p-2 bg-black rounded-2">
                  <p class="mb-0 text-white">APR</p>
                  <h4 class="mb-0 text-white">16</h4>
                </div>
                <div>
                  <p class="mb-0 primary-text-color">
                    Why Does Customer Service Matter?
                  </p>
                  <small>Learn the Importance Before.</small>
                </div>
              </div>
            </div>
            <div class="col-lg-6 mb-4">
              <div class="d-flex align-items-center shadow-sm">
                <div class="me-2 p-2 bg-black rounded-2">
                  <p class="mb-0 text-white">APR</p>
                  <h4 class="mb-0 text-white">16</h4>
                </div>
                <div>
                  <p class="mb-0 primary-text-color">
                    Why Does Customer Service Matter?
                  </p>
                  <small>Learn the Importance Before.</small>
                </div>
              </div>
            </div>
            <div class="col-lg-6 mb-4">
              <div class="d-flex align-items-center shadow-sm">
                <div class="me-2 p-2 bg-black rounded-2">
                  <p class="mb-0 text-white">APR</p>
                  <h4 class="mb-0 text-white">16</h4>
                </div>
                <div>
                  <p class="mb-0 primary-text-color">
                    Why Does Customer Service Matter?
                  </p>
                  <small>Learn the Importance Before.</small>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div>
            <iframe
              width="100%"
              height="265"
              src="https://www.youtube.com/embed/7Z8TkGAgar4?si=qMMCSWgK0lo6fpS9"
              title="YouTube video player"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              referrerpolicy="strict-origin-when-cross-origin"
              allowfullscreen
            ></iframe>
          </div>
        </div>
      </div>
    </div>
    </section> -->
@endsection
