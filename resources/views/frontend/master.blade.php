<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.partials.head')
</head>

<body>
    <div class="loader"></div>
    @include('frontend.partials.header')
    <main>
        @yield('content')
    </main>

    <footer>
        @include('frontend.partials.footer')
    </footer>
    <!-- All Extra Content -->
    <!-- Mobile Menu Offcanvas -->
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
    <div class="modal fade" id="discountModal" tabindex="-1" aria-labelledby="discountModalLabel"
        aria-hidden="true" data-bs-target="#staticBackdrop">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="discountModalLabel">
                        Discount Information
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Modal content goes here -->
                    This is where you can display information about discounts,
                    promotions, etc.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="button" class="btn btn-primary">
                        Apply Discount
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Sidebar Fixed Modal End -->

    <!-- Mobile Menu OffcanvasE End-->
    <!-- All Extra Content ENd -->
    <!-- Bootstrap JavaScript Libraries -->
    @include('frontend.partials.script')
</body>

</html>
