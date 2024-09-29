@extends('frontend.pages.event.app')
@section('event-content')
    <section id="homepage">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 px-0">
                    <div class="image-container">
                        <img src="{{ !empty($event->banner_image) ? url('storage/event/' . $event->banner_image) : asset('frontend/images/no-banner(1920-330).png') }}" alt="Event Image" />
                        <div class="overlay"></div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="text-container content-box left-text">
                                    <h6>{{ $event->banner_badge }}</h6>
                                    <h2 class="mb-0 pt-5 srpt-font">
                                        {{ $event->banner_sub_title }}
                                    </h2>
                                    <h1>{{ $event->banner_title }}</h1>
                                    <p class="pt-5 fw-bold">{{ $event->organizer_text }}</p>
                                    <div class="pt-2">
                                        <a href="{{ $event->map_link }}" class="btn btn-outline-light me-2 rounded-pill">
                                            <i class="fa-solid fa-location-dot pe-2"></i>Map
                                        </a>
                                        <a href="{{ $event->website_link }}" class="btn btn-outline-light me-2 rounded-pill">
                                            <i class="fa-solid fa-globe"></i> Training
                                        </a>
                                        <a href="{{ $event->whatsapp_link }}" class="btn btn-outline-light rounded-pill">
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
                                                <span class="fs-6 fw-bold first-color cst-font">9:30 AM</span>
                                            </p>
                                            <p class="text-center mb-0">
                                                <span class="start-month">Aug</span>
                                                <span class="start-date">18</span>
                                                <span class="start-month ps-2">2024</span>
                                            </p>
                                            <p class="mb-0 pb-3">
                                                <small class="cst-font">End At</small> <br />
                                                <span class="fs-6 fw-bold first-color cst-font">4:30 PM</span>
                                            </p>
                                        </div>
                                        <div class="card-body py-5">
                                            <h3 class="text-center fw-bold pb-2">
                                                Let's Countdown
                                            </h3>
                                            <div class="flip-countdown"></div>
                                        </div>
                                        <div class="card-footer border-0">
                                            <div class="row align-items-center">
                                                <div class="col-lg-12">
                                                    <div class="d-flex p-3 align-items-center justify-content-between">
                                                        <h5 class="mb-0 fw-bold cst-font first-color text-end pe-2">
                                                            Event Registraion Fee:
                                                        </h5>
                                                        <h5 class="mb-0 fw-bold cst-font second-color text-end pe-2">
                                                            Free
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer border-0">
                                            <button class="btn btn-primary reg-btn w-100 fw-bold mb-2 rounded-2 cst-font">
                                                Free Registraion
                                            </button>
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
    <section id="overview-section" style="background-color: #eee">
        <div class="container py-5 mobile-none">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <div class="py-5">
                        <h1 class="pb-3 cst-font first-color">Event Overview</h1>
                        <p class="fw-semibold" style="text-align: justify">
                            Join us for an exciting day filled with innovation and
                            creativity at the Project Showcase. This event is designed to
                            highlight the groundbreaking projects developed by
                            participants of the NGen IT Training program. Attendees will
                            have the opportunity to explore a diverse range of projects,
                            interact with the creators, and gain insights into the latest
                            trends in technology and design. Throughout the day, there
                            will be engaging presentations, hands-on demonstrations, and
                            networking opportunities with industry professionals. Whether
                            you're a student, a tech enthusiast, or a business leader,
                            this showcase is a chance to discover new ideas and connect
                            with like-minded individuals. Don't miss this opportunity to
                            witness the future of technology and innovation! Mark your
                            calendar for November 2024, and join us as we celebrate the
                            hard work and creativity of our talented participants.
                        </p>

                        <div class="pt-3">
                            <button class="btn btn-primary reg-btn mb-2 rounded-2 cst-font">
                                Registraion Now
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card rounded-2 border-0 bg-transparent">
                        <div class="card-body">
                            <img class="img-fluid rounded-2 w-100" src="./assets/img/Event-Planning.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="details-requirements">
        <div class="container py-5">
            <div class="row" style="text-align: justify">
                <div class="col-lg-12">
                    <h1 class="first-color cst-font">
                        Project Details and Requirements
                    </h1>
                    <p class="pt-2">
                        The Project Showcase invites participants to present innovative
                        software development projects that demonstrate technical
                        proficiency, creativity, and problem-solving abilities. This is
                        an excellent opportunity for developers, designers, and project
                        managers to showcase their skills and share their insights with
                        a broader audience.
                    </p>

                    <b class="pb-3">Project Details:</b>
                    <ul class="pt-2">
                        <li>
                            <strong>Project Theme:</strong> Focus on addressing real-world
                            problems through technology. Projects can range from mobile
                            applications, web development, and software tools to data
                            analytics solutions and AI implementations.
                        </li>
                        <li>
                            <strong>Project Duration:</strong>All projects should have
                            been developed within the last year to reflect current trends
                            and technologies.
                        </li>
                        <li>
                            <strong>Presentation Format:</strong>Participants will have a
                            10-minute slot to present their projects, followed by a
                            5-minute Q&A session. Presentations can include live demos,
                            slides, or video showcases.
                        </li>
                    </ul>
                    <h4>Requirements for Participants:</h4>
                    <ol>
                        <li>
                            <strong>Team Composition:</strong> Projects can be developed
                            individually or in teams of up to five members.
                        </li>
                        <li>
                            <strong>Documentation:</strong> Participants must provide a
                            project summary (1-2 pages) detailing:
                            <ul>
                                <li>The problem addressed</li>
                                <li>Technical stack used</li>
                                <li>Development process</li>
                                <li>Key features and functionalities</li>
                                <li>Future enhancements</li>
                            </ul>
                        </li>
                        <li>
                            <strong>Prototype/Demo:</strong> A working prototype or demo
                            of the project must be available for the presentation.
                        </li>

                        <li>
                            <strong>Eligibility:</strong> Open to all participants of the
                            NGen IT Training program. However, all submissions will be
                            reviewed, and only selected projects will be showcased at the
                            event.
                        </li>

                        <li>
                            <strong>Submission Deadline:</strong> All project summaries
                            and documentation must be submitted by [Insert Submission
                            Date].
                        </li>
                    </ol>

                    <h4>Evaluation Criteria:</h4>
                    <p>Projects will be evaluated based on the following criteria:</p>
                    <ul>
                        <li>
                            <strong>Innovation:</strong>Originality and creativity in
                            addressing the identified problem.
                        </li>
                        <li>
                            <strong>Technical Complexity:</strong> The level of technical
                            challenge involved in the project.
                        </li>

                        <li>
                            <strong>Functionality:</strong>The usability and effectiveness
                            of the developed solution.
                        </li>

                        <li>
                            <strong>Presentation:</strong>Clarity and professionalism
                            during the presentation.
                        </li>
                    </ul>

                    <p>
                        This showcase is a fantastic platform to not only exhibit your
                        work but also to receive constructive feedback from industry
                        professionals. We encourage all participants to engage in
                        discussions and network with fellow developers, potential
                        employers, and investors.
                    </p>
                    <p>
                        Mark your calendars and prepare to showcase your hard work and
                        innovation!
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="action-bg py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="text-white">
                        <h3 class="srpt-font">Lorem ipsum dolor sit amet.</h3>
                        <h1 class="action-title pb-2 cst-font">
                            Business Meet Inovation
                        </h1>
                        <p class="fw-bold" style="text-align: justify">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Dolorem dolores deserunt aut quisquam vel provident animi rem
                            est. Iste eos repellendus fugiat tempore! Cupiditate quibusdam
                            debitis, necessitatibus sapiente autem et!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="projects" style="background-color: #eee">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-4 mb-3 mb-lg-0">
                    <div>
                        <h3 class="first-color fw-bold"><span style="border-bottom: 4px solid #001430;">Loc</span>ation</h3>
                        <div class="d-flex align-items-center pt-4">
                            <div class="pt-4">
                                <i class="fa fa-solid fa-location-dot fs-2 second-color"></i>
                            </div>
                            <p class="fw-semibold pt-3 ps-4 mb-0">
                                House no #36-37, Mahfuza Tower(5th floor) <br />
                                Probal Housing, Ring Road, Mohammadpur, Dhaka-1207,
                                Bangladesh.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3 mb-lg-0">
                    <div>
                        <h3 class="first-color fw-bold"><span style="border-bottom: 4px solid #001430;">Con</span>tact</h3>
                        <div class="d-flex align-items-center pt-4">
                            <div class="pt-4">
                                <i class="fa-solid fa-mobile-screen fa-fw fs-2 second-color"></i>
                            </div>
                            <p class="fw-semibold pt-3 ps-4 mb-0">
                                <span>Phone: <span class="ps-2">(+88) 01958025050</span></span>
                                <br />
                                <span>Telephone:
                                    <span class="ps-2">(+88) 01958025050</span></span>
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
                                <strong class="pe-2">Event Name:</strong>Software Project Showcase <br>
                                <strong class="pe-2">Date:</strong> 18 October 2024.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
