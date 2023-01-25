<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Buku;
use App\Models\Peminjaman;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

     public function index()
    {
        $data = User::where('role', 'user')->count();
        $buku = Buku::count();
        $pinjam = Peminjaman::count();
        // $date = Carbon::now();
        // $kembali = Peminjaman::where()->count();
        $date = Carbon::now()->locale('id');
        $date->settings(['formatFunction' => 'translatedFormat']);
        // dd($kembali);
        return view('admin.dashboard', compact('data', 'buku', 'pinjam', 'date'));
    }

}