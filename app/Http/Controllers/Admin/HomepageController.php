<?php

namespace App\Http\Controllers\Admin;

use Helper;
use Illuminate\Http\Request;
use App\Models\Success;
use App\Models\Homepage;
use App\Http\Controllers\Controller;
use App\Models\Feature;
use App\Models\NewsTrend;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['homes'] = Homepage::orderBy('id', 'DESC')->get(['id']);
        return view('admin.pages.homepage.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            // 'client_experiences' =>;
        ];
        return view('admin.pages.homepage.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make(

            $request->all(),
            [

                'branner1' => 'image|mimes:png,jpg,jpeg|max:6000',
                'branner2' => 'image|mimes:png,jpg,jpeg|max:6000',
                'branner3' => 'image|mimes:png,jpg,jpeg|max:6000',
                'header1'  => 'max:400',
                'header2'  => 'max:400',

            ]

        );

        if ($validator->passes()) {

            // Image Upload
            $files = [
                'banner_one_image'            => $request->file('banner_one_image'),
                'banner_two_image'            => $request->file('banner_two_image'),
                'banner_three_image'          => $request->file('banner_three_image'),
                'row_two_image'               => $request->file('row_two_image'),
                'row_three_background_image'  => $request->file('row_three_background_image'),
                'row_four_column_one_image'   => $request->file('row_four_column_one_image'),
                'row_four_column_two_image'   => $request->file('row_four_column_two_image'),
                'row_four_column_three_image' => $request->file('row_four_column_three_image'),
                'row_four_column_four_image'  => $request->file('row_four_column_four_image'),
                'row_four_column_five_image'  => $request->file('row_four_column_five_image'),
                'row_four_column_six_image'   => $request->file('row_four_column_six_image'),
                'row_six_background_image'    => $request->file('row_six_background_image'),
            ];

            $imgPath = storage_path('app/public/homepage/');
            $uploadedFiles = [];

            // Delete old files and upload new ones
            foreach ($files as $key => $file) {
                if (!empty($file)) {
                    $uploadedFiles[$key] = customUpload($file, $imgPath);
                    if ($uploadedFiles[$key]['status'] === 0) {
                        return redirect()->back()->with('error', $uploadedFiles[$key]['error_message']);
                    }
                } else {
                    $uploadedFiles[$key] = ['status' => 0];
                }
            }

            Homepage::create([
                'banner_one_image'                    => $uploadedFiles['banner_one_image']['status'] == 1 ? $uploadedFiles['banner_one_image']['file_name'] : null,
                'banner_one_url'                      => $request->banner_one_url,
                'banner_two_image'                    => $uploadedFiles['banner_two_image']['status'] == 1 ? $uploadedFiles['banner_two_image']['file_name'] : null,
                'banner_two_url'                      => $request->banner_two_url,
                'banner_three_image'                  => $uploadedFiles['banner_three_image']['status'] == 1 ? $uploadedFiles['banner_three_image']['file_name'] : null,
                'banner_three_url'                    => $request->banner_three_url,
                'row_two_badge'                       => $request->row_two_badge,
                'row_two_title'                       => $request->row_two_title,
                'row_two_description'                 => $request->row_two_description,
                'row_two_image'                       => $uploadedFiles['row_two_image']['status'] == 1 ? $uploadedFiles['row_two_image']['file_name'] : null,
                'row_two_button_name'                 => $request->row_two_button_name,
                'row_two_button_url'                  => $request->row_two_button_url,
                'row_three_background_image'          => $uploadedFiles['row_three_background_image']['status'] == 1 ? $uploadedFiles['row_three_background_image']['file_name'] : null,
                'row_three_title'                     => $request->row_three_title,
                'row_three_description'               => $request->row_three_description,
                'row_three_column_one_title'          => $request->row_three_column_one_title,
                'row_three_column_one_description'    => $request->row_three_column_one_description,
                'row_three_column_one_url'            => $request->row_three_column_one_url,
                'row_three_column_one_button_name'    => $request->row_three_column_one_button_name,
                'row_three_column_one_button_url'     => $request->row_three_column_one_button_url,
                'row_three_column_two_title'          => $request->row_three_column_two_title,
                'row_three_column_two_description'    => $request->row_three_column_two_description,
                'row_three_column_two_url'            => $request->row_three_column_two_url,
                'row_three_column_two_button_name'    => $request->row_three_column_two_button_name,
                'row_three_column_two_button_url'     => $request->row_three_column_two_button_url,
                'row_three_column_three_title'        => $request->row_three_column_three_title,
                'row_three_column_three_description'  => $request->row_three_column_three_description,
                'row_three_column_three_url'          => $request->row_three_column_three_url,
                'row_three_column_three_button_name'  => $request->row_three_column_three_button_name,
                'row_three_column_three_button_url'   => $request->row_three_column_three_button_url,
                'row_three_column_four_title'         => $request->row_three_column_four_title,
                'row_three_column_four_description'   => $request->row_three_column_four_description,
                'row_three_column_four_url'           => $request->row_three_column_four_url,
                'row_three_column_four_button_name'   => $request->row_three_column_four_button_name,
                'row_three_column_four_button_url'    => $request->row_three_column_four_button_url,
                'row_four_title'                      => $request->row_four_title,
                'row_four_header'                     => $request->row_four_header,
                'row_four_column_one_image'           => $uploadedFiles['row_four_column_one_image']['status'] == 1 ? $uploadedFiles['row_four_column_one_image']['file_name'] : null,
                'row_four_column_one_description'     => $request->row_four_column_one_description,
                'row_four_column_one_url'             => $request->row_four_column_one_url,
                'row_four_column_two_image'           => $uploadedFiles['row_four_column_two_image']['status'] == 1 ? $uploadedFiles['row_four_column_two_image']['file_name'] : null,
                'row_four_column_two_description'     => $request->row_four_column_two_description,
                'row_four_column_two_url'             => $request->row_four_column_two_url,
                'row_four_column_three_image'         => $uploadedFiles['row_four_column_three_image']['status'] == 1 ? $uploadedFiles['row_four_column_three_image']['file_name'] : null,
                'row_four_column_three_description'   => $request->row_four_column_three_description,
                'row_four_column_three_url'           => $request->row_four_column_three_url,
                'row_four_column_four_image'          => $uploadedFiles['row_four_column_four_image']['status'] == 1 ? $uploadedFiles['row_four_column_four_image']['file_name'] : null,
                'row_four_column_four_description'    => $request->row_four_column_four_description,
                'row_four_column_four_url'            => $request->row_four_column_four_url,
                'row_four_column_five_image'          => $uploadedFiles['row_four_column_five_image']['status'] == 1 ? $uploadedFiles['row_four_column_five_image']['file_name'] : null,
                'row_four_column_five_description'    => $request->row_four_column_five_description,
                'row_four_column_five_url'            => $request->row_four_column_five_url,
                'row_four_column_six_image'           => $uploadedFiles['row_four_column_six_image']['status'] == 1 ? $uploadedFiles['row_four_column_six_image']['file_name'] : null,
                'row_four_column_six_description'     => $request->row_four_column_six_description,
                'row_four_column_six_url'             => $request->row_four_column_six_url,
                'row_four_button_name'                => $request->row_four_button_name,
                'row_four_button_url'                 => $request->row_four_button_url,
                'row_five_title'                      => $request->row_five_title,
                'row_five_header'                     => $request->row_five_header,
                'row_five_course_one'                 => $request->row_five_course_one,
                'row_five_course_two'                 => $request->row_five_course_two,
                'row_five_course_three'               => $request->row_five_course_three,
                'row_six_title'                       => $request->row_six_title,
                'row_six_header'                      => $request->row_six_header,
                'row_six_background_image'            => $uploadedFiles['row_six_background_image']['status'] == 1 ? $uploadedFiles['row_six_background_image']['file_name'] : null,
                'row_six_section_one_title'           => $request->row_six_section_one_title,
                'row_six_section_one_url'             => $request->row_six_section_one_url,
                'row_six_section_two_title'           => $request->row_six_section_two_title,
                'row_six_section_two_url'             => $request->row_six_section_two_url,
                'row_six_section_three_title'         => $request->row_six_section_three_title,
                'row_six_section_three_url'           => $request->row_six_section_three_url,
                'row_six_section_four_title'          => $request->row_six_section_four_title,
                'row_six_section_four_url'            => $request->row_six_section_four_url,
                'row_six_section_five_title'          => $request->row_six_section_five_title,
                'row_six_section_five_url'            => $request->row_six_section_five_url,
                'row_six_section_six_title'           => $request->row_six_section_six_title,
                'row_six_section_six_url'             => $request->row_six_section_six_url,
                'row_six_button_name'                 => $request->row_six_button_name,
                'row_six_button_url'                  => $request->row_six_button_url,
                'row_seven_badge'                     => $request->row_seven_badge,
                'row_seven_title'                     => $request->row_seven_title,
                'row_seven_section_one_icon'          => $request->row_seven_section_one_icon,
                'row_seven_section_one_title'         => $request->row_seven_section_one_title,
                'row_seven_section_one_description'   => $request->row_seven_section_one_description,
                'row_seven_section_one_url'           => $request->row_seven_section_one_url,
                'row_seven_section_two_icon'          => $request->row_seven_section_two_icon,
                'row_seven_section_two_title'         => $request->row_seven_section_two_title,
                'row_seven_section_two_description'   => $request->row_seven_section_two_description,
                'row_seven_section_two_url'           => $request->row_seven_section_two_url,
                'row_seven_section_three_icon'        => $request->row_seven_section_three_icon,
                'row_seven_section_three_title'       => $request->row_seven_section_three_title,
                'row_seven_section_three_description' => $request->row_seven_section_three_description,
                'row_seven_section_three_url'         => $request->row_seven_section_three_url,
                'row_eight_title'                     => $request->row_eight_title,
                'row_eight_header'                    => $request->row_eight_header,
                'row_nine_title'                      => $request->row_nine_title,
                'row_nine_button_name'                => $request->row_nine_button_name,
                'row_nine_button_url'                 => $request->row_nine_button_url,
                'row_ten_title'                       => $request->row_ten_title,
                'row_ten_header'                      => $request->row_ten_header,

            ]);
            return redirect()->route('admin.homepage.index')->with('success', 'Data has been save successfully');
        } else {
            $messages = $validator->messages();
            foreach ($messages->all() as $message) {
                return redirect()->back()->withInput()->with('error', $message);
            }
        }
        // return redirect()->back()->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['client_experiences'] = Feature::latest()->get();
        $data['storys'] = NewsTrend::all();
        $data['successes'] = Success::all();
        $data['techglossys'] = NewsTrend::all();
        $data['homePage'] = Homepage::find($id);
        return view('admin.pages.homepage.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());

        $homepage = Homepage::find($id);
        if (!empty($homepage)) {
            $validator =
                [
                    [
                        'branner1' => 'image|mimes:png,jpg,jpeg|max:5000',
                        'branner2' => 'image|mimes:png,jpg,jpeg|max:5000',
                        'branner3' => 'image|mimes:png,jpg,jpeg|max:5000',
                        'header1'  => 'max:400',
                        'header2'  => 'max:400',
                    ]
                ];
        } else {
            $validator =
                [
                    [
                        'branner1' => 'image|mimes:png,jpg,jpeg|max:5000',
                        'branner2' => 'image|mimes:png,jpg,jpeg|max:5000',
                        'branner3' => 'image|mimes:png,jpg,jpeg|max:5000',
                        'header1'  => 'max:400',
                        'header2'  => 'max:400',
                    ]
                ];
        }
        $validator = Validator::make($request->all(), $validator);

        if ($validator->passes()) {
            $bannerOneMainFile = $request->branner1;
            $bannertwoMainFile = $request->branner2;
            $bannerthreeMainFile = $request->branner3;
            $uploadPath = storage_path('app/public/');
            if (isset($bannerOneMainFile)) {
                $globalFunImgBannerOne = customUpload($bannerOneMainFile, $uploadPath, 1502, 480);
            } else {
                $globalFunImgBannerOne = ['status' => 0];
            }

            if (isset($bannertwoMainFile)) {
                $globalFunBannerTwo = customUpload($bannertwoMainFile, $uploadPath, 1502, 480);
            } else {
                $globalFunBannerTwo = ['status' => 0];
            }
            if (isset($bannerthreeMainFile)) {
                $globalFunBannerThree = customUpload($bannerthreeMainFile, $uploadPath, 1502, 480);
            } else {
                $globalFunBannerThree = ['status' => 0];
            }

            if ($globalFunImgBannerOne['status'] == 1) {
                File::delete(public_path('storage/') . $homepage->branner1);
                File::delete(public_path('storage/requestImg/') . $homepage->branner1);
                File::delete(public_path('storage/thumb/') . $homepage->branner1);
            }
            if ($globalFunBannerTwo['status'] == 1) {
                File::delete(public_path('storage/') . $homepage->branner2);
                File::delete(public_path('storage/requestImg/') . $homepage->branner2);
                File::delete(public_path('storage/thumb/') . $homepage->branner2);
            }
            if ($globalFunBannerThree['status'] == 1) {
                File::delete(public_path('storage/') . $homepage->branner3);
                File::delete(public_path('storage/requestImg/') . $homepage->branner3);
                File::delete(public_path('storage/thumb/') . $homepage->branner3);
            }

            $homepage->update([
                'banner1_title'             => $request->banner1_title,
                'banner1_short_description' => $request->banner1_short_description,
                'banner1_button_name'       => $request->banner1_button_name,
                'banner1_button_link'       => $request->banner1_button_link,
                'banner2_title'             => $request->banner2_title,
                'banner2_short_description' => $request->banner2_short_description,
                'banner2_button_name'       => $request->banner2_button_name,
                'banner2_button_link'       => $request->banner2_button_link,
                'banner3_title'             => $request->banner3_title,
                'banner3_short_description' => $request->banner3_short_description,
                'banner3_button_name'       => $request->banner3_button_name,
                'banner3_button_link'       => $request->banner3_button_link,
                'header1'                   => $request->header1,
                'header2'                   => $request->header2,
                'btn1_title'                => $request->btn1_title,
                'btn1_name'                 => $request->btn1_name,
                'btn1_link'                 => $request->btn1_link,
                'btn2_title'                => $request->btn2_title,
                'btn2_name'                 => $request->btn2_name,
                'btn2_link'                 => $request->btn2_link,
                'story1_id'                 => $request->story1_id,
                'story2_id'                 => $request->story2_id,
                'story3_id'                 => $request->story3_id,
                'story4_id'                 => $request->story4_id,
                'story5_id'                 => $request->story5_id,
                'solution1_id'              => $request->solution1_id,
                'solution2_id'              => $request->solution2_id,
                'solution3_id'              => $request->solution3_id,
                'solution4_id'              => $request->solution4_id,
                'techglossy_id'             => $request->techglossy_id,
                'success1_id'               => $request->success1_id,
                'success2_id'               => $request->success2_id,
                'success3_id'               => $request->success3_id,
                'branner1'                  => $globalFunImgBannerOne['status'] == 1 ? $globalFunImgBannerOne['file_name'] : $homepage->branner1,
                'branner2'                  => $globalFunBannerTwo['status']    == 1 ? $globalFunBannerTwo['file_name']   : $homepage->branner2,
                'branner3'                  => $globalFunBannerThree['status']  == 1 ? $globalFunBannerThree['file_name'] : $homepage->branner3,


            ]);
            Toastr::success('Data has been updated');
        } else {
            $messages = $validator->messages();
            foreach ($messages->all() as $message) {
                Toastr::error($message, 'Failed', ['timeOut' => 30000]);
            }
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $homepage = Homepage::find($id);

        if (File::exists(public_path('storage/') . $homepage->image)) {
            File::delete(public_path('storage/') . $homepage->image);
        }
        if (File::exists(public_path('storage/requestImg/') . $homepage->image)) {
            File::delete(public_path('storage/requestImg/') . $homepage->image);
        }
        if (File::exists(public_path('storage/thumb/') . $homepage->image)) {
            File::delete(public_path('storage/thumb/') . $homepage->image);
        }
        $homepage->delete();
    }
}
