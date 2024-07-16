<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\User;
use App\Models\UserCourse;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('user.auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],

            'password' => [
                'required',
                'string',
                'min:8', // Minimum length of 8 characters
                'regex:/[A-Z]/', // Must contain at least one uppercase letter
                'regex:/[a-z]/', // Must contain at least one lowercase letter
                'regex:/[0-9]/', // Must contain at least one number
                'regex:/[@$!%*?&]/', // Must contain at least one special character
            ],

            'course_id' => ['required'],

            'phone' => ['required', 'string', 'regex:/^01[0-9]{9}$/'], // Adjust regex as needed

        ]);

        $course = Course::find($request->course_id);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'course_id' => $request->course_id,
            'password' => Hash::make($request->password),
        ]);

        UserCourse::create([
            'user_id' => $user->id,
            'course_id' => $request->course_id,
            'enrollment_date' => Carbon::now(),
            'payment_status' => 'unpaid',
            'payment_amount' => $course->price,
            'created_at' => Carbon::now(),
        ]);

        // event(new Registered($user));

        // Auth::login($user);

        return redirect()->route('login')->with('success', 'Register successfully');
    }
}
