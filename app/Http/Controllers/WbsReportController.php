<?php

namespace App\Http\Controllers;

use App\Models\TemporaryFile;
use App\Models\WbsCategory;
use App\Models\WbsReport;
use Illuminate\Http\Request;

class WbsReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('permission:wbsReport-index|wbsReport-create|wbsReport-edit|wbsReport-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:wbsReport-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:wbsReport-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:wbsReport-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        $wbsReports = WbsReport::paginate();
        return view('backend.wbsReport.index', compact('wbsReports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $wbsCategories = WbsCategory::all();
        return view('backend.wbsReport.create', compact('wbsCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'wbs_category_id' => 'required',
            'name' => 'required|max:30',
            'location' => 'required|max:50',
            'datetime' => 'required|date',
            'description' => 'required|max:100',
            'file' => 'nullable',
            'phone' => 'required',
            'email' => 'nullable|email'
        ]);
        $temporaryFile = TemporaryFile::where('filename', $request->file)->first();
        if ($temporaryFile) {
            $data['file'] = $temporaryFile->filename;
            $temporaryFile->delete();
        };
        WbsReport::create($data);
        session()->flash('success');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WbsReport  $wbsReport
     * @return \Illuminate\Http\Response
     */
    public function show(WbsReport $wbsReport)
    {
        return view('backend.wbsReport.show', compact('wbsReport'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WbsReport  $wbsReport
     * @return \Illuminate\Http\Response
     */
    public function edit(WbsReport $wbsReport)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WbsReport  $wbsReport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WbsReport $wbsReport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WbsReport  $wbsReport
     * @return \Illuminate\Http\Response
     */
    public function destroy(WbsReport $wbsReport)
    {
        $wbsReport->delete();
        session()->flash('success');
        return back();
    }
}
