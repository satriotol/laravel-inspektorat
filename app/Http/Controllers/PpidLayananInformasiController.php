<?php

namespace App\Http\Controllers;

use App\Models\PpidLayananInformasi;
use App\Models\PpidLayananInformasiDetail;
use App\Models\TemporaryFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PpidLayananInformasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('permission:ppidLayananInformasi-index|ppidLayananInformasi-create|ppidLayananInformasi-edit|ppidLayananInformasi-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:ppidLayananInformasi-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:ppidLayananInformasi-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:ppidLayananInformasi-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        $ppidLayananInformasis = PpidLayananInformasi::all();
        return view('backend.ppidLayananInformasi.index', compact('ppidLayananInformasis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = PpidLayananInformasi::TYPES;
        return view('backend.ppidLayananInformasi.create', compact('types'));
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
            'type' => 'required',
            'link' => 'required_if:type,Link',
            'description' => 'required_if:type,Detail',
            'icon' => 'nullable',
            'image' => 'nullable',
            'nameDetail' => 'nullable',
            'file' => 'nullable',
        ]);
        DB::beginTransaction();
        try {
            $temporaryFile = TemporaryFile::where('filename', $request->image)->first();
            if ($temporaryFile) {
                $data['image'] = $temporaryFile->filename;
                $temporaryFile->delete();
            };
            $temporaryIcon = TemporaryFile::where('filename', $request->logo)->first();
            if ($temporaryIcon) {
                $data['logo'] = $temporaryIcon->filename;
                $temporaryIcon->delete();
            };
            $temporaryFileDetail = TemporaryFile::where('filename', $request->file)->first();
            if ($temporaryFileDetail) {
                $data['file'] = $temporaryFileDetail->filename;
                $temporaryFileDetail->delete();
            };
            $ppidLayananInformasi = PpidLayananInformasi::create($data);
            PpidLayananInformasiDetail::create([
                'ppid_layanan_informasi_id' => $ppidLayananInformasi->id,
                'name' => $data['nameDetail'],
                'file' => $data['file'],
            ]);
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
        }

        session()->flash('success');
        return redirect()->route('ppidLayananInformasi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PpidLayananInformasi  $ppidLayananInformasi
     * @return \Illuminate\Http\Response
     */
    public function show(PpidLayananInformasi $ppidLayananInformasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PpidLayananInformasi  $ppidLayananInformasi
     * @return \Illuminate\Http\Response
     */
    public function edit(PpidLayananInformasi $ppidLayananInformasi)
    {
        $types = PpidLayananInformasi::TYPES;
        return view('backend.ppidLayananInformasi.create', compact('ppidLayananInformasi', 'types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PpidLayananInformasi  $ppidLayananInformasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PpidLayananInformasi $ppidLayananInformasi)
    {
        $data = $request->validate([
            'name' => 'required',
            'type' => 'required',
            'link' => 'required_if:type,Link',
            'description' => 'required_if:type,Detail',
            'icon' => 'nullable',
            'nameDetail' => 'nullable',
            'image' => 'required_if:type,Gambar',
        ]);
        $temporaryFile = TemporaryFile::where('filename', $request->image)->first();
        if ($temporaryFile) {
            $data['image'] = $temporaryFile->filename;
            $temporaryFile->delete();
        };
        $temporaryIcon = TemporaryFile::where('filename', $request->logo)->first();
        if ($temporaryIcon) {
            $data['logo'] = $temporaryIcon->filename;
            $temporaryIcon->delete();
        };
        $temporaryFileDetail = TemporaryFile::where('filename', $request->file)->first();
        if ($temporaryFileDetail) {
            $data['file'] = $temporaryFileDetail->filename;
            $temporaryFileDetail->delete();
        };
        $ppidLayananInformasi->update($data);
        PpidLayananInformasiDetail::create([
            'ppid_layanan_informasi_id' => $ppidLayananInformasi->id,
            'name' => $data['nameDetail'],
            'file' => $data['file'],
        ]);
        session()->flash('success');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PpidLayananInformasi  $ppidLayananInformasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(PpidLayananInformasi $ppidLayananInformasi)
    {
        $ppidLayananInformasi->delete();
        session()->flash('success');
        return redirect()->route('ppidLayananInformasi.index');
    }
}
