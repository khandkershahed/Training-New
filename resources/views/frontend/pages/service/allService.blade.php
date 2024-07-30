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

    {{-- <section style="background-color: #eee">
        <div class="container">
            <div class="text-center px-lg-5 py-lg-5 px-2 py-5">
                <h3 class="section-title">Popular Services We Offer</h3>
                <div class="divider"></div>
                <p class="text-muted py-0 px-0 py-lg-3 px-lg-5">
                    Promise Training and Consultancy offers short-term workshops and
                    training seminars for various work streams including management,
                    leadership, finance, HR and Oil &amp; Gas. Participants of our
                    public training program will also have a chance to share their
                    experiences with professionals from other organisations. This
                    enables them to gain new perspectives on the common challenges
                    they face at the workplace.
                </p>
            </div>
        </div>
    </section> --}}
    <!-- All Servises -->
    <section>
        <div class="container py-5">
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
