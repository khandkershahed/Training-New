<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\industry;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::latest()->get();
        return view('admin.pages.course.index', compact('courses'));
    }

    public function create()
    {
        $admins = Admin::latest()->get();
        $services = Service::latest()->get();
        $industrys = industry::latest()->get();
        $courseCats = CourseCategory::latest()->get();
        return view('admin.pages.course.create', compact('admins', 'courseCats', 'services', 'industrys'));
    }

    public function store(Request $request)
    {
        $mainFile = $request->file('thumbnail_image');
        $imgPath = storage_path('app/public/course/');

        $instructor = $request->instructor_id;
        if ($instructor !== null) {
            $instructors = implode(',', $instructor);
        } else {
            $instructors = null;
        }

        $service = $request->service_id;
        if ($service !== null) {
            $services = implode(',', $service);
        } else {
            $services = null;
        }

        $industry = $request->industry_id;
        if ($industry !== null) {
            $industrys = implode(',', $industry);
        } else {
            $industrys = null;
        }

        if (empty($mainFile)) {

            Course::insert([

                'instructor_id' => $instructors,
                'service_id' => $services,
                'industry_id' => $industrys,

                'course_category_id' => $request->course_category_id,

                'name' => $request->name,
                'slug' => Str::slug($request->name, "-"),

                'course_code' => 'NG-' . strtoupper(Str::random(10)),

                'tags' => $request->tags,
                'lecture' => $request->lecture,
                'project' => $request->project,
                'course_duration' => $request->course_duration,

                'course_time' => $request->course_time,
                'available_seats' => $request->available_seats,

                'price' => $request->price,
                'discount_price' => $request->discount_price,
                'online_price' => $request->online_price,

                'discount_start_date' => $request->discount_start_date,
                'discount_end_date' => $request->discount_end_date,

                'class_start_date' => $request->class_start_date,
                'class_end_date' => $request->class_end_date,

                'registration_start_date' => $request->registration_start_date,
                'registration_end_date' => $request->registration_end_date,

                'short_descp' => $request->short_descp,
                'overview' => $request->overview,
                'currency' => $request->currency,
                'total_student' => $request->total_student,
                'description' => $request->description,

                'created_at' => now(),

            ]);
        } else {

            $globalFunImg = customUpload($mainFile, $imgPath);

            if ($globalFunImg['status'] == 1) {

                Course::insert([

                    'instructor_id' => $instructors,
                    'service_id' => $services,
                    'industry_id' => $industrys, 'instructor_id' => $request->instructor_id,

                    'course_category_id' => $request->course_category_id,

                    'name' => $request->name,
                    'slug' => Str::slug($request->name, "-"),

                    'course_code' => 'NG-' . strtoupper(Str::random(10)),

                    'tags' => $request->tags,
                    'lecture' => $request->lecture,
                    'project' => $request->project,
                    'course_duration' => $request->course_duration,

                    'course_time' => $request->course_time,
                    'available_seats' => $request->available_seats,

                    'price' => $request->price,
                    'discount_price' => $request->discount_price,
                    'online_price' => $request->online_price,

                    'discount_start_date' => $request->discount_start_date,
                    'discount_end_date' => $request->discount_end_date,

                    'class_start_date' => $request->class_start_date,
                    'class_end_date' => $request->class_end_date,

                    'registration_start_date' => $request->registration_start_date,
                    'registration_end_date' => $request->registration_end_date,

                    'thumbnail_image' => $globalFunImg['file_name'],

                    'short_descp' => $request->short_descp,
                    'overview' => $request->overview,
                    'currency' => $request->currency,
                    'total_student' => $request->total_student,
                    'description' => $request->description,

                    'created_at' => now(),

                ]);
            } else {
                return redirect()->back()->withInput()->with('error', 'Image upload failed! plz try again');
            }
        }

        // flash()->success('');

        return redirect()->route('admin.course.index')->with('success', 'Course Inserted Successfully!!');
    }

    public function edit(Request $request, $id)
    {
        $course = Course::find($id);
        $admins = Admin::latest()->get();
        $services = Service::latest()->get();
        $industrys = industry::latest()->get();
        $courseCats = CourseCategory::latest()->get();
        return view('admin.pages.course.edit', compact('course', 'admins', 'courseCats', 'services', 'industrys'));
    }

    public function update(Request $request, $id)
    {
        $course = Course::findOrFail($id);

        $mainFile = $request->file('thumbnail_image');
        $uploadPath = storage_path('app/public/course/');

        $instructor = $request->instructor_id;
        if ($instructor !== null) {
            $instructors = implode(',', $instructor);
        } else {
            $instructors = null;
        }

        $service = $request->service_id;
        if ($service !== null) {
            $services = implode(',', $service);
        } else {
            $services = null;
        }

        $industry = $request->industry_id;
        if ($industry !== null) {
            $industrys = implode(',', $industry);
        } else {
            $industrys = null;
        }

        if (isset($mainFile)) {
            $globalFunImg = customUpload($mainFile, $uploadPath);
        } else {
            $globalFunImg['status'] = 0;
        }

        if (!empty($course)) {

            if ($globalFunImg['status'] == 1) {
                if (File::exists(public_path('storage/course/requestImg/') . $course->thumbnail_image)) {
                    File::delete(public_path('storage/course/requestImg/') . $course->thumbnail_image);
                }
                if (File::exists(public_path('storage/course/') . $course->thumbnail_image)) {
                    File::delete(public_path('storage/course/') . $course->thumbnail_image);
                }
            }

            $course->update([

                'instructor_id' => $instructors,
                'service_id' => $services,
                'industry_id' => $industrys,
                
                'course_category_id' => $request->course_category_id,

                'name' => $request->name,
                'slug' => Str::slug($request->name, "-"),

                // 'course_code' => 'NG-' . strtoupper(Str::random(10)),

                'tags' => $request->tags,
                'lecture' => $request->lecture,
                'project' => $request->project,
                'course_duration' => $request->course_duration,

                'course_time' => $request->course_time,
                'available_seats' => $request->available_seats,

                'price' => $request->price,
                'discount_price' => $request->discount_price,
                'online_price' => $request->online_price,

                'discount_start_date' => $request->discount_start_date,
                'discount_end_date' => $request->discount_end_date,

                'class_start_date' => $request->class_start_date,
                'class_end_date' => $request->class_end_date,

                'registration_start_date' => $request->registration_start_date,
                'registration_end_date' => $request->registration_end_date,

                'short_descp' => $request->short_descp,
                'overview' => $request->overview,
                'currency' => $request->currency,
                'total_student' => $request->total_student,
                'description' => $request->description,

                'thumbnail_image' => $globalFunImg['status'] == 1 ? $globalFunImg['file_name'] : $course->thumbnail_image,

            ]);
        }

        return redirect()->route('admin.course.index')->with('success', 'Course Update Successfully!!');
    }

    public function destroy($id)
    {
        $course = Course::findOrFail($id);

        if (File::exists(public_path('storage/course/requestImg/') . $course->thumbnail_image)) {
            File::delete(public_path('storage/course/requestImg/') . $course->thumbnail_image);
        }

        if (File::exists(public_path('storage/course/') . $course->thumbnail_image)) {
            File::delete(public_path('storage/course/') . $course->thumbnail_image);
        }

        $course->delete();
    }

}
