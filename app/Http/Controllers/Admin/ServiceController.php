<?php

namespace App\Http\Controllers\Admin;

use App\Models\Icon;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\HtmlString;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\Admin\ServiceRequest;

class ServiceController extends Controller
{
    /**
     * The function sets middleware permissions for specific actions in a PHP class constructor.
     */
    public function __construct()
    {
        $this->middleware('permission:view service|show service|edit service|delete service|create service')->only(['index', 'create', 'show', 'edit', 'destroy']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Service::latest('id')->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $showUrl   = route('admin.services.show', $row->id);
                    $editUrl   = route('admin.services.edit', $row->id);
                    $deleteUrl = route('admin.services.destroy', $row->id);

                    $html = <<<HTML
                    <td class="text-end">
                        <a href="{$showUrl}" class="btn btn-icon btn-active-light-info w-30px h-30px me-3">
                            <span class="svg-icon svg-icon-3">
                                <i class="fas fa-eye"></i>
                            </span>
                        </a>
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

        return view('admin.pages.services.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.services.create', ['icons' => Icon::get()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ServiceRequest $request)
    {
        try {
            DB::beginTransaction();

            Service::create([
                'icon_id' => $request->icon_id,
                'title' => $request->title,
                'short_description' => $request->short_description,
                'status' => $request->status,
            ]);

            DB::commit();

            return redirect()->route('admin.services.index')->with('success', 'Service created successfully');
        } catch (\Exception $e) {
            DB::rollback();

            return redirect()->back()->with('error', 'An error occurred while creating the icon: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        return view('admin.pages.services.show', ['service' => $service, 'icons' => Icon::get()]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('admin.pages.services.edit', ['service' => $service, 'icons' => Icon::get()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ServiceRequest $request, Service $service)
    {
        try {
            DB::beginTransaction();

            $service->update([
                'icon_id' => $request->icon_id,
                'title' => $request->title,
                'short_description' => $request->short_description,
                'status' => $request->status,
            ]);

            DB::commit();

            return redirect()->route('admin.services.index')->with('success', 'Service updated successfully');
        } catch (\Exception $e) {
            DB::rollback();

            return redirect()->back()->with('error', 'An error occurred while creating the icon: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $service->delete();
    }

    public function toggleStatus(string $id)
    {
        $service = Service::findOrFail($id);
        $service->status = !$service->status;
        $service->save();
        return response()->json(['success' => $service->status]);
    }
}
