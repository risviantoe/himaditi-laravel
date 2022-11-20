<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Aspirasi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        for ($tanggal = 25; $tanggal < 32; $tanggal++) {
            $chart1 = collect(DB::SELECT("SELECT count(id) AS jumlah from users where day(created_at)='$tanggal'"))->first();
            $chartUser[] = $chart1->jumlah;

            $chart2 = collect(DB::SELECT("SELECT count(id) AS jumlah from aspirasi where day(created_at)='$tanggal'"))->first();
            $chartAspirasi[] = $chart2->jumlah;
        }
        $user = User::latest()->take(5)->get();
        $aspirasi = Aspirasi::latest()->take(5)->get();

        $jmlUser = $user->count();
        $jmlAspirasi = $aspirasi->count();

        $no = 1;
        return view('backend.dashboard', [
            'no' => $no,
            'user' => $user,
            'aspirasi' => $aspirasi,
            'jmlUser' => $jmlUser,
            'jmlAspirasi' => $jmlAspirasi
        ], compact('chartUser', 'chartAspirasi'))->with('i');
    }
}
