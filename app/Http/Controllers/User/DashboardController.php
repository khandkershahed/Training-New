<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\usereventregistration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard() {
        $data = [
            'events' => usereventregistration::with('eventName')->where('user_id' , Auth::user()->id)->orderBy('created_at', 'desc')->get(),
        ];
        return view('dashboard',$data);
    }
}
