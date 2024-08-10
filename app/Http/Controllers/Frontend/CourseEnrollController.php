<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\UserCourseRegistration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseEnrollController extends Controller
{
    // Price 
    public function AddToCartCourse(Request $request)
    {
        if (Auth::check()) {

            UserCourseRegistration::insert([

                'user_id' => Auth::user()->id,
                'name' => Auth::user()->name,
                'email' => Auth::user()->email,
                'phone' => Auth::user()->phone,

                'course_section_id' => $request->course_section_id,
                'course_category_id' => $request->course_category_id,

                'course_type' => $request->course_type,
                'course_amount' => $request->course_amount,

                'course_id' => $request->course_id,

                'course_register_date' => now(),

            ]);

            return response()->json(['success' => 'Successfully Added on Your Course']);
        } else {
            return response()->json(['error' => 'At First Login Your Account']);
        }
    }

    // Price 
    public function AddToCartOnlineCourse(Request $request)
    {
        if (Auth::check()) {

            UserCourseRegistration::insert([

                'user_id' => Auth::user()->id,
                'name' => Auth::user()->name,
                'email' => Auth::user()->email,
                'phone' => Auth::user()->phone,

                'course_section_id' => $request->course_section_id,
                'course_category_id' => $request->course_category_id,

                'course_type' => 'online',
                'course_amount' => $request->course_amount,

                'course_id' => $request->course_id,

                'course_register_date' => now(),

            ]);

            return response()->json(['success' => 'Successfully Added on Your Course']);
        } else {
            return response()->json(['error' => 'At First Login Your Account']);
        }
    }

    // public function AddToCartCourse(Request $request)
    // {
    //     // Validate the request data
    //     $validated = $request->validate([
    //         'course_id' => 'required|integer|exists:courses,id', // Adjust as per your schema
    //         'course_section_id' => 'required|integer',
    //         'course_category_id' => 'required|integer',
    //         'course_type' => 'required|string',
    //     ]);

    //     if (Auth::check()) {
    //         $userId = Auth::id();
    //         $courseId = $validated['course_id'];

    //         // Check if the course is already in the user's cart
    //         $exists = UserCourseRegistration::where('user_id', $userId)
    //             ->where('course_id', $courseId)
    //             ->exists();

    //         if (!$exists) {
    //             UserCourseRegistration::create([
    //                 'user_id' => $userId,
    //                 'name' => Auth::user()->name,
    //                 'email' => Auth::user()->email,
    //                 'phone' => Auth::user()->phone,
    //                 'course_section_id' => $validated['course_section_id'],
    //                 'course_category_id' => $validated['course_category_id'],
    //                 'course_type' => $validated['course_type'],
    //                 'course_id' => $courseId,
    //                 'course_register_date' => now(),
    //             ]);

    //             return response()->json(['success' => 'Successfully Added to Your Course']);
    //         } else {
    //             return response()->json(['error' => 'This Course Is Already in Your Cart']);
    //         }
    //     } else {
    //         return response()->json(['error' => 'Please Login First']);
    //     }
    // }

}
