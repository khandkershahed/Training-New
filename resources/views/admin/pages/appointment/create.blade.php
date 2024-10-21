<x-admin-app-layout :title="'Appointment Create'">
    <div class="card card-flash">
        <div class="card-header">
            <div class="card-title">
            </div>

            <div class="card-toolbar">
                <a href="{{ route('admin.appointment.index') }}" class="btn btn-light-primary rounded-2">
                    <span class="svg-icon svg-icon-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5"
                                fill="currentColor" />
                            <rect x="10.8891" y="17.8033" width="12" height="2" rx="1"
                                transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                            <rect x="6.01041" y="10.9247" width="12" height="2" rx="1"
                                fill="currentColor" />
                        </svg>
                    </span> Back to list
                </a>

            </div>
        </div>
        <div class="card-body">

            <form id="myForm" method="post" action="{{ route('admin.appointment.store') }}"
                enctype="multipart/form-data">
                @csrf

                <div class="card bg-light">

                    <div class="row p-4">

                        <div class="col-3 mb-3">
                            <div>
                                <label for="counselor_id" class="mb-2">Instructor Name</label>

                                <select class="form-select" name="counselor_id"  autocomplete="off">


                                    <!-- Default option -->

                                    @if ($admins->count() > 0)
                                        <option selected disabled>Choose Counselor</option>
                                        @foreach ($admins as $admin)
                                            <option class="form-control" value="{{ $admin->id }}">
                                                {{ $admin->name }}
                                            </option>
                                        @endforeach
                                    @endif

                                </select>
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Appointment Date</label>
                                <input type="date" name="appointment_date" class="form-control form-control-sm"
                                    value="{{ old('appointment_date') }}"
                                    min="{{ \Carbon\Carbon::today()->toDateString() }}" id="appointment_date">
                            </div>
                        </div>

                        {{-- <div class="col-3 mb-3" id="time_one_container" style="display: none;"> --}}
                        <div class="col-3 mb-3" id="time_one_container">
                            <div class="form-group">
                                <label for="" class="mb-2">Time One</label>
                                <input type="time" name="time_one" placeholder="Time One"
                                    class="form-control form-control-sm" value="{{ old('time_one') }}" id="time_one">
                            </div>
                        </div>

                        {{-- <div class="col-3 mb-3" id="time_two_container" style="display: none;"> --}}
                        <div class="col-3 mb-3" id="time_two_container">
                            <div class="form-group">
                                <label for="" class="mb-2">Time Two</label>
                                <input type="time" name="time_two" placeholder="Time Two"
                                    class="form-control form-control-sm" value="{{ old('time_two') }}" id="time_two">
                            </div>
                        </div>

                        {{-- <div class="col-3 mb-3" id="time_three_container" style="display: none;"> --}}
                        <div class="col-3 mb-3" id="time_three_container">
                            <div class="form-group">
                                <label for="" class="mb-2">Time Three</label>
                                <input type="time" name="time_three" placeholder="Time Three"
                                    class="form-control form-control-sm" value="{{ old('time_three') }}"
                                    id="time_three">
                            </div>
                        </div>

                        {{-- <div class="col-3 mb-3" id="time_four_container" style="display: none;"> --}}
                        <div class="col-3 mb-3" id="time_four_container">
                            <div class="form-group">
                                <label for="" class="mb-2">Time Four</label>
                                <input type="time" name="time_four" placeholder="Time Four"
                                    class="form-control form-control-sm" value="{{ old('time_four') }}" id="time_four">
                            </div>
                        </div>


                        <div class="col-12 mb-3 mt-4">
                            <button type="submit"
                                class="btn btn-primary rounded-0 px-5 btn-sm float-end">Submit</button>
                        </div>

                    </div>
                </div>

            </form>

        </div>

    </div>

    <script>
        // Function to reveal the next field when the current one is filled
        function showNextField() {
            if (document.getElementById('time_one').value) {
                document.getElementById('time_two_container').style.display = 'block';
            }
            if (document.getElementById('time_two').value) {
                document.getElementById('time_three_container').style.display = 'block';
            }
            if (document.getElementById('time_three').value) {
                document.getElementById('time_four_container').style.display = 'block';
            }
        }

        // Show Time One when Appointment Date is selected
        document.getElementById('appointment_date').addEventListener('change', function() {
            if (this.value) {
                document.getElementById('time_one_container').style.display = 'block';
            }
        });

        // Watch the Time fields for changes and reveal the next field accordingly
        document.getElementById('time_one').addEventListener('input', showNextField);
        document.getElementById('time_two').addEventListener('input', showNextField);
        document.getElementById('time_three').addEventListener('input', showNextField);
    </script>


</x-admin-app-layout>
