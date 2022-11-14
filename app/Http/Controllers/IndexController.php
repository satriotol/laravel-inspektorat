<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function beranda()
    {
        $sliders = Slider::all();
        return view('frontend.beranda', compact('sliders'));
    }
}
