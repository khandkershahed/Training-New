<x-admin-app-layout :title="'What We Do Page Edit'">
    <div class="card card-flash">
        <div class="card-header">
            <div class="card-title">
            </div>

            <div class="card-toolbar">
                <a href="{{ route('admin.whatwedo.index') }}" class="btn btn-light-primary rounded-2">
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
        <form method="post" action="{{ route('admin.whatwedo.update', $whatWeDoPage->id) }}"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
                <!--Banner Section-->
                <div class="container">
                    <div class="row g-2 p-1">
                        <div class="col-lg-6 col-sm-12">
                            <span class="mt-1 fw-bold text-info">Banner Area</span>
                            <div class="px-2 py-5 rounded bg-light mb-7">

                                <div class="row align-items-center pt-7">
                                    <label
                                        class="col-form-label label_style col-lg-12 p-0 text-start text-black label_style">Banner
                                        Title</label>
                                    <div class="input-group col-lg-12">
                                        <input name="bannner_title" maxlength="255" type="text"
                                            class="form-control form-control-sm" placeholder="Enter Banner Title"
                                            value="{{ $whatWeDoPage->bannner_title }}">
                                    </div>
                                </div>


                                <div class="row align-items-center pt-7">
                                    <label
                                        class="col-form-label label_style col-lg-12 p-0 text-start text-black label_style">Bannner
                                        Description</label>
                                    <div class="input-group col-lg-12">
                                        <input name="bannner_description" type="text"
                                            class="form-control form-control-sm" placeholder="Enter Bannner Description"
                                            value="{{ $whatWeDoPage->bannner_description }}">
                                    </div>
                                </div>

                            </div>
                            <span class="mt-1 fw-bold text-info">Bannner Btn One</span>
                            <div class="px-2 py-5 rounded bg-light mb-7">
                                <div class="row align-items-center pt-7">
                                    <label
                                        class="col-form-label label_style col-lg-12 p-0 text-start text-black label_style">Bannner
                                        Button One Name</label>
                                    <div class="input-group col-lg-12">
                                        <input name="bannner_btn_one_name" type="text" maxlength="255"
                                            class="form-control form-control-sm"
                                            placeholder="Enter Bannner Button One Name"
                                            value="{{ $whatWeDoPage->bannner_btn_one_name }}">
                                    </div>
                                </div>

                                <div class="row align-items-center pt-7">
                                    <label
                                        class="col-form-label label_style col-lg-12 p-0 text-start text-black label_style">Bannner
                                        Btn One Link</label>
                                    <div class="input-group col-lg-12">
                                        <input name="bannner_btn_one_link" type="text" maxlength="255"
                                            class="form-control form-control-sm"
                                            placeholder="Enter Bannner Button One Link"
                                            value="{{ $whatWeDoPage->bannner_btn_one_link }}">
                                    </div>
                                </div>

                                <div class="row align-items-center pt-7">
                                    <label
                                        class="col-form-label label_style col-lg-12 p-0 text-start text-black label_style">Bannner
                                        Btn One Icon</label>
                                    <div class="input-group col-lg-12">
                                        <input name="bannner_btn_one_icon" type="text" maxlength="255"
                                            class="form-control form-control-sm"
                                            placeholder="Enter Bannner Btn One Icon"
                                            value="{{ $whatWeDoPage->bannner_btn_one_icon }}">
                                    </div>
                                </div>

                            </div>
                            <span class="mt-1 fw-bold text-info">Bannner Btn Two</span>
                            <div class="px-2 py-5 rounded bg-light mb-7">
                                <div class="row align-items-center pt-7">
                                    <label
                                        class="col-form-label label_style col-lg-12 p-0 text-start text-black label_style">Bannner
                                        Btn Two Name</label>
                                    <div class="input-group col-lg-12">
                                        <input name="bannner_btn_two_name" type="text" maxlength="255"
                                            class="form-control form-control-sm"
                                            placeholder="Enter Bannner Btn Two Name"
                                            value="{{ $whatWeDoPage->bannner_btn_two_name }}">
                                    </div>
                                </div>

                                <div class="row align-items-center pt-7">
                                    <label
                                        class="col-form-label label_style col-lg-12 p-0 text-start text-black label_style">Bannner
                                        Btn Two Link</label>
                                    <div class="input-group col-lg-12">
                                        <input name="bannner_btn_two_link" type="url" maxlength="100"
                                            class="form-control form-control-sm"
                                            placeholder="Enter Bannner Btn Two Link"
                                            value="{{ $whatWeDoPage->bannner_btn_two_link }}">
                                    </div>
                                </div>

                                <div class="row align-items-center pt-7">
                                    <label
                                        class="col-form-label label_style col-lg-12 p-0 text-start text-black label_style">Bannner
                                        Btn Two Icon</label>
                                    <div class="input-group col-lg-12">
                                        <input name="bannner_btn_two_icon" type="text" maxlength="100"
                                            class="form-control form-control-sm"
                                            placeholder="Enter Bannner Btn Two Icon"
                                            value="{{ $whatWeDoPage->bannner_btn_two_icon }}">
                                    </div>
                                </div>

                            </div>
                            <span class="mt-1 fw-bold text-info">Bannner Btn Three</span>
                            <div class="px-2 py-5 rounded bg-light mb-7">
                                <div class="row align-items-center pt-7">
                                    <label
                                        class="col-form-label label_style col-lg-12 p-0 text-start text-black label_style">Bannner
                                        Btn Three Name</label>
                                    <div class="input-group col-lg-12">
                                        <input name="bannner_btn_three_name" type="text" maxlength="100"
                                            class="form-control form-control-sm"
                                            placeholder="Enter Bannner Btn Three Name"
                                            value="{{ $whatWeDoPage->bannner_btn_three_name }}">
                                    </div>
                                </div>

                                <div class="row align-items-center pt-7">
                                    <label
                                        class="col-form-label label_style col-lg-12 p-0 text-start text-black label_style">Bannner
                                        Btn Three Link</label>
                                    <div class="input-group col-lg-12">
                                        <input name="bannner_btn_three_link" type="url" maxlength="100"
                                            class="form-control form-control-sm"
                                            placeholder="Enter Bannner Btn Three Link"
                                            value="{{ $whatWeDoPage->bannner_btn_three_link }}">
                                    </div>
                                </div>

                                <div class="row align-items-center pt-7">
                                    <label
                                        class="col-form-label label_style col-lg-12 p-0 text-start text-black label_style">Bannner
                                        Btn Three Icon</label>
                                    <div class="input-group col-lg-12">
                                        <input name="bannner_btn_three_icon" type="text" maxlength="100"
                                            class="form-control form-control-sm"
                                            placeholder="Enter Bannner Button Three Icon"
                                            value="{{ $whatWeDoPage->bannner_btn_three_icon }}">
                                    </div>
                                </div>

                            </div>
                            <span class="mt-1 fw-bold text-info">Bannner Btn Four</span>
                            <div class="px-2 py-5 rounded bg-light mb-7">
                                <div class="row align-items-center pt-7">
                                    <label
                                        class="col-form-label label_style col-lg-12 p-0 text-start text-black label_style">Bannner
                                        Btn Four Name</label>
                                    <div class="input-group col-lg-12">
                                        <input name="bannner_btn_four_name" type="text" maxlength="100"
                                            class="form-control form-control-sm"
                                            placeholder="Enter Bannner Btn Four Name"
                                            value="{{ $whatWeDoPage->bannner_btn_four_name }}">
                                    </div>
                                </div>

                                <div class="row align-items-center pt-7">
                                    <label
                                        class="col-form-label label_style col-lg-12 p-0 text-start text-black label_style">Bannner
                                        Btn Four Link</label>
                                    <div class="input-group col-lg-12">
                                        <input name="bannner_btn_four_link" type="text" maxlength="100"
                                            class="form-control form-control-sm"
                                            placeholder="Enter Bannner Button Four Link"
                                            value="{{ $whatWeDoPage->bannner_btn_four_link }}">
                                    </div>
                                </div>

                                <div class="row align-items-center pt-7">
                                    <label
                                        class="col-form-label label_style col-lg-12 p-0 text-start text-black label_style">Bannner
                                        Btn Four Icon</label>
                                    <div class="input-group col-lg-12">
                                        <input name="bannner_btn_four_icon" type="text" maxlength="100"
                                            class="form-control form-control-sm"
                                            placeholder="Enter Bannner Button Four Icon"
                                            value="{{ $whatWeDoPage->bannner_btn_four_icon }}">
                                    </div>
                                </div>
                            </div>
                            <span class="mt-1 fw-bold text-info">Row One Area</span>
                            <div class="px-2 py-5 rounded bg-light mb-7">

                                <div class="row align-items-center pt-7">
                                    <label
                                        class="col-form-label label_style col-lg-12 p-0 text-start text-black label_style">Row
                                        One Header</label>
                                    <div class="input-group col-lg-12">
                                        <input name="row_one_header" type="text" maxlength="250"
                                            class="form-control form-control-sm" placeholder="Enter Row One Header"
                                            value="{{ $whatWeDoPage->row_one_header }}">
                                    </div>
                                </div>

                                <div class="row align-items-center pt-7">
                                    <label
                                        class="col-form-label label_style col-lg-12 p-0 text-start text-black label_style">Row
                                        One Short Description</label>
                                    <div class="input-group col-lg-12">
                                        <input name="row_one_short_description" type="text"
                                            class="form-control form-control-sm"
                                            placeholder="Enter Row One Short Description"
                                            value="{{ $whatWeDoPage->row_one_short_description }}">
                                    </div>
                                </div>

                                <div class="row align-items-center pt-7">
                                    <label
                                        class="col-form-label label_style col-lg-12 p-0 text-start text-black label_style">Row
                                        One Image</label>
                                    <div class="input-group col-lg-12">
                                        <input name="row_one_image" type="file"
                                            class="form-control form-control-sm" placeholder="Enter Row One Image"
                                            value="{{ $whatWeDoPage->row_one_image }}">
                                    </div>
                                </div>

                                <div class="row align-items-center pt-7">
                                    <label
                                        class="col-form-label label_style col-lg-12 p-0 text-start text-black label_style">Row
                                        One Sub Title</label>
                                    <div class="input-group col-lg-12">
                                        <input name="row_one_sub_title" type="text" maxlength="250"
                                            class="form-control form-control-sm" placeholder="Enter Row One Sub Title"
                                            value="{{ $whatWeDoPage->row_one_sub_title }}">
                                    </div>
                                </div>

                                <div class="row align-items-center pt-7">
                                    <label
                                        class="col-form-label label_style col-lg-12 p-0 text-start text-black label_style">Row
                                        One Sub Description</label>
                                    <div class="input-group col-lg-12">
                                        <input name="row_one_sub_description" type="text" maxlength="100"
                                            class="form-control form-control-sm"
                                            placeholder="Enter Row One Sub Description"
                                            value="{{ $whatWeDoPage->row_one_sub_description }}">
                                    </div>
                                </div>

                            </div>
                            <span class="mt-1 fw-bold text-info">Row One Btn One</span>
                            <div class="px-2 py-5 rounded bg-light mb-7">
                                <div class="row align-items-center pt-7">
                                    <label
                                        class="col-form-label label_style col-lg-12 p-0 text-start text-black label_style">Row
                                        One Btn One Name</label>
                                    <div class="input-group col-lg-12">
                                        <input name="row_one_btn_one_name" type="text" maxlength="100"
                                            class="form-control form-control-sm"
                                            placeholder="Enter Row One Btn One Name"
                                            value="{{ $whatWeDoPage->row_one_btn_one_name }}">
                                    </div>
                                </div>

                                <div class="row align-items-center pt-7">
                                    <label
                                        class="col-form-label label_style col-lg-12 p-0 text-start text-black label_style">Row
                                        One Btn One Link</label>
                                    <div class="input-group col-lg-12">
                                        <input name="row_one_btn_one_link" type="text" maxlength="100"
                                            class="form-control form-control-sm"
                                            placeholder="Enter Row One Btn One Link"
                                            value="{{ $whatWeDoPage->row_one_btn_one_link }}">
                                    </div>
                                </div>

                                <div class="row align-items-center pt-7">
                                    <label
                                        class="col-form-label label_style col-lg-12 p-0 text-start text-black label_style">Row
                                        One Btn One Icon</label>
                                    <div class="input-group col-lg-12">
                                        <input name="row_one_btn_one_icon" type="text" maxlength="100"
                                            class="form-control form-control-sm"
                                            placeholder="Enter Row One Btn One Icon"
                                            value="{{ $whatWeDoPage->row_one_btn_one_icon }}">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <span class="mt-1 fw-bold text-info">Row One Btn Two</span>
                            <div class="px-2 py-5 rounded bg-light ">
                                <div class="row align-items-center pt-7">
                                    <label
                                        class="col-form-label label_style col-lg-12 p-0 text-start text-black label_style">Row
                                        One Btn Two Name</label>
                                    <div class="input-group col-lg-12">
                                        <input name="row_one_btn_two_name" type="text" maxlength="100"
                                            class="form-control form-control-sm"
                                            placeholder="Enter Row One Btn Two Name"
                                            value="{{ $whatWeDoPage->row_one_btn_two_name }}">
                                    </div>
                                </div>

                                <div class="row align-items-center pt-7">
                                    <label
                                        class="col-form-label label_style col-lg-12 p-0 text-start text-black label_style">Row
                                        One Btn Two Link</label>
                                    <div class="input-group col-lg-12">
                                        <input name="row_one_btn_two_link" type="text" maxlength="100"
                                            class="form-control form-control-sm"
                                            placeholder="Enter Row One Btn Two Link"
                                            value="{{ $whatWeDoPage->row_one_btn_two_link }}">
                                    </div>
                                </div>

                                <div class="row align-items-center pt-7">
                                    <label
                                        class="col-form-label label_style col-lg-12 p-0 text-start text-black label_style">Row
                                        One Btn Two Icon</label>
                                    <div class="input-group col-lg-12">
                                        <input name="row_one_btn_two_icon" type="text" maxlength="100"
                                            class="form-control form-control-sm"
                                            placeholder="Enter Row One Btn Two Link"
                                            value="{{ $whatWeDoPage->row_one_btn_two_icon }}">
                                    </div>
                                </div>

                            </div>
                            <span class="mt-1 fw-bold text-info">Row One Btn Three</span>
                            <div class="px-2 py-5 rounded bg-light">

                                <div class="row align-items-center pt-7">
                                    <label
                                        class="col-form-label label_style col-lg-12 p-0 text-start text-black label_style">Row
                                        One Btn Three Name</label>
                                    <div class="input-group col-lg-12">
                                        <input name="row_one_btn_three_name" type="text" maxlength="100"
                                            class="form-control form-control-sm"
                                            placeholder="Enter Row One Btn Three Name"
                                            value="{{ $whatWeDoPage->row_one_btn_three_name }}">
                                    </div>
                                </div>

                                <div class="row align-items-center pt-7">
                                    <label
                                        class="col-form-label label_style col-lg-12 p-0 text-start text-black label_style">Row
                                        One Btn Three Link</label>
                                    <div class="input-group col-lg-12">
                                        <input name="row_one_btn_three_link" type="text" maxlength="100"
                                            class="form-control form-control-sm"
                                            placeholder="Enter Row One Btn Three Link"
                                            value="{{ $whatWeDoPage->row_one_btn_three_link }}">
                                    </div>
                                </div>

                                <div class="row align-items-center pt-7">
                                    <label
                                        class="col-form-label label_style col-lg-12 p-0 text-start text-black label_style">Row
                                        One Btn Three Icon</label>
                                    <div class="input-group col-lg-12">
                                        <input name="row_one_btn_three_icon" type="text" maxlength="100"
                                            class="form-control form-control-sm"
                                            placeholder="Enter Row One Btn Three Icon"
                                            value="{{ $whatWeDoPage->row_one_btn_three_icon }}">
                                    </div>
                                </div>

                            </div>
                            <span class="mt-1 fw-bold text-info">Row One Btn Four</span>
                            <div class="px-2 py-5 rounded bg-light">
                                <div class="row align-items-center pt-7">
                                    <label
                                        class="col-form-label label_style col-lg-12 p-0 text-start text-black label_style">Row
                                        One Btn Four Name</label>
                                    <div class="input-group col-lg-12">
                                        <input name="row_one_btn_four_name" type="text" maxlength="100"
                                            class="form-control form-control-sm"
                                            placeholder="Enter Row One Btn Four Name"
                                            value="{{ $whatWeDoPage->row_one_btn_four_name }}">
                                    </div>
                                </div>

                                <div class="row align-items-center pt-7">
                                    <label
                                        class="col-form-label label_style col-lg-12 p-0 text-start text-black label_style">Row
                                        One Btn Four Link</label>
                                    <div class="input-group col-lg-12">
                                        <input name="row_one_btn_four_link" type="text" maxlength="100"
                                            class="form-control form-control-sm"
                                            placeholder="Enter Row One Btn Four Link"
                                            value="{{ $whatWeDoPage->row_one_btn_four_link }}">
                                    </div>
                                </div>

                                <div class="row align-items-center pt-7">
                                    <label
                                        class="col-form-label label_style col-lg-12 p-0 text-start text-black label_style">Row
                                        One Btn Four Icon</label>
                                    <div class="input-group col-lg-12">
                                        <input name="row_one_btn_four_icon" type="text" maxlength="100"
                                            class="form-control form-control-sm"
                                            placeholder="Enter Row One Btn Four Icon"
                                            value="{{ $whatWeDoPage->row_one_btn_four_icon }}">
                                    </div>
                                </div>

                            </div>
                            <span class="mt-1 fw-bold text-info">Row One Btn Five</span>
                            <div class="px-2 py-5 rounded bg-light">
                                <div class="row align-items-center pt-7">
                                    <label
                                        class="col-form-label label_style col-lg-12 p-0 text-start text-black label_style">Row
                                        One Btn Five Name</label>
                                    <div class="input-group col-lg-12">
                                        <input name="row_one_btn_five_name" type="text" maxlength="100"
                                            class="form-control form-control-sm"
                                            placeholder="Enter Row One Btn Five Name"
                                            value="{{ $whatWeDoPage->row_one_btn_five_name }}">
                                    </div>
                                </div>

                                <div class="row align-items-center pt-7">
                                    <label
                                        class="col-form-label label_style col-lg-12 p-0 text-start text-black label_style">Row
                                        One Btn Five Link</label>
                                    <div class="input-group col-lg-12">
                                        <input name="row_one_btn_five_link" type="text" maxlength="100"
                                            class="form-control form-control-sm"
                                            placeholder="Enter Row One Btn Five Link"
                                            value="{{ $whatWeDoPage->row_one_btn_five_link }}">
                                    </div>
                                </div>

                                <div class="row align-items-center pt-7">
                                    <label
                                        class="col-form-label label_style col-lg-12 p-0 text-start text-black label_style">Row
                                        One Btn Five Icon</label>
                                    <div class="input-group col-lg-12">
                                        <input name="row_one_btn_five_icon" type="text" maxlength="100"
                                            class="form-control form-control-sm"
                                            placeholder="Enter Row One Btn Five Icon"
                                            value="{{ $whatWeDoPage->row_one_btn_five_icon }}">
                                    </div>
                                </div>

                            </div>
                            <span class="mt-1 fw-bold text-info">Row One Btn Six</span>
                            <div class="px-2 py-5 rounded bg-light">
                                <div class="row align-items-center pt-7">
                                    <label
                                        class="col-form-label label_style col-lg-12 p-0 text-start text-black label_style">Row
                                        One Btn Six Name</label>
                                    <div class="input-group col-lg-12">
                                        <input name="row_one_btn_six_name" type="text" maxlength="100"
                                            class="form-control form-control-sm"
                                            placeholder="Enter Row One Btn Six Name"
                                            value="{{ $whatWeDoPage->row_one_btn_six_name }}">
                                    </div>
                                </div>

                                <div class="row align-items-center pt-7">
                                    <label
                                        class="col-form-label label_style col-lg-12 p-0 text-start text-black label_style">Row
                                        One Btn Six Link</label>
                                    <div class="input-group col-lg-12">
                                        <input name="row_one_btn_six_link" type="text" maxlength="100"
                                            class="form-control form-control-sm"
                                            placeholder="Enter Row One Btn Six Link"
                                            value="{{ $whatWeDoPage->row_one_btn_six_link }}">
                                    </div>
                                </div>

                                <div class="row align-items-center pt-7">
                                    <label
                                        class="col-form-label label_style col-lg-12 p-0 text-start text-black label_style">Row
                                        One Btn Six Icon</label>
                                    <div class="input-group col-lg-12">
                                        <input name="row_one_btn_six_icon" type="text" maxlength="100"
                                            class="form-control form-control-sm"
                                            placeholder="Enter Row One Btn Six Icon"
                                            value="{{ $whatWeDoPage->row_one_btn_six_icon }}">
                                    </div>
                                </div>

                            </div>

                            <span class="mt-1 fw-bold text-info">Row Id</span>
                            <div class="px-2 py-5 rounded bg-light">
                                <div class="row align-items-center pt-7">
                                    <label
                                        class="col-form-label label_style col-lg-12 p-0 text-start text-black label_style">Row
                                        Three Id</label>
                                    <div class="input-group col-lg-12">
                                        <select name="row_three_id" class="form-select" data-control="select2"
                                            data-placeholder="Chose row three ">
                                            <option></option>
                                            @foreach ($rows as $row)
                                                <option @selected($whatWeDoPage->row_three_id == $row->id) value="{{ $row->id }}">
                                                    {{ $row->title }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row align-items-center pt-7">
                                    <label
                                        class="col-form-label label_style col-lg-12 p-0 text-start text-black label_style">Row
                                        Two Id</label>
                                    <div class="input-group col-lg-12">
                                        <select name="row_two_id" class="form-select" data-control="select2"
                                            data-placeholder="Chose row two ">
                                            <option></option>
                                            @foreach ($rows as $row)
                                                <option @selected($whatWeDoPage->row_two_id == $row->id) value="{{ $row->id }}">
                                                    {{ $row->title }} </option>
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
        </form>
    </div>

    @push('scripts')
        <script></script>
    @endpush
</x-admin-app-layout>
