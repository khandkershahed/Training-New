<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseCurriculum;
use Illuminate\Http\Request;

class CourseCurriculamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courseCurriculams = CourseCurriculum::latest()->get();
        return view('admin.pages.course_curriculam.index', compact('courseCurriculams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $courses = Course::latest()->get();
        return view('admin.pages.course_curriculam.create', compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        CourseCurriculum::insert([

            'course_id' => $request->course_id,

            'badge' => $request->badge,
            'title' => $request->title,

            'duration' => $request->duration,
            'description' => $request->description,
            'class_number' => $request->class_number,

            'created_at' => now(),

        ]);

        return redirect()->route('admin.course_curriculam.index')->with('success', 'Course Curriculam Inserted Successfully!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        $courseCurriculam = CourseCurriculum::find($id);
        $courses = Course::latest()->get();

        return view('admin.pages.course_curriculam.edit', compact('courseCurriculam', 'courses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $course = CourseCurriculum::findOrFail($id);

        $course->update([

            'course_id' => $request->course_id,

            'badge' => $request->badge,
            'title' => $request->title,

            'duration' => $request->duration,
            'description' => $request->description,
            'class_number' => $request->class_number,

        ]);

        return redirect()->route('admin.course_curriculam.index')->with('success', 'Course Curriculam Update Successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        CourseCurriculum::findOrFail($id)->delete();
    }
}
