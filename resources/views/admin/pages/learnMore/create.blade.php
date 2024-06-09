<x-admin-app-layout :title="'Learn More Create'">
    <div class="card card-flash">
        <div class="card-header">
            <div class="card-title">
            </div>

            <div class="card-toolbar">
                <a href="{{ route('admin.learnmore.index') }}" class="btn btn-light-primary rounded-2">
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
        <form id="myform" method="post" action="{{ route('admin.learnmore.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <!--Banner Section-->
                <div class="row g-2 p-1">
                    <div class="col-lg-6">
                        <span class="mt-1 fw-bold text-info">Description</span>
                        <div class="px-2 py-2 rounded bg-light">
                            {{--  --}}
                            <div class="row align-items-center pb-7">
                                <label
                                    class="text-black label_style pe-3 col-lg-12">Badge</label>
                                <div class="input-group">
                                    <input name="badge" maxlength="255" type="text"
                                        class="form-control form-control-sm col-lg-12" placeholder="Enter Learn More Badge"
                                        required>
                                </div>
                            </div>
                            {{--  --}}
                            <div class="row align-items-center pb-7">
                                <label
                                    class="text-black label_style pe-3 col-lg-12">Title</label>
                                <div class="input-group">
                                    <input name="title" maxlength="255" type="text"
                                        class="form-control form-control-sm col-lg-12" placeholder="Enter Learn More Title"
                                        required>
                                </div>
                            </div>
                            {{--  --}}
                            <div class="row align-items-center pb-7">
                                <label
                                    class="text-black label_style pe-3 col-lg-12">Banner
                                    Image</label>
                                <div class="row">
                                    <div class="" style="width: 70%">
                                        <input name="image_banner" id="image" accept="image/*" type="file"
                                            class="form-control form-control-sm col-lg-12" placeholder="Enter Banner Image">
                                    </div>
                                    <div class=" ms-2" style="width: 10%">
                                        <img class="img-fluid rounded-circle" id="showImage"
                                            src="https://cdn.pixabay.com/photo/2017/02/07/02/16/cloud-2044823_960_720.png"
                                            alt=""
                                            style="width: 30px;
                                                height: 30px;
                                                 margin-left: 2.5rem;">
                                    </div>
                                </div>
                            </div>
                            {{--  --}}
                            <div class="row align-items-center pb-7">
                                <label
                                    class="text-black label_style pe-3 col-lg-12">Background
                                    Image</label>
                                <div class="row">
                                    <div class="" style="width: 70%">
                                        <input name="background_image" id="image" accept="image/*"
                                            type="file" class="form-control form-control-sm col-lg-12"
                                            placeholder="Enter Background Image">
                                    </div>
                                    <div class=" ms-2" style="width: 10%">
                                        <img class="img-fluid rounded-circle" id="showImage"
                                            src="https://cdn.pixabay.com/photo/2017/02/07/02/16/cloud-2044823_960_720.png"
                                            alt=""
                                            style="width: 30px;
                                                height: 30px;
                                                 margin-left: 2.5rem;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span class="mt-1 fw-bold text-info">Header</span>
                        <div class="px-2 py-2 rounded bg-light">
                            <div class="row align-items-center pb-7">
                                <label
                                    class="text-black label_style pe-3 col-lg-12">Header
                                    One</label>
                                <div class="input-group">
                                    <input name="header_one" maxlength="255" type="text"
                                        class="form-control form-control-sm col-lg-12" placeholder="Enter Header One"
                                        required>
                                </div>
                            </div>
                            {{--  --}}
                            <div class="row align-items-center pb-7">
                                <label
                                    class="text-black label_style pe-3 col-lg-12">Header
                                    Two</label>
                                <div class="input-group">
                                    <input name="header_two" maxlength="255" type="text"
                                        class="form-control form-control-sm col-lg-12" placeholder="Enter Header Two"
                                        required>
                                </div>
                            </div>
                        </div>
                        <span class="mt-1 fw-bold text-info">Extra Area</span>
                        <div class="px-2 py-2 rounded bg-light">
                            {{--  --}}
                            <div class="row align-items-center pb-7">
                                <label
                                    class="text-black label_style pe-3 col-lg-12">Footer</label>
                                <div class="input-group">
                                    <input name="footer" type="text" class="form-control form-control-sm col-lg-12"
                                        placeholder="Enter Footer" required>
                                </div>
                            </div>
                            {{--  --}}
                            <div class="row align-items-center pb-7">
                                <label
                                    class="text-black label_style pe-3 col-lg-12">Consult
                                    Title </label>
                                <div class="input-group">
                                    <input name="consult_title" type="text"
                                        class="form-control form-control-sm col-lg-12" placeholder="Enter Consult Title"
                                        required>
                                </div>
                            </div>
                            {{--  --}}
                            <div class="row align-items-center pb-7">
                                <label
                                    class="text-black label_style pe-3 col-lg-12">Consult
                                    Short Description</label>
                                <div class="input-group">
                                    <textarea name="consult_short_des" type="text" rows="1" class="form-control form-control-sm col-lg-12"
                                        placeholder="Enter Consult Short Description"required></textarea>
                                </div>
                            </div>
                            {{--  --}}
                            <div class="row align-items-center pb-7">
                                <label
                                    class="text-black label_style pe-3 col-lg-12">Industry
                                    Header</label>
                                <div class="input-group">
                                    <textarea name="industry_header" type="text" rows="2" class="form-control "
                                        placeholder="Enter Industry Header"required></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <span class="mt-1 fw-bold text-info">Box Area</span>
                        <div class="px-2 py-2 rounded bg-light mt-2">
                            <div class="row align-items-center pb-7">
                                <label
                                    class="text-black label_style pe-3 col-lg-12">Box
                                    One Title </label>
                                <div class="input-group">
                                    <input name="box_one_title" maxlength="255" type="text"
                                        class="form-control form-control-sm col-lg-12" placeholder="Enter Box One Title"
                                        required>
                                </div>
                            </div>
                            {{--  --}}
                            <div class="row align-items-center pb-7">
                                <label
                                    class="text-black label_style pe-3 col-lg-12">Box
                                    One Short Description</label>
                                <div class="input-group">
                                    <input name="box_one_short_des" type="text"
                                        class="form-control form-control-sm col-lg-12"
                                        placeholder="Enter Box One Short Description" required>
                                </div>
                            </div>
                            {{--  --}}
                            <div class="row align-items-center pb-7">
                                <label
                                    class="text-black label_style pe-3 col-lg-12">Box
                                    One link</label>
                                <div class="input-group">
                                    <input name="box_one_link" type="url"
                                        class="form-control form-control-sm col-lg-12" placeholder="Enter Box One link"
                                        required>
                                </div>
                            </div>
                            {{--  --}}
                            <div class="row align-items-center pb-7">
                                <label
                                    class="text-black label_style pe-3 col-lg-12">Box
                                    Two Title</label>
                                <div class="input-group">
                                    <input name="box_two_title" type="text"
                                        class="form-control form-control-sm col-lg-12" placeholder="Enter Box Two Title"
                                        required>
                                </div>
                            </div>
                            {{--  --}}
                            <div class="row align-items-center pb-7">
                                <label
                                    class="text-black label_style pe-3 col-lg-12">Box
                                    Two Short Description</label>
                                <div class="input-group">
                                    <textarea name="box_two_short_des" type="text" rows="3" class="form-control form-control-sm col-lg-12"
                                        placeholder="Enter Box Two Short Description" required></textarea>
                                </div>
                            </div>
                            {{--  --}}
                            <div class="row align-items-center pb-7">
                                <label
                                    class="text-black label_style pe-3 col-lg-12">Box
                                    Two link</label>
                                <div class="input-group">
                                    <input name="box_two_link" type="url"
                                        class="form-control form-control-sm col-lg-12" placeholder="Enter Box Two link"
                                        required>
                                </div>
                            </div>
                            {{--  --}}

                            <div class="row align-items-center pb-7">
                                <label
                                    class="text-black label_style pe-3 col-lg-12">Box
                                    Three Title</label>
                                <div class="input-group">
                                    <input name="box_three_title" type="text"
                                        class="form-control form-control-sm col-lg-12" placeholder="Enter Box Two link"
                                        required>
                                </div>
                            </div>
                            {{--  --}}
                            <div class="row align-items-center pb-7">
                                <label
                                    class="text-black label_style pe-3 col-lg-12">Box
                                    Three Short Description</label>
                                <div class="input-group">
                                    <textarea name="box_three_short_des" type="text" rows="3" class="form-control form-control-sm col-lg-12"
                                        placeholder="Enter Box Two link" required></textarea>
                                </div>
                            </div>
                            {{--  --}}
                            <div class="row align-items-center pb-7">
                                <label
                                    class="text-black label_style pe-3 col-lg-12">Box
                                    Three link</label>
                                <div class="input-group">
                                    <textarea name="box_three_link" type="text" rows="3" class="form-control form-control-sm col-lg-12"
                                        placeholder="Enter Box Three link" required></textarea>
                                </div>
                            </div>
                        </div>
                        {{--  --}}
                    </div>
                    <div class="col-lg-12">
                        <span class="mt-1 fw-bold text-info">Client Area</span>
                        <div class="px-2 py-2 rounded bg-light">
                            <div class="row align-items-center pb-7">
                                <label
                                    class="text-black label_style pe-3 col-lg-12">Success
                                    Story Title</label>
                                <div class="input-group">
                                    <textarea name="success_story_title" type="text" rows="3" class="form-control form-control-sm col-lg-12"
                                        placeholder="Enter Success Story Title" required></textarea>
                                </div>
                            </div>
                            {{--  --}}
                            <div class="row align-items-center pb-7">
                                <label
                                    class="text-black label_style pe-3 col-lg-12">Client
                                    Story One</label>
                                <div class="input-group">
                                    <select name="success_story_one_id" class="form-select" data-control="select2" data-placeholder="Select an option""
                                        id="select6">
                                        <option></option>
                                        @foreach ($storys as $item)
                                            <option value="{{ $item->id }}">{{ $item->badge }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            {{--  --}}
                            <div class="row align-items-center pb-7">
                                <label
                                    class="text-black label_style pe-3 col-lg-12">Client
                                    Story Two</label>
                                <div class="input-group">
                                    <select name="success_story_two_id"
                                        class="form-select" data-control="select2" data-placeholder="Select an option" id="select7">
                                        <option></option>
                                        @foreach ($storys as $item)
                                            <option value="{{ $item->id }}">{{ $item->badge }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            {{--  --}}
                            <div class="row align-items-center pb-7">
                                <label
                                    class="text-black label_style pe-3 col-lg-12">Client
                                    Story Three</label>
                                <div class="input-group">
                                    <select name="success_story_three_id"
                                        class="form-select" data-control="select2" data-placeholder="Select an option" id="select8">
                                        <option></option>
                                        @foreach ($storys as $item)
                                            <option value="{{ $item->id }}">{{ $item->badge }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer border-0 p-2">
                    <button type="submit" class="btn btn-primary p-2 rounded-2 from-prevent-multiple-submits"
                        style="padding: 4px 9px;">Submit</button>
                </div>
        </form>
    </div>

    @push('scripts')
        <script></script>
    @endpush
</x-admin-app-layout>
