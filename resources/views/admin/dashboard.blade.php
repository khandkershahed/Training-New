<x-admin-app-layout>
    <div class="row gy-5 g-xl-8">
        <div class="col-xl-4">
            <div class="card h-xl-100">
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-gray-900">Course Section</span>
                    </h3>
                </div>

                <div class="card-body pt-6">

                    @foreach ($sections as $section)
                        <div class="d-flex flex-stack">
                            <div class="symbol  me-5">
                                <div class="text-inverse-danger">
                                    <img src="https://ui-avatars.com/api/?name={{ urlencode($section->name) }}&background=ff5733&color=ffffff"
                                        alt="Avatar">

                                </div>
                            </div>

                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">

                                <div class="flex-grow-1 me-2">
                                    <a href="https://preview.keenthemes.com/metronic8/demo1/pages/user-profile/overview.html"
                                        class="text-gray-800 text-hover-primary fs-6 fw-bold">{{ $section->name }}</a>

                                    <span class="text-muted fw-semibold d-block fs-7">{{ $section->courses_count }}+
                                        Courses</span>

                                </div>

                                <a href="javascript:;"
                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                    {{ $section->users_count }}
                                </a>

                            </div>
                        </div>

                        <div class="separator separator-dashed my-4"></div>
                    @endforeach



                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card card-flush h-xl-100">
                <div class="card-header rounded bgi-no-repeat bgi-size-cover bgi-position-y-top bgi-position-x-center align-items-start h-250px"
                    style="background-image:url('https://preview.keenthemes.com/metronic8/demo1/assets/media/svg/shapes/top-green.png"
                    data-bs-theme="light">
                    <h3 class="card-title align-items-start flex-column text-white pt-15">
                        <span class="fw-bold fs-2x mb-3">Information</span>
                    </h3>
                </div>

                <div class="card-body mt-n20">
                    <div class="mt-n20 position-relative">
                        <div class="row g-3 g-lg-6">
                            <div class="col-6">
                                <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                    <div class="symbol symbol-30px me-5 mb-8">
                                        <span class="symbol-label">
                                            <i class="fa-solid fa-flask fs-1 text-primary"><span
                                                    class="path1"></span><span class="path2"></span></i>
                                        </span>
                                    </div>

                                    <div class="m-0">
                                        <a href="{{ route('admin.course.index') }}"
                                            class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">{{ count($totalCourse) }}</a>

                                        <span class="text-gray-500 fw-semibold fs-6">Total Courses</span>
                                    </div>

                                </div>
                            </div>
                            <div class="col-6">
                                <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                    <div class="symbol symbol-30px me-5 mb-8">
                                        <span class="symbol-label">
                                            <i class="fa-solid fa-bank fs-1 text-primary"><span
                                                    class="path1"></span><span class="path2"></span></i>
                                        </span>
                                    </div>

                                    <div class="m-0">
                                        <a href="{{ route('admin.all.registration') }}"
                                            class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">{{ count($totalRegister) }}</a>

                                        <span class="text-gray-500 fw-semibold fs-6">Total Enrolled</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">

                                    <div class="symbol symbol-30px me-5 mb-8">
                                        <span class="symbol-label">
                                            <i class="fa-solid fa-award fs-1 text-primary"><span
                                                    class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span></i>
                                        </span>
                                    </div>

                                    <div class="m-0">
                                        <a href="{{ route('admin.all.registration') }}"
                                            class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">{{ count($monthlyRegister) }}</a>

                                        <span class="text-gray-500 fw-semibold fs-6">Monthly Enrolled</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">

                                    <div class="symbol symbol-30px me-5 mb-8">
                                        <span class="symbol-label">
                                            <i class="fa-solid fa-award fs-1 text-primary"><span
                                                    class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span></i>
                                        </span>
                                    </div>

                                    <div class="m-0">
                                        <a href="{{ route('admin.all.registration') }}"
                                            class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">{{ count($dayRegister) }}</a>

                                        <span class="text-gray-500 fw-semibold fs-6">Today Enrolled</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        {{-- @if (Auth::guard('admin')->user()->hasRole('Super Admin'))
            <!-- Code to execute if the user is a Super Admin -->
        @endif --}}


        <div class="col-xl-4">
            <div class="card card-flush h-md-100 mb-5 mb-xl-10">
                <div class="card-header pt-5">
                    <div class="card-title d-flex flex-column">
                        <div class="d-flex align-items-center">
                            <span
                                class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">{{ number_format($paidAmount, 2) }}
                                Tk</span>

                            {{-- <span class="badge badge-light-success fs-base">
                                <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span
                                        class="path1"></span><span class="path2"></span></i>
                                2.2%
                            </span> --}}
                        </div>
                        <span class="text-gray-500 pt-1 fw-semibold fs-6">Total Earnings</span>
                    </div>
                </div>
                <div class="card-body pt-2 pb-4 d-flex align-items-center flex-column">


                    <div class="d-flex flex-center me-5 pt-20">
                        <div id="kt_card_widget_1_chart" style="min-width: 150px; min-height: 100px" data-kt-size="150"
                            data-kt-line="11">
                        </div>
                    </div>

                    <div class="d-flex flex-column content-justify-center w-100 pt-20">


                        <div class="d-flex fs-6 fw-semibold align-items-center my-3">
                            <div class="bullet w-8px h-6px rounded-2 bg-primary me-3"></div>
                            <div class="text-gray-500 flex-grow-1 me-4">Today Paid Amount</div>
                            <div class="fw-bolder text-gray-700 text-xxl-end">{{ number_format($todayPaid, 2) }} Tk
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-12">
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
                                <th>User Id</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Event Id</th>
                                <th>Project Name</th>
                                <th>Total Member</th>
                                <th>Amount Paid</th>
                                <th>Transcation Id</th>
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
                                    <td class="text-start">{{ $item->eventName->event_name }}</td>
                                    <td class="text-start">{{ $item->project_name }}</td>
                                    <td class="text-start">{{ $item->team_member }}</td>
                                    <td class="text-start">
                                        @if ($item->amount_paid == null)
                                            <p class="badge bg-danger">No Paid</p>
                                        @else
                                            {{ $item->amount_paid }} Tk
                                        @endif
                                    </td>
                                    <td class="text-start">

                                        @if ($item->transaction_id == null)
                                            <p class="badge bg-danger">No Transcation</p>
                                        @else
                                            {{ $item->transaction_id }}
                                        @endif

                                    </td>

                                    <td class="text-start">
                                        {{-- <a href="{{ route('admin.course.edit', $course->id) }}" class="text-primary">
                                            <i class="bi bi-pencil text-primary"></i>
                                        </a> --}}

                                        <a href="#" class="view" data-bs-toggle="modal"
                                            data-bs-target="#viewModal{{ $item->id }}">
                                            <i class="bi bi-eye-fill text-primary"></i>
                                        </a>

                                        <!-- Modal -->
                                        <div class="modal fade" id="viewModal{{ $item->id }}" tabindex="-1"
                                            aria-labelledby="viewModalLabel{{ $item->id }}" aria-hidden="true">
                                            <div class="modal-dialog modal-xl">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-secondary">
                                                        <h5 class="modal-title" id="viewModalLabel">View Details</h5>
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <!-- Fake Data Table -->
                                                        <table
                                                            class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
                                                            <thead class="bg-dark text-light">
                                                                <tr>
                                                                    <th>User Id</th>
                                                                    <th>Event Id</th>
                                                                    <th>Project Name</th>
                                                                    <th>Total Member</th>
                                                                    <th>Team Member(01)</th>
                                                                    <th>Team Member(02)</th>
                                                                    <th>File</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="text-start">
                                                                        {{ $item->eventUserName->name }}</td>
                                                                    <td class="text-start">
                                                                        {{ $item->eventName->event_name }}</td>
                                                                    <td class="text-start">{{ $item->project_name }}
                                                                    </td>
                                                                    <td class="text-start">{{ $item->team_member }}
                                                                    </td>
                                                                    <td class="text-start">
                                                                        {{ $item->team_member_one_name }}
                                                                    </td>
                                                                    <td class="text-start">
                                                                        {{ $item->team_member_two_name }}
                                                                    </td>
                                                                    <td class="text-start">
                                                                        @if ($item->attachment == null)
                                                                            <p class="text-danger">No Attachment</p>
                                                                        @else
                                                                            <a href="{{ asset('public/event/files/' . $item->attachment) }}"
                                                                                download>
                                                                                Download
                                                                            </a>
                                                                        @endif
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

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
        </div>

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
</x-admin-app-layout>
