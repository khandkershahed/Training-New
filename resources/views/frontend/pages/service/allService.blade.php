@extends('frontend.master')
@section('content')
    <!-- Banner Section -->
    <section class="showcase">
        <img class="img-fluid" src="{{ asset('storage/common_banner/' . optional($common_banner)->our_service_banner) }}"
            alt="Picture">
    </section>
    <!-- All Servises -->

    <section>
        <div class="container py-5 pt-0">
            <div class="row">
                <div class="col-lg-12 p-3">
                    <div class="text-center w-75 w-lg-100 mx-auto my-5">
                        <h4>Explore Our Services</h4>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex">
                            <!-- (Optional) Existing dropdowns can stay here -->
                        </div>

                        <div>
                            <div class="input-group">
                                <input type="text" id="serviceSearch" class="form-control" placeholder="Search Service Name" style="width: 350px;" autocomplete="off">
                                <span class="input-group-text primary-btn-one text-center" style="width: 50px;">
                                    <i class="fa-solid fa-search"></i>
                                </span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row" id="servicesContainer">
                @forelse ($services as $service)
                    <div class="col-md-3 col-sm-6 service-item">
                        <div class="box-service">
                            <img src="{{ asset('storage/service/' . $service->thumbnail_image) }}" />
                            <div class="box-service-content">
                                <h3 class="title">{{ $service->name }}</h3>
                                <span class="post">{{ $service->header }}</span>
                                <span class="post">
                                    <a href="{{ url('/services/details/' . $service->id . '/' . $service->slug) }}"
                                        class="text-white">See More <i class="fa-solid fa-arrow-right-long"></i></a>
                                </span>
                            </div>
                        </div>
                    </div>
                @empty
                    <p>No Service Available</p>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#serviceSearch').on('keyup', function() {
                var query = $(this).val();
                $.ajax({
                    url: "{{ route('services.search') }}",
                    method: 'GET',
                    data: {
                        query: query
                    },
                    success: function(data) {
                        $('#servicesContainer').html(data);
                    }
                });
            });
        });
    </script>
@endsection
