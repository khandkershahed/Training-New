@extends('frontend.master')
@section('content')
    <section class="content_wrapper">
        <div class="page-wrapper chiller-theme toggled">
            @include('frontend.pages.client.partials.sidebar')
            <main class="page-content">
                <div class="content_wrapper">
                    <div class="container dashboard-container">
                        <div class="section_wrapper pt-4">
                            <div class="row mt-2">
                                <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
                                    <h2>Welcome to NGen IT</h2>
                                    <p style="text-align: justify;">My NGEN is a platform for optimizing your technology project, support and product
                                        supply chain. Here you can discover, purchase and manage your hardware, software,
                                        digital and cloud solutions. Moreover, you will be able to manage your project &
                                        support management.
                                        There are upcoming more tools like Asset & Logistics Management for keeping software
                                        license & hardware warranty records with shipping and freight calculations.
                                        Our dedicated account management team is also available to provide the highest level
                                        of personalized service and customer satisfaction.
                                    </p>
                                </div>
                                @if (Auth::guard('client')->user()->user_type == 'job_seeker')
                                    <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                                        <h2>Job Management</h2>
                                        <ul>
                                            <li class="list_dashboard">Check <a href="{{route('job.openings')}}" class="main_color">Available Jobs.</a> </li>
                                            <li class="list_dashboard">Check your applied <a href="#" class="main_color"> Job's Status</a></li>
                                            {{-- <li class="list_dashboard">Create and assign user <a href="javascript:void(0);">roles and permissions.</a></li> --}}
                                            <a href="{{ route('job.registration') }}" class="btn-color mt-4">Make your CV</a>
                                        </ul>
                                    </div>
                                @endif
                                @if (count($projects) > 0)
                                    <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                                        <h2>Project Management</h2>
                                        <ul>
                                            <li class="list_dashboard">Check project & <a href="{{route('client.support')}}" class="main_color">support details.</a> </li>
                                            <li class="list_dashboard">Create and maintain <a href="{{route('client.case')}}" class="main_color"> support cases.</a></li>
                                            <li class="list_dashboard">Download related agreements, apps or updated files.</li>
                                            {{-- <li class="list_dashboard">Create and assign user <a href="javascript:void(0);">roles and permissions.</a></li> --}}
                                            <a href="{{ route('client.project') }}" class="btn-color mt-4">Go To
                                                Project</a>
                                        </ul>
                                    </div>
                                @endif
                                <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                                    <h2>Order Management</h2>
                                    <ul>
                                        <li class="list_dashboard">See <a href="#" class="main_color">order details</a> and status of each
                                            item ordered.</li>
                                        <li class="list_dashboard"><a href="{{route('software.info')}}" class="main_color">Track hardware and software</a> orders from
                                            order to delivery.</li>
                                        <li class="list_dashboard">Create <a href="{{ route('mycart') }}" class="main_color"> order templates and quotes </a>to save for
                                            later.</li>
                                        <li class="list_dashboard">Get other <a href="{{ route('mycart') }}" class="main_color">order related services</a> that
                                            help your business growth. </li>
                                        <li class="list_dashboard">Set <a href="javascript:void(0);" class="main_color">payment & shipping</a> methods with
                                            your company’s updated information that help your business growth. </li>
                                        <a href="{{ route('client.orders') }}" class="btn-color mt-4">Go To
                                            Order</a>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                                    <h2>Shopping Management</h2>
                                    <ul>
                                        <li class="list_dashboard">Source technology solutions from thousands of partners.</li>
                                        <li class="list_dashboard">Get exclusive <a href="{{route('all.category')}}" class="main_color">product categories, industry
                                                solutions</a> and <a href="{{ route('shop.html') }}" class="main_color">product pricing.</a>
                                        </li>
                                        <li class="list_dashboard">Create <a href="{{ route('client.rfq') }}" class="main_color"> RFQ</a> for pricing requests <a
                                                href="{{ route('client.rfq') }}" class="main_color">& order templates and quotes</a>to save
                                            for later.
                                        <li class="list_dashboard">Check <a href="{{ route('software.common') }}" class="main_color"> Wish list, Product or Solution
                                                showcase</a></li>
                                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#rfqModal" class="btn-color mt-4">Create
                                            RFQ</a>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                                    <h2>Accounts Management</h2>
                                    <ul>
                                        <li class="list_dashboard">Set your profile, password and other details.</li>
                                        <li class="list_dashboard">Set <a href="{{ route('client.profile') }};" class="main_color">customizable approval workflows.</a>
                                        </li>
                                        <li class="list_dashboard">Create and assign user <a href="{{ route('client.profile') }};" class="main_color">roles and
                                                permissions.</a></li>
                                        <a href="{{ route('client.profile') }}" class="btn-color mt-4">Go To
                                            Profile</a>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                                    <h2>Asset Management</h2>
                                    <ul>
                                        <li class="list_dashboard">Review and manage software license agreements.</li>
                                        <li class="list_dashboard">Track renewals and warranties.</li>
                                        <li class="list_dashboard">Purchase, provision and manage cloud solutions.</li>
                                        <li class="list_dashboard">Set <a href="javascript:void(0);" class="main_color">customizable approval workflows.</a>
                                        </li>
                                        <li class="list_dashboard">Create and assign user <a href="javascript:void(0);" class="main_color">roles and
                                                permissions.</a></li>
                                        <a href="javascript:void(0);" class="btn-color mt-4">Coming
                                            Soon</a>
                                    </ul>
                                </div>
                                @if (Auth::guard('client')->user()->user_type != 'job_seeker')
                                    <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                                        <h2>Job Management</h2>
                                        <ul>
                                            <li class="list_dashboard">Check <a href="{{route('job.openings')}}" class="main_color">Available Jobs.</a> </li>
                                            <li class="list_dashboard">Check your applied <a href="#" class="main_color"> Job's Status</a></li>
                                            {{-- <li class="list_dashboard">Create and assign user <a href="javascript:void(0);">roles and permissions.</a></li> --}}
                                            <a href="{{ route('job.registration') }}" class="btn-color mt-4">Make your CV</a>
                                        </ul>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <!-- Modal -->
        </div>
        <!-- page-wrapper" -->
    </section>
@endsection
