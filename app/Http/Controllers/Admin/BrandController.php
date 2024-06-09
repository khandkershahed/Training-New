<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BrandRequest;
use Illuminate\Support\Facades\File;
use Yajra\DataTables\Facades\DataTables;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Brand::latest('id')->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $showUrl   = route('admin.brands.show', $row->id);
                    $editUrl   = route('admin.brands.edit', $row->id);
                    $deleteUrl = route('admin.brands.destroy', $row->id);

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

        return view('admin.pages.brands.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BrandRequest $request)
    {
        DB::beginTransaction();

        try {
            $brands = Brand::create($request->only('name', 'url', 'status'));

            if ($request->hasFile('logo')) {
                $mainFileImage       = $request->file('logo');
                $mainFileImageGlobal = handaleFileUpload($request->file('logo'), 'brands');

                Media::create([
                    'name'       => $mainFileImage->getClientOriginalName(),
                    'file_name'  => $mainFileImageGlobal,
                    'mime_type'  => $mainFileImage->getMimeType(),
                    'disk'       => 'public',
                    'size'       => $mainFileImage->getSize(),
                    'model_type' => Brand::class,
                    'model_id'   => $brands->id,
                ]);
            }

            DB::commit();
            return redirect()->route('admin.brands.index')->with('success', 'Brand created successfully');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'An error occurred while creating the icon: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        return view('admin.pages.brands.show', ['brand' => $brand]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        return view('admin.pages.brands.edit', ['brand' => $brand]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BrandRequest $request, Brand $brand)
    {
        DB::beginTransaction();

        try {
            $brand->update($request->only('name', 'url', 'status'));

            if ($request->hasFile('logo')) {
                $mainFileImage       = $request->file('logo');
                $mainFileImageGlobal = handaleFileUpload($mainFileImage, 'brands');

                // Delete the old logo
                if ($brand->media && File::exists(storage_path('app/public/' . $brand->media->file_name))) {
                    File::delete(storage_path('app/public/' . $brand->media->file_name));
                }
                // Update or create the Media
                $brand->media()->updateOrCreate([], [
                    'name'      => $mainFileImage->getClientOriginalName(),
                    'file_name' => $mainFileImageGlobal,
                    'mime_type' => $mainFileImage->getMimeType(),
                    'disk'      => 'public',
                    'size'      => $mainFileImage->getSize(),
                ]);
            }

            DB::commit();

            return redirect()->route('admin.brands.index')->with('success', 'Brand updated successfully');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'An error occurred while updating the icon: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        //Delete the image if it exists
        if ($brand->media && File::exists(storage_path('app/public/' . $brand->media->file_name))) {
            File::delete(storage_path('app/public/' . $brand->media->file_name));
        }
        $brand->delete();
    }

    public function toggleStatus(string $id)
    {
        $brand = Brand::findOrFail($id);
        $brand->status = !$brand->status;
        $brand->save();
        return response()->json(['success' => $brand->status]);
    }
}
