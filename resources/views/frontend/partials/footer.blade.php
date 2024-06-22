
    <section class="footer-area">
        <div class="container">
            <div class="row text-white align-items-center">
                <div class="col-lg-3 p-4 text-lg-start text-center border-left-side">
                    <div>
                        {{-- <a class="text-decoration-none text-white"
                            href="javascript:void(0)">Learn IT , Lead IT</a> --}}
                            <p class="p-0 m-0 text-white fs-3 fw-bold" style="letter-spacing: 2.5px">Learn IT , Lead IT</p>
                    </div>
                </div>
                <div class="col-lg-2 p-4 text-center border-left-side">
                    <div>
                        <a class="text-decoration-none text-white"
                            href="{{ route('course.registration') }}">Course Registration
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 p-4 text-center border-left-side">
                    <div>
                        <a class="text-decoration-none text-white" href="https://www.techfocusltd.com/faq">FAQ
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 p-4 d-flex justify-content-between align-items-center social-area">
                    <ul class="" style="list-style-type: none">
                        <li class="pt-2">
                            <a class="text-white text-decoration-none"
                                href="https://www.techfocusltd.com/brand/list">Brand list</a>
                        </li>
                        <li class="pt-2">
                            <a class="text-white text-decoration-none"
                                href="https://www.techfocusltd.com/manufacturer/account">
                                Manufacturer account</a>
                        </li>
                        <li class="pt-2">
                            <a class="text-white text-decoration-none"
                                href="https://www.techfocusltd.com/services">
                                Our Service</a>
                        </li>
                        {{-- <li class="pt-2">
                            <a class="text-white text-decoration-none"
                                href="https://www.techfocusltd.com/subscription">
                                Course Re</a>
                        </li> --}}
                        <li class="pt-2">
                            <a class="text-white text-decoration-none" href="{{ route('about') }}">About Us</a>
                        </li>
                    </ul>
                    <div class="social-icons-btn">
                        <a class="icons-footer twitter" href="#">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                        <a class="icons-footer facebook" href="#">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a class="icons-footer instagram" href="#">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a class="icons-footer linkedin" href="#">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="background-color: #001430">
        <div class="container">
            <div class="row pb-5">
                <div class="col-lg-12">
                    <div class="text-center">
                        <div class="py-5 d-flex align-items-center justify-content-center">
                            <a href="{{ route('homepage') }}" class="pe-lg-3">
                                <img src="{{ !empty(optional($setting)->site_logo) && file_exists(public_path('storage/' . optional($setting)->site_logo)) ? asset('storage/' . optional($setting)->site_logo) : asset('frontend/images/no-logo(217-55).jpg') }}" width="180px" alt="" />
                            </a>
                        </div>
                        <div class="d-flex align-items-center justify-content-center">
                            <p class="mb-0 text-white">
                                © Copyright 2024 by NGEN IT LTD..
                            </p>
                            <div class="ps-5">
                                {{-- <a href="" class="text-white text-decoration-none pe-2">Download</a> --}}
                                <a href="" class="text-white text-decoration-none pe-2">Privacy</a>
                                <a href="" class="text-white text-decoration-none pe-2">Policy</a>
                                <a href="" class="text-white text-decoration-none">Terms of Use</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

