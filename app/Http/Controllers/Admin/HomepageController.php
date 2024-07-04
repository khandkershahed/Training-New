<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Homepage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homes = Homepage::orderBy('id', 'DESC')->get(['id']);
        return view('admin.pages.homepage.index', compact('homes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::latest()->get();

        return view('admin.pages.homepage.create', compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //image_slider_one_image
        if (!empty($request->file('banner_one_image'))) {

            $file = $request->file('banner_one_image');

            // @unlink(public_path('upload/home/' . $home->image_slider_one_image));

            $fileName = hexdec(uniqid()) . '.' . $file->getClientOriginalName();
            $file->storeAs('public/homepage', $fileName);
            $banner_one_image = $fileName;
        }

        //banner_two_image
        if (!empty($request->file('banner_two_image'))) {

            $file = $request->file('banner_two_image');

            // @unlink(public_path('upload/home/' . $home->image_slider_one_image));

            $fileName = hexdec(uniqid()) . '.' . $file->getClientOriginalName();
            $file->storeAs('public/homepage', $fileName);
            $banner_two_image = $fileName;
        }

        //banner_three_image
        if (!empty($request->file('banner_three_image'))) {

            $file = $request->file('banner_three_image');

            // @unlink(public_path('upload/home/' . $home->image_slider_one_image));

            $fileName = hexdec(uniqid()) . '.' . $file->getClientOriginalName();
            $file->storeAs('public/homepage', $fileName);
            $banner_three_image = $fileName;
        }

        //row_two_image
        if (!empty($request->file('row_two_image'))) {

            $file = $request->file('row_two_image');
            $fileName = hexdec(uniqid()) . '.' . $file->getClientOriginalName();
            $file->storeAs('public/homepage', $fileName);
            $row_two_image = $fileName;
        }

        //row_three_background_image
        if (!empty($request->file('row_three_background_image'))) {

            $file = $request->file('row_three_background_image');
            $fileName = hexdec(uniqid()) . '.' . $file->getClientOriginalName();
            $file->storeAs('public/homepage', $fileName);
            $row_three_background_image = $fileName;
        }

        //row_four_column_one_image
        if (!empty($request->file('row_four_column_one_image'))) {

            $file = $request->file('row_four_column_one_image');
            $fileName = hexdec(uniqid()) . '.' . $file->getClientOriginalName();
            $file->storeAs('public/homepage', $fileName);
            $row_four_column_one_image = $fileName;
        }

        //row_four_column_two_image
        if (!empty($request->file('row_four_column_two_image'))) {

            $file = $request->file('row_four_column_two_image');
            $fileName = hexdec(uniqid()) . '.' . $file->getClientOriginalName();
            $file->storeAs('public/homepage', $fileName);
            $row_four_column_two_image = $fileName;
        }

        //row_four_column_three_image
        if (!empty($request->file('row_four_column_three_image'))) {

            $file = $request->file('row_four_column_three_image');
            $fileName = hexdec(uniqid()) . '.' . $file->getClientOriginalName();
            $file->storeAs('public/homepage', $fileName);
            $row_four_column_three_image = $fileName;
        }

        //row_four_column_four_image
        if (!empty($request->file('row_four_column_four_image'))) {

            $file = $request->file('row_four_column_four_image');
            $fileName = hexdec(uniqid()) . '.' . $file->getClientOriginalName();
            $file->storeAs('public/homepage', $fileName);
            $row_four_column_four_image = $fileName;
        }

        //row_four_column_five_image
        if (!empty($request->file('row_four_column_five_image'))) {

            $file = $request->file('row_four_column_five_image');
            $fileName = hexdec(uniqid()) . '.' . $file->getClientOriginalName();
            $file->storeAs('public/homepage', $fileName);
            $row_four_column_five_image = $fileName;
        }

        //row_four_column_six_image
        if (!empty($request->file('row_four_column_six_image'))) {

            $file = $request->file('row_four_column_six_image');
            $fileName = hexdec(uniqid()) . '.' . $file->getClientOriginalName();
            $file->storeAs('public/homepage', $fileName);
            $row_four_column_six_image = $fileName;
        }

        //row_six_background_image
        if (!empty($request->file('row_six_background_image'))) {

            $file = $request->file('row_six_background_image');
            $fileName = hexdec(uniqid()) . '.' . $file->getClientOriginalName();
            $file->storeAs('public/homepage', $fileName);
            $row_six_background_image = $fileName;
        }

        //row_seven_section_one_icon
        if (!empty($request->file('row_seven_section_one_icon'))) {

            $file = $request->file('row_seven_section_one_icon');
            $fileName = hexdec(uniqid()) . '.' . $file->getClientOriginalName();
            $file->storeAs('public/homepage', $fileName);
            $row_seven_section_one_icon = $fileName;
        }

        //row_seven_section_two_icon
        if (!empty($request->file('row_seven_section_two_icon'))) {

            $file = $request->file('row_seven_section_two_icon');
            $fileName = hexdec(uniqid()) . '.' . $file->getClientOriginalName();
            $file->storeAs('public/homepage', $fileName);
            $row_seven_section_two_icon = $fileName;
        }

        //row_seven_section_three_icon
        if (!empty($request->file('row_seven_section_three_icon'))) {

            $file = $request->file('row_seven_section_three_icon');
            $fileName = hexdec(uniqid()) . '.' . $file->getClientOriginalName();
            $file->storeAs('public/homepage', $fileName);
            $row_seven_section_three_icon = $fileName;
        }

        Homepage::create([

            'banner_one_url' => $request->banner_one_url,
            'banner_two_url' => $request->banner_two_url,
            'banner_three_url' => $request->banner_three_url,
            'row_two_badge' => $request->row_two_badge,
            'row_two_title' => $request->row_two_title,
            'row_two_description' => $request->row_two_description,
            'row_two_button_name' => $request->row_two_button_name,
            'row_two_button_url' => $request->row_two_button_url,
            'row_three_title' => $request->row_three_title,
            'row_three_description' => $request->row_three_description,
            'row_three_column_one_title' => $request->row_three_column_one_title,
            'row_three_column_one_description' => $request->row_three_column_one_description,
            'row_three_column_one_url' => $request->row_three_column_one_url,
            'row_three_column_one_button_name' => $request->row_three_column_one_button_name,
            'row_three_column_one_button_url' => $request->row_three_column_one_button_url,
            'row_three_column_two_title' => $request->row_three_column_two_title,
            'row_three_column_two_description' => $request->row_three_column_two_description,
            'row_three_column_two_url' => $request->row_three_column_two_url,
            'row_three_column_two_button_name' => $request->row_three_column_two_button_name,
            'row_three_column_two_button_url' => $request->row_three_column_two_button_url,
            'row_three_column_three_title' => $request->row_three_column_three_title,
            'row_three_column_three_description' => $request->row_three_column_three_description,
            'row_three_column_three_url' => $request->row_three_column_three_url,
            'row_three_column_three_button_name' => $request->row_three_column_three_button_name,
            'row_three_column_three_button_url' => $request->row_three_column_three_button_url,
            'row_three_column_four_title' => $request->row_three_column_four_title,
            'row_three_column_four_description' => $request->row_three_column_four_description,
            'row_three_column_four_url' => $request->row_three_column_four_url,
            'row_three_column_four_button_name' => $request->row_three_column_four_button_name,
            'row_three_column_four_button_url' => $request->row_three_column_four_button_url,
            'row_four_title' => $request->row_four_title,
            'row_four_header' => $request->row_four_header,
            'row_four_column_one_description' => $request->row_four_column_one_description,
            'row_four_column_one_url' => $request->row_four_column_one_url,
            'row_four_column_two_description' => $request->row_four_column_two_description,
            'row_four_column_two_url' => $request->row_four_column_two_url,
            'row_four_column_three_description' => $request->row_four_column_three_description,
            'row_four_column_three_url' => $request->row_four_column_three_url,
            'row_four_column_four_description' => $request->row_four_column_four_description,
            'row_four_column_four_url' => $request->row_four_column_four_url,
            'row_four_column_five_description' => $request->row_four_column_five_description,
            'row_four_column_five_url' => $request->row_four_column_five_url,
            'row_four_column_six_description' => $request->row_four_column_six_description,
            'row_four_column_six_url' => $request->row_four_column_six_url,
            'row_four_button_name' => $request->row_four_button_name,
            'row_four_button_url' => $request->row_four_button_url,
            'row_five_title' => $request->row_five_title,
            'row_five_header' => $request->row_five_header,
            'row_five_course_one' => $request->row_five_course_one,
            'row_five_course_two' => $request->row_five_course_two,
            'row_five_course_three' => $request->row_five_course_three,
            'row_six_title' => $request->row_six_title,
            'row_six_header' => $request->row_six_header,
            'row_six_section_one_title' => $request->row_six_section_one_title,
            'row_six_section_one_url' => $request->row_six_section_one_url,
            'row_six_section_two_title' => $request->row_six_section_two_title,
            'row_six_section_two_url' => $request->row_six_section_two_url,
            'row_six_section_three_title' => $request->row_six_section_three_title,
            'row_six_section_three_url' => $request->row_six_section_three_url,
            'row_six_section_four_title' => $request->row_six_section_four_title,
            'row_six_section_four_url' => $request->row_six_section_four_url,
            'row_six_section_five_title' => $request->row_six_section_five_title,
            'row_six_section_five_url' => $request->row_six_section_five_url,
            'row_six_section_six_title' => $request->row_six_section_six_title,
            'row_six_section_six_url' => $request->row_six_section_six_url,
            'row_six_button_name' => $request->row_six_button_name,
            'row_six_button_url' => $request->row_six_button_url,
            'row_seven_badge' => $request->row_seven_badge,
            'row_seven_title' => $request->row_seven_title,
            'row_seven_section_one_icon' => $request->row_seven_section_one_icon,
            'row_seven_section_one_title' => $request->row_seven_section_one_title,
            'row_seven_section_one_description' => $request->row_seven_section_one_description,
            'row_seven_section_one_url' => $request->row_seven_section_one_url,
            'row_seven_section_two_icon' => $request->row_seven_section_two_icon,
            'row_seven_section_two_title' => $request->row_seven_section_two_title,
            'row_seven_section_two_description' => $request->row_seven_section_two_description,
            'row_seven_section_two_url' => $request->row_seven_section_two_url,
            'row_seven_section_three_icon' => $request->row_seven_section_three_icon,
            'row_seven_section_three_title' => $request->row_seven_section_three_title,
            'row_seven_section_three_description' => $request->row_seven_section_three_description,
            'row_seven_section_three_url' => $request->row_seven_section_three_url,
            'row_eight_title' => $request->row_eight_title,
            'row_eight_header' => $request->row_eight_header,
            'row_nine_title' => $request->row_nine_title,
            'row_nine_button_name' => $request->row_nine_button_name,
            'row_nine_button_url' => $request->row_nine_button_url,
            'row_ten_title' => $request->row_ten_title,
            'row_ten_header' => $request->row_ten_header,

            'banner_one_image' => (!empty($banner_one_image) ? $banner_one_image : null),
            'banner_two_image' => (!empty($banner_two_image) ? $banner_two_image : null),
            'banner_three_image' => (!empty($banner_three_image) ? $banner_three_image : null),

            'row_two_image' => (!empty($row_two_image) ? $row_two_image : null),

            'row_three_background_image' => (!empty($row_three_background_image) ? $row_three_background_image : null),

            'row_four_column_one_image' => (!empty($row_four_column_one_image) ? $row_four_column_one_image : null),
            'row_four_column_two_image' => (!empty($row_four_column_two_image) ? $row_four_column_two_image : null),
            'row_four_column_three_image' => (!empty($row_four_column_three_image) ? $row_four_column_three_image : null),
            'row_four_column_four_image' => (!empty($row_four_column_four_image) ? $row_four_column_four_image : null),
            'row_four_column_five_image' => (!empty($row_four_column_five_image) ? $row_four_column_five_image : null),
            'row_four_column_six_image' => (!empty($row_four_column_six_image) ? $row_four_column_six_image : null),

            'row_six_background_image' => (!empty($row_six_background_image) ? $row_six_background_image : null),

            'row_seven_section_one_icon' => (!empty($row_seven_section_one_icon) ? $row_seven_section_one_icon : null),
            'row_seven_section_two_icon' => (!empty($row_seven_section_two_icon) ? $row_seven_section_two_icon : null),
            'row_seven_section_three_icon' => (!empty($row_seven_section_three_icon) ? $row_seven_section_three_icon : null),

        ]);

        return redirect()->route('admin.homepage.index')->with('success', 'Data has been save successfully');

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
        $homePage = Homepage::find($id);
        $courses = Course::latest()->get();
        return view('admin.pages.homepage.edit', compact('homePage', 'courses'));
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
        $uid = $request->id;
        $home = Homepage::find($uid);

        // Get the uploaded file
        if ($request->hasFile('banner_one_image')) {
            $file = $request->file('banner_one_image');

            // Delete old file if it exists
            if ($home->banner_one_image) {
                Storage::delete('public/homepage/' . $home->banner_one_image);
            }

            // Store new file with a custom name
            $fileName = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();
            $storedPath = $file->storeAs('public/homepage', $fileName);

            // Save $fileName to your $home object or wherever needed
            $banner_one_image = $storedPath;
        }

        $home->update([

            'banner_one_url' => $request->banner_one_url,
            'banner_two_url' => $request->banner_two_url,
            'banner_three_url' => $request->banner_three_url,
            'row_two_badge' => $request->row_two_badge,
            'row_two_title' => $request->row_two_title,
            'row_two_description' => $request->row_two_description,
            'row_two_button_name' => $request->row_two_button_name,
            'row_two_button_url' => $request->row_two_button_url,
            'row_three_title' => $request->row_three_title,
            'row_three_description' => $request->row_three_description,
            'row_three_column_one_title' => $request->row_three_column_one_title,
            'row_three_column_one_description' => $request->row_three_column_one_description,
            'row_three_column_one_url' => $request->row_three_column_one_url,
            'row_three_column_one_button_name' => $request->row_three_column_one_button_name,
            'row_three_column_one_button_url' => $request->row_three_column_one_button_url,
            'row_three_column_two_title' => $request->row_three_column_two_title,
            'row_three_column_two_description' => $request->row_three_column_two_description,
            'row_three_column_two_url' => $request->row_three_column_two_url,
            'row_three_column_two_button_name' => $request->row_three_column_two_button_name,
            'row_three_column_two_button_url' => $request->row_three_column_two_button_url,
            'row_three_column_three_title' => $request->row_three_column_three_title,
            'row_three_column_three_description' => $request->row_three_column_three_description,
            'row_three_column_three_url' => $request->row_three_column_three_url,
            'row_three_column_three_button_name' => $request->row_three_column_three_button_name,
            'row_three_column_three_button_url' => $request->row_three_column_three_button_url,
            'row_three_column_four_title' => $request->row_three_column_four_title,
            'row_three_column_four_description' => $request->row_three_column_four_description,
            'row_three_column_four_url' => $request->row_three_column_four_url,
            'row_three_column_four_button_name' => $request->row_three_column_four_button_name,
            'row_three_column_four_button_url' => $request->row_three_column_four_button_url,
            'row_four_title' => $request->row_four_title,
            'row_four_header' => $request->row_four_header,
            'row_four_column_one_description' => $request->row_four_column_one_description,
            'row_four_column_one_url' => $request->row_four_column_one_url,
            'row_four_column_two_description' => $request->row_four_column_two_description,
            'row_four_column_two_url' => $request->row_four_column_two_url,
            'row_four_column_three_description' => $request->row_four_column_three_description,
            'row_four_column_three_url' => $request->row_four_column_three_url,
            'row_four_column_four_description' => $request->row_four_column_four_description,
            'row_four_column_four_url' => $request->row_four_column_four_url,
            'row_four_column_five_description' => $request->row_four_column_five_description,
            'row_four_column_five_url' => $request->row_four_column_five_url,
            'row_four_column_six_description' => $request->row_four_column_six_description,
            'row_four_column_six_url' => $request->row_four_column_six_url,
            'row_four_button_name' => $request->row_four_button_name,
            'row_four_button_url' => $request->row_four_button_url,
            'row_five_title' => $request->row_five_title,
            'row_five_header' => $request->row_five_header,
            'row_five_course_one' => $request->row_five_course_one,
            'row_five_course_two' => $request->row_five_course_two,
            'row_five_course_three' => $request->row_five_course_three,
            'row_six_title' => $request->row_six_title,
            'row_six_header' => $request->row_six_header,
            'row_six_section_one_title' => $request->row_six_section_one_title,
            'row_six_section_one_url' => $request->row_six_section_one_url,
            'row_six_section_two_title' => $request->row_six_section_two_title,
            'row_six_section_two_url' => $request->row_six_section_two_url,
            'row_six_section_three_title' => $request->row_six_section_three_title,
            'row_six_section_three_url' => $request->row_six_section_three_url,
            'row_six_section_four_title' => $request->row_six_section_four_title,
            'row_six_section_four_url' => $request->row_six_section_four_url,
            'row_six_section_five_title' => $request->row_six_section_five_title,
            'row_six_section_five_url' => $request->row_six_section_five_url,
            'row_six_section_six_title' => $request->row_six_section_six_title,
            'row_six_section_six_url' => $request->row_six_section_six_url,
            'row_six_button_name' => $request->row_six_button_name,
            'row_six_button_url' => $request->row_six_button_url,
            'row_seven_badge' => $request->row_seven_badge,
            'row_seven_title' => $request->row_seven_title,
            'row_seven_section_one_icon' => $request->row_seven_section_one_icon,
            'row_seven_section_one_title' => $request->row_seven_section_one_title,
            'row_seven_section_one_description' => $request->row_seven_section_one_description,
            'row_seven_section_one_url' => $request->row_seven_section_one_url,
            'row_seven_section_two_icon' => $request->row_seven_section_two_icon,
            'row_seven_section_two_title' => $request->row_seven_section_two_title,
            'row_seven_section_two_description' => $request->row_seven_section_two_description,
            'row_seven_section_two_url' => $request->row_seven_section_two_url,
            'row_seven_section_three_icon' => $request->row_seven_section_three_icon,
            'row_seven_section_three_title' => $request->row_seven_section_three_title,
            'row_seven_section_three_description' => $request->row_seven_section_three_description,
            'row_seven_section_three_url' => $request->row_seven_section_three_url,
            'row_eight_title' => $request->row_eight_title,
            'row_eight_header' => $request->row_eight_header,
            'row_nine_title' => $request->row_nine_title,
            'row_nine_button_name' => $request->row_nine_button_name,
            'row_nine_button_url' => $request->row_nine_button_url,
            'row_ten_title' => $request->row_ten_title,
            'row_ten_header' => $request->row_ten_header,

            'banner_one_image' => (!empty($banner_one_image) ? $banner_one_image : $home->banner_one_image),

        ]);

        return redirect()->route('admin.homepage.index')->with('success', 'Data has been update successfully');
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

        $homepage->delete();
    }
}
