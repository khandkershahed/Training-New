<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        {{ optional($setting)->site_name ?? 'NGenIT Training' }}
    </title>
    <meta name="description" content="{{ optional($setting)->site_slogan }}" />
    <meta name="keywords"
        content="ngenit, training, course, web development, project, course curriculum, professional training, corporate training, web design, graphics design, IOT, machine learning" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ optional($setting)->site_name }}" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="{{ optional($setting)->site_name }}" />

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon"
        href="{{ !empty(optional($setting)->site_favicon) && file_exists(public_path('storage/' . optional($setting)->site_favicon)) ? asset('storage/' . optional($setting)->site_favicon) : asset('frontend/images/no-logo(217-55).jpg') }}"
        type="image/x-icon" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('frontend/event/css/style.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.3.1/css/foundation.min.css"> -->
    <style>
        .flip-countdown {
            display: none !important;
        }
    </style>
</head>

<body>
    <header>
        @include('frontend.pages.event.partials.event_header')
    </header>
    <main>
        @yield('event-content')
    </main>
    <footer>
        <section class="footer-area">
            <div class="container">
                <div class="row text-white align-items-center py-3 footer-areas">
                    <div class="col-lg-3 col-12 p-4 text-lg-start text-center border-left-side">
                        <div>
                            <p class="p-0 m-0 text-white fs-3 fw-bold">
                                <span class="pe-2">Learn IT,</span>Lead IT
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-12 p-4 text-lg-start text-center border-left-side">
                        <div>
                            <a class="text-decoration-none text-white"
                                href="https://www.ngenittraining.com/course-registration">Course Registration
                            </a>
                        </div>
                        <div>
                            <a class="text-decoration-none text-white me-1"
                                href="https://www.ngenittraining.com/faq">FAQ </a>|
                            <a class="text-decoration-none text-white ms-1" href="javascript:void(0)"
                                data-bs-toggle="modal" data-bs-target="#discountModal">Enquiries
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-12 p-4 text-lg-start text-center border-left-side">
                        <ul class="ms-0 ps-0" style="list-style-type: none">
                            <li class="pt-2">
                                <a class="text-white text-decoration-none"
                                    href="https://www.ngenittraining.com/course-service/2/diploma-courses">
                                    Diploma Courses</a>
                            </li>
                            <li class="pt-2">
                                <a class="text-white text-decoration-none"
                                    href="https://www.ngenittraining.com/course-service/3/industrial-courses">
                                    Industrial Courses</a>
                            </li>
                            <li class="pt-2">
                                <a class="text-white text-decoration-none"
                                    href="https://www.ngenittraining.com/course-service/1/kids-courses">
                                    Kids Courses</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-12 p-4 d-flex justify-content-between align-items-center social-area">
                        <ul class="ms-0 ps-0" style="list-style-type: none">
                            <li class="pt-2">
                                <a class="text-white text-decoration-none" href="https://www.ngenittraining.com/service"
                                    style="font-size: 15px">
                                    Our Service</a>
                            </li>
                            <li class="pt-2">
                                <a class="text-white text-decoration-none"
                                    href="https://www.ngenittraining.com/about-us" style="font-size: 15px">About
                                    Us</a>
                            </li>
                            <li class="pt-2">
                                <a class="text-white text-decoration-none" href="https://www.ngenittraining.com/contact"
                                    style="font-size: 15px">
                                    Contact Us</a>
                            </li>
                        </ul>
                        <div class="social-icons-btn">
                            <a class="icons-footer facebook" href="https://www.facebook.com/ngenittraining.official"
                                data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="bottom"
                                data-bs-title="Facebook">
                                <i class="fa-brands fa-facebook-f" aria-hidden="true"></i>
                            </a>
                            <a class="icons-footer linkedin"
                                href="https://www.linkedin.com/company/102726107/admin/dashboard/"
                                data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="bottom"
                                data-bs-title="Linkedin">
                                <i class="fa-brands fa-linkedin-in" aria-hidden="true"></i>
                            </a>
                            <a class="icons-footer youtube" href="" data-bs-toggle="popover"
                                data-bs-trigger="hover" data-bs-placement="bottom" data-bs-title="Youtube">
                                <i class="fa-brands fa-youtube" aria-hidden="true"></i>
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
                            <div class="d-flex align-items-center justify-content-between">
                                <a href="https://www.ngenittraining.com/" class="text-decoration-none">
                                    <small class="mb-0 text-white" style="font-size: 13px">
                                        © 2024 by NGEN IT LTD.
                                    </small>
                                </a>
                                <div class="ps-5">
                                    <a href="https://www.ngenittraining.com/privacy-policy" style="font-size: 15px"
                                        class="text-white text-decoration-none pe-2"><small>Privacy Policy</small></a>
                                    <a href="https://www.ngenittraining.com/terms-and-condition"
                                        style="font-size: 15px" class="text-white text-decoration-none"><small>Terms
                                            &amp; Condition</small></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/69b7156a94.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script src="./assets/scripts/scripts.js"></script>
</body>

</html>
