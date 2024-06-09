<?php

namespace App\Http\Controllers\Admin;

use App\Models\Footer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\HtmlString;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\FooterRequest;
use Yajra\DataTables\Facades\DataTables;

class FooterController extends Controller
{
    /**
     * The function sets middleware permissions for specific actions in a PHP class constructor.
     */
    public function __construct()
    {
        $this->middleware('permission:view footer|show footer|edit footer|delete footer|create footer')->only(['index', 'create', 'edit', 'destroy']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Footer::latest('id')->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $editUrl   = route('admin.footers.edit', $row->id);
                    $deleteUrl = route('admin.footers.destroy', $row->id);

                    $html = <<<HTML
                    <td class="text-end">
                        <a href="{$editUrl}" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3">
                            <span class="svg-icon svg-icon-3">
                                <i class="fas fa-pen"></i>
                            </span>
                        </a>
                        <a href="{$deleteUrl}" class="btn btn-icon btn-active-light-danger w-30px h-30px delete">
                            <span class="svg-icon svg-icon-3">
                                <i class="fas fa-trash-alt"></i>
                            </span>
                        </a>
                    </td>
                    HTML;

                    return new HtmlString($html);
                })->rawColumns(['action'])->make(true);
        }

        return view('admin.pages.footers.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.footers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FooterRequest $request)
    {
        DB::beginTransaction();
        try {
            Footer::create($request->only('menu_name', 'menu_url', 'status'));

            DB::commit();

            return redirect()->route('admin.footers.index')->with('success', 'Footer created successfully');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'An error occurred while creating the icon: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Footer $footer)
    {
        // deprecated
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Footer $footer)
    {
        return view('admin.pages.footers.edit', ['footer' => $footer]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Footer $footer)
    {
        DB::beginTransaction();
        try {
            $footer->update($request->only('menu_name', 'menu_url', 'status'));

            DB::commit();

            return redirect()->route('admin.footers.index')->with('success', 'Footer updated successfully');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'An error occurred while updating the footer: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Footer $footer)
    {
        $footer->delete();
    }

    public function toggleStatus(string $id)
    {
        $footer = Footer::findOrFail($id);
        $footer->status = !$footer->status;
        $footer->save();
        return response()->json(['success' => $footer->status]);
    }
}
