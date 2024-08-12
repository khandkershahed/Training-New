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
            <img class="img-fluid" src="{{ asset('storage/common_banner/' . optional($common_banner)->faq_banner) }}"
                alt="Picture" />
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-2" style="background-color: #eee;">
                    <h4 class="mb-0 pt-2 text-center">Faqs</h4>
                    <ul class="nav nav-tabs border-0 flex-column py-3" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link faq-nav-link border-0 rounded-0 text-start w-100 active" id="home-tab"
                                data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab"
                                aria-controls="home-tab-pane" aria-selected="true">Home</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link faq-nav-link border-0 rounded-0 text-start w-100" id="profile-tab"
                                data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab"
                                aria-controls="profile-tab-pane" aria-selected="false">Profile</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link faq-nav-link border-0 rounded-0 text-start w-100" id="contact-tab"
                                data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab"
                                aria-controls="contact-tab-pane" aria-selected="false">Contact</button>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-10">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                                    aria-labelledby="home-tab" tabindex="0">
                                    {{-- Content --}}
                                    <div class="custom-accordion">
                                        @if (count($faqs) > 0)
                                            @foreach ($faqs as $faq)
                                                <div class="custom-accordion-item">
                                                    <button id="custom-accordion-button-1" aria-expanded="false">
                                                        <span class="custom-accordion-title">{{ $faq->question }}</span>
                                                        <span class="icon" aria-hidden="true"></span>
                                                    </button>
                                                    <div class="custom-accordion-content">
                                                        <p>
                                                            {{ $faq->answer }}
                                                        </p>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @else
                                            <div class="custom-accordion-item border-0">
                                                <div class="text-center py-3">
                                                    <img class="img-fluid" width="210px"
                                                        src="https://i.ibb.co/Vg8gqx5/hand-drawn-no-data-illustration-23-2150696455.jpg"
                                                        alt="No Content">
                                                </div>
                                                <h5 class="text-center text-warning">FAQ Will be updated soon.</h5>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel"
                                    aria-labelledby="profile-tab" tabindex="0">
                                    {{-- Content --}}
                                    Test 2
                                </div>
                                <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel"
                                    aria-labelledby="contact-tab" tabindex="0">
                                    {{-- Content --}}
                                    Test 3
                                </div>
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
