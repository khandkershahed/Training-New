<x-admin-app-layout :title="'Course Create'">



    <style>
        .image-input-placeholder {
            background-image: url('{{ asset('upload/no_image.jpg') }}');
        }

        [data-bs-theme="dark"] .image-input-placeholder {
            background-image: url('{{ asset('upload/no_image.jpg') }}');
        }
    </style>

    <div class="card card-flash">
        <div class="card-header">
            <div class="card-title">
            </div>

            <div class="card-toolbar">
                <a href="{{ route('admin.course.index') }}" class="btn btn-light-primary rounded-2">
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

            <form id="myForm" method="post" action="{{ route('admin.course.store') }}"
                enctype="multipart/form-data">
                @csrf

                <div class="card bg-light">

                    <div class="row p-4">

                        <div class="col-3 mb-3">

                            <div class="">

                                <label for="" class="mb-2">Instructor Name</label>

                                <select
                                    class="form-select form-select-solid form-select-sm @error('instructor_id') is-invalid @enderror"
                                    name="instructor_id[]" id="field2" multiple multiselect-search="true"
                                    multiselect-select-all="true" multiselect-max-items="2">

                                    @if (count($admins) > 0)
                                        @foreach ($admins as $admin)
                                            <option class="form-control" value="{{ $admin->id }}">{{ $admin->name }}
                                            </option>
                                        @endforeach
                                    @endif

                                </select>

                                @error('instructor_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror

                            </div>

                        </div>

                        <div class="col-3 mb-3">

                            <div class="form-group">

                                <label for="" class="mb-2">Service Name</label>

                                <select class="form-select form-select-solid form-select-sm" name="service_id[]"
                                    id="field2" multiple="" multiselect-search="true"
                                    multiselect-select-all="true" multiselect-max-items="2">

                                    @if (count($services) > 0)
                                        @foreach ($services as $service)
                                            <option class="form-control" value="{{ $service->id }}">
                                                {{ $service->name }}
                                            </option>
                                        @endforeach
                                    @endif

                                </select>

                            </div>

                        </div>

                        <div class="col-3 mb-3">

                            <div class="form-group">

                                <label for="" class="mb-2">Industry Name</label>

                                <select class="form-select form-select-solid form-select-sm" name="industry_id[]"
                                    id="field2" multiple="" multiselect-search="true"
                                    multiselect-select-all="true" multiselect-max-items="2">

                                    @if (count($industrys) > 0)
                                        @foreach ($industrys as $industry)
                                            <option class="form-control" value="{{ $industry->id }}">
                                                {{ $industry->name }}
                                            </option>
                                        @endforeach
                                    @endif

                                </select>

                            </div>

                        </div>

                        <div class="col-3 mb-3">

                            <div class="form-group">
                                <label for="" class="mb-2">Course Type</label>
                                <select name="course_type" data-placeholder="Select Row One.."
                                    class="form-select form-select-sm" data-control="select2"
                                    data-placeholder="Select an option">

                                    <option value="offline">Offline</option>
                                    <option value="online">Online</option>

                                </select>
                            </div>

                        </div>

                        <div class="col-3 mb-3 form-group">

                            <div class="">
                                <label for="" class="mb-2">Course Section</label>
                                <select name="course_section_id" required data-placeholder="Select Row One.."
                                    class="form-select form-select-sm" data-control="select2"autocomplete="off">

                                    <option selected>Select an option</option>

                                    @if (count($courseSections) > 0)
                                        @foreach ($courseSections as $courseSection)
                                            <option class="form-control" value="{{ $courseSection->id }}">
                                                {{ $courseSection->name }}
                                            </option>
                                        @endforeach
                                    @endif

                                </select>
                            </div>

                        </div>


                        <div class="col-3 mb-3 form-group">

                            <div class="">
                                <label for="" class="mb-2">Course Category Name</label>
                                <select name="course_category_id" data-placeholder="Select Row One.."
                                    class="form-select form-select-sm" data-control="select2"
                                    data-placeholder="Select an option">

                                    <option class="form-control"></option>

                                </select>
                            </div>

                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Course Name</label>
                                <input type="text" name="name" placeholder="Corse Name"
                                    class="form-control form-control-sm" value="{{ old('name') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Tags</label>
                                <input type="text" name="tags" data-role="tagsinput" placeholder=""
                                    class="form-control form-control-sm" value="{{ old('tags') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Lecture</label>
                                <input type="text" name="lecture" placeholder="25 Leacture"
                                    class="form-control form-control-sm" value="{{ old('lecture') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Project</label>
                                <input type="number" name="project" placeholder="10"
                                    class="form-control form-control-sm" value="{{ old('project') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Course Duration</label>
                                <input type="text" name="course_duration" placeholder="6 Months"
                                    class="form-control form-control-sm" value="{{ old('course_duration') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Course Time</label>
                                <input type="text" name="course_time" placeholder="Eg: 2.00-4.00 Pm (Sat-Fri)"
                                    class="form-control form-control-sm" value="{{ old('course_time') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Available Seats</label>
                                <input type="number" name="available_seats" placeholder="Eg: 10"
                                    class="form-control form-control-sm" value="{{ old('available_seats') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Total Student</label>
                                <input type="number" name="total_student" placeholder="Eg: 12,255"
                                    class="form-control form-control-sm" value="{{ old('total_student') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Currency</label>
                                <input type="text" name="currency" placeholder="Eg: Taka"
                                    class="form-control form-control-sm" value="{{ old('currency') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Price</label>
                                <input type="number" name="price" placeholder="Eg:20000"
                                    class="form-control form-control-sm" value="{{ old('price') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Discount Price</label>
                                <input type="number" name="discount_price" placeholder="Eg:10000"
                                    class="form-control form-control-sm" value="{{ old('discount_price') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Online Price</label>
                                <input type="number" name="online_price" placeholder="Eg:5000"
                                    class="form-control form-control-sm" value="{{ old('online_price') }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Discount Start Date</label>
                                <input type="date" name="discount_start_date"
                                    min="{{ Carbon\Carbon::now()->format('Y-m-d') }}"
                                    class="form-control form-control-sm">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Discount End Date</label>
                                <input type="date" name="discount_end_date"
                                    min="{{ Carbon\Carbon::now()->format('Y-m-d') }}"
                                    class="form-control form-control-sm">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Class Start Date</label>
                                <input type="date" name="class_start_date"
                                    min="{{ Carbon\Carbon::now()->format('Y-m-d') }}"
                                    class="form-control form-control-sm">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Class End Date</label>
                                <input type="date" name="class_end_date"
                                    min="{{ Carbon\Carbon::now()->format('Y-m-d') }}"
                                    class="form-control form-control-sm">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Registration Start Date</label>
                                <input type="date" name="registration_start_date"
                                    min="{{ Carbon\Carbon::now()->format('Y-m-d') }}"
                                    class="form-control form-control-sm">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Registration End Date</label>
                                <input type="date" name="registration_end_date"
                                    min="{{ Carbon\Carbon::now()->format('Y-m-d') }}"
                                    class="form-control form-control-sm">
                            </div>
                        </div>

                        <div class="col-6 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Short Description</label>
                                <textarea name="short_descp" class="form-control editor" id="" cols="3" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="col-6 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Overview</label>
                                <textarea name="overview" class="form-control editor" id="" cols="3" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="col-6 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Description</label>
                                <textarea name="description" class="form-control editor" id="" cols="2" rows="2"></textarea>
                            </div>
                        </div>

                        {{-- size 750*563 --}}
                        <div class="col-2">
                            {{-- <div class="">
                                <label for="" class="mb-2">Image</label>
                                <input type="file" name="thumbnail_image" accept="image/*"
                                    class="form-control form-control-sm">
                            </div> --}}

                            <div class="col-12">
                                <label for="thumbnail_image" class="mb-3">Thumbnail Image</label>
                                <br>
                                <!--begin::Image input-->
                                <div class="image-input image-input-outline" data-kt-image-input="true"
                                    style="background-image: url('{{ asset('upload/no_image.jpg') }}'); width: 170px;height: 170px;">

                                    <!--begin::Image preview wrapper-->
                                    <div class="image-input-wrapper"
                                        style="background-image: url('{{ asset('upload/no_image.jpg') }}'); width: 170px; height: 170px;">
                                    </div>
                                    <!--end::Image preview wrapper-->

                                    <!--begin::Edit button-->
                                    <label
                                        class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                        data-bs-dismiss="click" title="Maximum Image Size: 2MB, 750x563px">
                                        <i class="fa-solid fa-pencil"></i>

                                        <!--begin::Inputs-->
                                        <input type="file" name="thumbnail_image" accept=".png, .jpg, .jpeg"
                                            onchange="validateImageSize(this)" />
                                        <input type="hidden" name="thumbnail_image" />
                                        <!--end::Inputs-->
                                    </label>
                                    <!--end::Edit button-->

                                    <!--begin::Cancel button-->
                                    <span
                                        class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                        data-bs-dismiss="click" title="Remove Image">
                                        <i class="fa-solid fa-xmark"></i>
                                    </span>
                                    <!--end::Cancel button-->

                                    <!--begin::Remove button-->
                                    <span
                                        class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                        data-bs-dismiss="click" title="Remove Image">
                                        <i class="fa-solid fa-xmark"></i>
                                    </span>
                                    <!--end::Remove button-->
                                </div>
                                <!--end::Image input-->
                            </div>



                        </div>

                        {{-- size 1920*330 --}}
                        <div class="col-3 mb-3">

                            <div class="">
                                <label for="" class="mb-2">Course Banner Image</label>
                                <input type="file" name="course_banner_image" accept="image/*"
                                    class="form-control form-control-sm">
                            </div>
                            {{-- <label for="course_banner_image" class="mb-3">Banner Image</label>

                            <!--begin::Form-->
                            <div class="fv-row">
                                <!--begin::Dropzone-->
                                <div class="dropzone" id="kt_dropzonejs_example_1">
                                    <!--begin::Message-->
                                    <div class="dz-message needsclick">
                                        <i class="ki-duotone ki-file-up fs-3x text-primary"><span
                                                class="path1"></span><span class="path2"></span></i>

                                        <!--begin::Info-->
                                        <div class="ms-4">
                                            <h3 class="fs-5 fw-bold text-gray-900 mb-1">Drop Banner Image here or 
                                                upload.</h3>
                                            <span class="fs-7 fw-semibold text-gray-500">Upload up to 1
                                                files (Size 1920*330)</span>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                </div>
                                <!--end::Dropzone-->
                            </div> --}}

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

    @push('scripts')

        {{-- <script>
            var myDropzone = new Dropzone("#kt_dropzonejs_example_1", {
                url: "https://keenthemes.com/scripts/void.php", // Set the url for your upload script location
                paramName: "file", // The name that will be used to transfer the file
                maxFiles: 1,
                maxFilesize: 10, // MB
                addRemoveLinks: true,
                accept: function(file, done) {
                    if (file.name == "wow.jpg") {
                        done("Naha, you don't.");
                    } else {
                        done();
                    }
                }
            });
        </script> --}}
        
        <script>
            < script >
                function validateImageSize(input) {
                    const file = input.files[0];

                    if (file) {
                        // Maximum file size: 2MB
                        const maxFileSize = 2 * 1024 * 1024; // 2MB in bytes

                        // Maximum dimensions: 750x563px
                        const maxWidth = 750;
                        const maxHeight = 563;

                        // Check file size
                        if (file.size > maxFileSize) {
                            alert("The image size is too large. Please upload an image smaller than 2MB.");
                            input.value = ''; // Clear the input field
                            return;
                        }

                        const img = new Image();
                        img.onload = function() {
                            // Check image dimensions
                            if (img.width > maxWidth || img.height > maxHeight) {
                                alert(
                                    `Image dimensions are too large. Please upload an image with a maximum size of ${maxWidth}x${maxHeight} pixels.`
                                );
                                input.value = ''; // Clear the input field
                                return;
                            }
                        };

                        // Read and load the image
                        img.src = URL.createObjectURL(file);
                    }
                }
        </script>

        </script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#myForm').validate({
                    rules: {

                        instructor_id: {
                            required: true,
                        },

                        course_section_id: {
                            required: true,
                        },

                        course_category_id: {
                            required: true,
                        },

                        name: {
                            required: true,
                        },

                        lecture: {
                            required: true,
                        },

                        project: {
                            required: true,
                        },

                        course_duration: {
                            required: true,
                        },

                        course_time: {
                            required: true,
                        },

                        price: {
                            required: true,
                        },

                        registration_start_date: {
                            required: true,
                        },

                        registration_end_date: {
                            required: true,
                        },


                    },
                    messages: {

                        instructor_id: {
                            required: 'Please Enter Instructor Name',
                        },

                        course_section_id: {
                            required: 'Please Enter Course Section Name',
                        },

                        course_category_id: {
                            required: 'Please Enter Category Name',
                        },

                        name: {
                            required: 'Please Enter Course Name',
                        },

                        lecture: {
                            required: 'Please Enter Lecture Name',
                        },

                        project: {
                            required: 'Please Enter Project',
                        },

                        course_duration: {
                            required: 'Please Enter Course Duration',
                        },

                        course_time: {
                            required: 'Please Enter Course Time',
                        },

                        price: {
                            required: 'Please Enter Price',
                        },

                        registration_start_date: {
                            required: 'Please Enter Start Date',
                        },

                        registration_end_date: {
                            required: 'Please Enter End Date',
                        },




                    },
                    errorElement: 'span',
                    errorPlacement: function(error, element) {
                        error.addClass('invalid-feedback');
                        element.closest('.form-group').append(error);
                    },
                    highlight: function(element, errorClass, validClass) {
                        $(element).addClass('is-invalid');
                    },
                    unhighlight: function(element, errorClass, validClass) {
                        $(element).removeClass('is-invalid');
                    },
                });
            });
        </script>

        {{-- Category --}}
        <script type="text/javascript">
            $(document).ready(function() {
                $('select[name="course_section_id"]').on('change', function() {
                    var course_section_id = $(this).val();
                    if (course_section_id) {
                        $.ajax({
                            url: "{{ url('/category/ajax') }}/" + course_section_id,
                            type: "GET",
                            dataType: "json",
                            success: function(data) {
                                $('select[name="course_category_id"]').html('');
                                var d = $('select[name="course_category_id"]').empty();
                                $.each(data, function(key, value) {
                                    $('select[name="course_category_id"]').append(
                                        '<option value="' + value.id + '">' + value
                                        .name + '</option>');
                                });
                            },

                        });
                    } else {
                        alert('danger');
                    }
                });
            });
        </script>
    @endpush




</x-admin-app-layout>
