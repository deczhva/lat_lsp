@extends('layouts.user')
@section('main')
<div class="container">
    <div class="row">
        <div class="col-12">
            {{-- @foreach ($data as $p)
                <div class="alert alert-info">
                    <marquee>{{ $p->isi_pemberitahuan }}</marquee>
                </div>
            @endforeach --}}

            <div class="row">
                @foreach ($buku as $b)
                    <div class="col-4">
                        <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                            <div class="card-header">
                                <img src="{{ url('/img' . '/img.png' . $b->foto) }}" style="height: 150px;object-fit: cover;"
                                    class="card-img" alt="....">
                            </div>
                            <div class="card-body" style="height: 150px;">
                                <h3 style="min-height: 28px"><b>{{ $b->judul_buku }}</b></h3>
                                @if ($b->kategori->nama == 'Umum')
                                    <span class="badge rounded-pill text-bg-danger">{{ $b->kategori->nama }}</span>
                                @elseif($b->kategori->nama == 'Fiksi')
                                    <span class="badge rounded-pill text-bg-success">{{ $b->kategori->nama }}</span>
                                @else($b->kategori->nama == 'Sejarah')
                                    <span class="badge rounded-pill text-bg-secondary">{{ $b->kategori->nama }}</span>
                                @endif
                                <div class="row" style="padding-top:20px;">
                                    <div class="col-6" >
                                        <p class="text-start">
                                            <b>Pengarang</b><br>
                                            {{ $b->pengarang }}
                                        </p>
                                    </div>
                                    <div class="col-6">
                                        <p class="text-end">
                                            <b>Penerbit</b><br>
                                            {{ $b->penerbit->nama }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <form action="{{ route('user.form.peminjaman') }}" method="POST">
                                    @csrf
                                    <input type="hidden" value="{{ $b->id }}" name="buku_id">
                                    {{-- @dd($b->id) --}}
                                    <button type="submit" class="btn btn-outline-warning" style="box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);">Pinjam</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection