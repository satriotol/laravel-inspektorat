<?php

namespace App\Http\Controllers;

use App\Models\KebijakanCategory;
use Illuminate\Http\Request;

class KebijakanCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kebijakanCategories = KebijakanCategory::all();
        return view('frontend_layouts.kebijakanCategory.index', compact('kebijakanCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KebijakanCategory  $kebijakanCategory
     * @return \Illuminate\Http\Response
     */
    public function show(KebijakanCategory $kebijakanCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KebijakanCategory  $kebijakanCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(KebijakanCategory $kebijakanCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KebijakanCategory  $kebijakanCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KebijakanCategory $kebijakanCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KebijakanCategory  $kebijakanCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(KebijakanCategory $kebijakanCategory)
    {
        //
    }
}
