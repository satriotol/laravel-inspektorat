<?php

namespace App\Http\Controllers;

use App\Models\PPIDDasarHukum;
use App\Models\TemporaryFile;
use Illuminate\Http\Request;

class PPIDDasarHukumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('permission:ppidDasarHukum-index|ppidDasarHukum-create|ppidDasarHukum-edit|ppidDasarHukum-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:ppidDasarHukum-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:ppidDasarHukum-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:ppidDasarHukum-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $ppidDasarHukums = PPIDDasarHukum::all();
        return view('backend.ppidDasarHukum.index', compact('ppidDasarHukums'));
    }

    public function create()
    {
        return view('backend.ppidDasarHukum.create');
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
            'image'       => 'nullable',
            'description' => 'required'
        ]);
        $temporaryFile = TemporaryFile::where('filename', $request->image)->first();
        if ($temporaryFile) {
            $data['image'] = $temporaryFile->filename;
            $temporaryFile->delete();
        };
        PPIDDasarHukum::create($data);
        session()->flash('success');
        return redirect(route('ppidDasarHukum.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PPIDDasarHukum  $ppidDasarHukum
     * @return \Illuminate\Http\Response
     */
    public function show(PPIDDasarHukum $ppidDasarHukum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PPIDDasarHukum  $ppidDasarHukum
     * @return \Illuminate\Http\Response
     */
    public function edit(PPIDDasarHukum $ppidDasarHukum)
    {
        return view('backend.ppidDasarHukum.create', compact('ppidDasarHukum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PPIDDasarHukum  $ppidDasarHukum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PPIDDasarHukum $ppidDasarHukum)
    {
        $data = $request->validate([
            'image'       => 'nullable',
            'description' => 'required'
        ]);
        $temporaryFile = TemporaryFile::where('filename', $request->image)->first();
        if ($temporaryFile) {
            $data['image'] = $temporaryFile->filename;
            $ppidDasarHukum->deleteFile();
            $temporaryFile->delete();
        };
        $ppidDasarHukum->update($data);
        session()->flash('success');
        return redirect(route('ppidDasarHukum.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PPIDDasarHukum  $ppidDasarHukum
     * @return \Illuminate\Http\Response
     */
    public function destroy(PPIDDasarHukum $ppidDasarHukum)
    {
        $ppidDasarHukum->delete();
        session()->flash('success');
        return redirect(route('ppidDasarHukum.index'));
    }
}
