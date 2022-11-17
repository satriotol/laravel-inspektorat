<?php

namespace App\Http\Controllers;

use App\Models\Beranda;
use App\Models\Berita;
use App\Models\BeritaCategory;
use App\Models\Kebijakan;
use App\Models\KebijakanCategory;
use App\Models\Link;
use App\Models\Master;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Termwind\Components\Dd;

class IndexController extends Controller
{
    public function __construct()
    {
        $kegiatans = BeritaCategory::where('is_kegiatan', 1)->get();
        $masterBeritaCategories = BeritaCategory::where('is_kegiatan', null)->get();
        $kebijakanCategories = KebijakanCategory::all();
        $terkaitLinks = Link::getOnlyLink();
        $latestBeritas = Berita::getLatestBeritas(2, 2, '');
        $master = Master::first();
        View::share(compact('kegiatans', 'masterBeritaCategories', 'kebijakanCategories', 'terkaitLinks', 'latestBeritas', 'master'));
    }
    public function beranda()
    {
        $sliders = Slider::all();
        $beranda = Beranda::first();
        $layananLinks = Link::where('image', '!=', 2)->get();
        $beritas = Berita::getLatestBeritas(3, null, '');
        return view('frontend.beranda', compact('sliders', 'layananLinks', 'beritas', 'beranda'));
    }
    public function detailBerita(Berita $berita)
    {
        $beritaCategories = BeritaCategory::all();
        $recentBeritas = Berita::getLatestBeritas(3, 2, '');
        return view('frontend.detailBerita', compact('berita', 'beritaCategories', 'recentBeritas'));
    }
    public function berita()
    {
        $beritaCategories = BeritaCategory::getBeritaCategories();
        $recentBeritas = Berita::getLatestBeritas(3, 2, '');
        $beritas = Berita::getLatestBeritas(5, null, '');
        return view('frontend.berita', compact('beritas', 'beritaCategories', 'recentBeritas'));
    }
    public function beritaCategory(BeritaCategory $beritaCategory)
    {
        $beritaCategories = BeritaCategory::getBeritaCategories();
        $recentBeritas = Berita::getLatestBeritas(3, 2, '');
        $beritas = Berita::getLatestBeritas(5, null, $beritaCategory->id);
        return view('frontend.berita', compact('beritas', 'beritaCategories', 'recentBeritas', 'beritaCategory'));
    }
    public function kebijakan($kebijakan)
    {
        // $beritaCategories = BeritaCategory::all();
        // $recentBeritas = Berita::getLatestBeritas(3, 2);
        // $beritas = Berita::getLatestBeritas(5, null);

        $kebijakancategories = KebijakanCategory::where('id', $kebijakan)->first();
        $kebijakans = Kebijakan::where('kebijakan_category_id', $kebijakan)->orderByDesc('id')->get();
        return view('frontend.kebijakan', compact('kebijakans','kebijakancategories'));
    }
}
