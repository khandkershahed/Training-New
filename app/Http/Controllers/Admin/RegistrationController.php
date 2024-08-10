<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\UserCourseRegistration;


class RegistrationController extends Controller
{
    //All Registration
    public function AllRegistration()
    {
        $registrations = UserCourseRegistration::with('courseName')->latest()->get();
        return view('admin.pages.registration.registration', compact('registrations'));
    }

    public function DeleteRegistration($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Registration Person Delete Successfully');
    }

    public function PaymentPaid($id)
    {
        UserCourseRegistration::findOrFail($id)->update([
            'payment_type' => 'paid',
        ]);

        return redirect()->back()->with('success', 'Payment status updated successfully');
    }

    public function PaymentUnpaid($id)
    {
        UserCourseRegistration::findOrFail($id)->update([
            'payment_type' => 'unpaid',
        ]);

        return redirect()->back()->with('success', 'Payment status updated successfully');
    }

    
}
