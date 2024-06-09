<!--=======// Footer Section//=========-->
<footer class="container-fluid p-0" style="background: #051225;">
    <!-- footyer gradient -->
    {{-- <div class="footer_top">
        <p class="mb-0"></p>
    </div> --}}
    <!-- main footer -->
    <div class="footer_middle pt-3">
        <div class="container pb-3">
            <div class="row">
                <div class="row footer_middle_wrapper my-5">
                    <!-- item -->
                    <div class="col-lg-6 col-md-6 col-sm-12 footer_item_wrapper">
                        <!-- title -->
                        <h2 class="text-white">Learn IT, Lead IT</h2>
                        <!-- text -->
                        <p class="footer_text pt-4">
                            NGenIT is the top choice for skill development, offering programs for students,
                            professionals, and freelancers, guaranteeing success domestically and internationally.
                        </p>
                        <!-- button -->
                        {{-- <form class="p-0 pt-3 m-0" id="myform" action="{{ route('newsletter.store') }}"
                            method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="input-group w-75 footer_subscribe">
                                <input type="email" class="form-control pt-0" placeholder="Enter your email"
                                    style="height: 37px;">
                                <span class="input-group-btns ml-1" style="width:30%;">
                                    <button class="newsletter-btns pt-0" type="submit"
                                        style="line-height: 37px;border-top-right-radius: 5px;border-bottom-right-radius: 5px;">Subscribe</button>
                                </span>
                        </form> --}}
                    </div>
                    <!-- item -->
                    <div class="col-lg-2 col-md-2 col-sm-12 footer_item_wrapper">
                        <!-- title -->
                        <h6 class="home_title_text" style="text-align: start;"><span
                                style="border-bottom: 5px solid #0a1d59;">Abo</span>ut & Contact</h6>
                        <!-- nav list -->
                        <div class="footer_nav_list pt-lg-4 pt-2">
                            <ul class="footer_link_text">
                                <li>
                                    <a href="{{ route('about') }}">About Us</a>
                                </li>
                                <li>
                                    <a href="{{ route('contact') }}">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="col-lg-2 col-md-2 col-sm-12 footer_item_wrapper">
                        <!-- title -->
                        <h6 class="home_title_text" style="text-align: start;"><span
                                style="border-bottom: 5px solid #0a1d59;">Tra</span>ining & Services</h6>
                        <!-- nav list -->
                        <div class="footer_nav_list pt-lg-4 pt-2">
                            <ul class="footer_link_text">
                                <li>
                                    <a href="javascript:void(0)">Corporate Training</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Certification</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="col-lg-2 col-md-2 col-sm-12 footer_item_wrapper">
                        <!-- title -->
                        <h6 class="home_title_text" style="text-align: start;"><span
                                style="border-bottom: 5px solid #0a1d59;">FAQ</span> & Policies</h6>
                        <!-- nav list -->
                        <div class="footer_nav_list pt-lg-4 pt-2">
                            <ul class="footer_link_text">
                                <li>
                                    <a href="{{ route('faq') }}">FAQs</a>
                                </li>
                                <li>
                                    <a href="{{ route('privacy.policy') }}">Course Policy</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- </div> --}}
    <!-- footer social -->
    <div class="container-fluid social_areas">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center align-items-center">
                <div class="trial-block" id="ContactUs">
                    <div class="section-title text-center">
                        <span class="section-title-line section-title-line"></span>
                    </div>
                    <div class="social-overlap process-scetion">
                        <div class="container">
                            <div class="social-icons">
                                <a href="{{ !empty($setting->social_facebook) ? $setting->social_facebook : '' }}"
                                    class="slider-nav-item">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="{{ !empty($setting->social_twitter) ? $setting->social_twitter : '' }}"
                                    class="slider-nav-item">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="{{ !empty($setting->social_linkedin) ? $setting->social_linkedin : '' }}"
                                    target="_blank" class="slider-nav-item">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="{{ !empty($setting->social_youtube) ? $setting->social_youtube : '' }}"
                                    target="_blank" class="slider-nav-item">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer bottom -->
    <div class="container">
        <div class="row px-lg-4 px-sm-0 align-items-center">
            <div class="col-lg-6 text-lg-start text-sm-center">
                <div>
                    <p class="m-0 p-0 text-white">&copy {{ date('Y') }} NgenIt</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div>
                    <ul class="footer_bottom_text">
                        <li>
                            <a class="text-white" href="javascript:void(0)">Privacy policy &nbsp;|&nbsp;
                            </a>
                            {{-- <a class="text-white" href="{{ route('privacy.policy') }}">Privacy policy &nbsp;|&nbsp;
                            </a> --}}
                        </li>
                        <li>
                            <a class="text-white" href="javascript:void(0)">Terms & Conditions &nbsp;|&nbsp;
                            </a>
                            {{-- <a class="text-white" href="{{ route('terms.policy') }}">Terms & Conditions &nbsp;|&nbsp;
                            </a> --}}
                        </li>
                        <li>
                            <a class="text-white" href="javascript:void(0)">Cookies</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!----------End--------->

