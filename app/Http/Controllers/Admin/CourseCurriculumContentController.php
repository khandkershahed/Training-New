<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CourseCurriculum;
use App\Models\CourseCurriculumContent;
use Illuminate\Http\Request;

class CourseCurriculumContentController extends Controller
{

    public function index()
    {
        $courseContents = CourseCurriculumContent::latest()->get();
        return view('admin.pages.course_curriculum_content.index', compact('courseContents'));
    }

    public function create()
    {
        $courseCurriculums = CourseCurriculum::latest()->get();
        return view('admin.pages.course_curriculum_content.create', compact('courseCurriculums'));
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'course_curriculum_id' => 'required|integer|exists:course_curriculum_contents,id',
            'course_file' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
            'course_video.*' => 'nullable|file|mimes:mp4,mov,avi|max:1048576000', 
        ]);

        // Path to store the files
        $filePath = storage_path('app/public/course_curriculum_content/');

        // Process the course file upload
        $fileName = null;
        if ($request->hasFile('course_file')) {
            $courseFile = $request->file('course_file');
            $fileName = $courseFile->store('files', 'public'); // Store file in public disk
        }

        // Process the course video uploads
        $videoNames = [];
        if ($request->hasFile('course_video')) {
            foreach ($request->file('course_video') as $video) {
                $videoName = $video->store('videos', 'public'); // Store videos in public disk
                $videoNames[] = $videoName;
            }
        }

        
        CourseCurriculumContent::create([
            'course_curriculum_id' => $request->course_curriculum_id,
            'course_file' => $fileName,
            'course_video' => json_encode($videoNames),
            'created_at' => now(),
        ]);

        return redirect()->route('admin.course_curriculum_content.index')->with('success', 'Course Curriculum Content Inserted Successfully!');
    }

    // public function edit(Request $request, $id)
    // {
    //     $courseContent = CourseContent::find($id);
    //     $courses = Course::latest()->get();

    //     return view('admin.pages.course_content.edit', compact('courseContent', 'courses'));
    // }

    // public function update(Request $request, $id)
    // {
    //     $course = CourseContent::findOrFail($id);

    //     $mainFile = $request->file('attachment');
    //     $uploadPath = storage_path('app/public/course_content/');

    //     if (isset($mainFile)) {
    //         $globalFunImg = customUpload($mainFile, $uploadPath);
    //     } else {
    //         $globalFunImg['status'] = 0;
    //     }

    //     if (!empty($course)) {

    //         if ($globalFunImg['status'] == 1) {
    //             if (File::exists(public_path('storage/course_content/requestImg/') . $course->attachment)) {
    //                 File::delete(public_path('storage/course_content/requestImg/') . $course->attachment);
    //             }
    //             if (File::exists(public_path('storage/course_content/') . $course->attachment)) {
    //                 File::delete(public_path('storage/course_content/') . $course->attachment);
    //             }

    //             if (File::exists(public_path('storage/files/') . $course->attachment)) {
    //                 File::delete(public_path('storage/files/') . $course->attachment);
    //             }
    //         }

    //         $course->update([

    //             'course_id' => $request->course_id,

    //             'attachment' => $globalFunImg['status'] == 1 ? $globalFunImg['file_name'] : $course->attachment,

    //         ]);
    //     }

    //     return redirect()->route('admin.course_content.index')->with('success', 'Course Content Update Successfully!!');
    // }

    // public function destroy($id)
    // {
    //     $course = CourseContent::findOrFail($id);

    //     if (File::exists(public_path('storage/course/requestImg/') . $course->attachment)) {
    //         File::delete(public_path('storage/course/requestImg/') . $course->attachment);
    //     }

    //     if (File::exists(public_path('storage/course/') . $course->attachment)) {
    //         File::delete(public_path('storage/course/') . $course->attachment);
    //     }

    //     if (File::exists(public_path('storage/files/') . $course->attachment)) {
    //         File::delete(public_path('storage/files/') . $course->attachment);
    //     }

    //     $course->delete();
    // }
}
