<x-app-layout :title="'Register Course'">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <div class="card">


        <div class="card-body pt-5">

            <h1 style="margin-top: 30px; margin-bottom:30px;">আমার কোর্সসমূহ</h1>

            <div class="row">



                @forelse ($registerCourse as $key => $registration)
                    <div class="col-12 col-lg-3 p-2">

                        <div style="border: 1px solid #453443" class="card h-100 rounded-1">

                            <img src="{{ !empty($registration->courseName->thumbnail_image) ? url('storage/course/' . $registration->courseName->thumbnail_image) : 'https://ui-avatars.com/api/?name=' . urlencode($registration->courseName->name) }}"
                                class="card-img-top" alt="...">

                            <div class="card-body p-4">

                                <span class="badge text-danger p-0 mb-3">
                                    {{ \Carbon\Carbon::parse($registration->course_register_date)->format('d M Y') }}
                                </span>

                                <h5 class="card-title">{{ $registration->courseName->name }}</h5>

                                <a href="{{ route('register.course.details', $registration->course_id) }}"
                                    style="margin-top: 40px" class="btn btn-dark  rounded-1 w-100">
                                    Course Details
                                </a>

                            </div>

                        </div>

                    </div>
                @empty
                    <p>No Course Avaiable</p>
                @endforelse

            </div>

        </div>
    </div>

    {{-- @dd(Auth::user()) --}}

</x-app-layout>
