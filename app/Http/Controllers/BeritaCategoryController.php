<?php

namespace App\Http\Controllers;

use App\Models\BeritaCategory;
use App\Models\TemporaryFile;
use Illuminate\Http\Request;

class BeritaCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beritaCategories = BeritaCategory::all();
        return view('backend.beritaCategory.index', compact('beritaCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.beritaCategory.create');
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
            'name' => 'required',
            'image' => 'nullable',
            'is_kegiatan' => 'nullable',
        ]);
       $temporaryFile = TemporaryFile::where('filename', $request->image)->first();
        if ($temporaryFile) {
            $data['image'] = $temporaryFile->filename;
            $temporaryFile->delete();
        };
        BeritaCategory::create($data);
        session()->flash('success');
        return redirect(route('beritaCategory.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BeritaCategory  $beritaCategory
     * @return \Illuminate\Http\Response
     */
    public function show(BeritaCategory $beritaCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BeritaCategory  $beritaCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(BeritaCategory $beritaCategory)
    {
        return view('backend.beritaCategory.create', compact('beritaCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BeritaCategory  $beritaCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BeritaCategory $beritaCategory)
    {
        $data = $request->validate([
            'name' => 'required',
            'image' => 'nullable',
            'is_kegiatan' => 'nullable',
        ]);
        $temporaryFile = TemporaryFile::where('filename', $request->image)->first();
        if ($temporaryFile) {
            $data['image'] = $temporaryFile->filename;
            $beritaCategory->deleteFile();
            $temporaryFile->delete();
        };
        $beritaCategory->update($data);
        session()->flash('success');
        return redirect(route('beritaCategory.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BeritaCategory  $beritaCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(BeritaCategory $beritaCategory)
    {
        //
    }
}
