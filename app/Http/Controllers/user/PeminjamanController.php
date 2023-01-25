<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Buku;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PeminjamanController extends Controller
{
    
    public function index()
    {
        $peminjaman = Peminjaman::where('user_id', Auth::user()->id)->get();
            return view('user.peminjaman.riwayat', compact('peminjaman')); 
    }

    public function indexForm()
    {
        $buku = Buku::all();
        return view('user.peminjaman.form', compact('buku')); 
    }

    public function form(Request $request)
    {
        $buku = Buku::all();
        $buku_id = $request->buku_id;

        return view('user.peminjaman.form', compact('buku', 'buku_id'));
    }

    public function store(Request $request)
    {
        $peminjaman = Peminjaman::create([
            'user_id' => $request->user_id,
            'buku_id' => $request->buku_id,
            'tanggal_peminjaman' => $request->tanggal_peminjaman,
            'kondisi_buku_saat_dipinjam' => $request->kondisi_buku_saat_dipinjam,
        ]);

        $buku = Buku::where('id', $request->buku_id)->first();

        if ($request->kondisi_buku_saat_dipinjam == 'baik'){
            $buku->update([
                'j_buku_baik' => $buku->j_buku_baik -1
            ]);
        }

        if ($request->kondisi_buku_saat_dipinjam == 'rusak'){
            $buku->update([
                'j_buku_rusak' => $buku->j_buku_rusak-1
            ]);
        }

        if ($peminjaman){
            return redirect()->route('user.peminjaman')->with('status', 'success')->with('msg', 'berhasil menambah data');
        }
        return redirect()->back()->with('status', 'danger')->with('msg', 'gagal menambahkan data');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}