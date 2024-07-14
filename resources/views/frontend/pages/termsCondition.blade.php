@extends('frontend.master')
@section('content')
    <section class="">
        <div class="showcase">
            <img class="img-fluid" src="{{ asset('storage/common_banner/' . optional($common_banner)->term_banner) }}" alt="Picture" />
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb" class="py-3">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="{{ route('homepage') }}" class="text-decoration-none main-color">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                <span class="text-muted">Terms & Condition</span>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-12">
                    {!! optional($terms)->content !!}
                </div>
            </div>
        </div>
    </section>
@endsection
