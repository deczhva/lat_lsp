@extends('layouts.admin')

@section('main')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Dashboard</h2>
                <div class="text-end">{{ $date->format('l, j F Y') }}</div>
            

            {{-- @foreach ($data as $p)
                    <div class="alert alert-info">
                        <marquee>{{ $p->isi }}</marquee>
                    </div>
                @endforeach --}}

            <div class="row" style="padding-top: 20px">
                <div class="col-3">
                    <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <div class="card-header">
                            Anggota
                        </div>
                        <div class="card-body" style="margin-bottom:10px;">
                            <h4>{{ $data }}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <div class="card-header">
                            Buku
                        </div>
                        <div class="card-body" style="margin-bottom:10px;">
                            <h4>{{ $buku }}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <div class="card-header">
                            Peminjaman
                        </div>
                        <div class="card-body" style="margin-bottom:10px;">
                            <h4>{{ $pinjam }}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <div class="card-header">
                            Pengembalian
                        </div>
                        <div class="card-body" style="margin-bottom:10px;">
                            <h4></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection