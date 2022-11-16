<?php

namespace App\Http\Controllers;

use App\Models\Beranda;
use App\Models\Berita;
use App\Models\BeritaCategory;
use App\Models\KebijakanCategory;
use App\Models\Link;
use App\Models\Master;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class IndexController extends Controller
{
    public function __construct()
    {
        $kegiatans = BeritaCategory::where('is_kegiatan', 1)->get();
        $kebijakanCategories = KebijakanCategory::all();
        $terkaitLinks = Link::getOnlyLink();
        $latestBeritas = Berita::getLatestBeritas(2);
        $master = Master::first();
        View::share(compact('kegiatans', 'kebijakanCategories', 'terkaitLinks', 'latestBeritas', 'master'));
    }
    public function beranda()
    {
        $sliders = Slider::all();
        $beranda = Beranda::first();
        $layananLinks = Link::where('image', '!=', null)->get();
        $beritas = Berita::getLatestBeritas(3);
        return view('frontend.beranda', compact('sliders', 'layananLinks', 'beritas', 'beranda'));
    }
    public function detailBerita(Berita $berita)
    {
        $beritaCategories = BeritaCategory::all();
        $recentBeritas = Berita::where('id', '!=', $berita->id)->orderBy('id', 'desc')->paginate(3);
        return view('frontend.detailBerita', compact('berita', 'beritaCategories', 'recentBeritas'));
    }
}
