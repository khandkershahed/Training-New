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

                                        <!-- Select Event (Select Input) -->
                                        <div class="col-12">
                                            <label for="event" class="form-label">Select Event:</label>
                                            <select id="event" name="event" class="form-select" required>
                                                <option value="" disabled selected>Select an event</option>
                                                <option value="event1">Event 1</option>
                                                <option value="event2">Event 2</option>
                                            </select>
                                        </div>

                                        <!-- Upload Project File (File Input) -->
                                        <div class="col-12">
                                            <label for="project_file" class="form-label">Upload Project File:</label>
                                            <input type="file" id="project_file" name="project_file"
                                                class="form-control" required>
                                        </div>

                                        <!-- Team Members (Number Input) -->
                                        <div class="col-12">
                                            <label for="team_members" class="form-label">Team Members:</label>
                                            <input type="number" id="team_members" name="team_members"
                                                class="form-control" required>
                                        </div>

                                        <!-- Project Website (Link Input) -->
                                        <div class="col-12">
                                            <label for="project_website" class="form-label">Project Website (if
                                                applicable):</label>
                                            <input type="url" id="project_website" name="project_website"
                                                class="form-control">
                                        </div>

                                        <!-- Technologies Used (Tags Input) -->
                                        <div class="col-12">
                                            <label for="technologies_used" class="form-label">Technologies Used:</label>
                                            <input type="text" id="technologies_used" name="technologies_used"
                                                class="form-control" placeholder="Enter technologies separated by commas">
                                        </div>

                                        <!-- Project Status (Select Input) -->
                                        <div class="col-12">
                                            <label for="project_status" class="form-label">Project Status:</label>
                                            <select id="project_status" name="project_status" class="form-select"
                                                required>
                                                <option value="" disabled selected>Select status</option>
                                                <option value="in_progress">In Progress</option>
                                                <option value="completed">Completed</option>
                                            </select>
                                        </div>

                                        <!-- Contact Email (Email Input) -->
                                        <div class="col-12">
                                            <label for="contact_email" class="form-label">Contact Email:</label>
                                            <input type="email" id="contact_email" name="contact_email"
                                                class="form-control" required>
                                        </div>

                                        <!-- Project Description (Textarea) -->
                                        <div class="col-12">
                                            <label for="project_description" class="form-label">Project
                                                Description:</label>
                                            <textarea id="project_description" name="project_description" class="form-control" rows="5" required></textarea>
                                        </div>

                                        <!-- Submit Button -->
                                        <div class="col-12 mt-3">
                                            <button type="submit" class="btn btn-primary">Submit Form 2</button>
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
                                            <input type="number" id="team-members" name="team_member" required
                                                class="form-control" placeholder="Enter team members' names" />
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="">
                                            <label class="fw-semibold mb-1" for="team-members">Team Member Name
                                                One:</label>
                                            <input type="text" id="team-team_member_one_name" name="team_member_one_name"
                                                required class="form-control" placeholder="Enter team member name" />
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="">
                                            <label class="fw-semibold mb-1" for="team-members">Team Member Name
                                                Two:</label>
                                            <input type="text" id="team-team_member_two_name"
                                                name="team_member_two_name" required class="form-control"
                                                placeholder="Enter team member name" />
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <label class="fw-semibold mb-1" for="project-file">Upload Project File:</label>
                                        <input type="file" id="project-file" name="attachment"
                                            accept=".pdf, .doc, .docx, .jpg, .png" class="form-control" />
                                    </div>


                                    <div class="col-lg-12">
                                        <div class="mb-4">
                                            <label class="fw-semibold mb-1" for="project-name">Event Name:</label>

                                            <select name="event_id" id="event_id" class="form-select">
                                                <option selected disabled>Choose Event</option>
                                                @foreach ($events as $event)
                                                    <option value="{{ $event->id }}"
                                                        data-payment-type="{{ $event->payment_type }}">
                                                        {{ $event->event_name }}
                                                    </option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>

                                    <!-- Amount Field -->
                                    <div class="col-lg-6" id="amount-field" style="display: none;">
                                        <div>
                                            <label class="fw-semibold mb-1" for="team-members">Amount:</label>

                                            <input type="text" id="team-amount_paid" name="amount_paid"
                                                class="form-control" value="" placeholder="" />

                                        </div>
                                    </div>

                                    <!-- Transaction Id Field -->
                                    <div class="col-lg-6" id="transaction-id-field" style="display: none;">
                                        <div>
                                            <label class="fw-semibold mb-1" for="team-members">Transaction Id:</label>
                                            <input type="text" id="team-transaction_id" name="transaction_id"
                                                class="form-control" placeholder="" />
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

    <script>
        // Wait for the document to be ready
        document.addEventListener('DOMContentLoaded', function() {
            const eventSelect = document.getElementById('event_id');
            const amountField = document.getElementById('amount-field');
            const transactionIdField = document.getElementById('transaction-id-field');

            // Handle the change event of the select element
            eventSelect.addEventListener('change', function() {
                const selectedOption = eventSelect.options[eventSelect.selectedIndex];
                const paymentType = selectedOption.getAttribute('data-payment-type');

                // Show or hide fields based on the payment type
                if (paymentType === 'paid') {
                    amountField.style.display = 'block';
                    transactionIdField.style.display = 'block';
                } else {
                    amountField.style.display = 'none';
                    transactionIdField.style.display = 'none';
                }
            });

            // Trigger the change event on page load in case an event is already selected
            eventSelect.dispatchEvent(new Event('change'));
        });
    </script>
@endsection
