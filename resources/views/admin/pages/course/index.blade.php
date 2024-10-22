<x-admin-app-layout :title="'Course List'">

    <style>
        .custom-btn-close {
            filter: brightness(0) invert(1);
            /* This makes the close icon white */
        }

        /* Custom Toggle Switch */
        .custom-toggle {
            position: relative;
            display: inline-block;
            width: 50px;
            height: 28px;
        }

        .custom-toggle input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #e90707;
            transition: 0.4s;
            border-radius: 50px;
        }

        .slider:before {
            content: "";
            position: absolute;
            left: 4px;
            top: 4px;
            width: 20px;
            height: 20px;
            background-color: white;
            border-radius: 50px;
            transition: 0.4s;
        }

        /* Checked state (on) */
        input:checked+.slider {
            background-color: #4CAF50;
        }

        input:checked+.slider:before {
            transform: translateX(22px);
        }

        /* On hover, add a small effect */
        .slider:hover {
            background-color: #2196F3;
        }
    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <div class="card card-flash">
        <div class="card-header mt-6">
            <div class="card-title"></div>
            <div class="card-toolbar">
                <a href="{{ route('admin.course.create') }}" class="btn btn-light-primary rounded-2">
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
                    </span> Create
                </a>
            </div>
        </div>

        <div class="card-body pt-0">

            @if (Auth::guard('admin')->user()->can('delete.course'))
                <!-- Bulk Delete Button -->
                <button type="button" id="delete-selected" class="btn btn-danger rounded-1 mb-3"
                    style="background: linear-gradient(to right, #ff416c, #ff4b2b); border: none;">
                    Delete Selected
                </button>
            @endif

            <p class="float-end">
                Total Courses
                <span class="badge bg-danger ms-2">{{ count($courses) }}</span> <!-- Notification badge -->
            </p>

            <table id="kt_datatable_example_5" class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
                <thead class="bg-dark text-light">
                    <tr>
                        <th width="5%">No</th>

                        @if (Auth::guard('admin')->user()->can('delete.course'))
                            <th width="5%">
                                <input type="checkbox" id="select-all">
                            </th>
                        @endif


                        <th width="8%">Image</th>
                        <th width="10%">Section</th>
                        <th width="15%">Category</th>
                        <th width="20%">Course Name</th>
                        {{-- <th width="8%">Lecture</th>
                        <th width="8%">Seat</th>
                        <th width="10%">Price</th>
                        <th width="10%">Discount Price</th> --}}
                        <th width="8%">Status</th>
                        <th width="10%">Added By</th>
                        <th width="10%">Update By</th>
                        <th width="100%">Actions</th>
                    </tr>
                </thead>

                <tbody class="fw-bold text-gray-600">
                    @foreach ($courses as $key => $course)
                        <tr>
                            <td>{{ $key + 1 }}</td>

                            @if (Auth::guard('admin')->user()->can('delete.course'))
                                <td>
                                    <input type="checkbox" class="course-checkbox" value="{{ $course->id }}">
                                </td>
                            @endif

                            <td>
                                <img class=""
                                    src="{{ !empty($course->thumbnail_image) ? url('storage/course/' . $course->thumbnail_image) : 'https://ui-avatars.com/api/?name=' . urlencode($course->name) }}"
                                    height="40" width="40" alt="">
                            </td>

                            <td class="text-start">{{ $course->section->name }}</td>
                            <td class="text-start">{{ $course->category->name }}</td>
                            <td class="text-start">{{ $course->name }}</td>
                            {{-- <td class="text-start">{{ $course->lecture }}</td>
                            <td class="text-start">{{ $course->available_seats }}</td>
                            <td class="text-start">{{ $course->price }} Tk</td> --}}
                            {{-- <td class="text-start">{{ $course->discount_price }} Tk</td> --}}

                            <td class="text-start">
                                <label class="custom-toggle">
                                    <input type="checkbox" class="status-toggle" data-course-id="{{ $course->id }}"
                                        {{ $course->status == 'active' ? 'checked' : '' }}>
                                    <span class="slider"></span>
                                </label>
                            </td>


                            <td class="text-start">{{ optional($course->addedName)->name }}</td>
                            <td class="text-start">{{ optional($course->updateName)->name }}</td>
                            <td>

                                <a href="#" data-bs-toggle="modal"
                                    data-bs-target="#showCourse{{ $course->id }}" title="View"><i
                                        class="fa-solid fa-expand text-primary"></i></a>

                                <!-- Modal -->
                                <div class="modal fade" id="showCourse{{ $course->id }}" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="showCourseLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-xl">

                                        <div class="modal-content">

                                            <div class="modal-header"
                                                style="background: linear-gradient(45deg, #6a11cb, #356ac4);">

                                                <h1 class="modal-title fs-5 text-white" id="staticBackdropLabel">Course
                                                    Details</h1>

                                                <button type="button" class="btn-close custom-btn-close"
                                                    data-bs-dismiss="modal" aria-label="Close"></button>

                                            </div>


                                            <div class="card shadow p-3">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="modal-body">
                                                            <table
                                                                class="table table-bordered table-striped table-hover">
                                                                <tbody>

                                                                    <tr>
                                                                        <td width="30%"><strong>Banner
                                                                                Image:</strong></td>
                                                                        <td>
                                                                            <img class=""
                                                                                src="{{ !empty($course->course_banner_image) ? url('storage/course/' . $course->course_banner_image) : 'https://ui-avatars.com/api/?name=' . urlencode($course->name) }}"
                                                                                height="10%" width="100%"
                                                                                alt="">
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td width="30%"><strong>Course:</strong>
                                                                        </td>
                                                                        <td>{{ $course->name }}</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td width="30%"><strong>Lecturer:</strong>
                                                                        </td>
                                                                        <td>{{ $course->lecture }}</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td width="30%"><strong>Available
                                                                                Seats:</strong></td>
                                                                        <td>{{ $course->available_seats }}</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td width="30%"><strong>Price:</strong></td>
                                                                        <td>{{ $course->price }} Tk</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td width="30%"><strong>Discounted
                                                                                Price:</strong></td>
                                                                        <td>{{ $course->discount_price }} Tk</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td width="30%"><strong>Reg Start
                                                                                Day:</strong></td>
                                                                        <td>{{ $course->registration_start_date }}</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td width="30%"><strong>Reg End
                                                                                Date:</strong></td>
                                                                        <td>{{ $course->registration_end_date }}</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td width="30%"><strong>Class Start
                                                                                Day:</strong></td>
                                                                        <td>{{ $course->class_start_date }}</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td width="30%"><strong>Class End
                                                                                Day:</strong></td>
                                                                        <td>{{ $course->class_end_date }}</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td width="30%"><strong>Status
                                                                                :</strong></td>
                                                                        <td>
                                                                            @if ($course->status == 'active')
                                                                                <span
                                                                                    class="badge bg-success">{{ $course->status }}</span>
                                                                            @else
                                                                                <span
                                                                                    class="badge bg-danger">{{ $course->status }}</span>
                                                                            @endif
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @if (Auth::guard('admin')->user()->can('edit.course'))
                                    <a href="{{ route('admin.course.edit', $course->id) }}" class="text-primary">
                                        <i class="bi bi-pencil text-success"></i>
                                    </a>
                                @endif

                                @if (Auth::guard('admin')->user()->can('delete.course'))
                                    <a href="{{ route('admin.course.destroy', $course->id) }}" class="delete">
                                        <i class="bi bi-trash3-fill text-danger"></i>
                                    </a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>

        </div>

    </div>



    @push('scripts')
        <script>
            $(document).ready(function() {
                // Toggle status on change
                $('.status-toggle').change(function() {
                    var courseId = $(this).data('course-id');
                    var status = $(this).prop('checked') ? 'active' : 'inactive';

                    // Send AJAX request to update the status
                    $.ajax({
                        url: '{{ route('admin.course.updateStatus') }}', // Adjust this to your update status route
                        method: 'POST',
                        data: {
                            _token: '{{ csrf_token() }}',
                            course_id: courseId,
                            status: status
                        },
                        success: function(response) {
                            if (response.success) {
                                Swal.fire(
                                    'Success!',
                                    'Course status updated successfully.',
                                    'success'
                                );
                            } else {
                                Swal.fire(
                                    'Error!',
                                    'Something went wrong while updating the status.',
                                    'error'
                                );
                            }
                        },
                        error: function() {
                            Swal.fire(
                                'Error!',
                                'Failed to update course status.',
                                'error'
                            );
                        }
                    });
                });
            });
        </script>


        <script>
            $(document).ready(function() {
                // Select or deselect all checkboxes when the "select all" checkbox is clicked
                $('#select-all').click(function() {
                    var isChecked = $(this).prop('checked');
                    $('.course-checkbox').prop('checked', isChecked);
                });

                // If all individual checkboxes are selected, check the "select all" checkbox
                $('.course-checkbox').click(function() {
                    var allChecked = $('.course-checkbox:checked').length === $('.course-checkbox').length;
                    $('#select-all').prop('checked', allChecked);
                });

                // Handle delete selected courses
                $('#delete-selected').click(function() {
                    // Get all selected checkbox values (course IDs)
                    var selectedCourses = $('.course-checkbox:checked').map(function() {
                        return $(this).val();
                    }).get();

                    if (selectedCourses.length > 0) {
                        // Use SweetAlert2 for confirmation dialog
                        Swal.fire({
                            title: 'Are you sure?',
                            text: "You won't be able to revert this action!",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonText: 'Yes, delete them!',
                            cancelButtonText: 'Cancel',
                            reverseButtons: true
                        }).then((result) => {
                            if (result.isConfirmed) {
                                // Send a POST request to the server with the selected course IDs
                                $.ajax({
                                    url: '{{ route('admin.course.bulkDelete') }}', // Bulk delete route
                                    method: 'POST',
                                    data: {
                                        _token: '{{ csrf_token() }}',
                                        course_ids: selectedCourses
                                    },
                                    success: function(response) {
                                        // Show success message with Toaster or SweetAlert
                                        Swal.fire(
                                            'Deleted!',
                                            'The selected courses have been deleted.',
                                            'success'
                                        );
                                        location
                                            .reload(); // Reload the page to reflect the changes
                                    },
                                    error: function(error) {
                                        // Handle error
                                        Swal.fire(
                                            'Error!',
                                            'An error occurred while deleting the courses.',
                                            'error'
                                        );
                                    }
                                });
                            }
                        });
                    } else {
                        // Show error if no courses are selected
                        Swal.fire(
                            'No Courses Selected',
                            'Please select at least one course to delete.',
                            'error'
                        );
                    }
                });
            });
        </script>


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
