<?php

namespace App\Http\Controllers\Admin;

use App\Models\Faq;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FaqController extends Controller
{

    public function index()
    {
        return view('admin.pages.faq.index', [
            'faqs'              => Faq::latest('id')->get(),
            // 'dynamicCategories' => $this->dynamicCategoryRepository->allDynamicCategory(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Faq::create([
            'category' => $request->category,
            'question' => $request->question,
            'answer'   => $request->answer,
            'order'    => $request->order,
            'status'   => $request->status,
        ]);
        // toastr()->success('Data has been saved successfully!');
        return redirect()->back()->with('success', 'Data has been saved successfully!');
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
    public function update(Request $request, string $id)
    {
        $coupon = Faq::findOrFail($id);

        $coupon->update([
            'category' => $request->category,
            'question' => $request->question,
            'answer'   => $request->answer,
            'order'    => $request->order,
            'status'   => $request->status,
        ]);
        // toastr()->success('Data has been saved successfully!');
        return redirect()->back()->with('success', 'Data has been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Faq::find($id)->delete();
    }
}
