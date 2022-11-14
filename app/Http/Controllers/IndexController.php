<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\Slider;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function beranda()
    {
        $sliders = Slider::all();
        $layananLinks = Link::where('image', '!=', null)->get();
        return view('frontend.beranda', compact('sliders', 'layananLinks'));
    }
}
