<?php

namespace App\Http\Controllers\Admin;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Event::latest()->get();
        return view('admin.pages.event.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.event.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'banner_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'row_one_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'row_three_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'row_five_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            // Add validation for other fields as necessary
        ]);


        $uploadedFiles = [];

        // Array of files to upload
        $files = [
            'banner_image'    => $request->file('banner_image'),
            'row_one_image'   => $request->file('row_one_image'),
            'row_three_image' => $request->file('row_three_image'),
            'row_five_image'  => $request->file('row_five_image'),
        ];


        foreach ($files as $key => $file) {
            if (!empty($file)) {
                $filePath = storage_path('app/public/' . $key);
                $uploadedFiles[$key] = customUpload($file, $filePath);
                if ($uploadedFiles[$key]['status'] === 0) {
                    return redirect()->back()->with('error', $uploadedFiles[$key]['error_message']);
                }
            } else {
                $uploadedFiles[$key] = ['status' => 0];
            }
        }


        // Create the event in the database
        Event::create([
            'event_name'            => $request->event_name,
            'start_date'            => $request->start_date,
            'start_time'            => $request->start_time,
            'end_date'              => $request->end_date,
            'end_time'              => $request->end_time,
            'event_short_descp'     => $request->event_short_descp,
            'max_attendees'         => $request->max_attendees,
            'current_attendees'     => $request->current_attendees,
            'banner_badge'          => $request->banner_badge,
            'banner_sub_title'      => $request->banner_sub_title,
            'banner_title'          => $request->banner_title,
            'organizer_text'        => $request->organizer_text,
            'map_link'              => $request->map_link,
            'website_link'          => $request->website_link,
            'whatsapp_link'         => $request->whatsapp_link,
            'other_link'            => $request->other_link,
            'row_one_title'         => $request->row_one_title,
            'row_one_description'   => $request->row_one_description,
            'row_one_button_name'   => $request->row_one_button_name,
            'row_one_button_link'   => $request->row_one_button_link,
            'row_two_title'         => $request->row_two_title,
            'row_two_description'   => $request->row_two_description,
            'row_three_badge'       => $request->row_three_badge,
            'row_three_title'       => $request->row_three_title,
            'row_three_description' => $request->row_three_description,
            'row_three_button_name' => $request->row_three_button_name,
            'row_three_button_link' => $request->row_three_button_link,
            'row_four_badge'        => $request->row_four_badge,
            'row_four_title'        => $request->row_four_title,
            'row_four_description'  => $request->row_four_description,
            'row_four_button_name'  => $request->row_four_button_name,
            'row_four_button_link'  => $request->row_four_button_link,
            'row_five_title'        => $request->row_five_title,
            'row_five_description'  => $request->row_five_description,
            'row_five_button_name'  => $request->row_five_button_name,
            'row_five_button_link'  => $request->row_five_button_link,
            'status'                => $request->status,
            'event_type'            => $request->event_type,
            'payment_type'          => $request->payment_type,
            'ticket_price'          => $request->ticket_price,
            'currency'              => $request->currency,
            'location'              => $request->location,
            'contact'               => $request->contact,
            'added_by'              => Auth::guard('admin')->user()->id,
            'updated_by'            => Auth::guard('admin')->user()->id,
            'created_at'            => now(),
            'banner_image'          => $uploadedFiles['banner_image']['status'] == 1 ? $uploadedFiles['banner_image']['file_name'] : null,
            'row_one_image'         => $uploadedFiles['row_one_image']['status'] == 1 ? $uploadedFiles['row_one_image']['file_name'] : null,
            'row_three_image'       => $uploadedFiles['row_three_image']['status'] == 1 ? $uploadedFiles['row_three_image']['file_name'] : null,
            'row_five_image'        => $uploadedFiles['row_five_image']['status'] == 1 ? $uploadedFiles['row_five_image']['file_name'] : null,
        ]);

        return redirect()->route('admin.event.index')->with('success', 'Data Inserted Successfully!');
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
        $item = Event::find($id);

        return view('admin.pages.event.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item = Event::findOrFail($id);

        // Define upload paths
        $uploadPath = storage_path('app/public/event/');

        // Handle banner image upload
        $mainFile = $request->file('banner_image');
        $globalFunImg = ['status' => 0, 'file_name' => null];

        if ($mainFile) {
            $globalFunImg = customUpload($mainFile, $uploadPath);
            // Delete the old banner image if a new one was successfully uploaded
            if ($globalFunImg['status'] == 1 && $item->banner_image) {
                $oldBannerImagePath = public_path('storage/event-page/') . $item->banner_image;
                if (File::exists($oldBannerImagePath)) {
                    File::delete($oldBannerImagePath);
                }
            }
        }

        // Handle row one image upload
        $iconmainFile = $request->file('row_one_image');
        $globalFunIconImg = ['status' => 0, 'file_name' => null];

        if ($iconmainFile) {
            $globalFunIconImg = customUpload($iconmainFile, $uploadPath);
            // Delete the old row one image if a new one was successfully uploaded
            if ($globalFunIconImg['status'] == 1 && $item->row_one_image) {
                $oldRowOneImagePath = public_path('storage/event-page/') . $item->row_one_image;
                if (File::exists($oldRowOneImagePath)) {
                    File::delete($oldRowOneImagePath);
                }
            }
        }

        // Update the item with new values
        $item->update([

            'event_name' => $request->event_name,
            'start_date' => $request->start_date,
            'start_time' => $request->start_time,
            'end_date' => $request->end_date,
            'end_time' => $request->end_time,

            'event_short_descp' => $request->event_short_descp,

            'max_attendees' => $request->max_attendees,
            'current_attendees' => $request->current_attendees,

            'banner_badge' => $request->banner_badge,
            'banner_sub_title' => $request->banner_sub_title,
            'banner_title' => $request->banner_title,
            'organizer_text' => $request->organizer_text,

            'map_link' => $request->map_link,
            'website_link' => $request->website_link,
            'whatsapp_link' => $request->whatsapp_link,
            'other_link' => $request->other_link,

            'row_one_title' => $request->row_one_title,
            'row_one_description' => $request->row_one_description,

            'row_two_title' => $request->row_two_title,
            'row_two_description' => $request->row_two_description,

            'row_three_badge' => $request->row_three_badge,
            'row_three_title' => $request->row_three_title,
            'row_three_description' => $request->row_three_description,

            'status' => $request->status,
            'event_type' => $request->event_type,

            'payment_type' => $request->payment_type,
            'ticket_price' => $request->ticket_price,
            'currency' => $request->currency,

            'location' => $request->location,
            'contact' => $request->contact,

            'added_by' => Auth::guard('admin')->user()->id,
            'updated_by' => Auth::guard('admin')->user()->id,

            'banner_image' => $globalFunImg['status'] == 1 ? $globalFunImg['file_name'] : $item->banner_image,
            'row_one_image' => $globalFunIconImg['status'] == 1 ? $globalFunIconImg['file_name'] : $item->row_one_image,
        ]);

        return redirect()->route('admin.event.index')->with('success', 'Data Updated Successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Event::findOrFail($id);
        $item->delete();
    }
}
