@extends('frontend.master')
@section('content')
    <style>
        .form-label {
            color: white;
        }

        .section-background {
            background: url({{ asset('frontend/images/course_reg.jpg') }});
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        input[type="text"],
        select {
            font: 15px / 24px 'Muli', sans-serif;
            color: #333;
            width: 100%;
            box-sizing: border-box;
            letter-spacing: 1px;
            border: 0;
            /* background: #77869b; */
            background: #192a42;
            padding: 10px 15px 10px;
        }

        input[type="text"]:focus,
        select:focus {
            outline: none;
        }

        .effect-1 {
            border: 0;
            padding: 12px 15px;
            /* border-bottom: 1px solid #ccc; */
            position: relative;
            color: #ccc;
            background: #192a42;
        }

        .effect-1~.focus-border {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background-color: #ffff;
            transition: 0.4s;
        }

        .effect-1:focus~.focus-border,
        select:focus~.focus-border {
            width: 100%;
            transition: 0.4s;
        }

        ::placeholder {
            color: #ccc !important;
            position: relative;
            left: 5px;
        }

        .course_registration {
            box-sizing: border-box;
            --background-color: #fff;
            --checkbox-height: 25px;
        }

        @-moz-keyframes dothabottomcheck-19 {
            0% {
                height: 0;
            }

            100% {
                height: calc(var(--checkbox-height) / 2);
            }
        }

        @-webkit-keyframes dothabottomcheck-19 {
            0% {
                height: 0;
            }

            100% {
                height: calc(var(--checkbox-height) / 2);
            }
        }

        @keyframes dothabottomcheck-19 {
            0% {
                height: 0;
            }

            100% {
                height: calc(var(--checkbox-height) / 2);
            }
        }

        @keyframes dothatopcheck-19 {
            0% {
                height: 0;
            }

            50% {
                height: 0;
            }

            100% {
                height: calc(var(--checkbox-height) * 1.2);
            }
        }

        @-webkit-keyframes dothatopcheck-19 {
            0% {
                height: 0;
            }

            50% {
                height: 0;
            }

            100% {
                height: calc(var(--checkbox-height) * 1.2);
            }
        }

        @-moz-keyframes dothatopcheck-19 {
            0% {
                height: 0;
            }

            50% {
                height: 0;
            }

            100% {
                height: calc(var(--checkbox-height) * 1.2);
            }
        }

        .course_registration input[type="checkbox"] {
            /* display: none; */
            height: 1.5rem;
            width: 30px;
        }

        .course_registration .check-box {
            height: var(--checkbox-height);
            width: var(--checkbox-height);
            background-color: transparent;
            border: calc(var(--checkbox-height) * .1) solid #eee;
            border-radius: 5px;
            position: relative;
            display: inline-block;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            -moz-transition: border-color ease 0.2s;
            -o-transition: border-color ease 0.2s;
            -webkit-transition: border-color ease 0.2s;
            transition: border-color ease 0.2s;
            cursor: pointer;
        }

        .course_registration .check-box::before,
        .course_registration .check-box::after {
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            position: absolute;
            height: 0;
            width: calc(var(--checkbox-height) * .2);
            background-color: #34b93d;
            display: inline-block;
            -moz-transform-origin: left top;
            -ms-transform-origin: left top;
            -o-transform-origin: left top;
            -webkit-transform-origin: left top;
            transform-origin: left top;
            border-radius: 5px;
            content: " ";
            -webkit-transition: opacity ease 0.5;
            -moz-transition: opacity ease 0.5;
            transition: opacity ease 0.5;
        }

        .course_registration .check-box::before {
            top: calc(var(--checkbox-height) * .72);
            left: calc(var(--checkbox-height) * .41);
            /* box-shadow: 0 0 0 calc(var(--checkbox-height) * .05) var(--background-color); */
            -moz-transform: rotate(-135deg);
            -ms-transform: rotate(-135deg);
            -o-transform: rotate(-135deg);
            -webkit-transform: rotate(-135deg);
            transform: rotate(-135deg);
        }

        .course_registration .check-box::after {
            top: calc(var(--checkbox-height) * .37);
            left: calc(var(--checkbox-height) * .05);
            -moz-transform: rotate(-45deg);
            -ms-transform: rotate(-45deg);
            -o-transform: rotate(-45deg);
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
        }

        .course_registration input[type=checkbox]:checked+.check-box,
        .course_registration .check-box.checked {
            border-color: #34b93d;
        }

        .course_registration input[type=checkbox]:checked+.check-box::after,
        .course_registration .check-box.checked::after {
            height: calc(var(--checkbox-height) / 2);
            -moz-animation: dothabottomcheck-19 0.2s ease 0s forwards;
            -o-animation: dothabottomcheck-19 0.2s ease 0s forwards;
            -webkit-animation: dothabottomcheck-19 0.2s ease 0s forwards;
            animation: dothabottomcheck-19 0.2s ease 0s forwards;
        }

        .course_registration input[type=checkbox]:checked+.check-box::before,
        .course_registration .check-box.checked::before {
            height: calc(var(--checkbox-height) * 1.2);
            -moz-animation: dothatopcheck-19 0.4s ease 0s forwards;
            -o-animation: dothatopcheck-19 0.4s ease 0s forwards;
            -webkit-animation: dothatopcheck-19 0.4s ease 0s forwards;
            animation: dothatopcheck-19 0.4s ease 0s forwards;
        }

        option {
            padding: 10px;
            /* This might not work in all browsers */
        }
    </style>
    <section class="section-background">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="text-white text-center pb-5">Course Registration</h1>
                </div>
                <div class="col-lg-6 offset-lg-3">
                    <div class="card border-0 form-card">
                        <div class="card-body p-5" style="background: #020f20eb;">

                            <form action="{{ route('course.registration.store') }}" method="POST">

                                @csrf

                                <div class="row gx-5">
                                    <div class="col-lg-12 first-column">

                                        <h4 class="text-white pb-3">User Info</h4>

                                        <div class="row">

                                            <div class="col-12">
                                                <div class="position-relative ps-0 mb-3">
                                                    <small for="exampleFormControlInput4"
                                                        class="form-label mb-2">Name</small>
                                                    <input class="form-control effect-1" type="text" name="name"
                                                        placeholder="Robert Bruno">
                                                    <span class="focus-border"></span>
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="row align-items-center mb-lg-1 mb-3">
                                                    <div class="col-lg-8">
                                                        <div class="position-relative ps-0 mb-3">
                                                            <small for="exampleFormControlInput5"
                                                                class="form-label mb-2">Email</small>
                                                            <input class="form-control effect-1" type="text"
                                                                name="email" placeholder="yourmail@gmail.com">
                                                            <span class="focus-border"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="position-relative ps-0">
                                                            <small for="exampleFormControlInput5"
                                                                class="form-label mb-2" style="font-size:12px;">If You don't have Account?</small>
                                                            <div class="course_registration">
                                                                <label for="cbtest-19"
                                                                    class="text-white d-flex align-items-center pt-2">
                                                                    <input class="me-3" type="checkbox"
                                                                        name="create_account" id="cbtest-19"
                                                                        value="1" />
                                                                    Create Account
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 account_password" style="display: none">
                                                <div class="position-relative ps-0 mb-3">
                                                    <small for="exampleFormControlInput4" class="form-label mb-2">Account
                                                        Password</small>
                                                    <input class="form-control effect-1" type="password" name="password"
                                                        placeholder="Enter Password">
                                                    <span class="focus-border"></span>
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="row align-items-center mb-lg-1 mb-3">
                                                    <div class="col-lg-8">
                                                        <div class="position-relative ps-0 mb-3">
                                                            <small for="exampleFormControlInput6"
                                                                class="form-label mb-2">Phone</small>
                                                            <input class="form-control effect-1" type="text"
                                                                name="phone" placeholder="(+880)1754******">
                                                            <span class="focus-border"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="course_registration">
                                                            <label for="cbtest-19"
                                                                class="text-white d-flex align-items-center pt-2">
                                                                <input class="me-3" type="checkbox" name="call_me"
                                                                    id="cbtest-19" value="1" />
                                                                Call Me
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="col-12">
                                                <div class="position-relative ps-0 mb-3">
                                                    <small for="exampleFormControlInput1" class="form-label mb-2">Course
                                                        Section</small>
                                                    <select class="effect-1" name="course_section_id" id="course">
                                                        <option disabled selected>Course Section
                                                        </option>
                                                        @foreach ($courseSections as $courseSection)
                                                            <option value="{{ $courseSection->id }}">
                                                                {{ $courseSection->name }}</option>
                                                        @endforeach

                                                    </select>
                                                    <span class="focus-border"></span>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="position-relative ps-0 mb-3">
                                                    <label for="course" class="form-label mb-2">Course Category</label>

                                                    <select class="effect-1" name="course_category_id" id="course">

                                                        <option selected disabled>Select Course Category</option>

                                                    </select>

                                                    <span class="focus-border"></span>

                                                </div>
                                            </div>


                                            <div class="col-12">
                                                <div class="position-relative ps-0 mb-3">

                                                    <small for="exampleFormControlInput2" class="form-label mb-2">Select
                                                        Course</small>

                                                    <select class="effect-1" name="course_id" id="level">
                                                        <option selected disabled>Choose Course</option>
                                                    </select>

                                                    <span class="focus-border"></span>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="position-relative ps-0 mb-3">

                                                    <small for="exampleFormControlInput3" class="form-label mb-2">Select
                                                        Course Venue</small>

                                                    <select class="effect-1" name="course_type" id="timing">

                                                        <option disabled selected>Choose Course Venue
                                                        </option>

                                                        <option value="online">Online</option>
                                                        <option value="offline">Offline</option>

                                                    </select>
                                                    <span class="focus-border"></span>
                                                </div>
                                            </div>

                                            {{-- <div class="col-12">
                                                <div class="position-relative ps-0 mb-3">
                                                    <small for="exampleFormControlInput3" class="form-label mb-2">Select
                                                        Venue Location</small>
                                                    <select class="effect-1" name="venue_location" id="timing">
                                                        <option value="" disabled selected>Choose Venue Location
                                                        </option>
                                                        <option value="">Portugal</option>
                                                        <option value="">Bangladesh</option>
                                                        <option value="">India</option>
                                                    </select>
                                                    <span class="focus-border"></span>
                                                </div>
                                            </div> --}}

                                            <div class="col-12">

                                                <div class="position-relative ps-0 mb-3">
                                                    <label for="course_register_date" class="form-label mb-2">Possible
                                                        Starting Date</label>
                                                    <input id="course_register_date" class="form-control effect-1"
                                                        type="date" name="course_register_date">
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="text-center pt-2">
                                            <button type="submit" href="https://training.ngengroup.org/all-courses"
                                                class="primary-btn-two w-100">
                                                Enroled & Checkout Now <i class="fa-solid fa-check ps-2"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    {{-- Category --}}
    <script type="text/javascript">

        $(document).ready(function() {
            $('input[name="create_account"]').change(function() {
                if ($(this).is(':checked')) {
                    $('.account_password').show();
                } else {
                    $('.account_password').hide();
                }
            });
            $('select[name="course_section_id"]').on('change', function() {
                var course_section_id = $(this).val();
                if (course_section_id) {
                    $.ajax({
                        url: "{{ url('/category-register/ajax') }}/" + course_section_id,
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

        // Show State Data

        $(document).ready(function() {
            $('select[name="course_category_id"]').on('change', function() {
                var course_category_id = $(this).val();
                if (course_category_id) {
                    //function subcategory() {
                    $.ajax({
                        url: "{{ url('/course-get/ajax') }}/" + course_category_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $('select[name="course_id"]').html('');
                            var d = $('select[name="course_id"]').empty();
                            $.each(data, function(key, value) {
                                $('select[name="course_id"]').append(
                                    '<option value="' + value.id + '">' + value
                                    .name + '</option>');
                            });
                        },

                    });
                    //}
                } else {
                    alert('danger');
                }
            });
        });
    </script>
@endpush
