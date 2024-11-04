<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Models\CourseCategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\usereventregistration;

class EventController extends Controller
{
    public function userAllEvent()
    {

        $eventregs = usereventregistration::where('user_id', Auth::id())->get();
        $categorys = CourseCategory::all();

        return view('user.event.all', compact('categorys','eventregs'));
    }
}
