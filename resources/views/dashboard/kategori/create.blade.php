@extends('dashboard.layouts.main')

@section('content')
    <div class="container-tambah">
        <div class="heading">
            <h1>Tambahkan Data Baru</h1>
        </div>

        <div class="content-tambah">
            <form action="/dashboard/kategori" method="post">
                @csrf
                <div class="form">
                    <input type="text" class="form__input @error('jenis_kategori') is-invalid @enderror" id="jenis_kategori"
                        name="jenis_kategori" value="{{ old('jenis_kategori') }}" required autofocus>
                    <label for="jenis_kategori" class="form__label"><span class="content-label">
                            Jenis Kategori</span></label>
                    @error('jenis_kategori')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>
@endsection
