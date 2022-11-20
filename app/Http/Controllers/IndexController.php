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
        $beritas = Berita::getLatestBeritas(3, 2, '');
        return view('frontend.beranda', compact('sliders', 'layananLinks', 'beritas', 'beranda'));
    }
    public function berita()
    {
        $beritaCategories = BeritaCategory::getBeritaCategories();
        $beritas = Berita::getLatestBeritas(6, null, '');
        $recentBeritas = Berita::getLatestBeritas(3, null, '');
        return view('frontend.berita', compact('beritas', 'beritaCategories', 'recentBeritas'));
    }

    public function detailBerita(Berita $berita)
    {
        $beritaCategories = BeritaCategory::getBeritaCategories();
        $recentBeritas = Berita::getLatestBeritas(3, null, $berita->berita_category_id);
        return view('frontend.detailBerita', compact('berita', 'beritaCategories', 'recentBeritas'));
    }

    public function beritaCategory(BeritaCategory $beritaCategory)
    {
        $beritaCategories = BeritaCategory::getBeritaCategories();
        $recentBeritas = Berita::getLatestBeritas(3, null, '');
        $beritas = Berita::getLatestBeritas(5, null, $beritaCategory->id);
        return view('frontend.berita', compact('beritas', 'beritaCategories', 'recentBeritas', 'beritaCategory'));
    }

    public function kegiatan()
    {
        $beritaCategories = BeritaCategory::getKategoriCategories();
        $recentBeritas = Berita::getLatestBeritas(3, 1, '');
        $beritas = Berita::getLatestBeritas(5, 1, '');
        return view('frontend.berita', compact('beritas', 'beritaCategories', 'recentBeritas'));
    }
    public function kegiatanCategory(BeritaCategory $beritaCategory)
    {
        $beritaCategories = BeritaCategory::getKategoriCategories();
        $recentBeritas = Berita::getLatestBeritas(3, 1, '');
        $beritas = Berita::getLatestBeritas(5, 1, $beritaCategory->id);
        return view('frontend.berita', compact('beritas', 'beritaCategories', 'recentBeritas', 'beritaCategory'));
    }
    public function detailKegiatan(Berita $berita)
    {
        $beritaCategories = BeritaCategory::getKategoriCategories();
        $recentBeritas = Berita::getLatestBeritas(3, 1, $berita->berita_category_id);
        return view('frontend.detailBerita', compact('berita', 'beritaCategories', 'recentBeritas'));
    }
    public function kebijakan(Request $request, $kebijakan)
    {
        // $beritaCategories = BeritaCategory::all();
        // $recentBeritas = Berita::getLatestBeritas(3, 2);
        // $beritas = Berita::getLatestBeritas(5, null);

        $parameters = $request->search;
        $kebijakancategories = KebijakanCategory::where('id', $kebijakan)->first();
       // $kebijakans = Kebijakan::where('kebijakan_category_id', $kebijakan)->orderByDesc('id')->paginate(5);
        $kebijakans = Kebijakan::getFrontenddata($kebijakan, $parameters)->paginate(5);
        return view('frontend.kebijakan', compact('kebijakans', 'kebijakancategories'));
    }
}
