<?php

namespace App\Http\Controllers;

use App\Models\Beranda;
use App\Models\Berita;
use App\Models\BeritaCategory;
use App\Models\Kebijakan;
use App\Models\KebijakanCategory;
use App\Models\Link;
use App\Models\Master;
use App\Models\Profile;
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
        $layananLinks = Link::where('image', '!=', 2)->get();
        $kebijakanCategories = KebijakanCategory::all();
        $terkaitLinks = Link::getOnlyLink();
        $latestBeritas = Berita::getLatestBeritas(2, 2, '');
        $master = Master::first();
        View::share(compact('kegiatans', 'masterBeritaCategories', 'kebijakanCategories', 'layananLinks', 'terkaitLinks', 'latestBeritas', 'master'));
    }
    public function beranda()
    {
        $sliders = Slider::all();
        $beranda = Beranda::first();
        $beritas = Berita::getLatestBeritas(6, 2, '');
        return view('frontend.beranda', compact('sliders', 'beritas', 'beranda'));
    }
    public function berita(Request $request)
    {
        $beritaCategories = BeritaCategory::getBeritaCategories();
        $beritas = Berita::getBeritas(6, null, '', $request);
        $recentBeritas = Berita::getLatestBeritas(3, null, '');
        $request->flash();
        return view('frontend.berita', compact('beritas', 'beritaCategories', 'recentBeritas'));
    }

    public function detailBerita(Berita $berita)
    {
        $beritaCategories = BeritaCategory::getBeritaCategories();
        $recentBeritas = Berita::getLatestBeritas(3, null, $berita->berita_category_id);
        return view('frontend.detailBerita', compact('berita', 'beritaCategories', 'recentBeritas'));
    }

    public function beritaCategory(BeritaCategory $beritaCategory, Request $request)
    {
        $beritaCategories = BeritaCategory::getBeritaCategories();
        $recentBeritas = Berita::getLatestBeritas(3, null, '');
        $beritas = Berita::getBeritas(6, null, $beritaCategory->id, $request);
        return view('frontend.berita', compact('beritas', 'beritaCategories', 'recentBeritas', 'beritaCategory'));
    }

    public function kegiatan(Request $request)
    {
        $beritaCategories = BeritaCategory::getKategoriCategories();
        $recentBeritas = Berita::getLatestBeritas(3, 1, '');
        $beritas = Berita::getBeritas(6, 1, '', $request);
        return view('frontend.berita', compact('beritas', 'beritaCategories', 'recentBeritas'));
    }
    public function kegiatanCategory(BeritaCategory $beritaCategory, Request $request)
    {
        $beritaCategories = BeritaCategory::getKategoriCategories();
        $recentBeritas = Berita::getLatestBeritas(3, 1, '');
        $beritas = Berita::getBeritas(6, 1, $beritaCategory->id, $request);
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

        $parameters = $request->search;
        $kebijakancategories = KebijakanCategory::where('id', $kebijakan)->first();
        $kebijakans = Kebijakan::getFrontenddata($kebijakan, $parameters)->paginate(5)->withQueryString();
        $request->flash();
        return view('frontend.kebijakan', compact('kebijakans', 'kebijakancategories'));
    }
    public function detailKebijakan(Request $request, Kebijakan $kebijakan)
    {
        return view('frontend.detailKebijakan', compact('kebijakan'));
    }
    public function profil()
    {
        $profiles = Profile::all();
        return view('frontend.profil', compact('profiles'));
    }
}
