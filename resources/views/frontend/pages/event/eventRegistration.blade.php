@extends('frontend.pages.event.app')

@section('event-content')
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <style>
        #form2.hidden {
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

                            {{-- ====================== --}}

                            <!-- Form 1 (Register Form) -->
                            <form id="form1" method="POST" action="{{ route('register.user.event') }}"
                                onsubmit="return submitForm1(event)">
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
                                                <input
                                                    class="form-control form-control-sm @error('email') is-invalid @enderror"
                                                    type="email" id="email" name="email"
                                                    value="{{ old('email') }}">

                                                <!-- Display the error message -->
                                                @error('email')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
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
                                                <div class="input-group">
                                                    <input class="form-control form-control-sm" type="password"
                                                        id="password" name="password" required>

                                                    <span class="input-group-text">
                                                        <i class="fas fa-eye" id="eyeIcon" onclick="togglePasswordVisibility()"></i>
                                                    </span>

                                                    <!-- Display the error message -->
                                                    @error('password')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label for="confirm_password">Confirm Password:</label>
                                                <div class="input-group">
                                                    <input class="form-control form-control-sm" type="password"
                                                        id="confirm_password" name="password_confirmation" required>

                                                    <span class="input-group-text">
                                                        <i class="fas fa-eye" id="eyeIcon"
                                                            onclick="toggleConfirmPasswordVisibility()"></i>
                                                    </span>

                                                    @error('password_confirmation')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
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
                            <form id="form2" class="hidden" method="POST"
                                action="{{ route('user.event.registration') }}" enctype="multipart/form-data">

                                @csrf

                                <div class="row">

                                    <div class="col-lg-12">
                                        <div class="mb-4">
                                            <label class="fw-semibold mb-1" for="project-name">Project Name:</label>
                                            <input type="hidden" id="user-id" name="user_id" value="" />
                                            <input type="text" id="project-name" name="project_name" required
                                                class="form-control" placeholder="Enter the project name" />
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="">
                                            <label class="fw-semibold mb-1" for="team-members">Team Members:</label>
                                            <input type="number" id="team_member" name="team_member" required
                                                class="form-control" placeholder="Eg:05" />
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="">
                                            <label class="fw-semibold mb-1" for="team-members">Team Member Name
                                                One:</label>
                                            <input type="text" id="team-team_member_one_name"
                                                name="team_member_one_name" required class="form-control"
                                                placeholder="Enter team member name" />
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
                                        <label class="fw-semibold mb-1" for="attachment">Upload Project File:</label>
                                        <input type="file" id="attachment" name="attachment[]" class="form-control"
                                            multiple />
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

    <div id="loading" style="display: none;">Loading...</div>

    <script>
        function togglePasswordVisibility() {
            var passwordField = document.getElementById('password');
            passwordField.type = passwordField.type === 'password' ? 'text' : 'password';
        }

        function toggleConfirmPasswordVisibility() {
            var confirmPasswordField = document.getElementById('confirm_password');
            confirmPasswordField.type = confirmPasswordField.type === 'password' ? 'text' : 'password';
        }
    </script>


    {{-- <script>
        function submitForm1(event) {
            event.preventDefault(); // Prevent normal form submission

            var formData = new FormData(document.getElementById("form1"));

            $.ajax({
                url: "{{ route('register.user.event') }}", // Your form action route
                method: "POST",
                data: formData,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    $('#loading').show();
                },
                success: function(response) {
                    $('#loading').hide();
                    if (response.success) {
                        $('#form1').hide(); // Hide form1
                        $('#user-id').val(response.id); // Hide form1
                        $('#form2').removeClass('hidden').show(); // Show form2
                    } else {
                        alert('There was an error. Please try again.');
                    }
                },
                error: function(xhr, status, error) {
                    $('#loading').hide();
                    alert('Something went wrong. Please try again.');
                }
            });
        }
    </script> --}}

    <script>
        function submitForm1(event) {
            event.preventDefault(); // Prevent normal form submission

            var formData = new FormData(document.getElementById("form1"));

            $.ajax({
                url: "{{ route('register.user.event') }}", // Your form action route
                method: "POST",
                data: formData,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    $('#loading').show();
                },
                success: function(response) {
                    $('#loading').hide();

                    // Check if the response indicates success
                    if (response.success) {
                        $('#form1').hide(); // Hide form1
                        $('#user-id').val(response.id); // Optionally store user ID or data
                        $('#form2').removeClass('hidden').show(); // Show form2
                    } else {
                        alert('There was an error. Please try again.');
                    }
                },
                error: function(xhr, status, error) {
                    $('#loading').hide();

                    if (xhr.status === 422) {
                        // Validation errors returned from Laravel
                        var errors = xhr.responseJSON.errors;

                        // Clear previous error messages
                        $('.invalid-feedback').remove();

                        // Loop through each error and display them near the respective fields
                        $.each(errors, function(field, messages) {
                            var inputField = $('#' + field);
                            inputField.addClass('is-invalid'); // Add Bootstrap invalid class

                            // Append the error message
                            inputField.after('<div class="invalid-feedback">' + messages.join('<br>') +
                                '</div>');
                        });
                    } else {
                        alert('Something went wrong. Please try again.');
                    }
                }
            });
        }
    </script>



    {{-- //Amount  --}}
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
