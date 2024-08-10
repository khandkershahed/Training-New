@extends('frontend.master')
@section('content')
    <!-- Banner Section -->
    <section class="showcase">
        <img class="img-fluid" src="{{ asset('storage/common_banner/' . optional($common_banner)->course_banner) }}"
            alt="Picture">
        {{-- <div class="overlay-courses">
            <h2>Our All Courses</h2>
            <p>One-Stop Learning &amp; Development Solutions</p>
        </div> --}}
    </section>
    <!-- All Servises -->
    <section>
        <div class="container py-5 pt-0">
            <div class="row">
                <div class="col-lg-12 p-3">
                    <div class="text-center w-75 w-lg-100 mx-auto my-5">
                        <h4>Explore Our Courses</h4>
                        <p>Unlock your potential with our comprehensive range of courses. Whether you're looking to enhance
                            your skills, pursue a new career path, or simply learn something new, our courses are designed
                            to meet your needs. From beginner to advanced levels, explore a variety of subjects taught by
                            industry experts. Start your learning journey today and achieve your goals with our
                            high-quality, accessible, and engaging courses.</p>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex">
                            <div class="me-3">
                                <select class="form-select primary-btn-one" aria-label="Default select example">
                                    <option selected>Select Category</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="me-3">
                                <select class="form-select primary-btn-one" aria-label="Default select example">
                                    <option selected>Select Service</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Recipient's username"
                                    aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <span class="input-group-text primary-btn-one w-25" id="basic-addon2">
                                    <i class="fa-solid fa-search"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @forelse ($services as $service)
                    <div class="col-md-3 col-sm-6">
                        <div class="box-service">
                            <img src="{{ asset('storage/service/' . $service->thumbnail_image) }}" />
                            <div class="box-service-content">
                                <h3 class="title">{{ $service->name }}</h3>
                                <span class="post">
                                    {{ $service->header }}
                                </span>
                                <span class="post">
                                    <a href="{{ url('/services/details/' . $service->id . '/' . $service->slug) }}"
                                        class="text-white">See More <i class="fa-solid fa-arrow-right-long"></i></a>
                                </span>
                            </div>
                        </div>
                    </div>
                @empty
                    <p>No Service Avaiable</p>
                @endforelse

            </div>
        </div>
    </section>
@endsection
