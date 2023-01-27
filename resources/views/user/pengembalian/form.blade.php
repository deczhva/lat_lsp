@extends('layouts.user')
@section('main')

<div class="container">
    <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <div class="card-header">
            <h4 style="color: #c27400">Form Pengembalian</h4>
        </div>

        <div class="card-body">
            <form action="{{ route('user.submit.pengembalian') }}" method="POST" class="form-group">
                @csrf
                <div class="mb-3">
                    <label for="">Pilih buku yang dikembalikan</label>
                    <select name="buku_id" id="" class="form-select">
                        <option value="" selected disabled>--Pilih Buku--</option>
                        @foreach($data as $d)
                        <option value="{{ $d->buku->id }}">{{ $d->buku->judul }}</option>
                        @endforeach
                    </select>
                </div>
                    
                    <div class="mb-3">
                        <label for="">Tanggal Pengembalian</label>
                        <input type="date" class="form-control" name="tanggal_pengembalian" value="{{ date('Y-m-d') }}" readonly>
                    </div>

                    <div class="mb-3">
                        <label for="">Kondisi Buku Saat Dikembalikan</label>
                        <select name="kondisi_buku_saat_dikembalikan" id="" class="form-select">
                            <option value="" disabled selected>--Kondisi Buku--</option>
                            <option value="baik">Baik</option>
                            <option value="rusak">Rusak</option>
                            <option value="hilang">Hilang</option>
                        </select>
                    </div>
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <button type="submit" class="btn btn-outline-warning mt-3" style="box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection