<?php

namespace App\Http\Controllers\User\Auth;

use App\Models\User;
use App\Models\Admin;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use App\Models\usereventregistration;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Notification;
use App\Notifications\UserRegistrationNotification;

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
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::min(8)->mixedCase()->symbols()->letters()->numbers()],
            'preferences' => 'nullable', //

        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'password' => Hash::make($request->password),
            'activation_code' => Str::random(32),
            'preferences' => json_encode($request->preferences),
        ]);

        event(new Registered($user));

        //Notification
        $admin = Admin::where('status', 'active')->get();
        Notification::send($admin, new UserRegistrationNotification($request->name));
        //Notification

        // usereventregistration::create([

        //     'user_id' => $user,
        //     'event_id' => $request->event_id,
        //     'project_name' => $request->project_name,
        //     'team_member' => $request->team_member,
        //     'team_member_one_name' => $request->team_member_one_name,
        //     'team_member_two_name' => $request->team_member_two_name,
        //     'amount_paid' => $request->amount_paid,
        //     'transaction_id' => $request->transaction_id,

        // ]);

        // return redirect()->route('login')->with('success', 'Check your email');
        return redirect()->back();
    }
}
