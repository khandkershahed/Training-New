<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TagRequest;
use Yajra\DataTables\Facades\DataTables;

class TagController extends Controller
{
    /**
     * The function sets middleware permissions for specific actions in a PHP class constructor.
     */
    public function __construct()
    {
        $this->middleware('permission:view tag|show tag|edit tag|delete tag|create tag')->only(['index', 'create', 'show', 'edit', 'destroy']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Tag::latest('id')->get();
            return DataTables::of($data)
                ->addColumn('checkbox', function ($item) {
                    return '<div class="form-check form-check-sm form-check-custom form-check-solid">
                    <input class="form-check-input emailDT-delete" id="manual_entry_' . $item->id . '" name="rowId[]" type="checkbox" value="' . $item->id . '"  />
                </div>';
                })
                ->addColumn('action', function ($row) {
                    $showUrl = route('admin.tags.show', [$row->id]);
                    $editUrl = route('admin.tags.edit', [$row->id]);
                    $deleteUrl = route('admin.tags.destroy', [$row->id]);
                    return '<a href="' . $showUrl . '" class="text-info"><i class="fas fa-edit text-info"></i></a>' .
                        '<a href="' . $editUrl . '" class="text-primary ms-4"><i class="fas fa-pen text-primary"></i></a>' .
                        '<a href="' . $deleteUrl . '" class="text-danger ms-4 delete"><i class="fas fa-trash-alt text-danger"></i></a>';
                })
                ->rawColumns(['action', 'checkbox'])
                ->make(true);
        }

        return view('admin.pages.tags.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.tags.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TagRequest $request)
    {
        Tag::create($request->all());
        return redirect()->route('admin.tags.index')->with('success', 'Tag created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tag $tag)
    {
        return view('admin.pages.tags.show', ['tag' => $tag]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tag $tag)
    {
        return view('admin.pages.tags.edit', ['tag' => $tag]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TagRequest $request, Tag $tag)
    {
        try {
            $tag->update($request->all());
            return redirect()->route('admin.tags.index')->with('success', 'Tag updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error updating tag');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function toggleStatus(string $id)
    {
        $tag = Tag::findOrFail($id);
        $tag->status = !$tag->status;
        $tag->save();
        return response()->json(['success' => $tag->status]);
    }
}
