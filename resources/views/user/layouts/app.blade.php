<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="description"
        content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords"
        content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title"
        content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon"
        href="{{ !empty(optional($setting)->site_favicon) && file_exists(public_path('storage/' . optional($setting)->site_favicon)) ? asset('storage/' . optional($setting)->site_favicon) : asset('frontend/images/no-logo(217-55).jpg') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />


    <link href="{{ asset('admin/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('admin/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">


    <link href="{{ asset('admin/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('admin/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />

    @props(['title'])
    <title>{{ $title ?? 'NGen IT Training' }}</title>
    <style>
        .text-container h1 {
            font-size: 3.5rem;
            font-weight: bold;
            margin: 0;
            width: 80%;
        }
    </style>
</head>

<body id="kt_body"
    class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed"
    style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">


    <div class="d-flex flex-column flex-root">

        <div class="page d-flex flex-row flex-column-fluid">

            @include('user.layouts.sidebar')


            <div class="wrapper d-flex flex-column flex-row-fluid pt-20" id="kt_wrapper">

                @include('user.layouts.header')


                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">

                    {{-- @include('user.layouts.toolbar') --}}


                    <div class="post d-flex flex-column-fluid" id="kt_post">

                        <div id="kt_content_container" class="container-xxl">

                            {{ $slot }}

                        </div>

                    </div>

                </div>


                @include('user.layouts.footer')

            </div>

        </div>

    </div>


    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">

        <span class="svg-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1"
                    transform="rotate(90 13 6)" fill="currentColor" />
                <path
                    d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                    fill="currentColor" />
            </svg>
        </span>

    </div>


    @php
        $hostUrl = 'admin/assets/';
    @endphp

    <script src="{{ asset($hostUrl . 'plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset($hostUrl . 'js/scripts.bundle.js') }}"></script>


    <script src="{{ asset($hostUrl . 'plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
    <script src="{{ asset($hostUrl . 'plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="{{ asset($hostUrl . 'plugins/custom/formrepeater/formrepeater.bundle.js') }}"></script>
    <script src="{{ asset($hostUrl . 'plugins/global/plugins.bundle.js') }}"></script>



    <script src="{{ asset($hostUrl . 'js/custom/account/settings/signin-methods.js') }}"></script>
    <script src="{{ asset($hostUrl . 'js/custom/account/settings/profile-details.js') }}"></script>
    <script src="{{ asset($hostUrl . 'js/custom/account/settings/deactivate-account.js') }}"></script>
    <script src="{{ asset($hostUrl . 'js/custom/apps/ecommerce/catalog/save-product.js') }}"></script>
    <script src="{{ asset($hostUrl . 'js/widgets.bundle.js') }}"></script>
    <script src="{{ asset($hostUrl . 'js/custom/widgets.js') }}"></script>
    <script src="{{ asset($hostUrl . 'js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset($hostUrl . 'js/custom/utilities/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset($hostUrl . 'js/custom/utilities/modals/create-app.js') }}"></script>
    <script src="{{ asset($hostUrl . 'js/custom/utilities/modals/offer-a-deal/type.js') }}"></script>
    <script src="{{ asset($hostUrl . 'js/custom/utilities/modals/offer-a-deal/details.js') }}"></script>
    <script src="{{ asset($hostUrl . 'js/custom/utilities/modals/offer-a-deal/finance.js') }}"></script>
    <script src="{{ asset($hostUrl . 'js/custom/utilities/modals/offer-a-deal/complete.js') }}"></script>
    <script src="{{ asset($hostUrl . 'js/custom/utilities/modals/offer-a-deal/main.js') }}"></script>
    <script src="{{ asset($hostUrl . 'js/custom/utilities/modals/two-factor-authentication.js') }}"></script>
    <script src="{{ asset($hostUrl . 'js/custom/utilities/modals/users-search.js') }}"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <script src="{{ asset('admin/js/custom.js') }}"></script>
    @stack('scripts')



</body>

</html>
