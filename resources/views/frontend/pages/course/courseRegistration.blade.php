@extends('frontend.master')
@section('content')
    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            height: 100%;
        }

        .section-background {
            background-image: url('https://i.ibb.co/jHMSZWq/01.jpg');
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
            background: #77869b;
            padding: 10px 15px 10px;
        }

        input[type="text"]:focus,
        select:focus {
            outline: none;
        }

        .effect-1 {
            border: 0;
            padding: 12px 15px;
            border-bottom: 1px solid #ccc;
            position: relative;
            color: #ccc;
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

        .course_registration input[type=checkbox] {
            display: none;
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
                    <h1 class="text-white text-center pb-2">Course Registration</h1>
                    <p class="text-center text-white">Welcome to our Course Registration page! Here, you can explore and <br>
                        enroll in a variety of courses designed to enhance your skills and knowledge.</p>
                </div>
                <div class="col-lg-6 offset-lg-3">
                    <div class="card border-0 form-card">
                        <div class="card-body p-5" style="background: #001c4182;">
                            <form action="" class="needs-validation" novalidate>
                                <div class="row gx-5">
                                    <div class="col-lg-12 first-column">
                                        <h6 class="text-white pb-3">User Info</h6>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="position-relative ps-0 mb-3">
                                                    <small for="exampleFormControlInput4" class="form-label">Name</small>
                                                    <input class="effect-1" type="text" name="user_name" required
                                                        placeholder="Robert Bruno">
                                                    <span class="focus-border"></span>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="position-relative ps-0 mb-3">
                                                    <small for="exampleFormControlInput5" class="form-label">Email</small>
                                                    <input class="effect-1" type="text" name="user_email" required
                                                        placeholder="yourmail@gmail.com">
                                                    <span class="focus-border"></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="row align-items-center">
                                                    <div class="col-8">
                                                        <div class="position-relative ps-0 mb-3">
                                                            <small for="exampleFormControlInput6"
                                                                class="form-label">Phone</small>
                                                            <input class="effect-1" type="text" name="user_phone"
                                                                required placeholder="(CC) digit">
                                                            <span class="focus-border"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="d-flex">
                                                            <div class="course_registration pt-3">
                                                                <input type="checkbox" name="call_me" id="cbtest-19" />
                                                                <label for="cbtest-19" class="check-box"></label>
                                                            </div>
                                                            <p class="ps-3 text-white pt-3">Call Me</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <!-- Select Course Category -->
                                                    <div class="col-12">
                                                        <div class="position-relative ps-0 mb-3">
                                                            <small for="exampleFormControlInput1" class="form-label">Select
                                                                Course Category</small>
                                                            <select class="effect-1" name="course_category"
                                                                id="course-category">
                                                                <option value="" disabled selected>Choose Course
                                                                    Category</option>
                                                                <option value="category-one">Category One</option>
                                                                <option value="category-two">Category Two</option>
                                                                <option value="category-three">Category Three</option>
                                                            </select>
                                                            <span class="focus-border"></span>
                                                        </div>
                                                    </div>
                                                    <!-- Select Sub Category -->
                                                    <div class="col-12" id="sub-category-section" style="display: none;">
                                                        <div class="position-relative ps-0 mb-3">
                                                            <small for="exampleFormControlInput2" class="form-label">Select
                                                                Sub Category</small>
                                                            <select class="effect-1" name="sub_category" id="sub-category">
                                                                <option value="" disabled selected>Choose Sub Category
                                                                </option>
                                                                <option value="sub-one">Sub One</option>
                                                                <option value="sub-two">Sub Two</option>
                                                                <option value="sub-three">Sub Three</option>
                                                            </select>
                                                            <span class="focus-border"></span>
                                                        </div>
                                                    </div>
                                                    <!-- Select Course Venue -->
                                                    <div class="col-12" id="course-venue-section" style="display: none;">
                                                        <div class="position-relative ps-0 mb-3">
                                                            <small for="exampleFormControlInput3" class="form-label">Select
                                                                Course Venue</small>
                                                            <select class="effect-1" name="course_venue" id="course-venue">
                                                                <option value="" disabled selected>Choose Course Venue
                                                                </option>
                                                                <option value="onsite">Onsite</option>
                                                                <option value="online">Online</option>
                                                                <option value="offline">Offline</option>
                                                            </select>
                                                            <span class="focus-border"></span>
                                                        </div>
                                                    </div>
                                                    <!-- Select Venue Location -->
                                                    <div class="col-12" id="venue-location-section"
                                                        style="display: none;">
                                                        <div class="position-relative ps-0 mb-3">
                                                            <small for="exampleFormControlInput4"
                                                                class="form-label">Select Venue Location</small>
                                                            <select class="effect-1" name="venue_location"
                                                                id="venue-location">
                                                                <option value="" disabled selected>Choose Venue
                                                                    Location</option>
                                                                <option value="portugal">Portugal</option>
                                                                <option value="bangladesh">Bangladesh</option>
                                                                <option value="india">India</option>
                                                            </select>
                                                            <span class="focus-border"></span>
                                                        </div>
                                                    </div>
                                                    <!-- Select Date & Time -->
                                                    <div class="col-12" id="date-time-section" style="display: none;">
                                                        <div class="position-relative ps-0 mb-3">
                                                            <small for="exampleFormControlInput5"
                                                                class="form-label">Select Date & Time</small>
                                                            <select class="effect-1" name="timing" id="date-time">
                                                                <option value="" disabled selected>Choose Date & Time
                                                                </option>
                                                                <option value="morning">Morning</option>
                                                                <option value="afternoon">Afternoon</option>
                                                                <option value="evening">Evening</option>
                                                            </select>
                                                            <span class="focus-border"></span>
                                                        </div>
                                                    </div>
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
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const courseCategorySelect = document.getElementById('course-category');
            const subCategorySection = document.getElementById('sub-category-section');
            const courseVenueSection = document.getElementById('course-venue-section');
            const venueLocationSection = document.getElementById('venue-location-section');
            const dateTimeSection = document.getElementById('date-time-section');

            const subCategorySelect = document.getElementById('sub-category');
            const courseVenueSelect = document.getElementById('course-venue');
            const venueLocationSelect = document.getElementById('venue-location');
            const dateTimeSelect = document.getElementById('date-time');

            courseCategorySelect.addEventListener('change', function() {
                subCategorySection.style.display = 'block';
            });

            subCategorySelect.addEventListener('change', function() {
                courseVenueSection.style.display = 'block';
            });

            courseVenueSelect.addEventListener('change', function() {
                venueLocationSection.style.display = 'block';
            });

            venueLocationSelect.addEventListener('change', function() {
                dateTimeSection.style.display = 'block';
            });
        });
    </script>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>
@endpush
