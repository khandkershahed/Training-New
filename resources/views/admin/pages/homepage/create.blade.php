<x-admin-app-layout :title="'HomePage Create'">
    <div class="card card-flash">
        <div class="card-header">
            <div class="card-title">
            </div>

            <div class="card-toolbar">
                <a href="{{ route('admin.feature.create') }}" class="btn btn-light-primary rounded-2">
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
                    </span> Feature Create
                </a>
                <a href="{{ route('admin.news-trend.create') }}" class="ms-2 btn btn-light-primary rounded-2">
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
                    </span> News-Trend Create
                </a>
                <a href="{{ route('admin.success.create') }}" class="ms-2 btn btn-light-primary rounded-2">
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
                    </span> Success Create
                </a>
            </div>
        </div>
        <form action="{{ route('admin.homepage.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body p-0">
                <!--Banner Section-->
                <div class="container-fluid">
                    <div class="row g-2 p-1">
                        <div class="col">
                            <span class="mt-1 fw-bold text-info">Banner One Section</span>
                            <div class="px-2 py-2 rounded bg-light">
                                {{--  --}}
                                <div class="d-flex align-items-center pt-8">
                                    <label
                                        class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">Banner
                                        Image One</label>
                                    <div class="d-flex">
                                        <div class="" style="width: 70%">
                                            <input name="branner1" value="{{old('branner1')}}" id="image" accept="image/*" type="file"
                                                class="form-control form-control-sm"
                                                placeholder="Enter Banner Image One">
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
                                <div class="d-flex align-items-center pt-8">
                                    <label
                                        class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">Banner
                                        Title One</label>
                                    <div class="input-group">
                                        <input name="banner1_title" value="{{old('banner1_title')}}" maxlength="255" type="text"
                                            class="form-control form-control-sm" placeholder="Enter Banner Title One"
                                            >
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="d-flex align-items-center pt-8">
                                    <label
                                        class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">One
                                        ShortDescription</label>
                                    <div class="input-group">
                                        <input name="banner1_short_description" value="{{old('banner1_short_description')}}" type="text"
                                            class="form-control form-control-sm"
                                            placeholder="Enter Banner One ShortDescription" >
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="d-flex align-items-center pt-8">
                                    <label
                                        class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">Banner
                                        One Button Name</label>
                                    <div class="input-group">
                                        <input name="banner1_button_name" value="{{old('banner1_button_name')}}" type="text" maxlength="255"
                                            class="form-control form-control-sm"
                                            placeholder="Enter Banner One Button Name" >
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="d-flex align-items-center pt-8">
                                    <label
                                        class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">Banner
                                        One Button Link</label>
                                    <div class="input-group">
                                        <input name="banner1_button_link" value="{{old('banner1_button_link')}}" maxlength="255" type="url"
                                            class="form-control form-control-sm"
                                            placeholder="Enter Banner One Button Name" >
                                    </div>
                                </div>
                                {{--  --}}
                            </div>

                            <span class="mt-1 fw-bold text-info">Banner Two Section</span>
                            <div class="px-2 py-2 rounded bg-light">
                                {{--  --}}
                                <div class="d-flex align-items-center pt-8">
                                    <label
                                        class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">Banner
                                        Image Two</label>
                                    <div class="d-flex">
                                        <div class="" style="width: 70%">
                                            <input name="branner2" value="{{old('branner2')}}" id="image" accept="image/*" type="file"
                                                class="form-control form-control-sm"
                                                placeholder="Enter Banner Image Two">
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
                                <div class="d-flex align-items-center pt-8">
                                    <label
                                        class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">Banner
                                        Title Two</label>
                                    <div class="input-group">
                                        <input name="banner2_title" value="{{old('banner2_title')}}" maxlength="255" type="text"
                                            class="form-control form-control-sm" placeholder="Enter Banner Title Two"
                                            >
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="d-flex align-items-center pt-8">
                                    <label
                                        class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">Two
                                        ShortDescription</label>
                                    <div class="input-group">
                                        <input name="banner2_short_description" value="{{old('banner2_short_description')}}" type="text"
                                            class="form-control form-control-sm"
                                            placeholder="Enter Banner Two ShortDescription" >
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="d-flex align-items-center pt-8">
                                    <label
                                        class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">Banner
                                        Two Button Name</label>
                                    <div class="input-group">
                                        <input name="banner2_button_name" value="{{old('banner2_button_name')}}" type="text" maxlength="255"
                                            class="form-control form-control-sm"
                                            placeholder="Enter Banner Two Button Name" >
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="d-flex align-items-center pt-8">
                                    <label
                                        class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">Banner
                                        Two Button Link</label>
                                    <div class="input-group">
                                        <input name="banner2_button_link" value="{{old('banner2_button_link')}}" maxlength="255" type="url"
                                            class="form-control form-control-sm"
                                            placeholder="Enter Banner Two Button Name" >
                                    </div>
                                </div>
                                {{--  --}}
                            </div>

                            <span class="mt-1 fw-bold text-info">Banner Three Section</span>
                            <div class="px-2 py-2 rounded bg-light">
                                {{--  --}}
                                <div class="d-flex align-items-center pt-8">
                                    <label
                                        class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">Banner
                                        Image Three</label>
                                    <div class="d-flex">
                                        <div class="" style="width: 70%">
                                            <input name="branner3" value="{{old('branner3')}}" id="image" accept="image/*" type="file"
                                                class="form-control form-control-sm"
                                                placeholder="Enter Banner Image Three">
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
                                <div class="d-flex align-items-center pt-8">
                                    <label
                                        class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">Banner
                                        Title Three</label>
                                    <div class="input-group">
                                        <input name="banner3_title" value="{{old('banner3_title')}}" maxlength="255" type="text"
                                            class="form-control form-control-sm"
                                            placeholder="Enter Banner Title Three" >
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="d-flex align-items-center pt-8">
                                    <label
                                        class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">Three
                                        ShortDescription</label>
                                    <div class="input-group">
                                        <input name="banner3_short_description" value="{{old('banner3_short_description')}}" type="text"
                                            class="form-control form-control-sm"
                                            placeholder="Enter Banner Three ShortDescription" >
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="d-flex align-items-center pt-8">
                                    <label
                                        class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">Banner
                                        Three Button Name</label>
                                    <div class="input-group">
                                        <input name="banner3_button_name" value="{{old('banner3_button_name')}}" type="text" maxlength="255"
                                            class="form-control form-control-sm"
                                            placeholder="Enter Banner Three Button Name" >
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="d-flex align-items-center pt-8">
                                    <label
                                        class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">Banner
                                        Three Button Link</label>
                                    <div class="input-group">
                                        <input name="banner3_button_link" value="{{old('banner3_button_link')}}" maxlength="255" type="url"
                                            class="form-control form-control-sm"
                                            placeholder="Enter Banner Three Button Name" >
                                    </div>
                                </div>
                                {{--  --}}
                            </div>

                            <span class="mt-1 fw-bold text-info">Double Button One Section</span>
                            <div class="px-2 py-2 rounded bg-light mb-2">
                                <div class="d-flex align-items-center pt-8">
                                    <label
                                        class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">Button
                                        One Title </label>
                                    <div class="input-group">
                                        <input name="btn1_title" value="{{old('btn1_title')}}" maxlength="255" type="text"
                                            class="form-control form-control-sm" placeholder="Enter Button One Title"
                                            >
                                    </div>
                                </div>
                                <div class="d-flex align-items-center pt-8">
                                    <label
                                        class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">Button
                                        One Name </label>
                                    <div class="input-group">
                                        <input name="btn1_name" value="{{old('btn1_name')}}" maxlength="255" type="text"
                                            class="form-control form-control-sm" placeholder="Enter Button One Name"
                                            >
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="d-flex align-items-center pt-8">
                                    <label
                                        class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">Button
                                        One Link </label>
                                    <div class="input-group">
                                        <input name="btn1_link" value="{{old('btn1_link')}}" maxlength="255" type="url"
                                            class="form-control form-control-sm" placeholder="Enter Button One Link"
                                            >
                                    </div>
                                </div>
                                {{--  --}}
                            </div>


                        </div>
                        <div class="col">
                            <span class="mt-1 fw-bold text-info">Double Button Two Section</span>
                            <div class="px-2 py-2 rounded bg-light mb-2">
                                <div class="d-flex align-items-center pt-8">
                                    <label
                                        class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">Button
                                        Two Title </label>
                                    <div class="input-group">
                                        <input name="btn2_title" value="{{old('btn2_title')}}" maxlength="255" type="text"
                                            class="form-control form-control-sm" placeholder="Enter Button Two Title"
                                            >
                                    </div>
                                </div>
                                <div class="d-flex align-items-center pt-8">
                                    <label
                                        class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">Button
                                        Two Name </label>
                                    <div class="input-group">
                                        <input name="btn2_name" value="{{old('btn2_name')}}" maxlength="255" type="text"
                                            class="form-control form-control-sm" placeholder="Enter Button Two Name"
                                            >
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="d-flex align-items-center pt-8">
                                    <label
                                        class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">Button
                                        Two Link </label>
                                    <div class="input-group">
                                        <input name="btn2_link" value="{{old('btn2_link')}}" maxlength="255" type="url"
                                            class="form-control form-control-sm" placeholder="Enter Button Two Link"
                                            >
                                    </div>
                                </div>
                            </div>

                            <span class="mt-1 fw-bold text-info">Features Section</span>
                                <div class="row rounded bg-ligh align-items-center mt-1">
                                    <div class="form-group col-lg-12 col-md-6 col-sm-12">
                                        <label>Header 1 <span class="text-danger">*</span></label>
                                        <input type="text" name="header1" value="{{old('header1')}}" class="form-control form-control-sm"
                                            placeholder="Write Something..." >
                                    </div>

                                    <div class="form-group col-lg-12 col-md-6 col-sm-12 pt-6">
                                        <label>Header 2 <span class="text-danger">*</span></label>
                                        <input type="text" name="header2" value="{{old('header2')}}" class="form-control form-control-sm"
                                            placeholder="Write Something..." >
                                    </div>
                                </div>
                            <div class="px-2 py-2 rounded bg-light mb-2">
                                <div class="d-flex align-items-center pt-8">
                                    <label
                                        class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">Feature
                                        One</label>
                                    <div class="input-group">
                                        <select name="story1_id" value="{{old('story1_id')}}" class="form-select" data-control="select2" data-placeholder="Select an option"
                                            id="select1" placeholder="Choose iTEM">
                                            @foreach ($client_experiences as $item)
                                                <option class="col-8" value="{{ $item->id }}">
                                                    {{ $item->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="d-flex align-items-center pt-8">
                                    <label
                                        class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">Feature
                                        Two</label>
                                    <div class="input-group">
                                        <select name="story2_id" value="{{old('story2_id')}}" class="form-select" data-control="select2" data-placeholder="Select an option"
                                            id="select2">
                                            @foreach ($client_experiences as $item)
                                                <option class="col-8" value="{{ $item->id }}">
                                                    {{ $item->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="d-flex align-items-center pt-8">
                                    <label
                                        class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">Feature
                                        Three</label>
                                    <div class="input-group">
                                        <select name="story3_id" value="{{old('story3_id')}}" class="form-select" data-control="select2" data-placeholder="Select an option"
                                            id="select3">
                                            @foreach ($client_experiences as $item)
                                                <option class="col-8" value="{{ $item->id }}">
                                                    {{ $item->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="d-flex align-items-center pt-8">
                                    <label
                                        class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">Feature
                                        Four</label>
                                    <div class="input-group">
                                        <select name="story4_id" value="{{old('story4_id')}}" class="form-select" data-control="select2" data-placeholder="Select an option"
                                            id="select4">
                                            @foreach ($client_experiences as $item)
                                                <option class="col-8" value="{{ $item->id }}">
                                                    {{ $item->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="d-flex align-items-center pt-8">
                                    <label
                                        class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">Feature
                                        Five</label>
                                    <div class="input-group">
                                        <select name="story5_id" value="{{old('story5_id')}}" class="form-select" data-control="select2" data-placeholder="Select an option"
                                            id="select5">
                                            @foreach ($client_experiences as $item)
                                                <option class="col-8" value="{{ $item->id }}">
                                                    {{ $item->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <span class="mt-1 fw-bold text-info">Client Stories Row</span>
                            <div class="px-2 py-2 rounded bg-light mb-1">
                                <div class="d-flex align-items-center pt-8">
                                    <label
                                        class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">Client
                                        Story One</label>
                                    <div class="input-group">
                                        <select name="solution1_id" value="{{old('solution1_id')}}" class="form-select" data-control="select2" data-placeholder="Select an option"
                                            id="select">
                                            @foreach ($storys as $item)
                                                <option class="col-8" value="{{ $item->id }}">
                                                    {{ $item->badge }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="d-flex align-items-center pt-8">
                                    <label
                                        class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">Client
                                        Story Two</label>
                                    <div class="input-group">
                                        <select name="solution2_id" value="{{old('solution2_id')}}" class="form-select" data-control="select2" data-placeholder="Select an option"
                                            id="select7">
                                            @foreach ($storys as $item)
                                                <option class="col-8" value="{{ $item->id }}">
                                                    {{ $item->badge }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="d-flex align-items-center pt-8">
                                    <label
                                        class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">Client
                                        Story Three</label>
                                    <div class="input-group">
                                        <select name="solution3_id" value="{{old('solution3_id')}}" class="form-select" data-control="select2" data-placeholder="Select an option"
                                            id="select8">
                                            @foreach ($storys as $item)
                                                <option class="col-8" value="{{ $item->id }}">
                                                    {{ $item->badge }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="d-flex align-items-center pt-8">
                                    <label
                                        class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">Client
                                        Story Four</label>
                                    <div class="input-group">
                                        <select name="solution4_id" value="{{old('solution4_id')}}" class="form-select" data-control="select2" data-placeholder="Select an option"
                                            id="select9">
                                            @foreach ($storys as $item)
                                                <option class="col-8" value="{{ $item->id }}">
                                                    {{ $item->badge }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                {{--  --}}
                            </div>
                            <span class="mt-1 fw-bold text-info">Single Tech Glosy Row</span>
                            <div class="px-2 py-2 rounded bg-light">
                                <div class="d-flex align-items-center pt-8">
                                    <label
                                        class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">Sigle
                                        Tech Glossy</label>
                                    <div class="input-group">
                                        <select name="techglossy_id" value="{{old('techglossy_id')}}" class="form-select" data-control="select2" data-placeholder="Select an option">
                                            @foreach ($techglossys as $item)
                                                <option class="form-control" value="{{ $item->id }}">
                                                    {{ $item->badge }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <span class="mt-1 fw-bold text-info">Client Success Row</span>
                            <div class="px-2 py-2 rounded bg-light row align-items-center mt-1">
                                <div class="col-12 pt-8">
                                    <label
                                        class="col-form-label label_style col-12 p-0 text-start text-black label_style">Client
                                        Success One</label>
                                    <div class="input-group">
                                        <select name="success1_id" value="{{old('success1_id')}}" class="form-select" data-control="select2" data-placeholder="Select an option"
                                            id="select10">
                                            @foreach ($techglossys as $item)
                                                <option class="form-control" value="{{ $item->id }}">
                                                    {{ $item->badge }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 pt-8">
                                    <label
                                        class="col-form-label label_style col-lg-12 p-0 text-start text-black label_style">Client
                                        Success Two</label>
                                    <div class="input-group">
                                        <select name="success2_id" value="{{old('success2_id')}}" class="form-select" data-control="select2" data-placeholder="Select an option"
                                            id="select11">
                                            @foreach ($techglossys as $item)
                                                <option class="form-control" value="{{ $item->id }}">
                                                    {{ $item->badge }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 pt-8">
                                    <label
                                        class="col-form-label label_style col-lg-12 p-0 text-start text-black label_style">Client
                                        Success Three</label>
                                    <div class="input-group">
                                        <select name="success3_id" value="{{old('success3_id')}}" class="form-select" data-control="select2" data-placeholder="Select an option"
                                            id="select12">
                                            @foreach ($techglossys as $item)
                                                <option class="form-control" value="{{ $item->id }}">
                                                    {{ $item->badge }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-0 p-2">
                    <button type="submit" class="btn btn-primary from-prevent-multiple-submits"
                        style="padding: 4px 9px;">Submit</button>
                </div>
            </div>
        </form>
    </div>

    @push('scripts')
        <script></script>
    @endpush
</x-admin-app-layout>
