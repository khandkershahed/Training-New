<x-admin-app-layout :title="'HomePage Create'">
    <div class="card card-flash">
        <div class="card-header">
            <div class="card-title">
            </div>

            <div class="card-toolbar">
                <a href="{{ route('admin.course.index') }}" class="btn btn-light-primary rounded-2">
                    <span class="svg-icon svg-icon-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5"
                                fill="currentColor" />
                            <rect x="10.8891" y="17.8033" width="12" height="2" rx="1"
                                transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                            <rect x="6.01041" y="10.9247" width="12" height="2" rx="1"
                                fill="currentColor" />
                        </svg>
                    </span> Back to list
                </a>

            </div>
        </div>
        <div class="card-body">

            <form id="myForm" method="post" action="{{ route('admin.homepage.store') }}"
                enctype="multipart/form-data">
                @csrf
                {{-- Banner Section  --}}
                <div class="card bg-light mb-3">
                    <div class="row p-4 pb-0">
                        <div class="col-4 mb-5">
                            <x-metronic.label for="banner_one_image"
                                class="col-form-label fw-bold fs-6">{{ __('Banner One Image') }}
                            </x-metronic.label>
                            <x-metronic.file-input id="banner_one_image" name="banner_one_image"
                                :value="old('banner_one_image')"></x-metronic.file-input>
                        </div>
                        <div class="col-4 mb-5">
                            <x-metronic.label for="banner_two_image"
                                class="col-form-label fw-bold fs-6">{{ __('Banner two Image') }}
                            </x-metronic.label>
                            <x-metronic.file-input id="banner_two_image" name="banner_two_image"
                                :value="old('banner_two_image')"></x-metronic.file-input>
                        </div>
                        <div class="col-4 mb-5">
                            <x-metronic.label for="banner_three_image"
                                class="col-form-label fw-bold fs-6">{{ __('Banner three Image') }}
                            </x-metronic.label>
                            <x-metronic.file-input id="banner_three_image" name="banner_three_image"
                                :value="old('banner_three_image')"></x-metronic.file-input>
                        </div>
                    </div>
                    <div class="row p-4 pt-0">
                        <div class="col-4 mb-2">
                            <x-metronic.label for="banner_one_url"
                                class="col-form-label fw-bold fs-6">{{ __('Banner One Url') }}
                            </x-metronic.label>

                            <x-metronic.input id="banner_one_url" type="banner_one_url" name="banner_one_url"
                                :value="old('banner_one_url')" placeholder="Enter the Url"></x-metronic.input>
                        </div>
                        <div class="col-4 mb-2">
                            <x-metronic.label for="banner_two_url"
                                class="col-form-label fw-bold fs-6">{{ __('Banner two Url') }}
                            </x-metronic.label>

                            <x-metronic.input id="banner_two_url" type="banner_two_url" name="banner_two_url"
                                :value="old('banner_two_url')" placeholder="Enter the Url"></x-metronic.input>
                        </div>
                        <div class="col-4 mb-2">
                            <x-metronic.label for="banner_three_url"
                                class="col-form-label fw-bold fs-6">{{ __('Banner three Url') }}
                            </x-metronic.label>

                            <x-metronic.input id="banner_three_url" type="banner_three_url" name="banner_three_url"
                                :value="old('banner_three_url')" placeholder="Enter the Url"></x-metronic.input>
                        </div>
                    </div>
                </div>

                {{-- Row Two --}}
                <div class="card bg-light mb-3">
                    <div class="row p-4">
                        <div class="col-lg-4 mb-4">
                            <x-metronic.label for="row_two_badge"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Two Badge') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_two_badge" type="text" name="row_two_badge"
                                placeholder="Enter the Badge" :value="old('row_two_badge')"></x-metronic.input>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <x-metronic.label for="row_two_button_name"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Two Button Name') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_two_button_name" type="text" name="row_two_button_name"
                                placeholder="Enter the Button Name" :value="old('row_two_button_name')"></x-metronic.input>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <x-metronic.label for="row_two_button_url"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Two Button Link') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_two_button_url" type="url" name="row_two_button_url"
                                placeholder="Enter the Button Link" :value="old('row_two_button_url')"></x-metronic.input>
                        </div>
                        <div class="col-lg-8 mb-4">
                            <x-metronic.label for="row_two_title"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Two Title') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_two_title" type="text" name="row_two_title"
                                placeholder="Enter the Title" :value="old('row_two_title')"></x-metronic.input>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <x-metronic.label for="row_two_image"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Two Image') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_two_image" type="file" name="row_two_image"
                                :value="old('row_two_image')"></x-metronic.input>
                        </div>

                        <div class="col-lg-12 mb-4">
                            <x-metronic.label for="row_two_description"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Two Description') }}
                            </x-metronic.label>

                            <x-metronic.textarea id="row_two_description" type="text" name="row_two_description"
                                placeholder="Enter the Short Description" :value="old('row_two_description')"></x-metronic.textarea>
                        </div>

                    </div>
                </div>

                {{-- Row Three  --}}
                <div class="card bg-light mb-3">
                    <div class="row px-4">
                        <div class="col-lg-4 mb-4">
                            <x-metronic.label for="row_three_background_image"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Three Background Image') }}
                            </x-metronic.label>
                            <x-metronic.file-input id="row_three_background_image" name="row_three_background_image"
                                :value="old('row_three_background_image')"></x-metronic.file-input>

                        </div>
                        <div class="col-lg-8 mb-4">
                            <x-metronic.label for="row_three_title"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Three Title') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_three_title" type="text" name="row_three_title"
                                placeholder="Enter the Title" :value="old('row_three_title')"></x-metronic.input>
                        </div>

                        <div class="col-lg-12 mb-4">
                            <x-metronic.label for="row_three_description"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Three Description') }}
                            </x-metronic.label>

                            <x-metronic.textarea id="row_three_description" type="text"
                                name="row_three_description" placeholder="Enter Row Three Description"
                                :value="old('row_three_description')"></x-metronic.textarea>
                        </div>
                    </div>
                    <div class="row px-4">
                        <div class="col-lg-6 mb-4">
                            <x-metronic.label for="row_three_column_one_title"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Three Column One Title') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_three_column_one_title" type="text"
                                name="row_three_column_one_title" placeholder="Enter the Row Three Column One Title"
                                :value="old('row_three_column_one_title')"></x-metronic.input>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <x-metronic.label for="row_three_column_one_button_name"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Three Column One Button Name') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_three_column_one_button_name" type="text"
                                name="row_three_column_one_button_name" placeholder="Enter the Button Name"
                                :value="old('row_three_column_one_button_name')"></x-metronic.input>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <x-metronic.label for="row_three_column_one_button_url"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Three Column One Button Link') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_three_column_one_button_url" type="url"
                                name="row_three_column_one_button_url" placeholder="Enter the Button Link"
                                :value="old('row_three_column_one_button_url')"></x-metronic.input>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <x-metronic.label for="row_three_column_one_url"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Three Column One Link') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_three_column_one_url" type="url"
                                name="row_three_column_one_url" placeholder="Enter the Button Link"
                                :value="old('row_three_column_one_url')"></x-metronic.input>
                        </div>
                        <div class="col-lg-9 mb-4">
                            <x-metronic.label for="row_three_column_one_description"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Three Column One Description') }}
                            </x-metronic.label>

                            <x-metronic.textarea id="row_three_column_one_description" type="text"
                                name="row_three_column_one_description" placeholder="Enter the Short Description"
                                :value="old('row_three_column_one_description')"></x-metronic.textarea>
                        </div>
                    </div>
                    <div class="row px-4">
                        <div class="col-lg-6 mb-4">
                            <x-metronic.label for="row_three_column_two_title"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Three Column Two Title') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_three_column_two_title" type="text"
                                name="row_three_column_two_title" placeholder="Enter the Row Three Column Two Title"
                                :value="old('row_three_column_two_title')"></x-metronic.input>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <x-metronic.label for="row_three_column_two_button_name"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Three Column Two Button Name') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_three_column_two_button_name" type="text"
                                name="row_three_column_two_button_name" placeholder="Enter the Button Name"
                                :value="old('row_three_column_two_button_name')"></x-metronic.input>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <x-metronic.label for="row_three_column_two_button_url"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Three Column Two Button Link') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_three_column_two_button_url" type="url"
                                name="row_three_column_two_button_url" placeholder="Enter the Button Link"
                                :value="old('row_three_column_two_button_url')"></x-metronic.input>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <x-metronic.label for="row_three_column_two_url"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Three Column Two Link') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_three_column_two_url" type="url"
                                name="row_three_column_two_url" placeholder="Enter the Button Link"
                                :value="old('row_three_column_two_url')"></x-metronic.input>
                        </div>
                        <div class="col-lg-9 mb-4">
                            <x-metronic.label for="row_three_column_two_description"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Three Column Two Description') }}
                            </x-metronic.label>

                            <x-metronic.textarea id="row_three_column_two_description" type="text"
                                name="row_three_column_two_description" placeholder="Enter the Short Description"
                                :value="old('row_three_column_two_description')"></x-metronic.textarea>
                        </div>
                    </div>
                    <div class="row px-4">
                        <div class="col-lg-6 mb-4">
                            <x-metronic.label for="row_three_column_three_title"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Three Column Three Title') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_three_column_three_title" type="text"
                                name="row_three_column_three_title"
                                placeholder="Enter the Row Three Column Three Title"
                                :value="old('row_three_column_three_title')"></x-metronic.input>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <x-metronic.label for="row_three_column_three_button_name"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Three Column Three Button Name') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_three_column_three_button_name" type="text"
                                name="row_three_column_three_button_name" placeholder="Enter the Button Name"
                                :value="old('row_three_column_three_button_name')"></x-metronic.input>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <x-metronic.label for="row_three_column_three_button_url"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Three Column Three Button Link') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_three_column_three_button_url" type="url"
                                name="row_three_column_three_button_url" placeholder="Enter the Button Link"
                                :value="old('row_three_column_three_button_url')"></x-metronic.input>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <x-metronic.label for="row_three_column_three_url"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Three Column Three Link') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_three_column_three_url" type="url"
                                name="row_three_column_three_url" placeholder="Enter the Button Link"
                                :value="old('row_three_column_three_url')"></x-metronic.input>
                        </div>
                        <div class="col-lg-9 mb-4">
                            <x-metronic.label for="row_three_column_three_description"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Three Column Three Description') }}
                            </x-metronic.label>

                            <x-metronic.textarea id="row_three_column_three_description" type="text"
                                name="row_three_column_three_description" placeholder="Enter the Description"
                                :value="old('row_three_column_three_description')"></x-metronic.textarea>
                        </div>
                    </div>
                    <div class="row px-4">
                        <div class="col-lg-6 mb-4">
                            <x-metronic.label for="row_three_column_four_title"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Three Column Four Title') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_three_column_four_title" type="text"
                                name="row_three_column_four_title" placeholder="Enter the Row Three Column Four Title"
                                :value="old('row_three_column_four_title')"></x-metronic.input>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <x-metronic.label for="row_three_column_four_button_name"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Three Column Four Button Name') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_three_column_four_button_name" type="text"
                                name="row_three_column_four_button_name" placeholder="Enter the Button Name"
                                :value="old('row_three_column_four_button_name')"></x-metronic.input>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <x-metronic.label for="row_three_column_four_button_url"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Three Column Four Button Link') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_three_column_four_button_url" type="url"
                                name="row_three_column_four_button_url" placeholder="Enter the Button Link"
                                :value="old('row_three_column_four_button_url')"></x-metronic.input>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <x-metronic.label for="row_three_column_four_url"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Three Column Four Link') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_three_column_four_url" type="url"
                                name="row_three_column_four_url" placeholder="Enter the Button Link"
                                :value="old('row_three_column_four_url')"></x-metronic.input>
                        </div>
                        <div class="col-lg-9 mb-4">
                            <x-metronic.label for="row_three_column_four_description"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Three Column Four Description') }}
                            </x-metronic.label>

                            <x-metronic.textarea id="row_three_column_four_description" type="text"
                                name="row_three_column_four_description" placeholder="Enter the Short Description"
                                :value="old('row_three_column_four_description')"></x-metronic.textarea>
                        </div>
                    </div>
                </div>

                {{-- Row Four  --}}

                <div class="card bg-light mb-3">
                    <div class="row px-4">
                        <div class="col-lg-6 mb-4">
                            <x-metronic.label for="row_four_title"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Four Title') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_four_title" type="text" name="row_four_title"
                                placeholder="Enter the Title" :value="old('row_four_title')"></x-metronic.input>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <x-metronic.label for="row_two_button_name"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Two Button Name') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_two_button_name" type="text" name="row_two_button_name"
                                placeholder="Enter the Button Name" :value="old('row_two_button_name')"></x-metronic.input>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <x-metronic.label for="row_two_button_url"
                                class="col-form-label fw-bold fs-6 ">{{ __('Row Two Button Link') }}
                            </x-metronic.label>

                            <x-metronic.input id="row_two_button_url" type="url" name="row_two_button_url"
                                placeholder="Enter the Button Link" :value="old('row_two_button_url')"></x-metronic.input>
                        </div>

                    </div>
                </div>


                <div class="col-12 mb-3 mt-4">
                    <button type="submit" class="btn btn-primary rounded-0 px-5 btn-sm float-end">Submit</button>
                </div>

            </form>

        </div>

    </div>

    @push('scripts')
        <script></script>
    @endpush
</x-admin-app-layout>
