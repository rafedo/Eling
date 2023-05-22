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
                <div class="form">
                    <input type="text" class="form__input @error('deskripsi') is-invalid @enderror"
                        id="deskripsi" name="deskripsi" value="{{ old('deskripsi') }}" required autofocus>
                    <label for="deskripsi" class="form__label"><span class="content-label">
                            Deskripsi</span></label>
                    @error('deskripsi')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <div class="form">
                    <input type="text" class="form__input @error('foto') is-invalid @enderror"
                        id="foto" name="foto" value="{{ old('foto') }}" required autofocus>
                    <label for="foto" class="form__label"><span class="content-label">
                            Foto</span></label>
                    @error('foto')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>
@endsection
