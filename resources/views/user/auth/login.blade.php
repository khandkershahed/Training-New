{{-- <x-guest-layout>
    <!-- Session Status -->



    <div class="row g-0 justify-content-center align-items-center">
        <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="card cascading-right" style="background: hsla(0, 0%, 100%, 0.55);backdrop-filter: blur(30px);">
                <div class="card-body p-5 shadow-5 text-center">
                    <h2 class="fw-bold mb-5">Log In</h2>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <div class="row mb-4">
                            <div class="form-outline">
                                <x-input-label class="form-label" for="email" :value="__('Email')" />
                                <x-text-input id="email" class="form-control form-control-solid" type="email"
                                    name="email" :value="old('email')" required autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="form-outline">
                                <x-input-label class="form-label" for="password" :value="__('Password')" />

                                <x-text-input id="password" class="form-control form-control-solid" type="password"
                                    name="password" required autocomplete="new-password" />
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                        </div>

                        <!-- Checkbox -->
                        <div class="row justify-content-between align-items-center">
                            <div class="form-check d-flex justify-content-center align-items-center mb-3">
                                <input class="form-check-input me-2" type="checkbox" value="" id="remember_me"
                                    name="remember" />
                                <label class="form-check-label" for="remember_me">
                                    {{ __('Remember me') }}
                                </label>
                            </div>
                            @if (Route::has('password.request'))
                                <div class="form-check d-flex justify-content-center align-items-center mb-3">
                                    <h6 class="d-flex justify-content-center align-items-center">
                                        {{ __('Forgot your password?') }}
                                        <a href="{{ route('password.request') }}"
                                            class="btn btn-sm btn-link text-gray fw-bold fs-6">{{ __('Click Here...') }}</a>
                                    </h6>
                                </div>
                            @endif
                        </div>

                        <!-- Submit button -->
                        <x-primary-button class="btn btn-primary btn-block mb-4">
                            {{ __('Log in') }}
                        </x-primary-button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-6 mb-5 mb-lg-0">
            <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/004.jpg" class="w-100 rounded-4 shadow-4"
                alt="" />
        </div>
    </div>


</x-guest-layout> --}}

@extends('frontend.master')
@section('content')
<style>
    .form-label{
        color: #747474
    }
    .form-check-label{
        color: #747474
    }
</style>
    <section>
        <img class="img-fluid" src="{{ asset('storage/common_banner/' . optional($common_banner)->course_login_banner) }}" alt="LogIn" />
    </section>
    <section style="background-color: #051225">
        <div class="container py-lg-5 py-3">
            <x-auth-session-status class="mb-4" :status="session('status')" />
            <form method="POST" action="{{ route('login') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="row">
                            <div class="col-lg-6 form-area">
                                <div class="input-field-gap text-center">
                                    <h5 class="text-white form-title">
                                        Login To Your Dashboard
                                    </h5>
                                    <p class="text-white form-desc">
                                        Reach out and let the magic of collaboration illuminate
                                        our skies.
                                    </p>
                                </div>
                                {{-- <div class="d-flex align-items-center justify-content-center my-5">
                                    <a href="javascript:voide(0)" class="primary-btn-outline text-decoration-none me-2"><i
                                            class="fa-brands fa-google pe-2"></i> Google Login</a>
                                    <a href="javascript:voide(0)" class="primary-btn-outline text-decoration-none"><i
                                            class="fa-brands fa-facebook-f pe-2"></i> Facebook Login</a>
                                </div> --}}
                                <div class="input-field-gap">
                                    <x-input-label class="form-label" for="email" :value="__('Email')" />
                                    <x-text-input id="email" class="form-control form-control-solid" type="email"
                                        name="email" :value="old('email')" required autocomplete="username" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    {{-- <input type="email" class="form-control" id="exampleFormControlInput1"
                                        placeholder="name@example.com" /> --}}
                                </div>
                                <div class="input-field-gap">
                                    <x-input-label class="form-label" for="password" :value="__('Password')" />

                                    <x-text-input id="password" class="form-control form-control-solid" type="password"
                                        name="password" required autocomplete="new-password" />
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    {{-- <input type="password" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Your password" /> --}}
                                </div>
                                <div class="row justify-content-between align-items-center">
                                    <div class="form-check d-flex justify-content-center align-items-center mb-3">
                                        <input class="form-check-input me-2" type="checkbox" value="" id="remember_me"
                                            name="remember" />
                                        <label class="form-check-label" for="remember_me">
                                            {{ __('Remember me') }}
                                        </label>
                                    </div>
                                    @if (Route::has('password.request'))
                                        <div class="form-check d-flex justify-content-center align-items-center mb-3">
                                            <h6 class="d-flex justify-content-center align-items-center" style="color: #747474">
                                                {{ __('Forgot your password?') }}
                                                <a href="{{ route('password.request') }}"
                                                    class="btn btn-sm btn-link text-gray fw-bold fs-6">{{ __('Click Here') }}</a>
                                            </h6>
                                        </div>
                                    @endif
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-white bg-white w-100 main-color">
                                        {{ __('Log in') }}
                                    </button>
                                </div>
                            </div>
                            <div class="col-lg-6 d-lg-block d-sm-none">
                                <div class="sidebar-areas">
                                    <img class="form-side-area" width="516px" height="530px"
                                        src="https://t4.ftcdn.net/jpg/04/60/71/01/360_F_460710131_YkD6NsivdyYsHupNvO3Y8MPEwxTAhORh.jpg"
                                        alt="" />
                                    <div class="sidebar-content">
                                        <p>
                                            "Skill development is not just about acquiring
                                            knowledge; it's about cultivating the ability to adapt
                                            and thrive in a rapidly changing world."
                                            <span class="fw-bold text-danger">- Tony Wagner</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
