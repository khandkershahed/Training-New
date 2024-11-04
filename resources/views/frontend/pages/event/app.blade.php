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
    <link href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        .loader {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 11111;
            background: #050117 url("../img/loader.gif") no-repeat 50% 50%;
            background-size: 570px 420px;
            /* Adjust width and height as needed */
        }
    </style>

</head>

<body>
    <div class="loader"></div>
    <header>
        @include('frontend.pages.event.partials.event_header')
    </header>
    <main>
        @yield('event-content')
    </main>
    <footer>
        @include('frontend.pages.event.partials.event_footer')
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="{{ asset('frontend/assets/Js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/Js/bootstrap.min.js') }}"></script>
    <script src="https://kit.fontawesome.com/69b7156a94.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify"></script>
    <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.polyfills.min.js"></script>
    <script src="{{ asset('frontend/event/scripts/scripts.js') }}"></script>

    @stack('scripts')
    <script>
        $(window).load(function() {
            $(".loader").fadeOut(100);
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    {{-- All Event --}}
    <script>
        var swiper = new Swiper(".mySwiper", {
            effect: "cards", // Use the "cards" effect
            initialSlide: 1, // Start with the second slide if needed
            centeredSlides: true, // Center the active slide
            grabCursor: true, // Change the cursor to grab

            loop: false, // Disable infinite looping of slides
            autoplay: {
                delay: 5000, // Auto-slide with 5 seconds delay
                disableOnInteraction: false, // Auto-slide continues even after interaction
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

        });
        // Pause autoplay on hover
        var swiperContainer = document.querySelector('.mySwiper');

        swiperContainer.addEventListener('mouseenter', function() {
            swiper.autoplay.stop(); // Stop autoplay
        });

        swiperContainer.addEventListener('mouseleave', function() {
            swiper.autoplay.start(); // Start autoplay
        });
    </script>
    {{-- All Event End --}}
    {{-- Event Registration --}}

    <script>
        function activateStep(step) {
            // Remove active from all steps
            document.querySelectorAll('.stepper-item').forEach(item => {
                item.classList.remove('active');
            });

            // Add active to the current step
            document.querySelector(`.stepper-item[data-step="${step}"]`).classList.add('active');
        }

        document.getElementById('toStep2').addEventListener('click', function() {
            activateStep(2); // Activate step 2
            document.getElementById('step-1').classList.add('d-none');
            document.getElementById('step-2').classList.remove('d-none');
        });

        document.getElementById('toStep3').addEventListener('click', function() {
            activateStep(3); // Activate step 3
            document.getElementById('step-2').classList.add('d-none');
            document.getElementById('step-3').classList.remove('d-none');
        });

        document.getElementById('toStep1').addEventListener('click', function() {
            activateStep(1); // Activate step 1
            document.getElementById('step-2').classList.add('d-none');
            document.getElementById('step-1').classList.remove('d-none');
        });

        document.getElementById('backToStep2').addEventListener('click', function() {
            activateStep(2); // Activate step 2
            document.getElementById('step-3').classList.add('d-none');
            document.getElementById('step-2').classList.remove('d-none');
        });
    </script>

    <script>
        document.getElementById('team_member').addEventListener('input', function() {
            const numMembers = parseInt(this.value);
            const additionalFields = document.getElementById('additional_fields');
            const member2Field = document.getElementById('member_2_field');
            const member3Field = document.getElementById('member_3_field');

            if (numMembers > 0) {
                additionalFields.style.display = 'block';
                member2Field.style.display = (numMembers >= 2) ? 'block' : 'none';
                member3Field.style.display = (numMembers === 3) ? 'block' : 'none';
            } else {
                additionalFields.style.display = 'none';
            }
        });
    </script>
    <script>
        // The DOM element you wish to replace with Tagify
        var input = document.querySelector('input[name=technology_used]');

        // initialize Tagify on the above input node reference
        new Tagify(input)

        function validateTeamMember(input) {
            if (input.value !== "1" && input.value !== "2") {
                input.value = ""; // Clear the input if the value is not 1 or 2
            }
        }
    </script>
    {{-- Event Registration End --}}
    <script>
        // Smmoth Header
        window.onscroll = function() {
            if (window.pageYOffset >= 50) {
                var navbar = document.getElementById("navbar");
                navbar.classList.remove("navbar-dark");
                navbar.classList.add("navbar-light");
                navbar.classList.add("navbar-blur");
            } else {
                var navbar = document.getElementById("navbar");
                navbar.classList.remove("navbar-light");
                navbar.classList.remove("navbar-blur");
                navbar.classList.add("navbar-dark");
            }
        };
    </script>
</body>

</html>
