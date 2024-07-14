<section class="footer-area">
    <div class="container">
        <div class="row text-white align-items-center py-3">
            <div class="col-lg-3 p-4 text-lg-start text-center border-left-side">
                <div>
                    {{-- <a class="text-decoration-none text-white"
                            href="javascript:void(0)">Learn IT , Lead IT</a> --}}
                    <p class="p-0 m-0 text-white fs-3 fw-bold" style="letter-spacing: 2.5px">Learn IT , Lead IT</p>
                </div>
            </div>
            <div class="col-lg-2 p-4 text-start border-left-side">
                <div>
                    <a class="text-decoration-none text-white" href="{{ route('course.registration') }}">Course
                        Registration
                    </a>
                </div>
                <div>
                    <a class="text-decoration-none text-white me-1" href="{{ route('faq') }}">FAQ
                    </a>|
                    <a class="text-decoration-none text-white ms-1" href="{{ route('course.registration') }}">Enquiries
                    </a>
                </div>
            </div>
            <div class="col-lg-3 p-4 text-start border-left-side">
                <ul class="" style="list-style-type: none">
                    <li class="pt-2">
                        <a class="text-white text-decoration-none" href="javascript:void(0)">
                            Professional Courses</a>
                    </li>
                    <li class="pt-2">
                        <a class="text-white text-decoration-none" href="javascript:void(0)">Diploma Courses</a>
                    </li>
                    <li class="pt-2">
                        <a class="text-white text-decoration-none" href="javascript:void(0)">
                            Industrial Courses</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 p-4 d-flex justify-content-between align-items-center social-area">
                <ul class="" style="list-style-type: none">
                    <li class="pt-2">
                        <a class="text-white text-decoration-none" href="javascript:void(0)">
                            Our Service</a>
                    </li>
                    <li class="pt-2">
                        <a class="text-white text-decoration-none" href="{{ route('about') }}">About Us</a>
                    </li>
                    <li class="pt-2">
                        <a class="text-white text-decoration-none" href="{{ route('contact') }}">
                            Contact Us</a>
                    </li>
                </ul>
                <div class="social-icons-btn">
                    {{-- <a class="icons-footer twitter" href="#">
                        <i class="fa-brands fa-twitter"></i>
                    </a> --}}
                    <a class="icons-footer facebook" href="{{ optional($setting)->social_facebook }}" data-bs-toggle="popover"
                                data-bs-trigger="hover" data-bs-placement="bottom" data-bs-title="Facebook">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                    <a class="icons-footer linkedin" href="{{ optional($setting)->social_linkedin }}" data-bs-toggle="popover"
                                data-bs-trigger="hover" data-bs-placement="bottom" data-bs-title="Linkedin">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                    <a class="icons-footer youtube" href="{{ optional($setting)->social_youtube }}" data-bs-toggle="popover"
                                data-bs-trigger="hover" data-bs-placement="bottom" data-bs-title="Youtube">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section style="background-color: #001430">
    <div class="container">
        <div class="row py-2">
            <div class="col-lg-12">
                <div class="text-center">
                    {{-- <div class="py-5 d-flex align-items-center justify-content-center">
                        <a href="{{ route('homepage') }}" class="pe-lg-3">
                            <img src="{{ !empty(optional($setting)->site_logo) && file_exists(public_path('storage/' . optional($setting)->site_logo)) ? asset('storage/' . optional($setting)->site_logo) : asset('frontend/images/no-logo(217-55).jpg') }}"
                                width="180px" alt="" />
                        </a>
                    </div> --}}
                    <div class="d-flex align-items-center justify-content-between">
                        <small class="mb-0 text-white">
                            © Copyright 2024 by NGEN IT LTD..
                        </small>
                        <div class="ps-5">
                            {{-- <a href="" class="text-white text-decoration-none pe-2">Download</a> --}}
                            <a href="{{ route('privacyPolicy') }}" class="text-white text-decoration-none pe-2"><small>Privacy
                                Policy</small></a>
                            <a href="{{ route('termsCondition') }}" class="text-white text-decoration-none"><small>Terms &
                                Condition</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
