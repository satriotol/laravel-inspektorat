<?php

namespace App\Http\Controllers;

use App\Jobs\KirimWaJob;
use App\Models\Asistensi;
use App\Models\Konsultasi;
use App\Models\PermohonanInformasi;
use App\Models\UpgReport;
use App\Models\UserDetail;
use App\Models\Verification;
use App\Models\WbsReport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Str;


class DashboardController extends Controller
{
    public function dashboard()
    {
        $genders = UserDetail::GENDERS;
        $totalPermohonanInformasi = PermohonanInformasi::getTotal();
        $totalAsistensi = Asistensi::getTotal();
        $totalKonsultasi = Konsultasi::getTotal();
        $totalWbsReport = WbsReport::getTotal();
        $totalUpgReport = UpgReport::getTotal();
        return view('backend.dashboard', compact('genders', 'totalUpgReport', 'totalPermohonanInformasi', 'totalWbsReport', 'totalAsistensi', 'totalKonsultasi'));
    }
    public function storeUserDetail(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'nullable',
            'phone' => 'required|numeric',
            'address' => 'required',
            'gender' => 'required',
            'jabatan' => 'nullable',
            'instansi' => 'nullable'
        ]);
        $user = Auth::user();
        $data['user_id'] = $user->id;
        DB::beginTransaction();
        try {
            $userDetail = UserDetail::updateOrCreate([
                'user_id' => $data['user_id']
            ], [
                'phone' => $data['phone'],
                'address' => $data['address'],
                'gender' => $data['gender'],
                'jabatan' => $data['jabatan'],
                'instansi' => $data['instansi'],
            ]);
            $otp_code = random_int(100000, 999999);
            $token = Str::random(25);
            $verification = Verification::create([
                'user_id' => $user->id,
                'otp_code' => $otp_code,
                'token' => $token,
                'status' => 'REQUEST'
            ]);
            $message = "Kode OTP Anda Adalah " . $otp_code;
            $asset = [
                $message,
                $userDetail->phone
            ];
            KirimWaJob::dispatch($asset);
            DB::table('model_has_roles')->where('model_id', $user->id)->delete();
            $userDetail->user->assignRole('USER-OTP');
            DB::commit();
        } catch (\Throwable $th) {
            throw $th;
        }
        session()->flash('success');
        return back();
    }
}
