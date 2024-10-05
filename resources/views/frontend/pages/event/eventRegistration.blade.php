@extends('frontend.pages.event.app')
@section('event-content')
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>
        .hidden {
            display: none;
        }
    </style>

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

                            {{-- <!-- First Form -->
                            <form id="form1" action="{{ route('register') }}" method="post">

                                @csrf

                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label for="name">Name:</label>
                                                <input class="form-control form-control-sm" type="text" id="name"
                                                    name="name" required>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label for="email">Email:</label>
                                                <input class="form-control form-control-sm" type="email" id="email"
                                                    name="email" required>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label for="phone">Phone Number:</label>
                                                <input class="form-control form-control-sm" type="number" id="phone"
                                                    name="phone" required>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label for="password">Password:</label>
                                                <input class="form-control form-control-sm" type="password" id="password"
                                                    name="password" required>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label for="confirm_password">Confirm Password:</label>
                                                <input class="form-control form-control-sm" type="password"
                                                    id="confirm_password" name="confirm_password" required>
                                            </div>
                                        </div>
                                        <div class="py-4">
                                            <div class="col-12">
                                                <input type="checkbox" id="check1" name="check1">
                                                <label for="check1">Some Check</label>
                                            </div>

                                            <div class="col-12">
                                                <input type="checkbox" id="terms" name="terms" required>
                                                <label for="terms">Accept Terms and Conditions</label>
                                            </div>

                                            <div class="col-12">
                                                <input type="checkbox" id="policy" name="policy" required>
                                                <label for="policy">Accept Privacy Policy</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div>
                                                <button type="submit"
                                                    class="btn btn-primary reg-btn w-100 mt-3 rounded-2 cst-font">Submit
                                                    Form</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>


                            <form action="" id="form2" class="hidden" method="post">
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
                            </form> --}}

                            <!-- Form 1 (Register Form) -->
                            <form id="form1" method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="container">
                                    <div class="row">
                                        <!-- Form Fields -->
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label for="name">Name:</label>
                                                <input class="form-control form-control-sm" type="text" id="name"
                                                    name="name" required>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label for="email">Email:</label>
                                                <input class="form-control form-control-sm" type="email" id="email"
                                                    name="email" required>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label for="phone">Phone Number:</label>
                                                <input class="form-control form-control-sm" type="tel" id="phone"
                                                    name="phone" required>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label for="password">Password:</label>
                                                <input class="form-control form-control-sm" type="password" id="password"
                                                    name="password" required>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label for="confirm_password">Confirm Password:</label>
                                                <input class="form-control form-control-sm" type="password"
                                                    id="confirm_password" name="password_confirmation" required>
                                            </div>
                                        </div>

                                        <div class="">
                                            <div class="row">
                                                <p>Preferences</p>
                                                @foreach ($categorys as $index => $category)
                                                    <div class="col-6">
                                                        <div class="form-check">
                                                            <input type="checkbox" id="check{{ $index }}"
                                                                name="preferences[]" value="{{ $category->id }}"
                                                                class="form-check-input">
                                                            <label for="check{{ $index }}"
                                                                class="form-check-label">{{ $category->name }}</label>
                                                        </div>
                                                    </div>
                                                    @if (($index + 1) % 2 == 0)
                                            </div>
                                            <div class="row">
                                                @endif
                                                @endforeach
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div>
                                                <button type="submit"
                                                    class="btn btn-primary reg-btn w-100 mt-3 rounded-2 cst-font">Submit
                                                    Form</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>



                            <!-- Hidden second form for project details -->
                            <form id="form2" class="hidden" method="POST">

                                <div class="row">

                                    <div class="col-lg-12">
                                        <div class="mb-4">
                                            <label class="fw-semibold mb-1" for="project-name">Project Name:</label>
                                            <input type="text" id="project-name" name="project_name" required
                                                class="form-control" placeholder="Enter the project name" />
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
                                            <label class="fw-semibold mb-1" for="technology-used">Technologies
                                                Used:</label>
                                            <input type="text" id="technology-used" name="technology_used"
                                                class="form-control"
                                                placeholder="List technologies (e.g., React, Node.js)" />
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="pt-3">
                                            <label class="fw-semibold mb-1" for="project-status">Project Status:</label>
                                            <select id="project-status" name="project_status" required
                                                class="form-control">
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


                            <!-- Second Form -->
                            {{-- <form id="form2" class="hidden">
                                <h2>Form 2</h2>
                                <label for="email">Email:</label>
                                <input type="email" id="email" name="email" required>
                                <button type="submit">Submit Form 2</button>
                            </form> --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    {{-- <script>
        document.getElementById("form1").addEventListener("submit", function(event) {
            event.preventDefault(); // Prevent form submission for demo purpose
            document.getElementById("form1").classList.add("hidden");
            document.getElementById("form2").classList.remove("hidden");
        });
    </script>
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
    </script> --}}

    <script>
        // jQuery for handling form submission and form visibility
        $(document).ready(function() {
            // Initially hide form2
            $('#form2').addClass('hidden');

            // Handle the first form submission
            $('#form1').on('submit', function(e) {
                e.preventDefault(); // Prevent default form submission

                var formData = $(this).serialize(); // Serialize the form data

                // Send the form data using AJAX
                $.ajax({
                    url: $(this).attr('action'), // Use the form action URL
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        // After successful submission, hide form1 and show form2
                        $('#form1').addClass('hidden');
                        $('#form2').removeClass('hidden');
                    },
                    error: function(xhr, status, error) {
                        // Handle any errors (you can display error messages to the user)
                        alert("An error occurred. Please try again.");
                    }
                });
            });

            // Handle the second form submission (project registration)
            $('#form2').on('submit', function(e) {
                e.preventDefault(); // Prevent default form submission

                var formData = $(this).serialize(); // Serialize the form data

                // Send the form data using AJAX
                $.ajax({
                    url: $(this).attr(
                        'action'), // You need to set the correct action URL for project form
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        // Handle success after second form submission (e.g., redirect or show success message)
                        alert('Project registered successfully!');
                        window.location.href = "/success"; // Redirect to a success page
                    },
                    error: function(xhr, status, error) {
                        // Handle any errors (you can display error messages to the user)
                        alert("An error occurred. Please try again.");
                    }
                });
            });
        });
    </script>
@endsection
