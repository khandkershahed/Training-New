<!--============///* USE LINK Final *///=============-->
<script src="{{ asset('frontend/js/icons/font-awesome@6.js') }}" crossorigin="anonymous"></script>
<script src="{{ asset('frontend/js/jquery/jquery@3-6-0.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery/jquery-ui.min.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/js/plugin/popper.min.js') }}"></script>
<script src="{{ asset('frontend/js/plugin/sweetalert@2011.js') }}"></script>
<script src="{{ asset('frontend/js/plugin/slick.min.js') }}"></script>
<script src="{{ asset('frontend/js/plugin/nasted.tab.js') }}"></script>
<script src="{{ asset('frontend/js/plugin/toastr.min.js') }}"></script>
<script src="{{ asset('frontend/js/plugin/select2.min.js') }}"></script>
<script src="{{ asset('frontend/js/javascript.mr.js') }}"></script>
<script src="{{ asset('frontend/js/javascript.mr.js') }}"></script>
<!-- slick slider -->
<script src="{{ asset('frontend/js/plugin/-crousel@2.3.4.js') }}"></script>
<!-- Datatable -->
<script src="{{ asset('backend/assets/js/vendor/tables/datatables/datatables.min.js') }}"></script>
<script src="{{ asset('backend/assets/demo/pages/datatables_advanced.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- Tiny MCe -->
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdn.tiny.cloud/1/n4jpbhtanca801bcjejx1pc9j033yn0de5ral6e7r0wd6383/tinymce/6/tinymce.min.js"
    referrerpolicy="origin"></script>
<script src="https://www.google.com/recaptcha/api.js"></script>
<script src="https://kit.fontawesome.com/69b7156a94.js" crossorigin="anonymous"></script>

<!-- Custom JS -->
{{-- <script src="{{ asset('backend/assets/js/custom.js') }}"></script> --}}
<script src="{{ asset('frontend/js/custom.js') }}"></script>
<script src="{{ asset('frontend/assets/js/filter.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
{!! Toastr::message() !!}
<!-- Google Recaptcha  -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('submitCaptcha').addEventListener('click', function() {
            // Verify the reCAPTCHA response
            grecaptcha.ready(function() {
                grecaptcha.execute('{{ config('app.recaptcha_site_key') }}', {
                        action: 'submit'
                    })
                    .then(function(token) {
                        // Append the reCAPTCHA response to the form and submit it
                        document.getElementById('captchaModal').querySelector('.modal-body')
                            .insertAdjacentHTML(
                                'beforeend',
                                '<input type="hidden" name="g-recaptcha-response" value="' +
                                token +
                                '">'
                            );
                        document.getElementById('captchaForm').submit();
                    });
            });
        });
    });

    // {{-- Slider --}}
    var $slider_ini = $(".Advance-Slider");
    var total_slide = 0;
    $slider_ini.on("init", function(event, slick, currentSlide, nextSlide) {
        $('button.slick-arrow').append('<div class="thumb"></div>');
        total_slide = slick.slideCount;
        // console.log(total_slide);
        next_img = $(slick.$slides[1]).find('img').attr('src');
        prev_img = $(slick.$slides[total_slide - 1]).find('img').attr('src');
        $('button.slick-next .thumb').append('<img src="' + next_img + '">');
        $('button.slick-prev .thumb').append('<img src="' + prev_img + '">');
    });

    $slider_ini.slick({
        autoplay: true,
        autoplaySpeed: 7000,
        speed: 1500,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        pauseOnHover: false,
        infinite: false,
        prevArrow: false, // Remove the previous (left) arrow
        nextArrow: false, // Remove the next (right) arrow
        customPaging: function(slider, i) {
            var thumb = $(slider.$slides[i]).find('.dots-img').attr('src');
            // console.log(thumb);
            return '<button><div class="mextrix"><a><img src="' + thumb + '"></a></div></button>';
        }
    });
    $("button.slick-arrow , .Advance-Slider ul.slick-dots li button").hover(function() {
        $(this).addClass("hover-in");
        $(this).removeClass("hover-out");
    }, function() {
        $(this).removeClass("hover-in");
        $(this).addClass("hover-out");
    });
    $slider_ini.on('afterChange', function(event, slick, currentSlide) {
        // console.log('afterChange: ' + currentSlide);

        prev_img = $(slick.$slides[currentSlide - 1]).find('img').attr('src');
        next_img = $(slick.$slides[currentSlide + 1]).find('img').attr('src');

        if (currentSlide == total_slide) {
            prev_img = $(currentSlide - 1).find('img').attr('src');
        }

        if (currentSlide == 0) {
            // console.log('if call');
            prev_img = $(slick.$slides[total_slide - 1]).find('img').attr('src');
        }

        if (currentSlide == total_slide - 1) {
            next_img = $(slick.$slides[0]).find('img').attr('src');
        }

        $('button.slick-arrow ').find('img').remove();

        $('button.slick-next .thumb').append('<img src="' + next_img + '">');
        $('button.slick-prev .thumb').append('<img src="' + prev_img + '">');

    });
    // {{-- Slider --}}
</script>


<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var searchContainer = $('#search_container');
        var path = "{{ route('global.search') }}";
        var searchInput = $('#search_text');

        searchInput.autocomplete({
            source: function(request, response) {
                $.ajax({
                    url: path,
                    type: "POST",
                    dataType: "json",
                    data: {
                        // _token: "{{ csrf_token() }}",
                        term: request.term
                    },
                    success: function(data) {

                        if (searchContainer.hasClass('d-none')) {
                            searchContainer.removeClass('d-none');
                        }
                        searchContainer.html(data);

                    }
                });
            },
            minLength: 1
        });

        searchInput.on('input', function() {
            if (searchInput.val() === '') {
                searchContainer.addClass('d-none');
            }
        });

        searchInput.on('keydown', function(event) {
            if (event.keyCode === 8 && searchInput.val() === '') {
                searchContainer.addClass('d-none');
            }
        });

        var searchContainer = $('#mobile_search_container');
        var path = "{{ route('global.search') }}";
        var searchInput = $('#mobile_search_text');

        searchInput.autocomplete({
            source: function(request, response) {
                $.ajax({
                    url: path,
                    type: "POST",
                    dataType: "json",
                    data: {
                        // _token: "{{ csrf_token() }}",
                        term: request.term
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(data) {

                        if (searchContainer.hasClass('d-none')) {
                            searchContainer.removeClass('d-none');
                        }
                        searchContainer.html(data);

                    }
                });
            },
            minLength: 1
        });

        searchInput.on('input', function() {
            if (searchInput.val() === '') {
                searchContainer.addClass('d-none');
            }
        });

        searchInput.on('keydown', function(event) {
            if (event.keyCode === 8 && searchInput.val() === '') {
                searchContainer.addClass('d-none');
            }
        });


        $('.add_to_cart_quantity').click(function() {
            var id = $(this).data('id');
            var name = $(this).data('name');
            var quantity = $('.input-qty').val();
            // alert(quantity);
            var button = $('.cart_quantity_button' + id);
            var cart_header = $('#cartQty');

            var formData = {
                product_id: id,
                name: name,
                qty: quantity
            };

            $.ajax({
                url: "{{ route('add.cart') }}",
                type: 'POST',
                data: formData,
                dataType: 'json',
                success: function(response) {
                    toastr.success('Successfully Added to Your Cart');
                    cart_header.empty();
                    cart_header.append('<span class="add_cart_count">' + response
                        .cartHeader + '</span>');
                    button.empty();
                    button.append();
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });

        $('.add_to_cart').click(function() {
            var id = $(this).data('id');
            var name = $(this).data('name');
            var quantity = $(this).data('quantity');
            var button = $('.cart_button' + id);
            var cart_header = $('#cartQty');

            var formData = {
                product_id: id,
                name: name,
                qty: quantity
            };

            $.ajax({
                url: "{{ route('add.cart') }}",
                type: 'POST',
                data: formData,
                dataType: 'json',
                success: function(response) {
                    toastr.success('Successfully Added to Your Cart');
                    cart_header.empty();
                    cart_header.append('<span class="add_cart_count">' + response
                        .cartHeader + '</span>');
                    button.empty();
                    button.append();

                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script>

{{-- Brand Page Single Product --}}
<script>
    $(document).ready(function() {
        $(".slick-slider").slick({
            slidesToShow: 4,
            infinite: false,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 6000,
            responsive: [{
                breakpoint: 768, // Breakpoint for mobile devices
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    // You can adjust other settings for mobile devices here
                }
            }]
            // dots: false, Boolean
            // arrows: false, Boolean
        });
    });
</script>
<script>
    $(".slick-slider-brand-logo").slick({
        slidesToShow: 10,
        infinite: false,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 6000,
        arrows: false, // Hide navigation arrows on mobile
        dots: false,
        responsive: [{
                breakpoint: 768, // Define the breakpoint for mobile devices
                settings: {
                    slidesToShow: 3, // Show 3 slides on mobile devices
                    arrows: false, // Hide navigation arrows on mobile
                    dots: false // Hide navigation dots on mobile
                }
            }
            // You can add more breakpoints and settings if needed
        ]
    });
</script>
<script>
    if ($('.product__slider-main').length) {
        var $slider = $('.product__slider-main')
            .on('init', function(slick) {
                $('.product__slider-main').fadeIn(1000);
            })
            .slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
                autoplay: true,
                lazyLoad: 'ondemand',
                autoplaySpeed: 6000,
                asNavFor: '.product__slider-thmb'
            });

        var $slider2 = $('.product__slider-thmb')
            .on('init', function(slick) {
                $('.product__slider-thmb').fadeIn(1000);
            })
            .slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                lazyLoad: 'ondemand',
                asNavFor: '.product__slider-main',
                dots: false,
                centerMode: false,
                focusOnSelect: true
            });

        //remove active class from all thumbnail slides
        $('.product__slider-thmb .slick-slide').removeClass('slick-active');

        //set active class to first thumbnail slides
        $('.product__slider-thmb .slick-slide').eq(0).addClass('slick-active');

        // On before slide change match active thumbnail to current slide
        $('.product__slider-main').on('beforeChange', function(event, slick, currentSlide, nextSlide) {
            var mySlideNumber = nextSlide;
            $('.product__slider-thmb .slick-slide').removeClass('slick-active');
            $('.product__slider-thmb .slick-slide').eq(mySlideNumber).addClass('slick-active');
        });


        // init slider
        require(['js-sliderWithProgressbar'], function(slider) {

            $('.product__slider-main').each(function() {

                me.slider = new slider($(this), options, sliderOptions, previewSliderOptions);



            });
        });
        var options = {
            progressbarSelector: '.bJS_progressbar',
            slideSelector: '.bJS_slider',
            previewSlideSelector: '.bJS_previewSlider',
            progressInterval: '',
            onCustomProgressbar: function($slide, $progressbar) {}
        }

        // slick slider options
        // see: https://kenwheeler.github.io/slick/
        var sliderOptions = {
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            autoplay: true
        }

        // slick slider options
        // see: https://kenwheeler.github.io/slick/
        var previewSliderOptions = {
            slidesToShow: 3,
            slidesToScroll: 1,
            dots: false,
            focusOnSelect: true,
            centerMode: true
        }
    }
</script>
<script>
    function gfg(imgs) {
        var expandImg = document.getElementById("expand");
        var imgText = document.getElementById("geeks");
        expandImg.src = imgs.src;
        imgText.innerHTML = imgs.alt;
        expandImg.parentElement.style.display = "block";
    }
</script>

<script>
    //----- Quantity
    function increaseCount(a, b) {
        var input = b.previousElementSibling;
        var value = parseInt(input.value, 10);
        value = isNaN(value) ? 0 : value;
        value++;
        input.value = value;
    }

    function decreaseCount(a, b) {
        var input = b.nextElementSibling;
        var value = parseInt(input.value, 10);
        if (value > 1) {
            value = isNaN(value) ? 0 : value;
            value--;
            input.value = value;
        }
    }
</script>

<script>
    //---- Sidebar Tab Product


    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>


<script>
    $(document).ready(function() {
        $('#editRfquser').click(function() {
            $("#Rfquser").toggle(this.checked);
        });

    });
</script>

{{-- Software Info Page --}}

<script>
    $(document).ready(function() {

        var sync1 = $("#sync1");
        var sync2 = $("#sync2");
        var slidesPerPage = 3; //globaly define number of elements per page
        var syncedSecondary = true;

        sync1.owlCarousel({
            items: 1,
            slideSpeed: 2000,
            nav: true,
            autoplay: false,
            // autoplayTimeout: 3000, // Adjust this value to set the interval
            dots: true,
            loop: true,
            responsiveRefreshRate: 200,
            navText: [
                '<i class="fa-solid fa-arrow-left"></i>',
                '<i class="fa-solid fa-arrow-right"></i>',
            ],
        }).on('changed.owl.carousel', syncPosition);

        sync2
            .on('initialized.owl.carousel', function() {
                sync2.find(".owl-item").eq(0).addClass("current");
            })
            .owlCarousel({
                items: slidesPerPage,
                dots: true,
                nav: false,
                smartSpeed: 200,
                slideSpeed: 500,
                slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
                responsiveRefreshRate: 100
            }).on('changed.owl.carousel', syncPosition2);

        function syncPosition(el) {
            //if you set loop to false, you have to restore this next line
            //var current = el.item.index;

            //if you disable loop you have to comment this block
            var count = el.item.count - 1;
            var current = Math.round(el.item.index - (el.item.count / 2) - .5);

            if (current < 0) {
                current = count;
            }
            if (current > count) {
                current = 0;
            }

            //end block

            sync2
                .find(".owl-item")
                .removeClass("current")
                .eq(current)
                .addClass("current");
            var onscreen = sync2.find('.owl-item.active').length - 1;
            var start = sync2.find('.owl-item.active').first().index();
            var end = sync2.find('.owl-item.active').last().index();

            if (current > end) {
                sync2.data('owl.carousel').to(current, 100, true);
            }
            if (current < start) {
                sync2.data('owl.carousel').to(current - onscreen, 100, true);
            }
        }

        function syncPosition2(el) {
            if (syncedSecondary) {
                var number = el.item.index;
                sync1.data('owl.carousel').to(number, 100, true);
            }
        }

        sync2.on("click", ".owl-item", function(e) {
            e.preventDefault();
            var number = $(this).index();
            sync1.data('owl.carousel').to(number, 300, true);
        });
    });
    // {{-- for Counter --}}
    var buttonPlus = $(".qty-btn-plus");
    var buttonMinus = $(".qty-btn-minus");

    var incrementPlus = buttonPlus.click(function() {
        var $n = $(this)
            .parent(".qty-container")
            .find(".input-qty");
        $n.val(Number($n.val()) + 1);
    });

    var incrementMinus = buttonMinus.click(function() {
        var $n = $(this)
            .parent(".qty-container")
            .find(".input-qty");
        var amount = Number($n.val());
        if (amount > 0) {
            $n.val(amount - 1);
        }
    });

    // {{-- Sidebar --}}
    jQuery(function($) {

        $(".sidebar-dropdown > a").click(function() {
            $(".sidebar-submenu").slideUp(200);
            if (
                $(this)
                .parent()
                .hasClass("active")
            ) {
                $(".sidebar-dropdown").removeClass("active");
                $(this)
                    .parent()
                    .removeClass("active");
            } else {
                $(".sidebar-dropdown").removeClass("active");
                $(this)
                    .next(".sidebar-submenu")
                    .slideDown(200);
                $(this)
                    .parent()
                    .addClass("active");
            }
        });

        $("#close-sidebar").click(function() {
            $(".page-wrapper").removeClass("toggled");
        });
        $("#show-sidebar").click(function() {
            $(".page-wrapper").addClass("toggled");
        });


    });
    // {{-- Sidebar --}}
</script>
{{-- /* ------------------------------ Custom Slider ----------------------------- */ --}}
<script>
    $(document).ready(function() {
        var owl = $(".custom-responsive-slider");
        owl.owlCarousel({
            items: 1,
            itemsDesktop: [1000, 4],
            itemsDesktopSmall: [900, 2],
            itemsTablet: [600, 1],
            itemsMobile: false,
            pagination: false
        });
        $(".custom-responsive-slider-next").click(function() {
            owl.trigger('next.owl.carousel');
        })
        $(".custom-responsive-slider-prev").click(function() {
            owl.trigger('prev.owl.carousel');
        })
    });
</script>



{{-- New Script --}}
<script>
    const slider = $(".slider");

    // Animation
    $(".slider").on("init", function(e, slick) {
        var $firstAnimatingElements = $("div.slick-slide:first-child").find(
            "[data-animation]"
        );
        doAnimations($firstAnimatingElements);
    });
    $(".slider").on("beforeChange", function(e, slick, currentSlide, nextSlide) {
        var $animatingElements = $(
            'div.slick-slide[data-slick-index="' + nextSlide + '"]'
        ).find("[data-animation]");
        doAnimations($animatingElements);
    });

    // Slider Main Settings
    slider.slick({
        dots: true,
        arrows: false,
        vertical: true,
        autoplay: true, // Enable auto slide
        autoplaySpeed: 3000, // Set auto slide speed in milliseconds (optional)
    });

    // Vertical Mouse Scroll
    slider.on("wheel", function(e) {
        e.preventDefault();

        if (e.originalEvent.deltaY < 0) {
            $(this).slick("slickNext");
        } else {
            $(this).slick("slickPrev");
        }
    });

    // Animation
    function doAnimations(elements) {
        var animationEndEvents =
            "webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend";
        elements.each(function() {
            var $this = $(this);
            var $animationDelay = $this.data("delay");
            var $animationType = "animated " + $this.data("animation");
            $this.css({
                "animation-delay": $animationDelay,
                "-webkit-animation-delay": $animationDelay,
            });
            $this.addClass($animationType).one(animationEndEvents, function() {
                $this.removeClass($animationType);
            });
        });
    }

    $(".service-slick-carousel").slick({
        infinite: true,
        slidesToShow: 4, // Shows three slides at a time
        slidesToScroll: 1, // When you click an arrow, it scrolls one slide at a time
        arrows: true, // Adds arrows to sides of slider
        dots: false, // Adds the dots on the bottom
        responsive: [{
                breakpoint: 768, // Adjust the breakpoint as needed
                settings: {
                    slidesToShow: 2,
                },
            },
            {
                breakpoint: 480, // Adjust the breakpoint as needed
                settings: {
                    slidesToShow: 1,
                },
            },
        ],
    });

    $(document).ready(function() {
        $(".slider-testimornial").slick({
            autoplay: true, // Enable auto slide
            autoplaySpeed: 3000, // Set auto slide speed in milliseconds (optional)
            dots: false, // Display dots navigation
            arrows: true, // Display arrows navigation
            infinite: true, // Enable infinite loop
            speed: 500, // Animation speed in milliseconds
            slidesToShow: 4, // Number of slides to show at a time
            slidesToScroll: 1, // Number of slides to scroll at a time
            responsive: [{
                    breakpoint: 768, // Adjust the breakpoint as needed
                    settings: {
                        slidesToShow: 2,
                    },
                },
                {
                    breakpoint: 480, // Adjust the breakpoint as needed
                    settings: {
                        slidesToShow: 1,
                    },
                },
            ],
        });
    });
    $(document).ready(function() {
        $(".slider-pertners").slick({
            autoplay: true, // Enable auto slide
            autoplaySpeed: 3000, // Set auto slide speed in milliseconds (optional)
            dots: false, // Display dots navigation
            arrows: true, // Display arrows navigation
            infinite: true, // Enable infinite loop
            speed: 500, // Animation speed in milliseconds
            slidesToShow: 8, // Number of slides to show at a time
            slidesToScroll: 1, // Number of slides to scroll at a time
            responsive: [{
                    breakpoint: 768, // Adjust the breakpoint as needed
                    settings: {
                        slidesToShow: 2,
                    },
                },
                {
                    breakpoint: 480, // Adjust the breakpoint as needed
                    settings: {
                        slidesToShow: 1,
                    },
                },
            ],
        });
    });

    $(document).ready(function() {
        $(".slider-project").slick({
            autoplay: true, // Enable auto slide
            autoplaySpeed: 3000, // Set auto slide speed in milliseconds (optional)
            dots: false, // Display dots navigation
            arrows: true, // Display arrows navigation
            infinite: true, // Enable infinite loop
            gap: 10,
            speed: 500, // Animation speed in milliseconds
            slidesToShow: 3, // Number of slides to show at a time
            slidesToScroll: 1, // Number of slides to scroll at a time
        });
    });

    $(document).ready(function() {
        $(".slider-related-courses").slick({
            autoplay: true,
            autoplaySpeed: 3000,
            dots: false,
            arrows: true,
            infinite: true,
            speed: 500,
            slidesToShow: 4,
            slidesToScroll: 1,
            gap: 15,
        });
    });

    $(window).load(function() {
        $(".loader").fadeOut(3000);
    });
</script>

{{-- Add To Enroll --}}
<script>
    function addToEnroll(course_id) {
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: '/add-to-enroll/' + course_id,

            data: {
                payment_amount: $('input[name="payment_amount"]').val() // Include payment_amount in the data
            },

            success: function(data) {
                // Start Message 

                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',

                    showConfirmButton: false,
                    timer: 3000
                })
                if ($.isEmptyObject(data.error)) {

                    Toast.fire({
                        type: 'success',
                        icon: 'success',
                        title: data.success,
                    })

                } else {

                    Toast.fire({
                        type: 'error',
                        icon: 'error',
                        title: data.error,
                    })
                }

                // End Message
            }
        })
    }
</script>

{{-- Add To Enroll Online --}}

<script>
    function addToEnrollOnline(element) {

        var amount = element.getAttribute('data-amount');
        var course_id = element.getAttribute('data-id');
        

        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: '/add-to-enroll-online',

            data: {
                course_id: course_id,
                amount: amount,
            },

            success: function(data) {
                // Start Message 

                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',

                    showConfirmButton: false,
                    timer: 3000
                })
                if ($.isEmptyObject(data.error)) {

                    Toast.fire({
                        type: 'success',
                        icon: 'success',
                        title: data.success,
                    })

                } else {

                    Toast.fire({
                        type: 'error',
                        icon: 'error',
                        title: data.error,
                    })
                }

                // End Message
            }
        })
    }
</script>



@yield('scripts')
@stack('scripts')
