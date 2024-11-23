<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\usereventregistration;
use App\Models\UserCourseRegistration;

class DashboardController extends Controller
{
    public function dashboard()
    {
        // Get the events related to the logged-in user
        $data = [
            'events' => usereventregistration::with('eventName')
                ->where('user_id', Auth::user()->id)
                ->orderBy('created_at', 'desc')
                ->get(),
        ];

        // Get the courses related to the logged-in user
        $registerCourse = UserCourseRegistration::with('courseName')
            ->where('user_id', Auth::id())
            ->get();

        // Pass both $data and $registerCourse to the view
        return view('dashboard', array_merge($data, ['registerCourse' => $registerCourse]));
    }
}
