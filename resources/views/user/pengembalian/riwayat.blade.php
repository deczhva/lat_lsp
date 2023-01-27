@extends('layouts.user')

@section('main')
<div class="container">

    @if (Session('status'))
    <div class="alert alert-{{ session('status') }}" role="alert"></i>
        <strong>{{ session('msg') }}</strong>
    </div>
@endif

<div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <div class="card-header">
        <div class="row">
            <div class="col-6">
                <h4 style="color: #c27400">Riwayat Buku sudah Dikembalikan</h4>
            </div>
        </div>
            <div class="card-body">   
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Anggota</th>
                            <th>Judul Buku</th>
                            <th>Tanggal Peminjaman</th>
                            <th>Tanggal Pengembalian</th>
                            <th>Kondisi buku saat dipinjam</th>
                            <th>Kondisi buku saat dikembalikan</th>
                            <th>denda</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pengembalian as $key => $p)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $p->user->fullname }}</td>
                                <td>{{ $p->buku->judul }}</td>
                                <td>{{ $p->tanggal_peminjaman }}</td>
                                <td>{{ $p->tanggal_pengembalian }}</td>
                                <td>{{ $p->kondisi_buku_saat_dipinjam }}</td>
                                <td>{{ $p->kondisi_buku_saat_dikembalikan }}</td>
                                <td>{{ $p->denda }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="text-end">
                    <a href="{{ route('user.pengembalian.form') }}" class="btn btn-outline-warning mt-3" style="box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);">Kembalikan Buku</a>
                </div>
            </div>
        </div>
    </div>
</div>

   
@endsection