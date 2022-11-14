<?php

namespace App\Http\Controllers;

use App\Models\Kebijakan;
use App\Models\KebijakanCategory;
use Illuminate\Http\Request;

class KebijakanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kebijakans = Kebijakan::all();
        return view('backend.kebijakan.index', compact('kebijakans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kebijakan_categories = KebijakanCategory::all();
        return view('backend.kebijakan.create', compact('kebijakan_categories'));
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
            'name'                  => 'nullable',
            'kebijakan_category_id' => 'required',
            'file'                  => 'nullable',
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $name = $file->getClientOriginalName();
            $file_name = date('mdYHis') . '-' . $name;
            $file = $file->storeAs('file', $file_name, 'public_uploads');
            $data['file'] = $file;
        };
        Kebijakan::create($data);
        session()->flash('success');
        return redirect(route('kebijakan.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kebijakan  $kebijakan
     * @return \Illuminate\Http\Response
     */
    public function show(Kebijakan $kebijakan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kebijakan  $kebijakan
     * @return \Illuminate\Http\Response
     */
    public function edit(Kebijakan $kebijakan)
    {
        $kebijakan_categories = KebijakanCategory::all();
        return view('backend.kebijakan.create', compact('kebijakan', 'kebijakan_categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kebijakan  $kebijakan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kebijakan $kebijakan)
    {
        $data = $request->validate([
            'name'                  => 'nullable',
            'kebijakan_category_id' => 'required',
            'file'                  => 'nullable',
        ]);
        if ($request->hasFile('file')) {
            $kebijakan->deleteFile();
            $file = $request->file('file');
            $name = $file->getClientOriginalName();
            $file_name = date('mdYHis') . '-' . $name;
            $file = $file->storeAs('file', $file_name, 'public_uploads');
            $data['file'] = $file;
        };
        $kebijakan->update($data);
        session()->flash('success');
        return redirect(route('kebijakan.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kebijakan  $kebijakan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kebijakan $kebijakan)
    {
        $kebijakan->deleteFile();
        $kebijakan->delete();
        session()->flash('success');
        return redirect(route('kebijakan.index'));
    }
}
