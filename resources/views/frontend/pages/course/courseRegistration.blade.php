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
            height: 100vh;
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
            padding: 7px 0;
            border-bottom: 1px solid #ccc;
            position: relative;
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
    </style>
    <section class="section-background">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="text-white text-center pb-5">Course Registration</h1>
                </div>
                <div class="col-lg-8 offset-lg-2">
                    <div class="card border-0 form-card">
                        <div class="card-body p-5" style="background: #001c4182;">
                            <form action="">
                                <div class="row gx-5">
                                    <div class="col-lg-6 first-column">
                                        <h4 class="text-white pb-3">Course Info</h4>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="position-relative ps-0 mb-3">
                                                    <small for="exampleFormControlInput1" class="form-label">Select Course</small>
                                                    <select class="effect-1" name="course" id="course">
                                                        <option value="" disabled selected>Choose your course</option>
                                                        <option value="course1">Course 1</option>
                                                        <option value="course2">Course 2</option>
                                                        <option value="course3">Course 3</option>
                                                    </select>
                                                    <span class="focus-border"></span>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="position-relative ps-0 mb-3">
                                                    <small for="exampleFormControlInput2" class="form-label">Select Level</small>
                                                    <select class="effect-1" name="level" id="level">
                                                        <option value="" disabled selected>Choose your level</option>
                                                        <option value="beginner">Beginner</option>
                                                        <option value="intermediate">Intermediate</option>
                                                        <option value="advanced">Advanced</option>
                                                    </select>
                                                    <span class="focus-border"></span>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="position-relative ps-0 mb-3">
                                                    <small for="exampleFormControlInput3" class="form-label">Select Timing</small>
                                                    <select class="effect-1" name="timing" id="timing">
                                                        <option value="" disabled selected>Choose your timing</option>
                                                        <option value="morning">Morning</option>
                                                        <option value="afternoon">Afternoon</option>
                                                        <option value="evening">Evening</option>
                                                    </select>
                                                    <span class="focus-border"></span>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="position-relative ps-0 mb-3">
                                                    <small for="exampleFormControlInput3" class="form-label">Select Timing</small>
                                                    <select class="effect-1" name="timing" id="timing">
                                                        <option value="" disabled selected>Choose your timing</option>
                                                        <option value="morning">Morning</option>
                                                        <option value="afternoon">Afternoon</option>
                                                        <option value="evening">Evening</option>
                                                    </select>
                                                    <span class="focus-border"></span>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="position-relative ps-0 mb-3">
                                                    <small for="exampleFormControlInput3" class="form-label">Select Timing</small>
                                                    <select class="effect-1" name="timing" id="timing">
                                                        <option value="" disabled selected>Choose your timing</option>
                                                        <option value="morning">Morning</option>
                                                        <option value="afternoon">Afternoon</option>
                                                        <option value="evening">Evening</option>
                                                    </select>
                                                    <span class="focus-border"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <h4 class="text-white pb-3">User Info</h4>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="position-relative ps-0 mb-3">
                                                    <small for="exampleFormControlInput4" class="form-label">Email address</small>
                                                    <input class="effect-1" type="text" placeholder="Placeholder Text">
                                                    <span class="focus-border"></span>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="position-relative ps-0 mb-3">
                                                    <small for="exampleFormControlInput5" class="form-label">Email address</small>
                                                    <input class="effect-1" type="text" placeholder="Placeholder Text">
                                                    <span class="focus-border"></span>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="position-relative ps-0 mb-3">
                                                    <small for="exampleFormControlInput6" class="form-label">Email address</small>
                                                    <input class="effect-1" type="text" placeholder="Placeholder Text">
                                                    <span class="focus-border"></span>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="position-relative ps-0 mb-3">
                                                    <small for="exampleFormControlInput7" class="form-label">Email address</small>
                                                    <input class="effect-1" type="text" placeholder="Placeholder Text">
                                                    <span class="focus-border"></span>
                                                </div>
                                            </div>
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
@endpush
