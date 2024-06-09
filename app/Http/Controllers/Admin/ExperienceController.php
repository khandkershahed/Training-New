<?php

namespace App\Http\Controllers\Admin;

use App\Models\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\HtmlString;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\Admin\ExperienceRequest;

class ExperienceController extends Controller
{
    /**
     * The function sets middleware permissions for specific actions in a PHP class constructor.
     */
    public function __construct()
    {
        $this->middleware('permission:view experience|show experience|edit experience|delete experience|create experience')->only(['index', 'create', 'show', 'edit', 'destroy']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Experience::latest('id')->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $showUrl   = route('admin.experiences.show', $row->id);
                    $editUrl   = route('admin.experiences.edit', $row->id);
                    $deleteUrl = route('admin.experiences.destroy', $row->id);

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

        return view('admin.pages.experiences.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.experiences.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ExperienceRequest $request)
    {
        try {
            DB::beginTransaction();

            Experience::create([
                'quote' => $request->quote,
                'starting_year' => $request->starting_year,
                'end_year' => $request->end_year,
                'role' => $request->role,
                'organization' => $request->organization,
                'short_description' => $request->short_description,
            ]);

            DB::commit();

            return redirect()->route('admin.experiences.index')->with('success', 'Experience created successfully');
        } catch (\Exception $e) {
            DB::rollback();

            // handle the exception here, you might want to log it or return a response to the user
            return redirect()->route('admin.experiences.index')->with('error', 'Something went wrong');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Experience $experience)
    {
        return view('admin.pages.experiences.show', ['experience' => $experience]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Experience $experience)
    {
        return view('admin.pages.experiences.edit', ['experience' => $experience]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ExperienceRequest $request, Experience $experience)
    {
        try {
            DB::beginTransaction();

            $experience->update([
                'quote' => $request->quote,
                'starting_year' => $request->starting_year,
                'end_year' => $request->end_year,
                'role' => $request->role,
                'organization' => $request->organization,
                'short_description' => $request->short_description,
            ]);

            DB::commit();

            return redirect()->route('admin.experiences.index')->with('success', 'Experience updated successfully');
        } catch (\Exception $e) {
            DB::rollback();

            // handle the exception here, you might want to log it or return a response to the user
            return redirect()->route('admin.experiences.index')->with('error', 'Something went wrong');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Experience $experience)
    {
        $experience->delete();
    }
}
