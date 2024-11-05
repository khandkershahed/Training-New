<x-app-layout :title="'Registered Events'">

    <div class="row">

        <div class="col-xl-4">
            <div class="card card-flush shadow-sm">
                <!-- Card Header -->
                <div class="card-header bg-black">
                    <div class="card-title d-flex flex-column">
                        <h1 class="text-gray-500">Event Information</h1>
                    </div>
                </div>

                <!-- Card Body -->
                <div class="card-body pt-4">
                    <div class="d-flex flex-column gap-3">
                        <!-- Event Name -->
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-bold fs-5 text-gray-700">Event Name:</span>
                            <span class="fs-5 text-primary">{{ $event->event_name }}</span>
                        </div>

                        <!-- Event Date -->
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-bold fs-5 text-gray-700">Event Date:</span>
                            <span
                                class="fs-5">{{ \Carbon\Carbon::parse($event->start_date)->format('d M, Y') }}</span>
                        </div>

                        <!-- Event Time -->
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-bold fs-5 text-gray-700">Event Time:</span>
                            <span class="fs-5">{{ $event->start_time }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-xl-8">
            <div class="card card-flush">
                <div class="card-header bg-dark">
                    <div class="card-title d-flex flex-column">
                        <h1 class="text-gray-500">Event Information</h1>
                    </div>
                </div>

                <div class="card-body pt-0">

                    <form action="{{ route('user.event.registration.update', $eventreg->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="row p-3 rounded-2 py-4">

                            <div class="col-lg-6">
                                <div class="form-group mb-4">
                                    <label for="project_name" class="mb-2">Project Name</label>
                                    <input type="text" value="{{ old('project_name', $eventreg->project_name) }}"
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
                                    <label for="project_duration" class="mb-2">Project Link</label>
                                    <input type="text" name="project_link"
                                        value="{{ old('project_name', $eventreg->project_link) }}"
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

                                    <label for="file" class="mb-2">Upload Project File <small
                                            class="text-primary">(doc,
                                            ppt, pdf,)</small></label>

                                    <input type="file" name="attachment"
                                        class="form-control form-control-sm p-3 @error('attachment') is-invalid @enderror"
                                        id="file">

                                    @if ($eventreg->attachment == null)
                                        <p>No File</p>
                                    @else
                                        <a href="{{ route('download.attachment', $eventreg->id) }}"
                                            class="text-danger">Download Project File</a>
                                    @endif

                                    @error('attachment')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>



                            <div class="col-lg-6">
                                <div class="form-group mb-4">
                                    <label for="project_duration" class="mb-3">Project Duration</label>
                                    <input type="text" name="project_duration"
                                        value="{{ old('project_name', $eventreg->project_duration) }}"
                                        placeholder="7-6 Month"
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
                                    <label for="tech_used" class="mb-3">Technology Used</label>
                                    <input class="form-control" name="technology_used"
                                        value="{{ old('technology_used', $eventreg->technology_used) }}"
                                        id="kt_tagify_1" />
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group mb-4">
                                    <label for="team_member" class="mb-3">Number of Members
                                        <small class="text-primary">(Max Two Members Allowed)</small>
                                    </label>
                                    <input type="number" max="2" min="1" name="team_member"
                                        value="{{ old('team_member', $eventreg->team_member) }}" placeholder="Eg: 1/2"
                                        class="form-control form-control-sm p-3 @error('team_member') is-invalid @enderror"
                                        id="team_member" oninput="validateTeamMember(this)">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group mb-4">
                                    <label for="team_member_one_name" class="mb-3">Team Member 1 Name</label>
                                    <input type="text" name="team_member_one_name"
                                        value="{{ old('team_member_one_name', $eventreg->team_member_one_name) }}"
                                        placeholder="" class="form-control form-control-sm p-3" id="team_member_one">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div id="additional_fields" style="display: none;">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group mb-4" id="member_2_field" style="display: none;">
                                                <label for="team_member_two_name" class="mb-3">Team Member 2
                                                    Name</label>
                                                <input type="text" name="team_member_two_name"
                                                    value="{{ old('team_member_two_name', $eventreg->team_member_two_name) }}"
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
                                                name="speech_check" id="speech_check" onclick="toggleSpeech()"
                                                {{ old('speech_check', $eventreg->speech_check) == 1 ? 'checked' : '' }}>
                                            <label class="form-check-label" class="mb-3" for="speech_check">
                                                Do you want to deliver a speech at the event?
                                            </label>
                                        </div>
                                    </div>


                                    <div class="col-lg-12">
                                        <div class="pt-3" style="display: none;" id="speech">
                                            <label class="form-check-label" class="mb-3" for="speech">
                                                Submit Your Speech
                                            </label>
                                            <textarea class="form-control" name="speech" rows="3" placeholder="Give me the speech...">{!! $eventreg->speech !!}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-primary mt-3">Update</button>
                            </div>

                        </div>

                    </form>

                </div>

            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            // The DOM elements you wish to replace with Tagify
            var input1 = document.querySelector("#kt_tagify_1");

            // Initialize Tagify components on the above inputs
            new Tagify(input1);
        </script>

        <script>
            document.getElementById('team_member').addEventListener('input', function() {
                const numMembers = parseInt(this.value);
                const additionalFields = document.getElementById('additional_fields');
                const member2Field = document.getElementById('member_2_field');

                // Display or hide fields based on the number of team members selected
                if (numMembers >= 1) {
                    additionalFields.style.display = 'block'; // Show the section for Team Member 2
                    member2Field.style.display = (numMembers === 2) ? 'block' :
                        'none'; // Show or hide Team Member 2 field
                } else {
                    additionalFields.style.display = 'none'; // Hide if no members are selected
                }
            });
        </script>

        <script>
            function toggleSpeech() {
                var checkbox = document.getElementById("speech_check");
                var textarea = document.getElementById("speech");
                textarea.style.display = checkbox.checked ? "block" : "none";
            }
        </script>

        <script>
            // Function to toggle the speech textarea visibility
            function toggleSpeech() {
                var checkBox = document.getElementById("speech_check");
                var speechDiv = document.getElementById("speech");

                // If checkbox is checked, show the speech textarea
                if (checkBox.checked) {
                    speechDiv.style.display = "block";
                } else {
                    speechDiv.style.display = "none";
                }
            }

            // Automatically open the speech section if the checkbox is already checked on page load
            window.onload = function() {
                if (document.getElementById("speech_check").checked) {
                    document.getElementById("speech").style.display = "block";
                }
            };
        </script>
    @endpush
</x-app-layout>
