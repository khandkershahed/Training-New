@extends('frontend.pages.event.app')
@section('event-content')
    <style>
        .form-control {
            background-color: #eee;
            border-color: #eee;
            color: #000000;
            border: 0;
            transition: color 0.2s ease;
        }

        .dropdown.show>.form-control,
        .form-control.active,
        .form-control.focus,
        .form-control:active,
        .form-control:focus {
            background-color: #eee;
            border-color: #eee;
            color: #000000;
            border: 0;
            transition: color 0.2s ease;
        }

        .line {
            margin-left: 7px;
            background-color: #646464;
            width: 130px;
            height: 2px;
        }
    </style>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 px-0">
                    <div class="image-container" style="height: 800px;">
                        <img src="{{ asset('frontend/images/Free-Registration-banner_Events.jpg') }}" alt="Event Image"
                            style="height: 800px;" />
                        <div class="overlay"></div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="text-container content-box w-100 text-center">
                                    <h2 class="mb-0 pt-5 srpt-font">
                                        Join Now For
                                    </h2>
                                    <h1 class="w-100">Initiatives <br> Projects 2024</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="text-center pt-4">Registration</h1>
                    </div>
                </div>
                <div class="stepper stepper-pills mb-4 mt-3" id="kt_stepper_example">
                    <div class="stepper-nav d-flex justify-content-between align-items-center event-step-nav">

                        <div class="stepper-item current active" data-step="1">
                            <div class="stepper-wrapper d-flex justify-content-between align-items-center">
                                <div class="stepper-icon">
                                    <i class="fa fa-user"></i>
                                </div>
                                <div class="stepper-label ms-3">
                                    <h6 class="fw-bold stepper-title mb-0">Step 1</h6>
                                    <div class="stepper-desc">Personal Info</div>
                                </div>
                            </div>
                        </div>

                        <div class="stepper-item" data-step="2">
                            <div class="stepper-wrapper d-flex justify-content-between align-items-center">
                                <div class="stepper-icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="stepper-label ms-3">
                                    <h6 class="fw-bold stepper-title mb-0">Step 2</h6>
                                    <div class="stepper-desc">Event Details</div>
                                </div>
                            </div>
                        </div>

                        <div class="stepper-item" data-step="3">
                            <div class="stepper-wrapper d-flex justify-content-between align-items-center">
                                <div class="stepper-icon">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="stepper-label ms-3">
                                    <h6 class="fw-bold stepper-title mb-0">Step 3</h6>
                                    <div class="stepper-desc">Confirm Details</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8 offset-lg-2">

                        <form class="my-5 mt-0">

                            <!-- Step 1 content -->
                            <div class="step-content" id="step-1">
                                <div class="row p-3 rounded-2 py-4" style="border:1px solid #ddd;">
                                    <div class="col-lg-12">
                                        <div class="form-group mb-3">
                                            <label for="name">Name</label>
                                            <input type="text" name="name" value="{{ old('name') }}"
                                                class="form-control form-control-sm p-3 @error('name') is-invalid @enderror"
                                                id="name" placeholder="Jhone Doe">
                                            <!-- Display the error message -->
                                            @error('name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" value="{{ old('email') }}"
                                                class="form-control form-control-sm p-3 @error('email') is-invalid @enderror"
                                                id="email" placeholder="jhone@mail.com">
                                            <!-- Display the error message -->
                                            @error('email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <label for="phone">Phone Number</label>
                                            <input type="text" name="phone" value="{{ old('phone') }}"
                                                class="form-control form-control-sm p-3 @error('phone') is-invalid @enderror"
                                                id="phone" placeholder="+880156854584">
                                            <!-- Display the error message -->
                                            @error('email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <label for="password">Password</label>
                                            <input type="password" name="password" value="{{ old('password') }}"
                                                class="form-control form-control-sm p-3 @error('password') is-invalid @enderror"
                                                id="password">
                                            <!-- Display the error message -->
                                            @error('password')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <label for="confirm_password">Confirm Password</label>
                                            <input type="confirm_password" name="confirm_password"
                                                value="{{ old('confirm_password') }}"
                                                class="form-control form-control-sm p-3 @error('confirm_password') is-invalid @enderror"
                                                id="confirm_password">
                                            <!-- Display the error message -->
                                            @error('confirm_password')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center align-items-center">
                                    <button type="button" class="animated-button1 mt-4" id="toStep2">Next <i
                                            class="fa-solid fa-arrow-right-long"></i></button>
                                </div>
                            </div>

                            <!-- Step 2 content -->
                            <div class="step-content d-none" id="step-2">
                                <div class="row p-3 rounded-2 py-4" style="border:1px solid #ddd;">
                                    <div class="d-flex align-items-center mb-3">
                                        <p class="mb-0">Projects</p>
                                        <div class="line"></div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label for="project_name">Project Name</label>
                                            <input type="text" value="{{ old('project_name') }}"
                                                class="form-control form-control-sm p-3 @error('project_name') is-invalid @enderror"
                                                id="project_name" name="project_name" placeholder="Iot & Others Events">
                                            <!-- Display the error message -->
                                            @error('confirm_password')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label for="project_duration">Project Link</label>
                                            <input type="text" name="project_link" value="{{ old('project_link') }}"
                                                class="form-control form-control-sm p-3 @error('project_link') is-invalid @enderror"
                                                id="project_link">
                                            <!-- Display the error message -->
                                            @error('project_duration')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label for="file">Upload Project File</label>
                                            <input type="file" name="file" value="{{ old('file') }}"
                                                class="form-control form-control-sm p-3 @error('tech_used') is-invalid @enderror"
                                                id="file">
                                            @error('tech_used')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label for="event_name">Event Name</label>
                                            <select
                                                class="form-select form-select-sm @error('confirm_password') is-invalid @enderror"
<<<<<<< HEAD
                                                aria-label="Default select example" style="height: 50px">
=======
                                                aria-label="Default select example" name="event_id">
>>>>>>> ddeb41c55a087c2c934707a4bc00c6966b548fdd
                                                <option selected>Slelect Event</option>
                                                @foreach ($events as $event)
                                                    <option value="{{ $event->id }}">{{ $event->event_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label for="project_duration">Project Duration</label>
                                            <input type="text" name="project_duration"
                                                value="{{ old('project_duration') }}"
                                                class="form-control form-control-sm p-3 @error('project_duration') is-invalid @enderror"
                                                id="project_duration">
                                            <!-- Display the error message -->
                                            @error('project_duration')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label for="tech_used">Technology Used</label>
                                            <input type="text" name="technology_used" value="{{ old('tech_used') }}"
                                                class="form-control form-control-sm p-3" id="tech_used">
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center mb-3">
                                        <p class="mb-0">Team</p>
                                        <div class="line"></div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label for="team_member">Num of Member</label>
                                            <input type="number" max="3" min="1" name="team_member"
                                                value="{{ old('team_member') }}"
                                                class="form-control form-control-sm p-3 @error('team_member') is-invalid @enderror"
                                                id="team_member">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label for="team_member">Team Member One</label>
                                            <input type="text" max="3" name="team_member_one"
                                                value="{{ old('team_member_one') }}"
                                                class="form-control form-control-sm p-3" id="team_member_one">
                                        </div>
                                    </div>

                                    <div id="additional_fields" style="display: none;">
                                        {{-- <div class="form-group mb-4">
                                            <label for="member_1">Member 1</label>
                                            <input type="text" name="member_1" class="form-control form-control-sm">
                                        </div> --}}
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group mb-4" id="member_2_field" style="display: none;">
                                                    <label for="member_2">Member 2</label>
                                                    <input type="text" name="team_member_two" class="form-control form-control-sm p-3">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group mb-4" id="member_3_field" style="display: none;">
                                                    <label for="member_3">Member 3</label>
                                                    <input type="text" name="team_member_three" class="form-control form-control-sm p-3">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="d-flex justify-content-center align-items-center">
                                    <button type="button" class="animated-button1 mt-4" id="toStep1">Back</button>
                                    <button type="button" class="animated-button1 mt-4" id="toStep3">Next <i
                                            class="fa-solid fa-arrow-right-long"></i></button>
                                </div>
                            </div>

                            <!-- Step 3 content -->
                            <div class="step-content d-none" id="step-3">
                                <div class="row p-3 rounded-2 py-4" style="border:1px solid #ddd;">
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
                                    <hr class="mt-3">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-check">
                                                <input type="checkbox" id="check1" name="preferences[]"
                                                    value="1" class="form-check-input">
                                                <label for="check1" class="form-check-label">Send Emails</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-check">
                                                <input type="checkbox" id="50" name="preferences[]"
                                                    value="1" class="form-check-input">
                                                <label for="50" class="form-check-label">Send Emails</label>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="pt-3 text-center">Confirm your details before submitting.</p>
                                </div>
                                <div class="d-flex justify-content-center align-items-center">
                                    <button type="button" class="animated-button1 mt-4" id="backToStep2">Back</button>
                                    <button type="submit" class="animated-button1 mt-4">Submit</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </section>

    <script>
        function activateStep(step) {
            // Remove active from all steps
            document.querySelectorAll('.stepper-item').forEach(item => {
                item.classList.remove('active');
            });

            // Add active to the current step
            document.querySelector(`.stepper-item[data-step="${step}"]`).classList.add('active');
        }

        document.getElementById('toStep2').addEventListener('click', function() {
            activateStep(2); // Activate step 2
            document.getElementById('step-1').classList.add('d-none');
            document.getElementById('step-2').classList.remove('d-none');
        });

        document.getElementById('toStep3').addEventListener('click', function() {
            activateStep(3); // Activate step 3
            document.getElementById('step-2').classList.add('d-none');
            document.getElementById('step-3').classList.remove('d-none');
        });

        document.getElementById('toStep1').addEventListener('click', function() {
            activateStep(1); // Activate step 1
            document.getElementById('step-2').classList.add('d-none');
            document.getElementById('step-1').classList.remove('d-none');
        });

        document.getElementById('backToStep2').addEventListener('click', function() {
            activateStep(2); // Activate step 2
            document.getElementById('step-3').classList.add('d-none');
            document.getElementById('step-2').classList.remove('d-none');
        });
    </script>
    {{-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Find the element(s) with the 'fixed-top' class
            const fixedTopElements = document.querySelectorAll('.fixed-top');

            // Loop through each element and remove the 'fixed-top' class
            fixedTopElements.forEach(element => {
                element.classList.remove('fixed-top');
            });
        });
    </script> --}}
    {{-- Multi Step Form End --}}
    <script>
        document.getElementById('team_member').addEventListener('input', function() {
            const numMembers = parseInt(this.value);
            const additionalFields = document.getElementById('additional_fields');
            const member2Field = document.getElementById('member_2_field');
            const member3Field = document.getElementById('member_3_field');

            if (numMembers > 0) {
                additionalFields.style.display = 'block';
                member2Field.style.display = (numMembers >= 2) ? 'block' : 'none';
                member3Field.style.display = (numMembers === 3) ? 'block' : 'none';
            } else {
                additionalFields.style.display = 'none';
            }
        });
    </script>
@endsection
