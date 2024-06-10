<div class="offcanvas offcanvas-start w-100" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop"
aria-labelledby="staticBackdropLabel">
<div class="offcanvas-header">
    <h5 class="offcanvas-title" id="staticBackdropLabel">Menu Area</h5>
    <button type="button" class="btn-close navbar-toggler-close" data-bs-dismiss="offcanvas"
        aria-label="Close"></button>
</div>
<div class="offcanvas-body">
    <div>asdasdasdswasdasd</div>
</div>
</div>

<!-- Sidebar Fixed Modal Start -->
<!-- Button trigger modal -->
<button type="button" class="toggle-btn-sidebar" data-bs-toggle="modal" data-bs-target="#discountModal">
GET DISCOUNT
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
            <button type="button" class="btn-close" style="color: white"" data-bs-dismiss="modal"
                aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <!-- Modal content goes here -->
            <div class="container">
                <form action="">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Course</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select Course</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Name</label>
                                <input style="background: #e6e8ee" type="email" class="form-control"
                                    id="exampleInputEmail1" aria-describedby="emailHelp" />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input style="background: #e6e8ee" type="email" class="form-control"
                                    id="exampleInputEmail1" aria-describedby="emailHelp" />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Phone</label>
                                <input style="background: #e6e8ee" type="email" class="form-control"
                                    id="exampleInputEmail1" aria-describedby="emailHelp" />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-check" style="padding-top: 37px">
                                <input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckChecked" checked />
                                <label class="form-check-label" for="flexCheckChecked">
                                    Call Me For Details !
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <label for="exampleInputEmail1" class="form-label">Message</label>
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Your message" id="floatingTextarea2" style="height: 100px"></textarea>
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
