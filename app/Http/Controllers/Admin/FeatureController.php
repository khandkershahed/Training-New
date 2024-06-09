<?php

namespace App\Http\Controllers\Admin;

use Helper;
use App\Models\Row;
use App\Models\Brand;
use Illuminate\Http\Request;
use App\Models\Feature;
use App\Models\Product;
use App\Models\Category;
use App\Models\Industry;
use App\Http\Controllers\Controller;
use App\Models\SolutionDetail;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['features'] = Feature::orderBy('id', 'ASC')->get();
        return view('admin.pages.feature.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $data['rows'] = Row::select('rows.id', 'rows.title')->latest('id', 'desc')->get();
        return view('admin.pages.feature.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make(
            $request->all(),
            [
                'badge'  => 'nullable',
                'title'  => 'nullable',
                'header' => 'nullable',
                'logo'   => 'nullable|image|mimes:png,jpg,jpeg|max:10000',
                'image'  => 'nullable|image|mimes:png,jpg,jpeg|max:10000',

            ],
            [
                'mimes' => 'The :attribute must be a file of type: PNG - JPEG - JPG'
            ],

        );

        if ($validator->passes()) {
            $logoMainFile = $request->logo;
            $imageMainFile = $request->image;
            $uploadPath = storage_path('app/public/');
            if (isset($logoMainFile)) {
                $globalFunImgLogo = customUpload($logoMainFile, $uploadPath);
            } else {
                $globalFunImgLogo = ['status' => 0];
            }

            if (isset($imageMainFile)) {
                $globalFunImage = customUpload($imageMainFile, $uploadPath);
            } else {
                $globalFunImage = ['status' => 0];
            }

            Feature::create([

                // 'category_id' => json_encode($request->category_id),
                // 'brand_id'    => json_encode($request->brand_id),
                // 'industry_id' => json_encode($request->industry_id),
                // 'solution_id' => json_encode($request->solution_id),
                'badge'            => $request->badge,
                'title'            => $request->title,
                'banner_btn_name'  => $request->banner_btn_name,
                'banner_btn_link'  => $request->banner_btn_link,
                'header'           => $request->header,
                'logo'             => $globalFunImgLogo['status'] == 1 ? $globalFunImgLogo['file_name'] : '',
                'image'            => $globalFunImage['status']   == 1 ? $globalFunImage['file_name']  : '',
                'row_one_id'       => $request->row_one_id,
                'row_two_id'       => $request->row_two_id,
                'row_three_title'  => $request->row_three_title,
                'row_three_header' => $request->row_three_header,
                'row_four_title'   => $request->row_four_title,
                'row_four_header'  => $request->row_four_header,
                'row_five_title'   => $request->row_five_title,
                'row_five_header'  => $request->row_five_header,
                'footer'           => $request->footer,

            ]);

            Session::flash('success', 'Data Inserted Successfully');
            Toastr::success('Data Inserted Successfully');
        } else {

            $messages = $validator->messages();
            foreach ($messages->all() as $message) {
                Session::flash('error', $message);
                Toastr::error($message, 'Failed', ['timeOut' => 30000]);
            }
        }
        return redirect()->back()->withInput();
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
        $data['rows'] = Row::select('rows.id', 'rows.title')->get();
        $data['feature'] = Feature::findOrFail($id);
        return view('admin.pages.feature.edit', $data);
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
        $feature = Feature::find($id);
        if (!empty($feature)) {
            $validator = Validator::make(
                $request->all(),
                [
                    'badge'  => 'nullable',
                    'title'  => 'nullable',
                    'header' => 'nullable',
                ]

            );
        }



        if ($validator->passes()) {
            $logoMainFile  = $request->logo;
            $imageMainFile = $request->image;
            $uploadPath    = storage_path('app/public/');
            if (isset($logoMainFile)) {
                $globalFunImgLogo = customUpload($logoMainFile, $uploadPath);
            } else {
                $globalFunImgLogo = ['status' => 0];
            }

            if (isset($imageMainFile)) {
                $globalFunImage = customUpload($imageMainFile, $uploadPath);
            } else {
                $globalFunImage = ['status' => 0];
            }

            if ($globalFunImgLogo['status'] == 1) {
                File::delete(public_path('storage/') . $feature->logo);
                File::delete(public_path('storage/requestImg/') . $feature->logo);
                File::delete(public_path('storage/thumb/') . $feature->logo);
            }
            if ($globalFunImage['status'] == 1) {
                File::delete(public_path('storage/') . $feature->image);
                File::delete(public_path('storage/requestImg/') . $feature->image);
                File::delete(public_path('storage/thumb/') . $feature->image);
            }

            $feature->update([

                'logo'             => $globalFunImgLogo['status'] == 1 ? $globalFunImgLogo['file_name'] : $feature->logo,
                'image'            => $globalFunImage['status']   == 1 ? $globalFunImage['file_name']  : $feature->image,
                'row_one_id'       => $request->row_one_id,
                'row_two_id'       => $request->row_two_id,
                'badge'            => $request->badge,
                'title'            => $request->title,
                'header'           => $request->header,
                'row_three_title'  => $request->row_three_title,
                'row_three_header' => $request->row_three_header,
                'row_four_title'   => $request->row_four_title,
                'row_four_header'  => $request->row_four_header,
                'row_five_title'   => $request->row_five_title,
                'row_five_header'  => $request->row_five_header,
                'footer'           => $request->footer,

            ]);

            Session::flash('success', 'Data Inserted Successfully');
            Toastr::success('Data has been updated');
        } else {
            $messages = $validator->messages();
            foreach ($messages->all() as $message) {
                Session::flash('error', $message);
                Toastr::error($message, 'Failed', ['timeOut' => 30000]);
            }
        }
        return redirect()->back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $feature = Feature::find($id);

        //logo
        if (File::exists(public_path('storage/') . $feature->logo)) {
            File::delete(public_path('storage/') . $feature->logo);
        }
        if (File::exists(public_path('storage/requestImg/') . $feature->logo)) {
            File::delete(public_path('storage/requestImg/') . $feature->logo);
        }
        if (File::exists(public_path('storage/thumb/') . $feature->logo)) {
            File::delete(public_path('storage/thumb/') . $feature->logo);
        }

        //image
        if (File::exists(public_path('storage/') . $feature->image)) {
            File::delete(public_path('storage/') . $feature->image);
        }
        if (File::exists(public_path('storage/requestImg/') . $feature->image)) {
            File::delete(public_path('storage/requestImg/') . $feature->image);
        }
        if (File::exists(public_path('storage/thumb/') . $feature->image)) {
            File::delete(public_path('storage/thumb/') . $feature->image);
        }
        $feature->delete();
    }
}
