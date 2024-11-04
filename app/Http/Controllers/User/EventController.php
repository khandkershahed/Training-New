<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function userAllEvent() {
        return view('user.event.all');
    }
    // public function userAllEvent() {
    //     return view('user.event.all');
    // }
}
