<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Models\CourseCategory;
use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;
use App\Models\usereventregistration;

class EventController extends Controller
{
    public function userAllEvent()
    {
        $eventregs = usereventregistration::where('user_id', Auth::id())->get();
        $categorys = CourseCategory::all();
        return view('user.event.all', compact('categorys', 'eventregs'));
    }

    //userEventDetails
    public function userEventDetails($slug)
    {
        $event = Event::where('slug', $slug)->first();
        $eventreg = usereventregistration::where('user_id', Auth::user()->id)->where('event_id', $event->id)->first();

        return view('user.event.event_details', compact('eventreg', 'event'));
    }

    public function downloadAttachment($id)
    {
        $application = usereventregistration::findOrFail($id);
        $filePath = storage_path('app/public/files/' . $application->attachment);

        return response()->download($filePath);
    }

    public function userEventRegistration(Request $request, $id)
    {
        $eventReg = Usereventregistration::findOrFail($id);

        if ($request->file('attachment')) {
            $mainFile = $request->file('attachment');
            $imgPath = storage_path('app/public/files/');
            $globalFunImg = customUpload($mainFile, $imgPath);
        } else {
            $globalFunImg['status'] = null;
        }

        $eventReg->update([
            'project_name'         => $request->project_name,
            'project_link'         => $request->project_link,
            'project_duration'     => $request->project_duration,
            'technology_used'      => $request->technology_used,
            'team_member'          => $request->team_member,
            'team_member_one_name' => $request->team_member_one_name,
            'team_member_two_name' => $request->team_member_two_name,
            'speech_check' => $request->speech_check,
            'speech' => $request->speech,

            'attachment'           => $globalFunImg['status'] == 1 ? $globalFunImg['file_name'] : null,

        ]);

        return redirect()->back()->with('success', 'Event registration updated successfully.');
    }
}
