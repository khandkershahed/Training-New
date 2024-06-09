<x-admin-app-layout :title="'HomePage Edit'">
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
        <form id="myform" method="post" action="{{ route('admin.homepage.update', $homePage->id) }}"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body p-0">
                <!--Banner Section-->
                <div class="container-fluid">
                    <div class="row g-2 p-1">
                        <div class="col-lg-6 col-sm-12">
                            <span class="mt-1 fw-bold text-info">Banner One Section</span>
                            <div class="px-2 py-2 rounded bg-light">
                                {{--  --}}
                                <div class="d-flex align-items-center pt-1">
                                    <label
                                        class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">Banner
                                        Image One</label>
                                    <div class="d-flex">
                                        <div class="" style="width: 70%">
                                            <input name="branner1" id="image" accept="image/*" type="file"
                                                class="form-control form-control-sm"
                                                placeholder="Enter Banner Image One">
                                        </div>
                                        <div class=" ms-2" style="width: 10%">
                                            <img class="img-fluid rounded-circle" id="showImage"
                                                src="{{ asset('storage/requestImg/' . $homePage->branner1) }}"
                                                alt=""
                                                style="width: 30px;
                                                    height: 30px;
                                                     margin-left: 2.5rem;">
                                        </div>
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="d-flex align-items-center pt-1">
                                    <label
                                        class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">Banner
                                        Title One</label>
                                    <div class="input-group">
                                        <input name="banner1_title" maxlength="255" type="text"
                                            class="form-control form-control-sm" placeholder="Enter Banner Title One"
                                            value="{{ $homePage->banner1_title }}">
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="d-flex align-items-center pt-1">
                                    <label
                                        class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">One
                                        ShortDescription</label>
                                    <div class="input-group">
                                        <input name="banner1_short_description" type="text"
                                            class="form-control form-control-sm"
                                            placeholder="Enter Banner One ShortDescription"
                                            value="{{ $homePage->banner1_short_description }}">
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="d-flex align-items-center pt-1">
                                    <label
                                        class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">Banner
                                        One Button Name</label>
                                    <div class="input-group">
                                        <input name="banner1_button_name" type="text" maxlength="255"
                                            class="form-control form-control-sm"
                                            placeholder="Enter Banner One Button Name"
                                            value="{{ $homePage->banner1_button_name }}">
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="d-flex align-items-center pt-1">
                                    <label
                                        class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">Banner
                                        One Button Link</label>
                                    <div class="input-group">
                                        <input name="banner1_button_link" maxlength="255" type="text"
                                            class="form-control form-control-sm"
                                            placeholder="Enter Banner One Button Name"
                                            value="{{ $homePage->banner1_button_link }}">
                                    </div>
                                </div>
                                {{--  --}}
                            </div>

                            <span class="mt-1 fw-bold text-info">Banner Two Section</span>
                            <div class="px-2 py-2 rounded bg-light">
                                {{--  --}}
                                <div class="d-flex align-items-center pt-1">
                                    <label
                                        class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">Banner
                                        Image Two</label>
                                    <div class="d-flex">
                                        <div class="" style="width: 70%">
                                            <input name="branner2" id="image" accept="image/*" type="file"
                                                class="form-control form-control-sm"
                                                placeholder="Enter Banner Image Two">
                                        </div>
                                        <div class=" ms-2" style="width: 10%">
                                            <img class="img-fluid rounded-circle" id="showImage"
                                                src="{{ asset('storage/requestImg/' . $homePage->branner2) }}"
                                                alt=""
                                                style="width: 30px;
                                                    height: 30px;
                                                     margin-left: 2.5rem;">
                                        </div>
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="d-flex align-items-center pt-1">
                                    <label
                                        class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">Banner
                                        Title Two</label>
                                    <div class="input-group">
                                        <input name="banner2_title" maxlength="255" type="text"
                                            class="form-control form-control-sm" placeholder="Enter Banner Title Two"
                                            value="{{ $homePage->banner2_title }}">
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="d-flex align-items-center pt-1">
                                    <label
                                        class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">Two
                                        ShortDescription</label>
                                    <div class="input-group">
                                        <input name="banner2_short_description" type="text"
                                            class="form-control form-control-sm"
                                            placeholder="Enter Banner Two ShortDescription"
                                            value="{{ $homePage->banner2_short_description }}">
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="d-flex align-items-center pt-1">
                                    <label
                                        class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">Banner
                                        Two Button Name</label>
                                    <div class="input-group">
                                        <input name="banner2_button_name" type="text" maxlength="255"
                                            class="form-control form-control-sm"
                                            placeholder="Enter Banner Two Button Name"
                                            value="{{ $homePage->banner2_button_name }}">
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="d-flex align-items-center pt-1">
                                    <label
                                        class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">Banner
                                        Two Button Link</label>
                                    <div class="input-group">
                                        <input name="banner2_button_link" maxlength="255" type="text"
                                            class="form-control form-control-sm"
                                            placeholder="Enter Banner Two Button Name"
                                            value="{{ $homePage->banner2_button_link }}">
                                    </div>
                                </div>
                                {{--  --}}
                            </div>

                            <span class="mt-1 fw-bold text-info">Banner Three Section</span>
                            <div class="px-2 py-2 rounded bg-light">
                                {{--  --}}
                                <div class="d-flex align-items-center pt-1">
                                    <label
                                        class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">Banner
                                        Image Three</label>
                                    <div class="d-flex">
                                        <div class="" style="width: 70%">
                                            <input name="branner3" id="image" accept="image/*" type="file"
                                                class="form-control form-control-sm"
                                                placeholder="Enter Banner Image Three">
                                        </div>
                                        <div class=" ms-2" style="width: 10%">
                                            <img class="img-fluid rounded-circle" id="showImage"
                                                src="{{ asset('storage/requestImg/' . $homePage->branner3) }}"
                                                alt=""
                                                style="width: 30px;
                                                    height: 30px;
                                                     margin-left: 2.5rem;">
                                        </div>
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="d-flex align-items-center pt-1">
                                    <label
                                        class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">Banner
                                        Title Three</label>
                                    <div class="input-group">
                                        <input name="banner3_title" maxlength="255" type="text"
                                            class="form-control form-control-sm"
                                            placeholder="Enter Banner Title Three"
                                            value="{{ $homePage->banner3_title }}">
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="d-flex align-items-center pt-1">
                                    <label
                                        class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">Three
                                        ShortDescription</label>
                                    <div class="input-group">
                                        <input name="banner3_short_description" type="text"
                                            class="form-control form-control-sm"
                                            placeholder="Enter Banner Three ShortDescription"
                                            value="{{ $homePage->banner3_short_description }}">
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="d-flex align-items-center pt-1">
                                    <label
                                        class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">Banner
                                        Three Button Name</label>
                                    <div class="input-group">
                                        <input name="banner3_button_name" type="text" maxlength="255"
                                            class="form-control form-control-sm"
                                            placeholder="Enter Banner Three Button Name"
                                            value="{{ $homePage->banner3_button_name }}">
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="d-flex align-items-center pt-1">
                                    <label
                                        class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">Banner
                                        Three Button Link</label>
                                    <div class="input-group">
                                        <input name="banner3_button_link" maxlength="255" type="text"
                                            class="form-control form-control-sm"
                                            placeholder="Enter Banner Three Button Name"
                                            value="{{ $homePage->banner3_button_link }}">
                                    </div>
                                </div>
                                {{--  --}}
                            </div>

                            <span class="mt-1 fw-bold text-info">Double Button One Section</span>
                            <div class="px-2 py-2 rounded bg-light mb-2">
                                <div class="d-flex align-items-center pt-1">
                                    <label
                                        class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">Button
                                        One Title </label>
                                    <div class="input-group">
                                        <input name="btn1_title" maxlength="255" type="text"
                                            class="form-control form-control-sm" placeholder="Enter Button One Title"
                                            value="{{ $homePage->btn1_title }}">
                                    </div>
                                </div>
                                <div class="d-flex align-items-center pt-1">
                                    <label
                                        class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">Button
                                        One Name </label>
                                    <div class="input-group">
                                        <input name="btn1_name" maxlength="255" type="text"
                                            class="form-control form-control-sm" placeholder="Enter Button One Name"
                                            value="{{ $homePage->btn1_name }}">
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="d-flex align-items-center pt-1">
                                    <label
                                        class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">Button
                                        One Link </label>
                                    <div class="input-group">
                                        <input name="btn1_link" maxlength="255" type="text"
                                            class="form-control form-control-sm" placeholder="Enter Button One Link"
                                            value="{{ $homePage->btn1_link }}">
                                    </div>
                                </div>
                                {{--  --}}
                            </div>



                        </div>
                        <div class="col-lg-6 col-sm-12">

                            <span class="mt-1 fw-bold text-info">Double Button Two Section</span>
                            <div class="px-2 py-2 rounded bg-light mb-2">
                                <div class="d-flex align-items-center pt-1">
                                    <label
                                        class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">Button
                                        Two Title </label>
                                    <div class="input-group">
                                        <input name="btn2_title" maxlength="255" type="text"
                                            class="form-control form-control-sm" placeholder="Enter Button Two Title"
                                            value="{{ $homePage->btn2_title }}">
                                    </div>
                                </div>
                                <div class="d-flex align-items-center pt-1">
                                    <label
                                        class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">Button
                                        Two Name </label>
                                    <div class="input-group">
                                        <input name="btn2_name" maxlength="255" type="text"
                                            class="form-control form-control-sm" placeholder="Enter Button Two Name"
                                            value="{{ $homePage->btn2_name }}">
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="d-flex align-items-center pt-1">
                                    <label
                                        class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">Button
                                        Two Link </label>
                                    <div class="input-group">
                                        <input name="btn2_link" maxlength="255" type="text"
                                            class="form-control form-control-sm" placeholder="Enter Button Two Link"
                                            value="{{ $homePage->btn2_link }}">
                                    </div>
                                </div>
                                {{--  --}}
                            </div>

                            <span class="mt-1 fw-bold text-info">Features Section</span>

                            <div class="px-2 py-2 rounded bg-light mb-2">
                                {{--  --}}
                                <div class="row">
                                    <div class="form-group col-lg-12 col-md-6 col-sm-12">
                                        <label>Header 1 <span class="text-danger">*</span></label>
                                        <input type="text" name="header1" class="form-control form-control-sm"
                                            placeholder="Write Something..." value="{{ $homePage->header1 }}">
                                    </div>

                                    <div class="form-group col-lg-12 col-md-6 col-sm-12">
                                        <label>Header 2 <span class="text-danger">*</span></label>
                                        <input type="text" name="header2" class="form-control form-control-sm"
                                            placeholder="Write Something..." value="{{ $homePage->header2 }}">
                                    </div>

                                </div>
                                <div class="d-flex align-items-center pt-1">
                                    <label
                                        class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">Feature
                                        One</label>
                                    <div class="input-group" style="width: 275px;">
                                        <select name="story1_id" class="form-control select form-control-sm"
                                            data-allow-clear="true" id="select1" data-placeholder="Select Feature">
                                            <option value="" selected disabled>Select Feature</option>
                                            @foreach ($client_experiences as $item)
                                                <option value="{{ $item->id }}"
                                                    {{ $item->id == $homePage->story1_id ? 'selected' : '' }}>
                                                    {{ $item->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="d-flex align-items-center pt-1">
                                    <label
                                        class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">Feature
                                        Two</label>
                                    <div class="input-group" style="width: 275px;">
                                        <select name="story2_id" class="form-select form-select-solid" data-control="select2"
                                            data-allow-clear="true" id="select2" data-placeholder="Select Feature">
                                            <option value="" selected disabled>Select Feature</option>
                                            @foreach ($client_experiences as $item)
                                                <option value="{{ $item->id }}"
                                                    {{ $item->id == $homePage->story2_id ? 'selected' : '' }}>
                                                    {{ $item->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="d-flex align-items-center pt-1">
                                    <label
                                        class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">Feature
                                        Three</label>
                                    <div class="input-group" style="width: 275px;">
                                        <select name="story3_id" class="form-select form-select-solid" data-control="select2"
                                            data-allow-clear="true" id="select3" data-placeholder="Select Feature">
                                            <option value="" selected disabled>Select Feature</option>
                                            @foreach ($client_experiences as $item)
                                                <option value="{{ $item->id }}"
                                                    {{ $item->id == $homePage->story3_id ? 'selected' : '' }}>
                                                    {{ $item->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="d-flex align-items-center pt-1">
                                    <label
                                        class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">Feature
                                        Four</label>
                                    <div class="input-group" style="width: 275px;">
                                        <select name="story4_id" class="form-select form-select-solid" data-control="select2"
                                            data-allow-clear="true" id="select4" data-placeholder="Select Feature">
                                            <option value="" selected disabled>Select Feature</option>
                                            @foreach ($client_experiences as $item)
                                                <option value="{{ $item->id }}"
                                                    {{ $item->id == $homePage->story4_id ? 'selected' : '' }}>
                                                    {{ $item->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="d-flex align-items-center pt-1">
                                    <label
                                        class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">Feature
                                        Five</label>
                                    <div class="input-group" style="width: 275px;">
                                        <select name="story5_id" class="form-select form-select-solid" data-control="select2"
                                            data-allow-clear="true" id="select5" data-placeholder="Select Feature">
                                            <option value="" selected disabled>Select Feature</option>
                                            @foreach ($client_experiences as $item)
                                                <option value="{{ $item->id }}"
                                                    {{ $item->id == $homePage->story5_id ? 'selected' : '' }}>
                                                    {{ $item->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <span class="mt-1 fw-bold text-info">Client Stories Row</span>
                            <div class="px-2 py-2 rounded bg-light mb-1">
                                <div class="d-flex align-items-center pt-1">
                                    <label
                                        class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">Client
                                        Story One</label>
                                    <div class="input-group">
                                        <select name="solution1_id" class="form-select form-select-solid" data-control="select2"
                                            data-allow-clear="true" data-placeholder="Select Client Story">
                                            <option value="" selected disabled>Select Client Story</option>
                                            @foreach ($storys as $item)
                                                <option value="{{ $item->id }}" @selected($item->id == $homePage->solution1_id)>
                                                    {{ $item->badge }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="d-flex align-items-center pt-1">
                                    <label
                                        class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">Client
                                        Story Two</label>
                                    <div class="input-group">
                                        <select name="solution2_id" class="form-select form-select-solid" data-control="select2"
                                            data-allow-clear="true" data-placeholder="Select Client Story"
                                            id="select7">
                                            <option value="" selected disabled>Select Client Story</option>
                                            @foreach ($storys as $item)
                                                <option value="{{ $item->id }}"
                                                    {{ $item->id == $homePage->solution2_id ? 'selected' : '' }}>
                                                    {{ $item->badge }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="d-flex align-items-center pt-1">
                                    <label
                                        class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">Client
                                        Story Three</label>
                                    <div class="input-group">
                                        <select name="solution3_id" class="form-select form-select-solid" data-control="select2"
                                            data-allow-clear="true" data-placeholder="Select Client Story"
                                            id="select8">
                                            <option value="" selected disabled>Select Client Story</option>
                                            @foreach ($storys as $item)
                                                <option value="{{ $item->id }}"
                                                    {{ $item->id == $homePage->solution3_id ? 'selected' : '' }}>
                                                    {{ $item->badge }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="d-flex align-items-center pt-1">
                                    <label
                                        class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">Client
                                        Story Four</label>
                                    <div class="input-group">
                                        <select name="solution4_id" class="form-select form-select-solid" data-control="select2"
                                            data-allow-clear="true" data-placeholder="Select Client Story"
                                            id="select9">
                                            <option value="" selected disabled>Select Client Story</option>
                                            @foreach ($storys as $item)
                                                <option value="{{ $item->id }}"
                                                    {{ $item->id == $homePage->solution4_id ? 'selected' : '' }}>
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
                                <div class="d-flex align-items-center pt-1">
                                    <label
                                        class="col-form-label label_style col-lg-2 p-0 text-start text-black label_style">Single
                                        Tech Glossy</label>
                                    <div class="input-group">
                                        <select name="techglossy_id" class="form-select form-select-solid" data-control="select2"
                                            data-allow-clear="true" data-placeholder="Select Tech Glossy"
                                            id="select6">
                                            <option value="" selected disabled>Select Client Story</option>
                                            @foreach ($techglossys as $item)
                                                <option value="{{ $item->id }}"
                                                    {{ $item->id == $homePage->techglossy_id ? 'selected' : '' }}>
                                                    {{ $item->badge }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <span class="mt-1 fw-bold text-info">Client Success Row</span>
                            <div class="px-2 py-2 rounded bg-light row align-items-center mt-1">
                                <div class="col-lg-4 pt-1">
                                    <label
                                        class="col-form-label label_style col-lg-12 p-0 text-start text-black label_style">Client
                                        Success One</label>
                                    <div class="input-group">
                                        <select name="success1_id" class="form-select form-select-solid" data-control="select2"
                                            data-allow-clear="true" data-placeholder="Select Client Success"
                                            id="select10">
                                            @foreach ($successes as $item)
                                                <option value="{{ $item->id }}"
                                                    {{ $item->id == $homePage->success1_id ? 'selected' : '' }}>
                                                    {{ $item->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 pt-1">
                                    <label
                                        class="col-form-label label_style col-lg-12 p-0 text-start text-black label_style">Client
                                        Success Two</label>
                                    <div class="input-group">
                                        <select name="success2_id" class="form-select form-select-solid" data-control="select2"
                                            data-allow-clear="true" data-placeholder="Select Client Success"
                                            id="select11">
                                            @foreach ($successes as $item)
                                                <option value="{{ $item->id }}"
                                                    {{ $item->id == $homePage->success2_id ? 'selected' : '' }}>
                                                    {{ $item->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 pt-1">
                                    <label
                                        class="col-form-label label_style col-lg-12 p-0 text-start text-black label_style">Client
                                        Success Three</label>
                                    <div class="input-group">
                                        <select name="success3_id" class="form-select form-select-solid" data-control="select2"
                                            data-allow-clear="true" data-placeholder="Select Client Success">
                                            @foreach ($successes as $item)
                                                <option value="{{ $item->id }}"
                                                    {{ $item->id == $homePage->success3_id ? 'selected' : '' }}>
                                                    {{ $item->title }}
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
