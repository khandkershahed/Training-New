<x-admin-guest-layout>
    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <div class="d-flex flex-column flex-lg-row-auto w-xl-600px positon-xl-relative"
                style="background-color:  #f5f5f5;">
                <div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-600px">
                    <div class="d-flex flex-row-fluid flex-column text-center p-10 pt-lg-20">
                        <a href="{{ route('homepage') }}" class="py-9 mb-5">
                            <img alt="Logo"
                                src="{{ !empty($site->site_logo) && file_exists(public_path('storage/settings/' . $site->site_logo)) ? asset('storage/settings/' . $site->site_logo) : asset('frontend/images/no-logo(217-55).jpg') }}"
                                class="h-60px" />
                        </a>
                        <h1 class="fw-bolder fs-2qx pb-5 pb-md-10" style="color: #179ef7">Welcome to
                            {{ !empty($site->site_name) ? $site->site_name : 'NGen IT Training' }}</h1>
                        <p class="fw-bold fs-2" style="color: #000;">Discover Amazing
                            {{ !empty($site->site_name) ? $site->site_name : 'NGen IT Training' }}
                            <br />with great build tools
                        </p>
                    </div>
                    <div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-350px"
                        style="background-image: url(assets/media/illustrations/sketchy-1/13.png"></div>
                </div>
            </div>
            <div class="d-flex flex-column flex-lg-row-fluid py-10">
                <div class="d-flex flex-center flex-column flex-column-fluid">
                    <div class="w-lg-500px p-10 p-lg-15 mx-auto">
                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <form class="form w-100" action="{{ route('admin.login') }}" method="POST">
                            @csrf
                            <div class="text-center mb-10">
                                <h1 class="text-dark mb-3">Sign In to
                                    {{ !empty($site->site_name) ? $site->site_name : 'NGen IT Training' }}</h1>
                                {{-- <div class="text-gray-400 fw-bold fs-4">New Here?
                                    <a href="../../demo1/dist/authentication/layouts/aside/sign-up.html"
                                        class="link-primary fw-bolder">Create an Account</a>
                                </div> --}}
                            </div>
                            <div class="fv-row mb-10">
                                <x-metronic.label
                                    class="form-label fs-6 fw-bolder text-dark">{{ __('Email') }}</x-metronic.label>
                                <x-metronic.input type="email" name="email"
                                    class="form-control form-control-lg form-control-solid"
                                    placeholder="Enter your email address" value="{{ old('email') }}"
                                    autocomplete="off"></x-metronic.input>
                            </div>
                            <div class="fv-row mb-10">
                                <div class="d-flex flex-stack mb-2">
                                    <x-metronic.label
                                        class="form-label fw-bolder text-dark fs-6 mb-0">{{ __('Password') }}</x-metronic.label>
                                    @if (Route::has('admin.password.request'))
                                        <a href="{{ route('admin.password.request') }}"
                                            class="link-primary fs-6 fw-bolder">
                                            {{ __('Forgot password ?') }}</a>
                                    @endif
                                </div>
                                <x-metronic.input type="password" name="password"
                                    class="form-control form-control-lg form-control-solid"
                                    placeholder="Enter your password" autocomplete="off"></x-metronic.input>
                            </div>
                            <div class="fv-row mb-10">
                                <div class="d-flex flex-stack mb-2">
                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input id="remember_me" type="checkbox" class="form-check-input"
                                                name="remember">
                                            <x-metronic.label for="remember_me"
                                                class="form-check-label">{{ __('Remember me') }}</x-metronic.label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <x-metronic.button type="submit" class="primary btn-lg w-100 mb-5 rounded-1">
                                    <span class="indicator-label"> {{ __('Sign In') }}</span>
                                </x-metronic.button>

                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

</x-admin-guest-layout>
