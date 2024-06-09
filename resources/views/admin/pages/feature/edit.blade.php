<x-admin-app-layout :title="'Feature Edit'">
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
            <form method="post" action="{{ route('admin.feature.update', $feature->id) }}" enctype="multipart/form-data"
                id="myform">
                @csrf
                @method('PUT')
                <div class="container">
                    <div class="row g-2 p-1">
                        <div class="col-lg-6 col-sm-12">
                            <span class="m-0 p-0" style="border-bottom: 1px solid #247297;">Banner Section</span>
                            <div class="px-2 py-2 rounded bg-light">
                                {{--  --}}
                                <div class="row pb-7">
                                    <div class="col-lg-4 col-sm-12">
                                        <span>Badge</span>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" id="badge" name="badge"
                                            value="{{ $feature->badge }}" class="form-control form-control-sm"
                                            maxlength="255" placeholder="Badge" />
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row pb-7">
                                    <div class="col-lg-4 col-sm-12">
                                        <span>Title</span>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <input type="text" name="title" value="{{ $feature->title }}"
                                            class="form-control form-control-sm" maxlength="255"
                                            placeholder="Feature Title" />
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row pb-7">
                                    <div class="col-lg-4 col-sm-12">
                                        <span>Logo</span>
                                    </div>
                                    <div class="col-lg-6 col-sm-12">
                                        <input type="file" name="logo"value="{{ $feature->logo }}"
                                            class="form-control form-control-sm" id="image" accept="image/*" />
                                    </div>
                                    <div class="col-lg-2 col-sm-12 text-end">
                                        <img class="rounded-circle" id="showImage" height="25px" width="25px"
                                            src="{{ asset('storage/thumb/' . $feature->logo) }}" alt="">
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row pb-7">
                                    <div class="col-lg-4 col-sm-12">
                                        <span>Image</span>
                                    </div>
                                    <div class="col-lg-6 col-sm-12">
                                        <input type="file" name="image" value="{{ $feature->image }}"
                                            class="form-control form-control-sm" id="image1" accept="image/*" />
                                    </div>
                                    <div class="col-lg-2 col-sm-12 text-end">
                                        <img class="rounded-circle" id="showImage1" height="25px" width="25px"
                                            src="{{ asset('storage/thumb/' . $feature->image) }}" alt="">
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row pb-7">
                                    <div class="col-lg-4 col-sm-12">
                                        <span>Short Description For Homepage</span>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <textarea name="header" class="form-control form-control-sm" rows="3" style=" font-size: 12px; font-weight: 500;"
                                            placeholder="Short Description For Homepage">{{ $feature->header }}</textarea>
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row pb-7">
                                    <div class="col-lg-4 col-sm-12">
                                        <span>Row With List</span>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <select name="row_one_id" data-placeholder="Select Row One.."
                                            class="form-select" style="width: 100%;">
                                            @foreach ($rows as $row)
                                                <option class="form-control" value="{{ $row->id }}"
                                                    {{ $row->id == $feature->row_one_id ? 'selected' : '' }}>
                                                    {{ $row->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                {{--  --}}
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <span class="m-0 p-0" style="border-bottom: 1px solid #247297;">Contact Row</span>
                            <div class="px-2 py-2 rounded bg-light">
                                {{--  --}}
                                <div class="row pb-7">
                                    <div class="col-lg-4 col-sm-12">
                                        <span>Title</span>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text"name="row_four_title"
                                            value="{{ $feature->row_four_title }}"
                                            class="form-control form-control-sm" maxlength="255"
                                            placeholder="Contact Title" />
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row pb-7">
                                    <div class="col-lg-4 col-sm-12">
                                        <span>Short Description</span>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <textarea name="row_four_header" id="" class="form-control" cols="30" rows="1"
                                            placeholder="Short Description for Contact">{!! $feature->row_four_header !!}</textarea>
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row pb-7">
                                    <div class="col-lg-4 col-sm-12">
                                        <span>Row With Left Image</span>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <select name="row_two_id" data-placeholder="Select Row Two.."
                                            class="form-select" style="width: 100%;">
                                            @foreach ($rows as $row)
                                                <option class="form-control" value="{{ $row->id }}"
                                                    {{ $row->id == $feature->row_two_id ? 'selected' : '' }}>
                                                    {{ $row->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row pb-7">
                                    <div class="col-lg-4 col-sm-12">
                                        <span>Row Three Title</span>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <input type="text" name="row_three_title"
                                            value="{{ $feature->row_three_title }}"
                                            class="form-control form-control-sm" maxlength="255"
                                            placeholder="Row Three Title" />
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row pb-7">
                                    <div class="col-lg-4 col-sm-12">
                                        <span>Short Description</span>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <textarea name="row_three_header" id="" class="form-control" cols="30" rows="1"
                                            placeholder="Row Three Short Description">{{ $feature->row_three_header }}</textarea>
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row pb-7">
                                    <div class="col-lg-4 col-sm-12">
                                        <span>Feature Row Title</span>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <input type="text" name="row_five_title"
                                            value="{{ $feature->row_five_title }}"
                                            class="form-control form-control-sm maxlength" maxlength="255"
                                            placeholder="Related Feature Row Title" />
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row pb-7">
                                    <div class="col-lg-4 col-sm-12">
                                        <span>Short Description</span>
                                    </div>
                                    <div class="col-lg-8 col-sm-12">
                                        <textarea name="row_five_header" id="" class="form-control" cols="30" rows="1"
                                            placeholder="Related Feature Row Short Description">{{ $feature->row_five_header }}</textarea>
                                    </div>
                                </div>
                                {{--  --}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="row pb-7">
                                <div class="col-lg-12 col-sm-12">
                                    <span>Footer</span>
                                    <textarea class="form-control" name="footer" id="footer" style=" font-size: 12px; font-weight: 500;">{{ $feature->footer }}</textarea>
                                </div>
                            </div>
                            {{--  --}}
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
