@extends('frontend.master')
@section('content')
    <section class="showcase">
        <img src="https://coursebuilder.thimpress.com/demo-corporate-learning/wp-content/uploads/sites/10/2018/10/page_title_1.jpg"
            alt="Picture" />
        <div class="overlay">
            <h2>Contact Us</h2>
            <p>One-Stop Learning & Development Solutions</p>
        </div>
    </section>
    <section class="" style="background-color: #eee;">
        <div class="container">
            <div class="row py-5">
                <div class="col-lg-4">
                    <div class="text-center">
                        <i class="fa-solid fa-location-dot contact-location-icons text-back"></i>
                    </div>
                    <div class="text-center pt-4">
                        <h5 class="text-back">OUR LOCATION</h5>
                        <p class="text-back pt-2">
                            PO Box 97845 Baker st. <br />
                            567, Los Angeles, California, US.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="text-center">
                        <i class="fa-solid fa-phone contact-location-icons text-back"></i>
                    </div>
                    <div class="text-center pt-4">
                        <h5 class="text-back">CONTACT US</h5>
                        <p class="text-back pt-2">
                            Mobile: (+0123) 465 789 <br />
                            Fax: (+0122) 456 789
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="text-center">
                        <i class="fa-solid fa-paper-plane contact-location-icons text-back"></i>
                    </div>
                    <div class="text-center pt-4">
                        <h5 class="text-back">WRITE SOME WORDS</h5>
                        <p class="text-back pt-2">
                            Support247@thimpress.com <br />
                            Info@thimpress.com
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row py-5">
                <div class="col-lg-8 offset-lg-2 mx-auto">
                    <div class="text-center">
                        <h1>Leave a Message</h1>
                        <p>
                            Your email address will not be published. Required fields are
                            marked.
                        </p>
                    </div>
                    <form action="" class="pt-5">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Enter Your Name" />
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Enter Your Email" />
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Enter Your Name" />
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <textarea rows="10" class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                            </div>
                            <div class="col-lg-12">
                                <div class="d-flex justify-content-center pt-5">
                                    <a href="all-cources.html" class="primary-btn-one">Send Your Message</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
