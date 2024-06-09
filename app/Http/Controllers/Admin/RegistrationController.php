<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CourseQuery;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    //All Registration
    public function AllRegistration()
    {
        $registrations = CourseQuery::latest()->get();
        return view('admin.pages.registration.registration', compact('registrations'));
    }

    public function DeleteRegistration($id)
    {
        CourseQuery::findOrFail($id)->delete();

        return redirect()->back()->with('success', 'Registration Person Delete Successfully');
    }
}
