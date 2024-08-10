@extends('frontend.master')
@section('content')
    <style>
        .faq-nav-link {
            color: black
        }

        .faq-nav-link.active {
            background-color: #001c44 !important;
            color: white !important;
            border-radius: 5px !important;
        }
    </style>

    <section>
        <div class="showcase">
            <img class="img-fluid" src="{{ asset('storage/common_banner/' . optional($common_banner)->our_category_banner) }}"
                alt="Picture" />
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center py-5 w-75 w-lg-100 mx-auto">
                        <h1>Popular <span class="main_color">Categories</span> We Offer</h1>
                        <div>
                            <img decoding="async" width="137" height="21"
                                src="https://www.promisetrainingglobal.com/wp-content/uploads/2019/02/line.jpg"
                                class="vc_single_image-img attachment-full webpexpress-processed" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 pt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 px-0">
                    <div class="px-2" style="background-color: #eee;">
                        <h5 class="mb-0 py- pt-3 text-center"><span class="fw-bold"
                                style="border-bottom: 1px solid #001c44">Course</span> Section</h5>

                        <ul class="nav nav-tabs border-0 flex-column py-3 mt-3" id="myTab" role="tablist">

                            @foreach ($courseSections as $courseSection)
                                <li class="nav-item" role="presentation">
                                    <button
                                        class="nav-link faq-nav-link border-0 rounded-0 text-start w-100 {{ $loop->first ? 'active' : '' }}"
                                        id="home-{{ $courseSection->id }}" data-bs-toggle="tab"
                                        data-bs-target="#home-{{ $courseSection->id }}-pane" type="button" role="tab"
                                        aria-controls="home-{{ $courseSection->id }}-pane"
                                        aria-selected="{{ $loop->first ? 'true' : 'false' }}">{{ $courseSection->name }}
                                    </button>
                                </li>
                            @endforeach

                            {{-- <li class="nav-item" role="presentation">
                                <button class="nav-link faq-nav-link border-0 rounded-0 text-start w-100" id="profile-tab"
                                    data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab"
                                    aria-controls="profile-tab-pane" aria-selected="false">Industrial Courses</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link faq-nav-link border-0 rounded-0 text-start w-100" id="contact-tab"
                                    data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab"
                                    aria-controls="contact-tab-pane" aria-selected="false">Professional Courses</button>
                            </li> --}}

                        </ul>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="tab-content" id="myTabContent">

                                @foreach ($courseSections as $courseSection)
                                    <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}"
                                        id="home-{{ $courseSection->id }}-pane" role="tabpanel"
                                        aria-labelledby="home-{{ $courseSection->id }}" tabindex="0">

                                        @php
                                            $sectionWiseCats = App\Models\CourseCategory::where(
                                                'course_section_id',
                                                $courseSection->id,
                                            )
                                                ->orderBy('name', 'ASC')
                                                ->limit(3)
                                                ->get();
                                        @endphp
                                        <div class="row mb-4">

                                            @forelse ($sectionWiseCats as $sectionWiseCat)
                                                <div class="col-lg-4">
                                                    <div class="card border-0 shadow-sm">
                                                        <div class="card-header p-0">
                                                            <div>
                                                                <img class="img-fluid w-100 rounded-2"
                                                                    src="{{ asset('storage/course_category/' . $sectionWiseCat->thumbnail_image) }}"
                                                                    alt="" style="height: 220px;">
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <h5>{{ $sectionWiseCat->name }}</h5>
                                                            <p style="background-color: #001c44; width: 40%; height: 3px;">
                                                            </p>

                                                            @php
                                                                $description = $sectionWiseCat->description;
                                                                $words = explode(' ', strip_tags($description));
                                                                $limitedWords = array_slice($words, 0, 18);
                                                                $limitedDescription = implode(' ', $limitedWords);
                                                            @endphp


                                                            <p>{!! $limitedDescription !!}.....</p>

                                                            <a href="{{ url('/category/details/' . $sectionWiseCat->id . '/' . $sectionWiseCat->slug) }}" class="primary-btn-one"> See Details <i
                                                                    class="fa-solid fa-arrow-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @empty
                                                <p>No Category Avaiable</p>
                                            @endforelse

                                        </div>
                                    </div>
                                @endforeach

                                {{-- <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel"
                                    aria-labelledby="profile-tab" tabindex="0">

                                    Test 2
                                </div>

                                <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel"
                                    aria-labelledby="contact-tab" tabindex="0">

                                    Test 3
                                </div> --}}

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        const items = document.querySelectorAll(".custom-accordion button");

        function toggleAccordion() {
            const itemToggle = this.getAttribute("aria-expanded");

            for (i = 0; i < items.length; i++) {
                items[i].setAttribute("aria-expanded", "false");
            }

            if (itemToggle == "false") {
                this.setAttribute("aria-expanded", "true");
            }
        }

        items.forEach((item) => item.addEventListener("click", toggleAccordion));
    </script>
@endpush
