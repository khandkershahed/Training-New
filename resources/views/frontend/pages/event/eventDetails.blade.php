@extends('frontend.pages.event.app')
@section('event-content')
    @include('frontend.pages.event.partials.event-style')
    {{-- Banner Section start --}}
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 px-0">
                    <div class="image-container">
                        <img src="{{ !empty(optional($event)->banner_image) && file_exists(public_path('storage/' . optional($event)->banner_image)) ? url('storage/' . optional($event)->banner_image) : asset('frontend/images/no-banner(1920-330).png') }}"
                            alt="Event Image" />
                        <div class="overlay"></div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="text-container content-box left-text">
                                    <h6>{{ optional($event)->banner_badge }}</h6>
                                    <h2 class="mb-0 pt-5 srpt-font">
                                        {{ optional($event)->banner_sub_title }}
                                    </h2>
                                    <h1 class="">{{ optional($event)->banner_title }}</h1>
                                    <p class="pt-5 fw-bold">{{ optional($event)->organizer_text }}</p>
                                    <div class="pt-2">
                                        <a href="javascript:void(0)" class="btn me-2 btn-outline-light rounded-pill"
                                            data-bs-toggle="modal" data-bs-target="#mapEvet">
                                            <i class="fa-solid fa-location-dot pe-2"></i>Map
                                        </a>
                                        <a href="{{ optional($event)->website_link }}"
                                            class="btn btn-outline-light me-2 rounded-pill">
                                            <i class="fa-solid fa-globe"></i> Training
                                        </a>
                                        <a href="javascript:void(0)" class="btn btn-outline-light rounded-pill"
                                            data-bs-toggle="modal" data-bs-target="#shareEvet">
                                            <i class="fa-solid fa-share-nodes pe-2"></i>Share
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="text-container calander-box right-text mobile-none">
                                    <div class="card">
                                        <div
                                            class="card-header border-0 py-0 d-flex justify-content-between align-items-end">
                                            <p class="mb-0 pb-3">
                                                <small class="cst-font">Start At</small> <br />
                                                <span
                                                    class="fs-6 fw-bold first-color cst-font">{{ date('g:i A', strtotime(optional($event)->start_time)) }}</span>
                                            </p>
                                            <p class="text-center mb-0">
                                                <span
                                                    class="start-month">{{ date('M', strtotime(optional($event)->start_date)) }}</span>
                                                <span
                                                    class="start-date">{{ date('d', strtotime(optional($event)->start_date)) }}</span>
                                                <span
                                                    class="start-month">{{ date('Y', strtotime(optional($event)->start_date)) }}</span>
                                            </p>
                                            <p class="mb-0 pb-3">
                                                <small class="cst-font">End At</small> <br />
                                                <span
                                                    class="fs-6 fw-bold first-color cst-font">{{ date('g:i A', strtotime(optional($event)->end_time)) }}</span>
                                            </p>
                                        </div>

                                        <div class="card-body py-5">
                                            <div class="flip-countdown"></div>
                                        </div>

                                        <div class="card-footer border-0">
                                            <div class="row align-items-center">
                                                <div class="col-lg-12">
                                                    <div
                                                        class="d-flex p-3 px-0 py-0 align-items-center justify-content-between">
                                                        <h5 class="mb-0 fw-bold cst-font first-color text-end pe-2">
                                                            Registration:
                                                        </h5>
                                                        <div>
                                                            <small><del>2000 Tk</del></small> <br>
                                                            <h4 class="mb-0 fw-bold cst-font second-color text-end pe-2">
                                                                Free
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer border-0">
                                            <a href="{{ route('event.registration') }}"
                                                class="animated-button1 mb-2 w-100">
                                                Registration Now
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Banner Section End --}}
    {{-- Event Overview --}}
    @if (!empty(optional($event)->row_one_title) && !empty(optional($event)->row_one_description))
        <section>
            <div class="container py-5 mobile-none">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-7">
                        <div class="py-5">
                            <h1 class="pb-3 cst-font first-color">{{ optional($event)->row_one_title }}</h1>
                            <p class="fw-semibold">
                                {!! optional($event)->row_one_description !!}
                            </p>

                            @if (optional($event)->row_one_button_link && optional($event)->row_one_button_name)
                                <div class="pt-3">
                                    <a href="{{ optional($event)->row_one_button_link }}"
                                        class="btn btn-primary reg-btn mb-2 rounded-2 cst-font px-5">
                                        {{ optional($event)->row_one_button_name }}
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                    @if (!empty(optional($event)->row_one_image))
                        <div class="col-lg-5">
                            <div class="card rounded-2 border-0 bg-transparent">
                                <div class="card-body">
                                    <img class="img-fluid rounded-2 w-100"
                                        src="{{ !empty(optional($event)->row_one_image) ? url('storage/' . optional($event)->row_one_image) : 'https://ui-avatars.com/api/?name=' . urlencode(optional($event)->row_one_title) }}"
                                        alt="" />
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </section>
    @endif
    {{-- Event Overview End --}}
    {{-- Event Objectives start --}}
    @if (!empty(optional($event)->row_two_title) && !empty(optional($event)->row_two_description))
        <section style="background-color: #eee">
            <div class="container py-5">
                <div class="row" style="text-align: justify">
                    <div class="col-lg-12">

                        <h1 class="first-color cst-font">
                            {{ optional($event)->row_two_title }}
                        </h1>

                        <p class="pt-2">
                            {!! optional($event)->row_two_description !!}
                        </p>

                    </div>
                </div>
            </div>
        </section>
    @endif
    {{-- Event Objectives End --}}
    {{-- Check Availidi --}}
    <section>
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-12">
                    <div class="check-avil-section">
                        <h1 class="cst-font first-color">Check your Eligibility to Participate</h1>
                        <p class="participage-text">To identify eligible work opportunities for visionary IIoT and AI
                            projects, consider the
                            following criteria and areas of focus.</p>

                        <div class="d-flex align-items-center check_eligibility">
                            <p class="pe-2 mb-0 pb-0 participage-text">I want to Participate</p>
                            <div class="pt-lg-0 pt-3">
                                <div class="d-flex check_eligibility">
                                    <label class="list-group-item rounded-pill p-2 px-4 border me-4 shadow-sm text-start">
                                        <input class="form-check-input me-1" type="radio" name="options" value="seminar"
                                            onclick="showContent('seminar')" checked />
                                        for seminar Only
                                    </label>
                                    <label class="list-group-item rounded-pill p-2 border me-4 shadow-sm px-4 text-start">
                                        <input class="form-check-input me-1" type="radio" name="options" value="speech"
                                            onclick="showContent('knowledge')" />
                                        to give a speech and share my knowledge
                                    </label>
                                    <label class="list-group-item rounded-pill p-2 border me-4 shadow-sm px-4 text-start">
                                        <input class="form-check-input me-1" type="radio" name="options" value="project"
                                            onclick="showContent('project')" />
                                        with innovative project idea & work
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div>
                        <div class="seminar_show" style="display: block;">
                            <div class="row align-items-center mt-3">
                                <div class="col-lg-12">
                                    <div>
                                        <h2>Excellent</h2> Our tailored event designed to share knowledge, speakers'
                                        keynotes, talking with industry experts and project idea sharing and many more. You
                                        will also be able to get information about our Training Programs that may help you
                                        guide
                                        your career path in IoT, AI, Web & Apps Development, Blockchain, Cloud Secuirty and
                                        so
                                        many.
                                    </div>
                                    <div class="pt-3 d-flex justify-content-between align-items-center check_eligibility">
                                        <div>
                                            <h6>Please ensure that you are fulfilling one of the below -</h6>
                                            <ul>
                                                <li>You are Final Year / Graduate Student</li>
                                                <li>You want to learn more / Want to Join our training programms</li>
                                                <li>You have registered with our Training Institute for a Training Program
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="text-end">
                                            <a href="{{ route('event.registration') }}"
                                                class="animated-button1 mb-2 py-lg-3 py-2 px-lg-3 px-2"
                                                style="border-radius: 0">
                                                Registration Now
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="knowledge_show" style="display: none;">
                            <div class="row align-items-center mt-3">
                                <div class="col-lg-12">
                                    <div>
                                        <h2>Great!</h2> We love to hear from you. Your knowledge, skills on the related
                                    </div>
                                    <div class="pt-3 d-flex justify-content-between align-items-center check_eligibility">
                                        <div>
                                            <h6>Following are some topics on what you can write up and submit us to Register
                                                for this interest -</h6>
                                            <ul>
                                                <li>Ideas you may have on Emerging Trends of AI, IoT or Robotics </li>
                                                <li>The specific idea of Industrial & Office automations</li>
                                                <li>Livestocks Project concept and implemnetation Idea</li>
                                                <li>An details analysis of Industrial needs on Smart IoT/Automation in
                                                    Bangladesh</li>
                                                <li>Respective Industries and their needs of IIoT SOlutions immediately</li>
                                                <li>What are existing Global IoT Solutions and what still lacking in
                                                    Bangladesh ?</li>
                                            </ul>
                                            <p>Best Analysis, Report , write up will allowed you to give speech in the
                                                session. Also you will have a Certificate</p>
                                        </div>
                                        <div class="text-end">
                                            <a href="{{ route('event.registration') }}"
                                                class="animated-button1 mb-2 py-lg-3 py-2 px-lg-3 px-2"
                                                style="border-radius: 0">
                                                Registration Now
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="project_show" style="display: none;">
                            <div class="row align-items-center mt-3">
                                <div class="col-lg-12">
                                    <div>
                                        <h2>Awesome!</h2>You are the one of the priority pariticipants today. Please see the
                                        below and understand about Scope of Projects and submission details here -
                                    </div>
                                    <div class="pt-3">
                                        <div>
                                            <h6>Please ensure that you are fulfilling one of the below -</h6>
                                            <ol id="industryList">
                                                <li class="mt-3">
                                                    <h5>Industry Required-</h5>
                                                    <strong>Industry Needs:</strong> ( Do you have an existing project, concept, idea, and skill? ) <br>
                                                    <strong>Manufacturing:</strong> Look for projects aimed at optimizing production lines through predictive maintenance, quality control, and process automation. <br>
                                                    <strong>Healthcare:</strong> Explore opportunities that leverage IIoT for remote patient monitoring, smart medical devices, and AI-driven diagnostics.<br>
                                                    <strong>Smart Cities:</strong> Investigate initiatives focused on urban infrastructure, traffic management, and environmental monitoring using connected devices.<br>
                                                    <strong>Energy Management:</strong> Seek projects that integrate IIoT for smart grids, renewable energy management, and efficient energy consumption.<br>
                                                </li>
                                                <li class="mt-3" style="display: none;">
                                                    <h5>Project Details-</h5>
                                                    <strong>Project Scope:</strong> ( Are you intending to share, develop, and participate in the scope of several activities/projects? ) <br>
                                                    <strong>Research and Development:</strong> Identify roles in R&D for innovative solutions that combine AI algorithms with IIoT devices for data analysis and automation.<br>
                                                    <strong>Implementation and Integration:</strong> Look for positions involving the deployment and integration of IIoT systems within existing infrastructures.<br>
                                                    <strong>Data Analysis and Machine Learning:</strong> Explore opportunities for data scientists and analysts to work on AI models that enhance IIoT functionalities.<br>
                                                </li>
                                                <li class="mt-3" style="display: none;">
                                                    <h5>Skills Required-</h5>
                                                    <strong>Technical Skills:</strong> Familiarity with programming languages (e.g., Python, C/C++), cloud platforms (AWS, Azure), and IoT protocols (MQTT, CoAP).<br>
                                                    <strong>AI and Machine Learning Knowledge:</strong> Understanding of machine learning frameworks (e.g., TensorFlow, PyTorch) and experience in developing AI models.<br>
                                                    <strong>Connectivity and Networking:</strong> Knowledge of networking technologies relevant to IoT (e.g., LPWAN, Zigbee) and cybersecurity measures.
                                                </li>
                                                <li class="mt-3" style="display: none;">
                                                    <h5>Types of Roles-</h5>
                                                    <strong>IoT Solutions Architect:</strong> Familiarity with programming languages (e.g., Python, C/C++), cloud platforms (AWS, Azure), and IoT protocols (MQTT, CoAP).<br>
                                                    <strong>Data Scientist/AI Engineer:</strong> Understanding of machine learning frameworks (e.g., TensorFlow, PyTorch) and experience in developing AI models.<br>
                                                    <strong>Systems Engineer:</strong> Overseeing the integration of IIoT systems with existing infrastructure and ensuring seamless functionality. <br>
                                                    <strong>Project Manager:</strong> Leading projects focused on IIoT and AI development, coordinating between technical teams and stakeholders.
                                                </li>
                                                <li class="mt-3" style="display: none;">
                                                    <h5>Collaboration Opportunities-</h5>
                                                    <strong>Partnerships with Startups:</strong> Engage with startups focused on innovative IIoT and AI solutions for potential project collaboration.<br>
                                                    <strong>Academic Institutions:</strong> Collaborate on research projects that explore new frontiers in IIoT and AI, benefiting from academic expertise and resources.<br>
                                                    <strong>Industry Conferences and Workshops:</strong> Attend events focused on IIoT and AI to network with potential employers and partners.
                                                </li>
                                            </ol>
                                            <div class="d-flex justify-content-center align-items-center">
                                                <button class="btn btn-sm animated-button1 px-3 rounded-0" id="toggleButton" onclick="toggleList()"><i class="fa-solid fa-chevron-down pe-2"></i>More</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-end pt-3">
                                        <a href="{{ route('event.registration') }}"
                                            class="animated-button1 mb-2 py-lg-4 py-2 px-lg-3 px-2"
                                            style="border-radius: 0">
                                            Registration Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Check Availidi End --}}
    {{-- Row Three --}}
    @if (!empty(optional($event)->row_three_title) && !empty(optional($event)->row_three_description))
        <section style="background-color: #eee">
            <div class="container py-5 mobile-none">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-8">
                        <div class="py-5">
                            <h1 class="pb-3 cst-font first-color">{{ optional($event)->row_three_badge }}</h1>
                            <div>
                                <h5 class="mb-2">{{ optional($event)->row_three_title }}</h5>
                                <p class="fw-semibold" style="text-align: justify">
                                    {!! optional($event)->row_three_description !!}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card rounded-2 border-0 bg-transparent">
                            <div class="card-body">
                                <img class="img-fluid rounded-2 w-100"
                                    src="{{ !empty(optional($event)->row_three_image) ? url('storage/' . optional($event)->row_three_image) : 'https://ui-avatars.com/api/?name=' . urlencode('Row Three') }}"
                                    alt="" />
                                @if (optional($event)->row_three_button_link && optional($event)->row_three_button_name)
                                    <div class="pt-3">
                                        <a href="{{ optional($event)->row_three_button_link }}"
                                            class="btn btn-primary reg-btn mb-2 rounded-2 cst-font w-100">
                                            {{ optional($event)->row_three_button_name }}
                                        </a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    {{-- Row Three --}}
    {{-- Call To Action --}}
    @if (!empty(optional($event)->row_four_title) && !empty(optional($event)->row_four_description))
        <section class="action-bg py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-10">
                        <div class="text-white">
                            <h3 class="srpt-font">{{ optional($event)->row_four_badge }}</h3>
                            <h1 class="action-title pb-2 cst-font">
                                {{ optional($event)->row_four_title }}
                            </h1>
                            <p class="fw-bold" style="text-align: justify">
                                {!! optional($event)->row_four_description !!}
                            </p>
                        </div>
                    </div>
                    @if (optional($event)->row_four_button_link && optional($event)->row_four_button_name)
                        <div class="col-lg-2">
                            <a href="{{ optional($event)->row_four_button_link }}"
                                class="btn btn-outline-light rouned-0 py-3 cst-font" style="border-radius: 0">
                                {{ optional($event)->row_four_button_name }}
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </section>
    @endif
    {{-- Call To Action End --}}
    {{-- Certificate Start --}}
    @if (!empty(optional($event)->row_five_title) && !empty(optional($event)->row_five_description))
        <section style="background-color: #eee">
            <div class="container py-5 mobile-none">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-4">
                        <div class="card rounded-2 border-0 bg-transparent">
                            <div class="card-body">
                                {{-- <img class="img-fluid rounded-2 w-100"
                                    src="{{ !empty(optional($event)->row_one_image) ? url('storage/event/' . optional($event)->row_one_image) : 'https://ui-avatars.com/api/?name=' . urlencode($event->row_one_title) }}"
                                    alt="" /> --}}
                                <img class="img-fluid rounded-2 w-100"
                                    src="{{ !empty(optional($event)->row_five_image) ? url('storage/' . optional($event)->row_five_image) : 'https://ui-avatars.com/api/?name=' . urlencode('Row Three') }}"
                                    alt="" />
                                @if (optional($event)->row_five_button_link && optional($event)->row_five_button_name)
                                    <div class="pt-3">
                                        <a href="{{ optional($event)->row_five_button_link }}"
                                            class="btn btn-primary reg-btn mb-2 rounded-2 cst-font w-100">
                                            {{ optional($event)->row_five_button_name }}
                                        </a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="py-5">
                            <h1 class="pb-3 cst-font first-color">{{ optional($event)->row_five_title }}</h1>
                            <div>
                                <p>{!! optional($event)->row_five_description !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    {{-- Certificate End --}}
    <section>
        <div class="container py-lg-5 py-3">
            <div class="row">
                <div class="col-lg-12">
                   <div class="d-flex justify-content-between align-items-center">
                    <h1 class="pb-1 cst-font first-color">Event Shedule</h1>
                     <h5>For<strong class="first-color fs-5 ps-2">23 November 2024!</strong></h5>
                   </div>
                </div>
                <div class="col-lg-12 mt-4">
                    <div class="d-flex align-items-center py-3">
                        <div class="event-shedule-title">
                            <h5>Keynote Sessions</h5>
                            <p class="cst-font first-color" style="font-style: italic;">02:20am</p>
                        </div>
                        <div class="event-shedule-description">
                            <p class="mb-0">By Industry Experts & Brilliant Students </p>
                            <p class="mb-0">Insights into the challenges and opportunities of implementing smart automation solutions.</p>
                            <p class="mb-0">Expert speakers will discuss the latest trends and advancements in AI and IoT.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center py-3">
                        <div class="event-shedule-title">
                            <h5>Workshops</h5>
                            <p class="cst-font first-color" style="font-style: italic;">02:20am</p>
                        </div>
                        <div class="event-shedule-description">
                            <p class="mb-0">Designing Smart IoT Solutions: Hands-on session focusing on the architecture and components of effective IoT systems.</p>
                            <p class="mb-0">AI Algorithms for Automation: Learn how to implement machine learning algorithms to optimize industrial processes.</p>
                            <p class="mb-0">Integrating AI with IIoT: Explore tools and platforms that facilitate the integration of AI capabilities into IoT frameworks.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center py-3">
                        <div class="event-shedule-title">
                            <h5>Panel Discussions</h5>
                            <p class="cst-font first-color" style="font-style: italic;">02:20am</p>
                        </div>
                        <div class="event-shedule-description">
                            <p class="mb-0">Engage with a panel of industry experts discussing the future of AI in industrial <br> automation and addressing audience questions.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center py-3">
                        <div class="event-shedule-title">
                            <h5>Networking Sessions</h5>
                            <p class="cst-font first-color" style="font-style: italic;">02:20am</p>
                        </div>
                        <div class="event-shedule-description">
                            <p class="mb-0">Opportunities to connect with fellow participants, speakers, and industry leaders.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center py-3">
                        <div class="event-shedule-title">
                            <h5>Case Studies</h5>
                            <p class="cst-font first-color" style="font-style: italic;">02:20am</p>
                        </div>
                        <div class="event-shedule-description">
                            <p class="mb-0">Presentations highlighting successful implementations of AI-powered IIoT solutions, <br> showcasing their impact on operational efficiency and productivity.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="background-color: #eee">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-4 mb-3 mb-lg-0">
                    <div>
                        <h3 class="first-color fw-bold"><span style="border-bottom: 4px solid #001430;">Loc</span>ation
                        </h3>
                        <div class="d-flex align-items-center pt-4">
                            <div class="pt-4">
                                <i class="fa fa-solid fa-location-dot fs-2 second-color"></i>
                            </div>
                            <p class="fw-semibold pt-3 ps-4 mb-0">
                                <a href="javascript:void(0)"
                                    class="btn me-2 btn-outline-light bg-none border-0 rounded-pill text-black"
                                    data-bs-toggle="modal" data-bs-target="#mapEvet">
                                    {{ optional($event)->location }}
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3 mb-lg-0">
                    <div>
                        <h3 class="first-color fw-bold"><span style="border-bottom: 4px solid #001430;">Con</span>tact
                        </h3>
                        <div class="d-flex align-items-center pt-4">
                            <div class="pt-4">
                                <i class="fa-solid fa-mobile-screen fa-fw fs-2 second-color"></i>
                            </div>
                            <p class="fw-semibold pt-3 ps-4 mb-0">
                                <span>Phone: <span class="ps-2">{{ optional($event)->contact }}</span></span>
                                <br />
                                <span>Email:
                                    <span class="ps-2">info@gmail.com</span></span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3 mb-lg-0">
                    <div>
                        <h3 class="first-color fw-bold"><span style="border-bottom: 4px solid #001430;">Eve</span>nt
                            Shedule</h3>
                        <div class="d-flex align-items-center pt-4">
                            <div class="pt-4">
                                <i class="fa-regular fa-clock fa-fw fs-2 second-color"></i>
                            </div>
                            <p class="fw-semibold pt-3 ps-4 mb-0">
                                {{-- <strong class="pe-2">Event Name:</strong>{{ optional($event)->event_name }} <br> --}}
                                <strong class="pe-2">Event Type:</strong>{{ optional($event)->event_type }} <br>
                                <strong class="pe-2">Date:</strong>
                                {{ date('D, M j, Y', strtotime(optional($event)->start_date)) }}

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Share Modal --}}
    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
    <div class="modal fade" id="mapEvet" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
        role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
            <div class="modal-content rounded-0">
                <div class="modal-header rounded-0" style=" background: rgba(61, 6, 109, 0.8); ">
                    <h5 class="modal-title text-white" id="modalTitleId">
                        Event Location
                    </h5>
                    <button type="button" class="btn-close btn btn-light" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                    <div>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.473499558464!2d90.35587677605153!3d23.76614748817024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8a568a70445%3A0x89dff0189e12966d!2sNGEN%20IT%20LTD.!5e0!3m2!1sen!2sbd!4v1729579396491!5m2!1sen!2sbd&zoom=1"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Share Modal End --}}
    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
    <div class="modal fade" id="shareEvet" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
        role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
            <div class="modal-content rounded-0">
                <div class="modal-header rounded-0" style=" background: rgba(61, 6, 109, 0.8); ">
                    <h5 class="modal-title text-white" id="modalTitleId">
                        Share This Event
                    </h5>
                    <button type="button" class="btn-close btn btn-light" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                    <div>
                        <img class="img-fluid"
                            src="{{ !empty(optional($event)->banner_image) ? url('storage/' . optional($event)->banner_image) : asset('frontend/images/no-banner(1920-330).png') }}"
                            alt="Event Image" />
                    </div>
                    <div class="p-3">
                        <h1 class="pb-3 cst-font first-color">{{ optional($event)->row_one_title }}</h1>
                        <p class="fw-semibold" style="text-align: justify">
                            {!! optional($event)->row_one_description !!}
                        </p>
                    </div>
                </div>
                <div class="modal-footer rounded-0 justify-content-center align-items-center"
                    style=" background: rgba(61, 6, 109, 0.8); ">
                    <span class="text-white">Share On:</span>
                    <div class="">
                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                            <a href="{{ optional($event)->other_link }}" type="button"
                                class="border-0 btn btn-outline-light">
                                <i class="fab fa-facebook-f"></i> Facebook
                            </a>
                            <a href="{{ optional($event)->whatsapp_link }}" type="button"
                                class="border-0 btn btn-outline-light">
                                <i class="fab fa-whatsapp"></i> WhatsApp
                            </a>
                            {{-- <a href="{{ optional($event)->website_link }}" type="button"
                                class="border-0 btn btn-outline-light">
                                <i class="fab fa-linkedin-in"></i> LinkedIn
                            </a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Share Modal End --}}
    @push('scripts')
        <script>
            const lang = 'EN';
            const startDate = '2014-11-20T00:00:00'; // November 20, 2014
            const ColorDigitEnd = '#bfbfbf';

            // Language settings
            const dayLang = lang === 'EN' ? 'Days' : 'Дней';
            const hourLang = lang === 'EN' ? 'Hours' : 'Часов';
            const minLang = lang === 'EN' ? 'Minutes' : 'Минут';
            const secLang = lang === 'EN' ? 'Seconds' : 'Секунд';

            class CountUp {
                constructor({
                    cont,
                    startDate,
                    lang
                }) {
                    this.cont = cont;
                    this.startDate = new Date(startDate);
                    this.lang = lang;
                    this.interval = null;
                }

                start() {
                    this.interval = setInterval(() => {
                        const diff = Date.now() - this.startDate;
                        if (diff <= 0) {
                            clearInterval(this.interval);
                            this.cont.innerHTML = 'Time has not started yet';
                            return;
                        }

                        // Calculate time components
                        const days = Math.floor(diff / 86400000);
                        const hours = Math.floor((diff % 86400000) / 3600000);
                        const minutes = Math.floor((diff % 3600000) / 60000);
                        const seconds = Math.floor((diff % 60000) / 1000);

                        // Update the display
                        this.cont.innerHTML = `
                    <div>${days} ${this.lang.day}</div>
                    <div>${hours} ${this.lang.hour}</div>
                    <div>${minutes} ${this.lang.minute}</div>
                    <div>${seconds} ${this.lang.second}</div>
                `;
                    }, 1000);
                }
            }

            const cu = new CountUp({
                cont: document.querySelector('.flip-countdown'),
                startDate: startDate,
                lang: {
                    day: dayLang,
                    hour: hourLang,
                    minute: minLang,
                    second: secLang
                }
            });
            cu.start();
        </script>
        <script>
            function showContent(type) {
                // Hide all content divs
                document.querySelector('.seminar_show').style.display = 'none';
                document.querySelector('.knowledge_show').style.display = 'none';
                document.querySelector('.project_show').style.display = 'none';

                // Show the selected content
                if (type === 'seminar') {
                    document.querySelector('.seminar_show').style.display = 'block';
                } else if (type === 'knowledge') {
                    document.querySelector('.knowledge_show').style.display = 'block';
                } else if (type === 'project') {
                    document.querySelector('.project_show').style.display = 'block';
                }
            }

            // Call showContent on page load to show the default div for "project"
            window.onload = function() {
                showContent('seminar');
            };
        </script>
        <script>
        function toggleList() {
            const listItems = document.querySelectorAll("#industryList li");
            const button = document.getElementById("toggleButton");

            listItems.forEach((item, index) => {
                if (index > 0) { // Skip the first item
                    item.style.display = item.style.display === "none" ? "block" : "none";
                }
            });

            // Toggle button HTML
            button.innerHTML = button.innerHTML.includes("More")
                ? '<i class="fa-solid fa-chevron-up"></i> Less'
                : '<i class="fa-solid fa-chevron-down"></i> More';
        }
    </script>
    @endpush
@endsection
