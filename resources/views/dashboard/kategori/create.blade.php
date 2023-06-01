@extends('dashboard.layouts.main')

@section('content')
    <div class="container-tambah">
        <div class="heading">
            <h1>Tambahkan Data Baru</h1>
        </div>

        <div class="content-tambah">
            <form action="/dashboard/kategori" method="post" enctype="multipart/form-data">
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
                    <input type="text" class="form__input @error('deskripsi_singkat') is-invalid @enderror"
                        id="deskripsi_singkat" name="deskripsi_singkat" value="{{ old('deskripsi_singkat') }}" required autofocus>
                    <label for="deskripsi_singkat" class="form__label"><span class="content-label">
                        Deskripsi Singkat</span></label>
                    @error('deskripsi_singkat')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <div class="form">
                    <input type="text" class="form__input @error('deskripsi_panjang') is-invalid @enderror" id="deskripsi_panjang"
                        name="deskripsi_panjang" value="{{ old('deskripsi_panjang') }}" required autofocus>
                    <label for="deskripsi_panjang" class="form__label"><span class="content-label">
                        Deskripsi Panjang</span></label>
                    @error('deskripsi_panjang')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <div class="">
                    <input type="file" class="form__input @error('foto') is-invalid @enderror" accept="image/*" id="foto" name="foto"
                        value="{{ old('foto') }}" required autofocus>
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
