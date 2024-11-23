<x-app-layout :title="'Your Dashboard'">

    <div class="row gy-5 g-xl-8">

        <div class="col-xl-4">
            <div class="card h-xl-100">
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-gray-900">Course Registration</span>
                    </h3>
                </div>

                <div class="card-body pt-6">

                    @forelse ($registerCourse as $key => $registration)
                        <div class="d-flex flex-stack">
                            <div class="me-5">
                                {{ $loop->iteration }} <!-- This will give you the loop count starting from 1 -->
                            </div>
                            <div class="symbol me-5 my-auto">
                                <div class="text-inverse-danger">
                                    <img src="{{ !empty($registration->courseName->thumbnail_image) ? url('storage/course/' . $registration->courseName->thumbnail_image) : 'https://ui-avatars.com/api/?name=' . urlencode($registration->courseName->name) }}"
                                        class="card-img-top" alt="..." style="width:60px;height:60px">
                                </div>
                            </div>

                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                <div class="flex-grow-1 me-2">
                                    <a href="javascript:;"
                                        class="text-gray-800 text-hover-primary fs-6 fw-bold">{{ $registration->courseName->name }}</a>

                                    <div class="mt-3">
                                        @if ($registration->course_type == 'online')
                                            <span class="badge bg-danger">Course Type: Online</span>
                                        @else
                                            <span class="badge bg-info">Course Type: Offline</span>
                                        @endif
                                        @if ($registration->payment_type == 'unpaid')
                                            <span class="badge bg-danger">Payment Type: Pending...</span>
                                        @elseif ($registration->payment_type == 'pending')
                                            <span class="badge bg-success">Payment Type: Payment</span>
                                        @else
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="separator separator-dashed my-4"></div>
                    @empty
                        <p>No Course Registration</p>
                    @endforelse

                </div>
            </div>
        </div>

        <div class="col-xl-4">
            <div class="card card-flush h-xl-100">

                <div class="card-header rounded bgi-no-repeat bgi-size-cover bgi-position-y-top bgi-position-x-center align-items-start"
                    style="background-image:url('https://preview.keenthemes.com/metronic8/demo1/assets/media/svg/shapes/top-green.png'); height: 200px;"
                    data-bs-theme="light">
                    <h3 class="card-title align-items-start flex-column text-white pt-15">
                        <span class="fw-bold fs-2x mb-3">{{ Auth::user()->name }}</span>
                    </h3>
                </div>


                <div class="card-body mt-n20">
                    <div class="mt-n20 position-relative">
                        <div class="row g-3 g-lg-6">

                            <div class="col-6">
                                <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                    <div class="symbol symbol-30px me-5 mb-8">
                                        <span class="symbol-label">
                                            <img src="{{ asset('images/Total Courses.png') }}" style="width:25px;height:25px;" alt="">
                                        </span>
                                    </div>
                            
                                    <div class="m-0">
                                        <a href="{{ route('admin.course.index') }}"
                                            class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">
                                            {{ $registerCourse->count() }}  <!-- Display the count of registered courses -->
                                        </a>
                            
                                        <span class="text-gray-500 fw-semibold fs-6">Register Courses</span>
                                    </div>
                                </div>
                            </div>
                            

                            <div class="col-6">
                                <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                    <div class="symbol symbol-30px me-5 mb-8">
                                        <span class="symbol-label">
                                            <img src="{{ asset('images/Total Enrolled.png') }}"
                                                style="width:25px;height:25px;" alt="">
                                        </span>
                                    </div>

                                    <div class="m-0">
                                        <a href="{{ route('admin.all.registration') }}"
                                            class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">{{ $events->count() }}</a>

                                        <span class="text-gray-500 fw-semibold fs-6">Register Events</span>
                                    </div>
                                </div>
                            </div>

                            {{-- <div class="col-6">
                                <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">

                                    <div class="symbol symbol-30px me-5 mb-8">
                                        <span class="symbol-label">
                                            <img src="{{ asset('images/Monthly Enrolled.png') }}"
                                                style="width:25px;height:25px;" alt="">
                                        </span>
                                    </div>

                                    <div class="m-0">
                                        <a href="{{ route('admin.all.registration') }}"
                                            class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">2</a>

                                        <span class="text-gray-500 fw-semibold fs-6">Monthly Enrolled</span>
                                    </div>
                                </div>
                            </div> --}}

                            {{-- <div class="col-6">
                                <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">

                                    <div class="symbol symbol-30px me-5 mb-8">
                                        <span class="symbol-label">
                                            <img src="{{ asset('images/Today Enrolled.png') }}"
                                                style="width:25px;height:25px;" alt="">
                                        </span>
                                    </div>

                                    <div class="m-0">
                                        <a href="{{ route('admin.all.registration') }}"
                                            class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">3</a>

                                        <span class="text-gray-500 fw-semibold fs-6">Today Enrolled</span>
                                    </div>

                                </div>
                            </div> --}}

                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-xl-4">
            <div class="card card-flush h-md-100 mb-5 mb-xl-10">

                <div class="card-header pt-5">
                    <h3 class="card-title align-items-start flex-column mb-5">
                        <span class="card-label fw-bold text-gray-900">Course Registration</span>
                    </h3>
                    <div class="card-title">

                        @if (count($events) > 0)
                            <div class="row g-5 gx-xl-12 mb-5 mb-xl-10">

                                @foreach ($events as $event)
                                    <div class="col-lg-6 col-md-6">
                                        <div class="card bg-dark h-xl-100">
                                            <div class="card-header">
                                                <h3 class="card-title fw-semibold text-center text-white">
                                                    {{ $event->eventName->event_name }} </h3>
                                            </div>
                                            <div class="card-body d-flex flex-column pt-13 pb-14">
                                                <div class="m-0">
                                                    <h4 class="fw-semibold text-white text-center lh-lg mb-9">
                                                        <span class="fw-bolder"> Date :
                                                            {{ \Carbon\Carbon::parse($event->eventName->start_date)->format('d M Y') }}

                                                    </h4>
                                                </div>
                                                <div class="text-center">
                                                    <a class="btn btn-sm bg-white btn-color-white text-black"
                                                        href="{{ route('user.event.details', $event->eventName->slug) }}">
                                                        Details </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif

                    </div>
                </div>

            </div>
        </div>

        {{-- <div class="col-xl-12">
            <div class="card card-flush">
                <div class="card-header pt-5">
                    <div class="card-title d-flex flex-column">
                        <span class="text-gray-500 pt-1 fw-semibold fs-2">Event Registration Information</span>
                    </div>
                </div>

                <div class="card-body pt-0">
                    <table id="kt_datatable_example_5"
                        class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
                        <thead class="bg-dark text-light">
                            <tr>
                                <th width="5%">No</th>
                                <th>User Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Event Id</th>
                                <th>Project Name</th>
                                <th>Total Member</th>
                                <th>Industry</th>
                                <th>Career</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="fw-bold text-gray-600">

                            @foreach ($eventregs as $key => $item)
                                <tr>
                                    <td class="text-start">{{ $key + 1 }}</td>

                                    <td class="text-start">{{ $item->eventUserName->name }}</td>
                                    <td class="text-start">{{ $item->eventUserName->email }}</td>
                                    <td class="text-start">{{ $item->eventUserName->phone }}</td>
                                    <td class="text-start">{{ optional($item->eventName)->event_name }}</td>
                                    <td class="text-start">{{ $item->project_name }}</td>
                                    <td class="text-start">{{ $item->team_member }}</td>
                                    <td class="text-start">
                                        @php
                                            $industries = json_decode($item->industry);
                                        @endphp
                                        @if (is_array($industries) || is_object($industries))
                                            <ul>
                                                @foreach ($industries as $industry)
                                                    <li>{{ ucfirst($industry) }}</li>
                                                @endforeach
                                            </ul>
                                        @else
                                            <p>{{ $industries }}</p>
                                        @endif
                                    </td>

                                    <td class="text-start">
                                        @php
                                            $carriers = json_decode($item->career);
                                        @endphp
                                        @if (is_array($carriers) || is_object($carriers))
                                            <ul>
                                                @foreach ($carriers as $careerId)
                                                    @php
                                                        $careerName = optional($categorys->firstWhere('id', $careerId))
                                                            ->name;
                                                    @endphp
                                                    @if ($careerName)
                                                        <li>{{ $careerName }}</li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        @else
                                            <p>{{ $carriers }}</p>
                                        @endif
                                    </td>

                                    <td class="text-start">
                                        

                                        <a href="#" class="view" data-bs-toggle="modal"
                                            data-bs-target="#viewModal{{ $item->id }}">
                                            <i class="bi bi-eye-fill text-primary"></i>
                                        </a>


                                        <a href="{{ route('admin.event.user', $item->id) }}" class="">
                                            <i class="bi bi-trash3-fill text-danger"></i>
                                        </a>

                                    </td>

                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>

            </div>
        </div> --}}

    </div>



    @push('scripts')
        <script>
            $("#kt_datatable_example_5").DataTable({
                "language": {
                    "lengthMenu": "Show _MENU_",
                },
                "dom": "<'row'" +
                    "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
                    "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
                    ">" +

                    "<'table-responsive'tr>" +

                    "<'row'" +
                    "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
                    "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
                    ">"
            });
        </script>
    @endpush




</x-app-layout>
