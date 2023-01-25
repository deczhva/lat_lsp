@extends('layouts.admin')

@section('main')
    <div class="container">
        <div class="row">
            <h2>Dashboard</h2>
            <div class="text-end">{{ $date->format('l, j F Y'); }}</div>
        </div>
        <div class="row" style="padding-top: 20px">
            <div class="col-3">
                <div class="card">
                    <div class="card-header">
                        Anggota
                    </div>
                    <div class="card-body" style="margin-bottom:10px;">
                        <h3>{{ $data }}</h3>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-header">
                        Buku
                    </div>
                    <div class="card-body" style="margin-bottom:10px;">
                        <h3>{{ $buku }}</h3>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-header">
                        Peminjaman
                    </div>
                    <div class="card-body" style="margin-bottom:10px;">
                        <h3>{{ $pinjam }}</h3>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-header">
                        Pengembalian
                    </div>
                    <div class="card-body" style="margin-bottom:10px;">
                        <h3>data belum ada</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection