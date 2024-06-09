<?php

namespace App\Http\Controllers\Admin;

use App\Models\Icon;
use App\Models\Counter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\Admin\CounterRequest;

class CounterController extends Controller
{
    /**
     * The function sets middleware permissions for specific actions in a PHP class constructor.
     */
    public function __construct()
    {
        $this->middleware('permission:view counter|show counter|edit counter|delete counter|create counter')->only(['index', 'create', 'show', 'edit', 'destroy']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Counter::latest('id')->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $editUrl   = route('admin.counters.edit', $row->id);
                    $deleteUrl = route('admin.counters.destroy', $row->id);

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

        return view('admin.pages.counters.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.counters.create', ['icons' => Icon::get()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CounterRequest $request)
    {
        try {
            DB::beginTransaction();

            Counter::create([
                'icon_id' => $request->icon_id,
                'number' => $request->number,
                'title' => $request->title,
            ]);

            DB::commit();

            return redirect()->route('admin.counters.index')->with('success', 'Counter created successfully');
        } catch (\Exception $e) {
            DB::rollback();
            Log::error($e->getMessage());

            return redirect()->back()->with('error', 'An error occurred while creating the icon: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Counter $counter)
    {
        //deprecated
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Counter $counter)
    {
        return view('admin.pages.counters.edit', ['icons' => Icon::get(), 'counter' => $counter]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CounterRequest $request, Counter $counter)
    {
        try {
            DB::beginTransaction();

            $counter->update([
                'icon_id' => $request->icon_id,
                'number' => $request->number,
                'title' => $request->title,
            ]);

            DB::commit();

            return redirect()->route('admin.counters.index')->with('success', 'Counter updated successfully');
        } catch (\Exception $e) {
            DB::rollback();

            // handle the exception here, you might want to log it or return a response to the user
            return redirect()->route('admin.counters.index')->with('error', 'Something went wrong');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Counter $counter)
    {
        $counter->delete();
    }
}
