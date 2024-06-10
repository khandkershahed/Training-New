<?php

namespace App\Http\Controllers;

use App\Models\CourseCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class CourseCategoryController extends Controller
{
    public function index()
    {
        $courseCats = CourseCategory::latest()->get();
        return view('admin.pages.course_category.index', compact('courseCats'));
    }

    public function create()
    {
        return view('admin.pages.course_category.create');
    }

    public function store(Request $request)
    {
        // Validation rules
        $rules = [
            'description' => 'required', // Add validation for the description field
        ];

        // Custom error messages
        $messages = [
            'description.required' => 'The description field is required.',
        ];

        // Validate the request
        $validator = Validator::make($request->all(), $rules, $messages);

        // Check if the validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Your existing code for file handling and storing course category

        $files = [
            'logo', 'banner_image', 'thumbnail_image',
        ];

        $storagePath = storage_path('app/public/course_category/');
        $publicPath = public_path('images/course_category/'); // Assuming this is your public folder path for storing images
        $filePaths = [];

        foreach ($files as $file) {
            $uploadedFile = $request->file($file);

            if (!empty($uploadedFile)) {
                // Generate unique filename for storage
                $storageFileName = customUpload($uploadedFile, $storagePath);

                if ($storageFileName['status'] == 1) {
                    // Move the file to the public folder with a different name
                    $uploadedFile->move($publicPath, $storageFileName['file_name']);

                    // Store the public folder name in the database
                    $filePaths[$file] = $storageFileName['file_name'];
                } else {
                    // Handle error if file upload fails
                    $filePaths[$file] = null;
                }
            } else {
                $filePaths[$file] = null;
            }
        }

        // Create course category with file paths
        CourseCategory::create([
            'name' => $request->name,
            'header' => $request->header,
            'description' => $request->description,
        ] + $filePaths);

        // If everything is successful
        return redirect()->route('admin.course_category.index')->with('success', 'Course Category Inserted Successfully!!');
    }

    public function edit(Request $request, $id)
    {
        $courseCat = CourseCategory::find($id);
        return view('admin.pages.course_category.edit', compact('courseCat'));
    }

    public function update(Request $request, $id)
    {
        // Validation rules
        $rules = [
            'description' => 'required', // Add validation for the description field
        ];

        // Custom error messages
        $messages = [
            'description.required' => 'The description field is required.',
        ];

        // Validate the request
        $validator = Validator::make($request->all(), $rules, $messages);

        // Check if the validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Find the existing course category
        $courseCategory = CourseCategory::findOrFail($id);

        // Update course category attributes
        $courseCategory->name = $request->name;
        $courseCategory->header = $request->header;
        $courseCategory->description = $request->description;

        // Check if new images are provided and update file paths accordingly
        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $logoFileName = customUpload($logo, storage_path('app/public/course_category/'));
            $courseCategory->logo = $logoFileName['status'] == 1 ? $logoFileName['file_name'] : null;
        }

        if ($request->hasFile('banner_image')) {
            $bannerImage = $request->file('banner_image');
            $bannerImageFileName = customUpload($bannerImage, storage_path('app/public/course_category/'));
            $courseCategory->banner_image = $bannerImageFileName['status'] == 1 ? $bannerImageFileName['file_name'] : null;
        }

        if ($request->hasFile('thumbnail_image')) {
            $thumbnailImage = $request->file('thumbnail_image');
            $thumbnailImageFileName = customUpload($thumbnailImage, storage_path('app/public/course_category/'));
            $courseCategory->thumbnail_image = $thumbnailImageFileName['status'] == 1 ? $thumbnailImageFileName['file_name'] : null;
        }

        // Save the changes to the database
        $courseCategory->save();

        // If everything is successful
        return redirect()->route('admin.course_category.index')->with('success', 'Course Category Updated Successfully!!');
    }

    public function destroy($id)
    {
        $course = CourseCategory::findOrFail($id);

        if (File::exists(public_path('storage/course_category/requestImg/') . $course->thumbnail_image)) {
            File::delete(public_path('storage/course_category/requestImg/') . $course->thumbnail_image);
        }

        if (File::exists(public_path('storage/course_category/') . $course->thumbnail_image)) {
            File::delete(public_path('storage/course_category/') . $course->thumbnail_image);
        }

        if (File::exists(public_path('storage/course_category/requestImg/') . $course->banner_image)) {
            File::delete(public_path('storage/course_category/requestImg/') . $course->banner_image);
        }

        if (File::exists(public_path('storage/course_category/') . $course->banner_image)) {
            File::delete(public_path('storage/course_category/') . $course->banner_image);
        }

        if (File::exists(public_path('storage/course_category/requestImg/') . $course->logo)) {
            File::delete(public_path('storage/course_category/requestImg/') . $course->logo);
        }

        if (File::exists(public_path('storage/course/') . $course->logo)) {
            File::delete(public_path('storage/course/') . $course->logo);
        }

        $course->delete();
    }
}
