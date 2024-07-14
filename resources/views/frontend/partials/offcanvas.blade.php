<div class="offcanvas offcanvas-start w-75" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop"
    style="background: var(--primary-color);" aria-labelledby="staticBackdropLabel">
    <div class="offcanvas-header">
        <a class="navbar-brand" href="index.html">
            <img class="img-fluid"
                src="{{ !empty(optional($setting)->site_logo) && file_exists(public_path('storage/' . optional($setting)->site_logo)) ? asset('storage/' . optional($setting)->site_logo) : asset('frontend/images/no-logo(217-55).jpg') }}"
                alt="" />
        </a>
        <button type="button" class="btn-close navbar-toggler-close main-color" data-bs-dismiss="offcanvas"
            aria-label="Close">
            <i class="fa-solid fa-xmark"></i>
        </button>
    </div>
    <div class="offcanvas-body">
        <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="text-style-none text-decoration-none"><a class="mobile-menu-link"
                    href="{{ route('homepage') }}">Home</a></li>
            <li class="text-style-none text-decoration-none"><a class="mobile-menu-link" href="{{ route('about') }}">All
                    Courses</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mobile-menu-link text-white" href="#" id="navbarDropdown"
                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Services
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li>
            <li class="text-style-none text-decoration-none"><a class="mobile-menu-link"
                    href="{{ route('contact') }}">Course Registration</a></li>
            <li class="text-style-none text-decoration-none"><a class="mobile-menu-link"
                    href="{{ route('contact') }}">About Us</a></li>
            <li class="text-style-none text-decoration-none"><a class="mobile-menu-link"
                    href="{{ route('contact') }}">Contact Us</a></li>
        </ul>
    </div>
</div>

<!-- Sidebar Fixed Modal Start -->
<!-- Button trigger modal -->
<button type="button" class="toggle-btn-sidebar" data-bs-toggle="modal" data-bs-target="#discountModal">
    Inquery Now!
</button>

<!-- Modal -->
<div class="modal fade" id="discountModal" tabindex="-1" aria-labelledby="discountModalLabel" aria-hidden="true"
    data-bs-target="#staticBackdrop">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header" style="background: #000a18; color: white">
                <h5 class="modal-title" id="discountModalLabel">
                    Get Discount On Purchase!
                </h5>
                <button type="button" class="btn-close" style="color: white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Modal content goes here -->
                @php
                    $courses = App\Models\Courses::latest('id')->get();
                @endphp
                <div class="container">
                    <form action="{{ route('course.registration.store') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Course</label>
                                    <select class="form-select" required name="course_id" aria-label="Select Course"
                                        data-placeholder="Select Course">
                                        <option value="" disabled selected>Select Course</option>
                                        @foreach ($courses as $course)
                                            <option value="{{ $course->id }}">{{ $course->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Name <span
                                            class="text-danger">*</span></label>
                                    <input style="background: #e6e8ee" type="text" class="form-control"
                                        name="name" id="exampleInputEmail1" aria-describedby="emailHelp" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email <span
                                            class="text-danger">*</span></label>
                                    <input style="background: #e6e8ee" type="email" class="form-control"
                                        id="exampleInputEmail1" aria-describedby="emailHelp" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Phone <span
                                            class="text-danger">*</span></label>
                                    <input style="background: #e6e8ee" type="text" class="form-control"
                                        id="exampleInputEmail1" aria-describedby="emailHelp" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-check" style="padding-top: 37px">
                                    <input class="form-check-input" name="call" type="checkbox" value="1"
                                        id="flexCheckChecked" checked />
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Call For Details !
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <label for="exampleInputEmail1" class="form-label">Message</label>
                                <div class="form-floating">
                                    <textarea class="form-control" name="message" placeholder="Your message" id="floatingTextarea2"
                                        style="height: 100px"></textarea>
                                    {{-- <label for="floatingTextarea2">Your Message</label> --}}
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="d-flex justify-content-end pt-3">
                                    <button type="button" class="primary-btn-one">
                                        Apply Discount
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
