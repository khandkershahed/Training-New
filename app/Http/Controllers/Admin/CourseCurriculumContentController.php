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
            'course_curriculum_id' => 'required|integer',
            'course_file' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
            'course_video.*' => 'nullable|file|mimes:mp4,mov,avi|max:1048576000',
        ]);

        // Initialize variables
        $fileName = null;
        $videoNames = null;

        // Process the course file upload
        if ($request->hasFile('course_file')) {
            $courseFile = $request->file('course_file');
            $fileName = $courseFile->store('files', 'public'); // Store file in public disk
        }

        // Process the course video uploads
        if ($request->hasFile('course_video')) {
            foreach ($request->file('course_video') as $video) {
                if ($video->isValid()) {
                    $videoName = $video->store('videos', 'public'); // Store videos in public disk
                    $videoNames[] = $videoName;
                }
            }
        }

        // Create a new record
        CourseCurriculumContent::create([
            'course_curriculum_id' => $request->course_curriculum_id,
            'course_file' => $fileName,
            'course_video' => json_encode($videoNames), // Store video names as JSON
            'created_at' => now(),
        ]);

        return redirect()->route('admin.course_curriculum_content.index')->with('success', 'Course Curriculum Content Inserted Successfully!');
    }

    public function edit(Request $request, $id)
    {
        $courseContent = CourseCurriculumContent::find($id);
        $courseCurriculums = CourseCurriculum::latest()->get();

        return view('admin.pages.course_curriculum_content.edit', compact('courseContent', 'courseCurriculums'));
    }

    public function update(Request $request, $id)
    {
        $course = CourseCurriculumContent::findOrFail($id);
        $course->update([
            'course_curriculum_id' => $request->course_curriculum_id,
        ]);

        return redirect()->route('admin.course_curriculum_content.index')->with('success', 'Course Curriculum Content Update Successfully!!');
    }

    public function UpdateVideo(Request $request)
    {
        // Get existing video records
        $courseContent = CourseCurriculumContent::findOrFail($request->id); // Assuming you pass an ID or some identifier
        $existingVideos = json_decode($courseContent->course_video, true) ?? [];

        $updatedVideos = [];

        foreach ($existingVideos as $key => $oldVideo) {
            // Delete the old video if a new one is uploaded
            if ($request->hasFile("course_video.$key")) {
                // Delete the old video from storage
                $oldVideoPath = storage_path('app/public/' . $oldVideo);
                if (file_exists($oldVideoPath)) {
                    unlink($oldVideoPath);
                }

                // Handle new video upload
                $newVideo = $request->file("course_video.$key");
                if ($newVideo->isValid()) {
                    $newVideoName = $newVideo->store('videos', 'public');
                    $updatedVideos[] = $newVideoName;
                }
            } else {
                // If no new video is uploaded, keep the old video
                $updatedVideos[] = $oldVideo;
            }
        }

        // Update the course video record
        $courseContent->update([
            'course_video' => json_encode($updatedVideos),
        ]);

        return redirect()->route('admin.course_curriculum_content.index')
            ->with('success', 'Course Curriculum Content Updated Successfully!');
    }

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
