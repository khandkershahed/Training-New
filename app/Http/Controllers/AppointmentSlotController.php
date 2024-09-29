<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AppointmentSlot;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AppointmentSlotController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            // 'slots' => AppointmentSlot::latest()->get(),
        ];
        return view('admin.pages.appointmentSlot.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'counselor_id' => 'required|exists:admins,id',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
            'date' => 'required|date',
            'added_by' => 'nullable|exists:admins,id',
        ]);

        // Create a new appointment slot
        $appointmentSlot = AppointmentSlot::create([
            'counselor_id' => Auth::guard('admin')->user()->id,
            'start_time'   => $request->start_time,
            'end_time'     => $request->end_time,
            'date'         => $request->date,
            'added_by'     => $request->added_by,
            'updated_by'   => $request->added_by, // If you want to track who added it
        ]);

        Session::flash('success', 'Slot updated Successfully');
        return redirect()->back();
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Find the existing appointment slot
        $appointmentSlot = AppointmentSlot::findOrFail($id);

        // Validate the incoming request data
        $request->validate([
            'counselor_id' => 'required|exists:admins,id',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
            'date' => 'required|date',
            'updated_by' => 'nullable|exists:admins,id',
        ]);

        // Update the appointment slot
        $appointmentSlot->update([
            'counselor_id' => Auth::guard('admin')->user()->id,
            'start_time'   => $request->start_time,
            'end_time'     => $request->end_time,
            'date'         => $request->date,
            'updated_by'   => $request->updated_by,
        ]);

        Session::flash('success', 'Slot updated Successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $appointmentSlot = AppointmentSlot::findOrFail($id);
        $appointmentSlot->delete();
    }
}
