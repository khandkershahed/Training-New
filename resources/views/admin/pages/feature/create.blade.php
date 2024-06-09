<x-admin-app-layout :title="'Feature Create'">
    <div class="card card-flash">
        <div class="card-header">
            <div class="card-title">
            </div>

            <div class="card-toolbar">
                <a href="{{ route('admin.feature.index') }}" class="btn btn-light-primary rounded-2">
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
            <form id="myform" method="post" action="{{ route('admin.feature.store') }}"
                enctype="multipart/form-data">
                @csrf
                <div class="container">
                    <div class="row p-1">
                        <div class="col-lg-8 col-sm-12 bg-light rounded-2">
                            <span class="mt-1 fw-bold text-info">Banner Section</span>
                            <div class="row">
                                <div class="col-lg-6 pb-7">
                                    <div class="row pb-7">
                                        <div class="col-lg-12 col-sm-12">
                                            <span>Badge</span>
                                        </div>
                                        <div class="col-lg-12">
                                            <input type="text" id="badge" name="badge" value="{{old('badge')}}"
                                                class="form-control form-control-sm" maxlength="255" placeholder="Badge"
                                                 />
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row pb-7">
                                        <div class="col-lg-12 col-sm-12">
                                            <span>Title</span>
                                        </div>
                                        <div class="col-lg-12 col-sm-12">
                                            <input type="text" name="title" value="{{old('title')}}" class="form-control form-control-sm"
                                                maxlength="255" placeholder="Feature Title"  />
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row pb-7">
                                        <div class="col-lg-12 col-sm-12">
                                            <span>Logo</span>
                                        </div>
                                        <div class="col-lg-10 col-sm-12">
                                            <input type="file" name="logo" value="{{old('logo')}}" class="form-control form-control-sm"
                                                id="image" accept="image/*" />
                                        </div>
                                        <div class="col-lg-2 col-sm-12 text-end">
                                            <img id="showImage" height="25px" width="25px"
                                                src="https://cdn.pixabay.com/photo/2017/02/07/02/16/cloud-2044823_960_720.png"
                                                alt="">
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row pb-7">
                                        <div class="col-lg-12 col-sm-12">
                                            <span>Banner Image</span>
                                        </div>
                                        <div class="col-lg-10 col-sm-12">
                                            <input type="file" name="image" value="{{old('image')}}" class="form-control form-control-sm"
                                                id="image1" accept="image/*" />
                                        </div>
                                        <div class="col-lg-2 col-sm-12 text-end">
                                            <img id="showImage1" height="25px" width="25px"
                                                src="https://cdn.pixabay.com/photo/2017/02/07/02/16/cloud-2044823_960_720.png"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 pb-7">
                                    <div class="row pb-7">
                                        <div class="col-lg-12 col-sm-12">
                                            <span>Short Description</span>
                                        </div>
                                        <div class="col-lg-12 col-sm-12">
                                            <textarea name="header" value="{{old('header')}}" class="form-control form-control-sm" rows="3" style=" font-size: 12px; font-weight: 500;"
                                                placeholder="Short Description For Homepage"></textarea>
                                        </div>
                                    </div>
                                    <div class="row pb-7">
                                        <div class="col-lg-12 col-sm-12">
                                            <span>Banner Button name</span>
                                        </div>
                                        <div class="col-lg-12">
                                            <input type="text" name="banner_btn_name" value="{{old('banner_btn_name')}}"
                                                class="form-control form-control-sm" maxlength="255"
                                                placeholder="Button name"  />
                                        </div>
                                    </div>
                                    <div class="row pb-7">
                                        <div class="col-lg-12 col-sm-12">
                                            <span>Banner Button link</span>
                                        </div>
                                        <div class="col-lg-12">
                                            <input type="text" name="banner_btn_link" value="{{old('banner_btn_link')}}"
                                                class="form-control form-control-sm" maxlength="255"
                                                placeholder="Button link"  />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <span class="mt-1 fw-bold text-info">Description</span>
                            <div class="px-2 py-2 rounded bg-light ">

                                <div class="row pb-7 justify-content-center">
                                    <div class="col-lg-4 col-sm-12">
                                        <span title="Row With List">Row with List</span>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <select name="row_one_id" data-placeholder="Select Row One.."
                                            class="form-select" data-control="select2" data-placeholder="Select an option" style="width: 100%;">
                                            @foreach ($rows as $row)
                                                <option class="form-control" value="{{ $row->id }}">
                                                    {{ $row->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3 justify-content-center">
                                    <div class="col-lg-4 col-sm-12">
                                        <span title="Row With Left Image">Left Image</span>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <select name="row_two_id" data-placeholder="Select Row Two.."
                                            class="form-select" data-control="select2" data-placeholder="Select an option" style="width: 100%;">
                                            @foreach ($rows as $row)
                                                <option class="form-control" value="{{ $row->id }}">
                                                    {{ $row->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 mt-2">
                            <span class="mt-1 fw-bold text-info">Background Image Row</span>
                            <div class="px-2 py-2 rounded bg-light">
                                {{--  --}}
                                <div class="row pb-7">
                                    <div class="col-lg-4 col-sm-12">
                                        <span>Title</span>
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="text" name="row_four_title" value="{{old('row_four_title')}}"
                                            class="form-control form-control-sm" maxlength="255"
                                            placeholder="Feature Title"  />
                                    </div>
                                </div>

                                {{--  --}}

                                <div class="row pb-7">
                                    <div class="col-lg-12 col-sm-12">
                                        <span>Background Image(Row Three) </span>
                                    </div>
                                    <div class="col-lg-11 col-sm-12">
                                        <input type="file" name="row_four_image" value="{{old('row_four_image')}}"
                                            class="form-control form-control-sm" id="image" accept="image/*" />
                                    </div>
                                    <div class="col-lg-1 col-sm-12 text-end">
                                        <img id="showImage" height="25px" width="25px"
                                            src="https://cdn.pixabay.com/photo/2017/02/07/02/16/cloud-2044823_960_720.png"
                                            alt="">
                                    </div>
                                </div>
                                <div class="row pb-7">
                                    <div class="col-lg-4 col-sm-12">
                                        <span>Short Description</span>
                                    </div>
                                    <div class="col-lg-12 col-sm-12">
                                        <textarea name="row_four_header" value="{{old('row_four_header')}}" id="" class="form-control" cols="30" rows="8"
                                            placeholder="Short Description for Contact"></textarea>
                                    </div>
                                </div>

                                {{--  --}}


                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 mt-2">
                            <span class="mt-1 fw-bold text-info">Background Color Row</span>
                            <div class="px-2 py-2 rounded bg-light">
                                <div class="row pb-7">
                                    <div class="col-lg-12 col-sm-12">
                                        <span>Row Five Title</span>
                                    </div>
                                    <div class="col-lg-12 col-sm-12">
                                        <input type="text" name="row_three_title" value="{{old('row_three_title')}}"
                                            class="form-control form-control-sm" maxlength="255"
                                            placeholder="Row Three Title" />
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row pb-7">
                                    <div class="col-lg-12 col-sm-12">
                                        <span>Row Five Short Description</span>
                                    </div>
                                    <div class="col-lg-12 col-sm-12">
                                        <textarea name="row_three_header" value="{{old('row_three_header')}}" id="" class="form-control" cols="30" rows="1"
                                            placeholder="Row Three Short Description"></textarea>
                                    </div>
                                </div>


                            </div>
                            <span class="mt-1 fw-bold text-info">More Feature Row</span>
                            <div class="px-2 py-2 rounded bg-light">
                                <div class="row pb-7">
                                    <div class="col-lg-12 col-sm-12">
                                        <span>Row Seven Title</span>
                                    </div>
                                    <div class="col-lg-12 col-sm-12">
                                        <input type="text" name="row_five_title" value="{{old('row_five_title')}}"
                                            class="form-control form-control-sm maxlength" maxlength="255"
                                            placeholder="Related Feature Row Title" />
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row pb-7">
                                    <div class="col-lg-12 col-sm-12">
                                        <span>Row Seven Short Description</span>
                                    </div>
                                    <div class="col-lg-12 col-sm-12">
                                        <textarea name="row_five_header" value="{{old('row_five_header')}}" id="" class="form-control" cols="30" rows="1"
                                            placeholder="Related Feature Row Short Description"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--  --}}
                    <div class="row">
                        <div class="col">
                            <div class="row py-7">
                                <div class="col-lg-12 col-sm-12">
                                    <span>Footer</span>
                                    <textarea class="form-control" name="footer" value="{{old('footer')}}" id="footer" style=" font-size: 12px; font-weight: 500;"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8"></div>
                    <div class="col-sm-4 text-secondary">
                        <button type="submit" class="btn btn-primary" id="submitbtn">Submit<i
                                class="ph-paper-plane-tilt ms-2"></i></button>
                    </div>
                </div>


            </form>
        </div>

    </div>

    @push('scripts')
        <script></script>
    @endpush
</x-admin-app-layout>
