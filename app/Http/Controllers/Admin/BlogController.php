<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use App\Models\Blog;
use App\Models\Admin;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\HtmlString;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BlogRequest;
use Yajra\DataTables\Facades\DataTables;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Blog::latest('id')->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $showUrl   = route('admin.blogs.show', $row->id);
                    $editUrl   = route('admin.blogs.edit', $row->id);
                    $deleteUrl = route('admin.blogs.destroy', $row->id);

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

        return view('admin.pages.blogs.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.blogs.create', [
            'admins'     => Admin::get(['id', 'name']),
            'categories' => Category::get(['id', 'name']),
            'tags'       => Tag::get(['id', 'name']),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BlogRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BlogRequest $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //
    }

    public function toggleStatus(string $id)
    {
        $blog = Blog::findOrFail($id);
        $blog->status = !$blog->status;
        $blog->save();
        return response()->json(['success' => $blog->status]);
    }
}
