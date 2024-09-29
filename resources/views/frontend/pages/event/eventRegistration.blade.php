@extends('frontend.pages.event.app')
@section('event-content')
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 px-0">
                    <div class="image-container image-container-reg">
                        <img src="{{ asset('frontend/images/event_registration.jpg') }}" alt="Event Image" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 registration-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pb-4">
                        <h1 class="text-center">Event Registration</h1>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-3">
                    <div class="card p-0 bg-light" style="border: 2px solid #eee;">
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label class="fw-semibold mb-1" for="project-name">Project Name:</label>
                                            <input type="text" id="project-name" name="project_name" required
                                                class="form-control" placeholder="Enter the project name" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label class="fw-semibold mb-1" for="project-category">Project Category:</label>
                                            <select id="project-category" name="project_category" required
                                                class="form-control">
                                                <option value="">Select a category</option>
                                                <option value="web">Web Development</option>
                                                <option value="mobile">
                                                    Mobile App Development
                                                </option>
                                                <option value="data-science">Data Science</option>
                                                <option value="ai">Artificial Intelligence</option>
                                                <option value="other">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="">
                                            <label class="fw-semibold mb-1" for="team-members">Team Members:</label>
                                            <input type="text" id="team-members" name="team_members" required
                                                class="form-control" placeholder="Enter team members' names" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="fw-semibold mb-1" for="project-file">Upload Project File:</label>
                                        <input type="file" id="project-file" name="project_file"
                                            accept=".pdf, .doc, .docx, .jpg, .png" class="form-control" />
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="pt-3">
                                            <label class="fw-semibold mb-1" for="project-website">Project Website (if
                                                applicable):</label>
                                            <input type="url" id="project-website" name="project_website"
                                                class="form-control" placeholder="Enter project URL" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="pt-3">
                                            <label class="fw-semibold mb-1" for="technology-used">Technologies Used:</label>
                                            <input type="text" id="technology-used" name="technology_used"
                                                class="form-control"
                                                placeholder="List technologies (e.g., React, Node.js)" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="pt-3">
                                            <label class="fw-semibold mb-1" for="project-status">Project Status:</label>
                                            <select id="project-status" name="project_status" required class="form-control">
                                                <option value="">Select status</option>
                                                <option value="completed">Completed</option>
                                                <option value="in-progress">In Progress</option>
                                                <option value="planned">Planned</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="pt-3">
                                            <label class="fw-semibold mb-1" for="contact-email">Contact Email:</label>
                                            <input type="email" id="contact-email" name="contact_email" required
                                                class="form-control" placeholder="Enter your email" />
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="pt-3">
                                            <label class="fw-semibold mb-1" for="project-description">Project
                                                Description:</label>
                                            <textarea id="project-description" name="project_description" rows="4" required class="form-control"
                                                placeholder="Briefly describe your project"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 text-center">
                                        <button type="submit"
                                            class="btn btn-primary reg-btn w-100 mt-3 rounded-2 cst-font">
                                            Register Now
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
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
@endsection
