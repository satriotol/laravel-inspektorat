<?php

namespace App\Http\Controllers;
use App\Models\Beranda;
use Illuminate\Http\Request;


class BerandaController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('permission:beranda-index|beranda-create|beranda-edit|beranda-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:beranda-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:beranda-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:beranda-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        $berandas = Beranda::all();
        return view('backend.beranda.index', compact('berandas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.beranda.create');
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
            'sambutan' => 'required',
            'video_url' => 'required'
        ]);
        Beranda::create($data);
        session()->flash('success');
        return redirect(route('beranda.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Beranda  $beranda
     * @return \Illuminate\Http\Response
     */
    public function show(Beranda $beranda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Beranda  $beranda
     * @return \Illuminate\Http\Response
     */
    public function edit(Beranda $beranda)
    {
        return view('backend.beranda.create', compact('beranda'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Beranda  $beranda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Beranda $beranda)
    {
        $data = $request->validate([
            'sambutan' => 'required',
            'video_url' => 'required'
        ]);
        $beranda->update($data);
        session()->flash('success');
        return redirect(route('beranda.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Beranda  $beranda
     * @return \Illuminate\Http\Response
     */
    public function destroy(Beranda $beranda)
    {
        $beranda->delete();
        session()->flash('success');
        return redirect(route('beranda.index'));
    }
}



