@extends('frontend.master')
@section('content')
    <section>
        <div class="showcase">
            <img class="img-fluid" src="{{ asset('frontend/images/faq.jpg') }}" alt="Picture" />
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="custom-accordion">

                        @if (count($faqs) > 0)
                            @foreach ($faqs as $faq)
                                <div class="custom-accordion-item">
                                    <button id="custom-accordion-button-1" aria-expanded="false">
                                        <span class="custom-accordion-title">{{$faq->question}}</span>
                                        <span class="icon" aria-hidden="true"></span>
                                    </button>
                                    <div class="custom-accordion-content">
                                        <p>
                                            {{$faq->answer}}
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="custom-accordion-item border-0">
                                <div class="text-center py-3">
                                    <img class="img-fluid" width="210px" src="https://i.ibb.co/Vg8gqx5/hand-drawn-no-data-illustration-23-2150696455.jpg" alt="No Content">
                                </div>
                                <h5 class="text-center text-warning">FAQ Will be updated soon.</h5>
                            </div>
                        @endif
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
