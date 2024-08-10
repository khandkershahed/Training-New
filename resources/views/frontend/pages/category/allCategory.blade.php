@extends('frontend.master')
@section('content')
    <style>
        .faq-nav-link {
            color: black
        }

        .faq-nav-link.active {
            background-color: #001c44 !important;
            color: white !important;
            border-radius: 5px !important;
        }
    </style>
    <section>
        <div class="showcase">
            <img class="img-fluid" src="{{ asset('storage/common_banner/' . optional($common_banner)->faq_banner) }}"
                alt="Picture" />
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center py-5 w-75 w-lg-100 mx-auto">
                        <h1>Popular <span class="main_color">Categories</span> We Offer</h1>
                        <div>
                            <img decoding="async" width="137" height="21"
                                src="https://www.promisetrainingglobal.com/wp-content/uploads/2019/02/line.jpg"
                                class="vc_single_image-img attachment-full webpexpress-processed" alt="">
                        </div>
                        <p>Promise Training and Consultancy offers short-term workshops and training seminars for various
                            work streams including management, leadership, finance, HR and Oil & Gas. Participants of our
                            public training program will also have a chance to share their experiences with professionals
                            from other organisations. This enables them to gain new perspectives on the common challenges
                            they face at the workplace.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 pt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-2" style="background-color: #eee;">
                    <h5 class="mb-0 py- pt-3 text-center"><span class="fw-bold" style="border-bottom: 1px solid #001c44">Course</span> Categories</h5>
                    <ul class="nav nav-tabs border-0 flex-column py-3 mt-3" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link faq-nav-link border-0 rounded-0 text-start w-100 active" id="home-tab"
                                data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab"
                                aria-controls="home-tab-pane" aria-selected="true">Diploma Courses</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link faq-nav-link border-0 rounded-0 text-start w-100" id="profile-tab"
                                data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab"
                                aria-controls="profile-tab-pane" aria-selected="false">Industrial Courses</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link faq-nav-link border-0 rounded-0 text-start w-100" id="contact-tab"
                                data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab"
                                aria-controls="contact-tab-pane" aria-selected="false">Professional Courses</button>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-10">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                                    aria-labelledby="home-tab" tabindex="0">
                                    {{-- Content --}}
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="card border-0 shadow-sm">
                                                <div class="card-header p-0">
                                                    <div>
                                                        <img class="img-fluid w-100 rounded-2" src="https://promisetrainingglobal.com/wp-content/uploads/2019/03/c-1.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <h5>Administration, Office Management & Secretarial</h5>
                                                    <p style="background-color: #001c44; width: 40%; height: 3px;"></p>
                                                    <p>At Promise Training & Consultancy, we understand that at the core of every organization’s success.</p>
                                                    <a href="" class="primary-btn-one"> See Details <i class="fa-solid fa-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="card border-0 shadow-sm">
                                                <div class="card-header p-0">
                                                    <div>
                                                        <img class="img-fluid w-100 rounded-2" src="https://promisetrainingglobal.com/wp-content/uploads/2019/03/c-1.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <h5>Administration, Office Management & Secretarial</h5>
                                                    <p style="background-color: #001c44; width: 40%; height: 3px;"></p>
                                                    <p>At Promise Training & Consultancy, we understand that at the core of every organization’s success.</p>
                                                    <a href="" class="primary-btn-one"> See Details <i class="fa-solid fa-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="card border-0 shadow-sm">
                                                <div class="card-header p-0">
                                                    <div>
                                                        <img class="img-fluid w-100 rounded-2" src="https://promisetrainingglobal.com/wp-content/uploads/2019/03/c-1.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <h5>Administration, Office Management & Secretarial</h5>
                                                    <p style="background-color: #001c44; width: 40%; height: 3px;"></p>
                                                    <p>At Promise Training & Consultancy, we understand that at the core of every organization’s success.</p>
                                                    <a href="" class="primary-btn-one"> See Details <i class="fa-solid fa-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-lg-4">
                                            <div class="card border-0 shadow-sm">
                                                <div class="card-header p-0">
                                                    <div>
                                                        <img class="img-fluid w-100 rounded-2" src="https://promisetrainingglobal.com/wp-content/uploads/2019/03/c-1.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <h5>Administration, Office Management & Secretarial</h5>
                                                    <p style="background-color: #001c44; width: 40%; height: 3px;"></p>
                                                    <p>At Promise Training & Consultancy, we understand that at the core of every organization’s success.</p>
                                                    <a href="" class="primary-btn-one"> See Details <i class="fa-solid fa-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="card border-0 shadow-sm">
                                                <div class="card-header p-0">
                                                    <div>
                                                        <img class="img-fluid w-100 rounded-2" src="https://promisetrainingglobal.com/wp-content/uploads/2019/03/c-1.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <h5>Administration, Office Management & Secretarial</h5>
                                                    <p style="background-color: #001c44; width: 40%; height: 3px;"></p>
                                                    <p>At Promise Training & Consultancy, we understand that at the core of every organization’s success.</p>
                                                    <a href="" class="primary-btn-one"> See Details <i class="fa-solid fa-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="card border-0 shadow-sm">
                                                <div class="card-header p-0">
                                                    <div>
                                                        <img class="img-fluid w-100 rounded-2" src="https://promisetrainingglobal.com/wp-content/uploads/2019/03/c-1.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <h5>Administration, Office Management & Secretarial</h5>
                                                    <p style="background-color: #001c44; width: 40%; height: 3px;"></p>
                                                    <p>At Promise Training & Consultancy, we understand that at the core of every organization’s success.</p>
                                                    <a href="" class="primary-btn-one"> See Details <i class="fa-solid fa-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel"
                                    aria-labelledby="profile-tab" tabindex="0">
                                    {{-- Content --}}
                                    Test 2
                                </div>
                                <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel"
                                    aria-labelledby="contact-tab" tabindex="0">
                                    {{-- Content --}}
                                    Test 3
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        const items = document.querySelectorAll(".custom-accordion button");

        function toggleAccordion() {
            const itemToggle = this.getAttribute("aria-expanded");

            for (i = 0; i < items.length; i++) {
                items[i].setAttribute("aria-expanded", "false");
            }

            if (itemToggle == "false") {
                this.setAttribute("aria-expanded", "true");
            }
        }

        items.forEach((item) => item.addEventListener("click", toggleAccordion));
    </script>
@endpush
