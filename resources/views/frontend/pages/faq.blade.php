@extends('frontend.master')
@section('content')
    <section class="showcase">
        <div>
            <img class="img-fluid" src="{{ asset('frontend/images/faq.jpg') }}" alt="Picture" />
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="custom-accordion">
                        <div class="custom-accordion-item">
                            <button id="custom-accordion-button-1" aria-expanded="false">
                                <span class="custom-accordion-title">Why is the moon sometimes out during the day?</span>
                                <span class="icon" aria-hidden="true"></span>
                            </button>
                            <div class="custom-accordion-content">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor
                                    pretium viverra suspendisse potenti.
                                </p>
                            </div>
                        </div>
                        <div class="custom-accordion-item">
                            <button id="custom-accordion-button-2" aria-expanded="false">
                                <span class="custom-accordion-title">Why is the sky blue?</span>
                                <span class="icon" aria-hidden="true"></span>
                            </button>
                            <div class="custom-accordion-content">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor
                                    pretium viverra suspendisse potenti.
                                </p>
                            </div>
                        </div>
                        <div class="custom-accordion-item">
                            <button id="custom-accordion-button-3" aria-expanded="false">
                                <span class="custom-accordion-title">Will we ever discover aliens?</span>
                                <span class="icon" aria-hidden="true"></span>
                            </button>
                            <div class="custom-accordion-content">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor
                                    pretium viverra suspendisse potenti.
                                </p>
                            </div>
                        </div>
                        <div class="custom-accordion-item">
                            <button id="custom-accordion-button-4" aria-expanded="false">
                                <span class="custom-accordion-title">How much does the Earth weigh?</span>
                                <span class="icon" aria-hidden="true"></span>
                            </button>
                            <div class="custom-accordion-content">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor
                                    pretium viverra suspendisse potenti.
                                </p>
                            </div>
                        </div>
                        <div class="custom-accordion-item">
                            <button id="custom-accordion-button-5" aria-expanded="false">
                                <span class="custom-accordion-title">How do airplanes stay up?</span>
                                <span class="icon" aria-hidden="true"></span>
                            </button>
                            <div class="custom-accordion-content">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor
                                    pretium viverra suspendisse potenti.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
