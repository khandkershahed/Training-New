@extends('frontend.pages.event.app')
@section('event-content')
    @include('frontend.pages.event.partials.event-style')
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 px-0">
                    <div class="image-container" style="height: 500px;">
                        <img src="{{ asset('frontend/images/Free-Registration-banner_Events.jpg') }}" alt="Event Image"
                            style="height: 500px;" />
                        <div class="overlay overlay-register"></div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="text-container content-box w-100 text-center">
                                    <h2 class="mb-0 pt-5 pb-0 text-center w-100 rg-sub-title text-uppercase">
                                        Join Now For
                                    </h2>
                                    <h2 class="w-100 rg-title">Initiatives Projects 2024</h2>
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
                        <h1 class="text-center pt-5">Registration</h1>
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
                                    <i class="fa-regular fa-lightbulb"></i>
                                </div>
                                <div class="stepper-label ms-3">
                                    <h6 class="fw-bold stepper-title mb-0">Step 2</h6>
                                    <div class="stepper-desc">Project Details</div>
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
                                    <div class="stepper-desc">Preferences</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8 offset-lg-2">

                        <form class="my-5 mt-0" method="POST" action="{{ route('register.user.event') }}"
                            enctype="multipart/form-data">
                            @csrf

                            <!-- Step 1 content -->
                            <div class="step-content" id="step-1">
                                <div class="row p-3 rounded-2 py-4 shadow-sm" style="border:1px solid #ddd;">
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
                                                id="phone" placeholder="+880 1**** ****">
                                            <!-- Display the error message -->
                                            @error('phone')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <label for="password">Password</label>
                                            <input type="password" name="password" value="{{ old('password') }}"
                                                class="form-control form-control-sm p-3 @error('password') is-invalid @enderror"
                                                id="password" placeholder="******">
                                            <!-- Display the error message -->
                                            @error('password')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <label for="confirm_password">Confirm Password</label>
                                            <input type="password" name="confirm_password"
                                                value="{{ old('confirm_password') }}"
                                                class="form-control form-control-sm p-3 @error('confirm_password') is-invalid @enderror"
                                                id="confirm_password" placeholder="******">
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
                                <div class="row p-3 rounded-2 py-4 shadow-sm" style="border:1px solid #ddd;">
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
                                                id="project_link" placeholder="https://www.ngenittraining.com">
                                            <!-- Display the error message -->
                                            @error('project_duration')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label for="file">Upload Project File <small class="text-primary">(doc,
                                                    ppt, pdf,)</small></label>
                                            <input type="file" name="attachment" value="{{ old('attachment') }}"
                                                class="form-control form-control-sm p-3 @error('attachment') is-invalid @enderror"
                                                id="file">
                                            @error('attachment')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label for="event_name">Event Name</label>
                                            <select
                                                class="form-select form-select-sm @error('confirm_password') is-invalid @enderror"
                                                aria-label="Default select example" name="event_id" style="height: 50px">
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
                                                value="{{ old('project_duration') }}" placeholder="7-6 Month"
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
                                            {{-- <input type="text" name="technology_used" value="{{ old('tech_used') }}"
                                                class="form-control form-control-sm p-3" id="tech_used"> --}}
                                            <input class="form-control form-control-sm p-2" id="tech_used"
                                                name="technology_used" value='Next.Js' autofocus>
                                        </div>
                                    </div>

                                    {{-- <div class="d-flex align-items-center mb-3">
                                        <p class="mb-0">Team</p>
                                        <div class="line"></div>
                                    </div> --}}

                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label for="team_member">Number of Member <small class="text-primary">(Max Two
                                                    Members Allowed)</small></label>
                                            <input type="number" max="2" min="1" name="team_member"
                                                value="{{ old('team_member') }}" placeholder="Eg: 1/2"
                                                class="form-control form-control-sm p-3 @error('team_member') is-invalid @enderror"
                                                id="team_member" oninput="validateTeamMember(this)">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label for="team_member">Team Member 1 Name</label>
                                            <input type="text" max="3" name="team_member_one_name"
                                                value="{{ old('team_member_one') }}" placeholder=""
                                                class="form-control form-control-sm p-3" id="team_member_one">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div id="additional_fields" style="display: none;">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group mb-4" id="member_2_field"
                                                        style="display: none;">
                                                        <label for="member_2">Team Member 2 Name</label>
                                                        <input type="text" name="team_member_two_name"
                                                            class="form-control form-control-sm p-3">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="1"
                                                        name="speech_check" id="speech_check" onclick="toggleSpeech()">
                                                    <label class="form-check-label" for="speech_check">
                                                        Do you want to deliver a speech at the event?
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="pt-3" style="display: none;" id="speech">
                                                    <label class="form-check-label" for="speech">
                                                        Add Speech
                                                    </label>
                                                    <textarea class="form-control" name="speech" rows="3" placeholder="Give me the speech..."></textarea>
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
                                <div class="row p-3 rounded-2 py-4 shadow-sm" style="border:1px solid #ddd;">
                                    <div class="d-flex align-items-center mb-3">
                                        <p class="mb-0">Industry Preference</p>
                                        <div class="line"></div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-check">
                                                    <input type="checkbox" id="check1" name="industry[]"
                                                        value="industrial_smart_management" class="form-check-input">
                                                    <label for="check1" class="form-check-label">Industrial Smart
                                                        Management
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input type="checkbox" id="check2" name="industry[]"
                                                        value="industrial_automation_robotics" class="form-check-input">
                                                    <label for="check2" class="form-check-label">Industrial Automation &
                                                        Robotics
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input type="checkbox" id="check3" name="industry[]"
                                                        value="industrial_ioT_for_energy_utilities"
                                                        class="form-check-input">
                                                    <label for="check3" class="form-check-label">Industrial IoT for
                                                        Energy &
                                                        Utilities
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input type="checkbox" id="check4" name="industry[]"
                                                        value="predictive_maintenance_asset_management"
                                                        class="form-check-input">
                                                    <label for="check4" class="form-check-label">Predictive Maintenance
                                                        &
                                                        Asset Management

                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input type="checkbox" id="check5" name="industry[]"
                                                        value="ioT_sensor_connectivity" class="form-check-input">
                                                    <label for="check5" class="form-check-label">IoT Sensor &
                                                        Connectivity</label>
                                                </div>


                                                <div class="form-check">
                                                    <input type="checkbox" id="check6" name="industry[]"
                                                        value="ioT_sensor_for_power_infrastructures"
                                                        class="form-check-input">
                                                    <label for="check6" class="form-check-label">IoT Sensor for Power
                                                        Infrastructures
                                                    </label>
                                                </div>


                                                <div class="form-check">
                                                    <input type="checkbox" id="check7" name="industry[]"
                                                        value="renewable_energy_monitoring" class="form-check-input">
                                                    <label for="check7" class="form-check-label">Renewable Energy
                                                        Monitoring
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input type="checkbox" id="check8" name="industry[]"
                                                        value="energy_storage_battery_management"
                                                        class="form-check-input">
                                                    <label for="check8" class="form-check-label">Energy Storage &
                                                        Battery
                                                        Management

                                                    </label>
                                                </div>


                                                <div class="form-check">
                                                    <input type="checkbox" id="check9" name="industry[]"
                                                        value="smart_livestock_solution" class="form-check-input">
                                                    <label for="check9" class="form-check-label">Smart Livestock
                                                        Solution

                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input type="checkbox" id="check10" name="industry[]"
                                                        value="smart_environment_solution" class="form-check-input">
                                                    <label for="check10" class="form-check-label">Smart Environment
                                                        Solution</label>
                                                </div>

                                                <div class="form-check">

                                                    <input type="checkbox" id="check11" name="industry[]"
                                                        value="ai_for_smart_mobility_transportation"
                                                        class="form-check-input">

                                                    <label for="check12" class="form-check-label">AI for Smart Mobility
                                                        and
                                                        Transportation</label>
                                                </div>


                                                <div class="form-check">

                                                    <input type="checkbox" id="check13" name="industry[]"
                                                        value="ai_for_agriculture" class="form-check-input">

                                                    <label for="check13" class="form-check-label">AI for
                                                        Agriculture</label>
                                                </div>

                                                <div class="form-check">

                                                    <input type="checkbox" id="check14" name="industry[]"
                                                        value="ai_for_manufacturing" class="form-check-input">

                                                    <label for="check14" class="form-check-label">AI for
                                                        Manufacturing</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">

                                                <div class="form-check">
                                                    <input type="checkbox" id="check15" name="industry[]"
                                                        value="ai_for_public_service_delivery" class="form-check-input">

                                                    <label for="check15" class="form-check-label">AI for Public Service
                                                        Delivery</label>
                                                </div>


                                                <div class="form-check">
                                                    <input type="checkbox" id="check16" name="industry[]"
                                                        value="ai_for_finance_and_trade" class="form-check-input">

                                                    <label for="check16" class="form-check-label">AI for Finance and
                                                        Trade
                                                    </label>
                                                </div>


                                                <div class="form-check">
                                                    <input type="checkbox" id="check17 name="industry[]"
                                                        value="ai_for_eCommerce" class="form-check-input">

                                                    <label for="check17" class="form-check-label">AI for
                                                        eCommerce</label>
                                                </div>

                                                <div class="form-check">
                                                    <input type="checkbox" id="check18" name="industry[]"
                                                        value="ai_for_smart_office_management" class="form-check-input">

                                                    <label for="check18" class="form-check-label">Ai for Smart Office
                                                        Management
                                                    </label>
                                                </div>


                                                <div class="form-check">
                                                    <input type="checkbox" id="check19" name="industry[]"
                                                        value="data_engineering" class="form-check-input">

                                                    <label for="check19" class="form-check-label">Data
                                                        Engineering</label>
                                                </div>

                                                <div class="form-check">
                                                    <input type="checkbox" id="check20" name="industry[]"
                                                        value="data_analysis" class="form-check-input">

                                                    <label for="check20" class="form-check-label">Data Analysis</label>
                                                </div>

                                                <div class="form-check">
                                                    <input type="checkbox" id="check21" name="industry[]"
                                                        value="big_data" class="form-check-input">

                                                    <label for="check21" class="form-check-label">Big Data</label>
                                                </div>

                                                <div class="form-check">
                                                    <input type="checkbox" id="check22" name="industry[]"
                                                        value="data_science" class="form-check-input">

                                                    <label for="check22" class="form-check-label">Data Science</label>
                                                </div>

                                                <div class="form-check">
                                                    <input type="checkbox" id="check23" name="industry[]"
                                                        value="testing_quality_assurance" class="form-check-input">

                                                    <label for="check23" class="form-check-label">Testing & Quality
                                                        Assurance</label>
                                                </div>

                                                <div class="form-check">
                                                    <input type="checkbox" id="check24" name="industry[]"
                                                        value="iot_esting" class="form-check-input">

                                                    <label for="check24" class="form-check-label">IoT Testing</label>
                                                </div>

                                                <div class="form-check">
                                                    <input type="checkbox" id="check25" name="industry[]"
                                                        value="ai_testing" class="form-check-input">

                                                    <label for="check25" class="form-check-label">AI Testing</label>
                                                </div>

                                                <div class="form-check">
                                                    <input type="checkbox" id="check26" name="industry[]"
                                                        value="smart_application_testing" class="form-check-input">

                                                    <label for="check26" class="form-check-label">Smart Application
                                                        Testing</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pt-3">
                                        <div class="d-flex align-items-center mb-3">
                                            <p class="mb-0">Career Development</p>
                                            <div class="line"></div>
                                        </div>

                                        @foreach ($categorys as $category)
                                            <div class="col-6">
                                                <div class="form-check">
                                                    <input type="checkbox" id="check{{ $category->id }}" name="career[]"
                                                        value="{{ $category->id }}"
                                                        class="form-check-input">{{ $category->name }}
                                                    <label for="check{{ $category->id }}"
                                                        class="form-check-label"></label>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                    <div class="d-flex align-items-center mb-3 mt-4">
                                        <p class="mb-0">Terms & Policy</p>
                                        <div class="line"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-check">
                                                <input type="checkbox" id="check27" name="send_email" value="1"
                                                    class="form-check-input">
                                                <label for="check27" class="form-check-label">Send confirmation
                                                    emails</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-check">
                                                <input type="checkbox" id="check28" name="event_notification"
                                                    value="1" class="form-check-input">
                                                <label for="check28" class="form-check-label">Send notification for
                                                    others or next events</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-check">
                                                <input type="checkbox" id="check29" name="terms_condition"
                                                    value="1" class="form-check-input">
                                                <label for="check29" class="form-check-label">I agree to the <a
                                                        class="text-primary" href="{{ route('termsCondition') }}">Terms
                                                        and Conditions</a>, including the privacy policy, code of conduct,
                                                    and cancellation policy.</label>
                                            </div>
                                        </div>
                                    </div>
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
    @push('scripts')
        <script>
            function toggleSpeech() {
                var checkbox = document.getElementById("speech_check");
                var textarea = document.getElementById("speech");
                textarea.style.display = checkbox.checked ? "block" : "none";
            }
        </script>
    @endpush
@endsection
