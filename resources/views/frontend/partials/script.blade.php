<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/6742c5f64304e3196ae7ccb6/1idedajek';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->

<script src="{{ asset('frontend/assets/Js/popper.min.js') }}"></script>
<script src="{{ asset('frontend/assets/Js/bootstrap.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/owl.carousel.min.js"></script>
<script src="{{ asset('frontend/assets/Js/script.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/use-bootstrap-select@2.2.0/dist/use-bootstrap-select.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    // JavaScript to Initialize UseBootstrapSelect for All Elements with the 'example' Class
    const elements = document.querySelectorAll('.example');

    elements.forEach(element => {
        new UseBootstrapSelect(element);
    });
</script>

<script>
    function toggleMenu() {
        var offcanvas = document.querySelector(".offcanvas-sidebar");
        offcanvas.classList.toggle("show");
    }
</script>

<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })
</script>

<script>
    // Initialize popover
    var popoverTriggerList = [].slice.call(
        document.querySelectorAll('[data-bs-toggle="popover"]')
    );
    var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl);
    });
</script>
<script>
    $(document).ready(function() {
        var sync1 = $("#sync1");
        var sync2 = $("#sync2");
        var slidesPerPage = 5; //globaly define number of elements per page
        var syncedSecondary = true;

        sync1
            .owlCarousel({
                items: 1,
                slideSpeed: 2000,
                nav: true,
                autoplay: false,
                dots: false,
                autoplay: false,
                autoplayTimeout: 5000, // Time between transitions (3 seconds)
                autoplayHoverPause: true, // Pause on hover
                smartSpeed: 600, // Speed for the transition
                animateOut: 'fadeOut', // Transition effect for sliding out
                animateIn: 'fadeIn', // Transition effect for sliding in
                loop: true,
                gap: 0,
                responsiveRefreshRate: 200,
                navText: [
                    '<span class="sync-1-right"><i class="fa-solid fa-chevron-left"></i></span>',
                    '<span class="sync-1-left"> <i class="fa-solid fa-chevron-right"></i></span>',
                ],
            })
            .on("changed.owl.carousel", syncPosition);

        sync2
            .on("initialized.owl.carousel", function() {
                sync2.find(".owl-item").eq(0).addClass("current");
            })
            .owlCarousel({
                items: slidesPerPage,
                dots: false,
                nav: false,
                autoplay: false,
                autoplayTimeout: 3000, // Time between transitions (3 seconds)
                autoplayHoverPause: false, // Pause on hover
                smartSpeed: 600, // Speed for the transition
                animateOut: 'fadeOut', // Transition effect for sliding out
                animateIn: 'fadeIn', // Transition effect for sliding in
                slideBy: 1,
                responsiveRefreshRate: 100,
                responsive: {
                    // Breakpoint from 0 up
                    0: {
                        items: 1,
                    },
                    // Breakpoint from 480 up
                    480: {
                        items: 2,
                    },
                    // Breakpoint from 768 up
                    768: {
                        items: 3,
                    },
                    // Breakpoint from 992 up
                    992: {
                        items: slidesPerPage,
                    },
                },
            })
            .on("changed.owl.carousel", syncPosition2);

        function syncPosition(el) {
            //if you set loop to false, you have to restore this next line
            //var current = el.item.index;

            //if you disable loop you have to comment this block
            var count = el.item.count - 1;
            var current = Math.round(el.item.index - el.item.count / 2 - 0.5);

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
            var onscreen = sync2.find(".owl-item.active").length - 1;
            var start = sync2.find(".owl-item.active").first().index();
            var end = sync2.find(".owl-item.active").last().index();

            if (current > end) {
                sync2.data("owl.carousel").to(current, 100, true);
            }
            if (current < start) {
                sync2.data("owl.carousel").to(current - onscreen, 100, true);
            }
        }

        function syncPosition2(el) {
            if (syncedSecondary) {
                var number = el.item.index;
                sync1.data("owl.carousel").to(number, 100, true);
            }
        }

        sync2.on("click", ".owl-item", function(e) {
            e.preventDefault();
            var number = $(this).index();
            sync1.data("owl.carousel").to(number, 300, true);
        });
    });
</script>

{{-- Price For Course  --}}
<script>
    $('.add_to_cart_price').click(function() {

        var course_id = $(this).data('course_id');
        var course_section_id = $(this).data('course_section_id');
        var course_category_id = $(this).data('course_category_id');
        var course_type = $(this).data('course_type');
        var course_amount = $(this).data('course_amount');


        $.ajax({

            type: "POST",
            dataType: 'json',
            url: '/cart-store',

            data: {
                course_id: course_id,
                course_section_id: course_section_id,
                course_category_id: course_category_id,
                course_type: course_type,
                course_amount: course_amount,
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

                    // Toast.fire({
                    //     type: 'error',
                    //     icon: 'error',
                    //     title: data.error,
                    // })

                    if (data.redirect) {
                        // Redirect to login page if needed
                        window.location.href = data.redirect;
                    } else {
                        Toast.fire({
                            type: 'error',
                            icon: 'error',
                            title: data.error,
                        });
                    }
                }
                // End Message
            }

        })

    })
</script>

{{-- Online Price For Course  --}}
<script>
    $('.add_to_cart_online_price').click(function() {

        var course_id = $(this).data('course_id');
        var course_section_id = $(this).data('course_section_id');
        var course_category_id = $(this).data('course_category_id');
        var course_type = $(this).data('course_type');
        var course_amount = $(this).data('course_amount');


        $.ajax({

            type: "POST",
            dataType: 'json',
            url: '/cart-store/online-price',

            data: {
                course_id: course_id,
                course_section_id: course_section_id,
                course_category_id: course_category_id,
                course_type: course_type,
                course_amount: course_amount,
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

                    // Toast.fire({
                    //     type: 'error',
                    //     icon: 'error',
                    //     title: data.error,
                    // })

                    if (data.redirect) {
                        // Redirect to login page if needed
                        window.location.href = data.redirect;
                    } else {
                        Toast.fire({
                            type: 'error',
                            icon: 'error',
                            title: data.error,
                        });
                    }
                }
                // End Message
            }

        })

    })
</script>
@stack('scripts')
