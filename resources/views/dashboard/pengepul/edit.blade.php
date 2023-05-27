@extends('dashboard.layouts.main')

@section('content')
    <div class="container-ubah">
        <div class="heading">
            <h1>Ubah Data Materi Video</h1>
        </div>

        <div class="content-ubah">
            <form action="/dashboard/pengepul/{{ $pengepul->id }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="form">
                    <input type="text" class="form__input" id="kategori" name="kategori"
                        value="{{ old('kategori', $pengepul->kategori) }}" required autofocus>
                    <label for="kategori" class="form__label"><span class="content-label">
                            Kategori</span></label>
                    @error('kategori')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <div class="form">
                    <input type="text" class="form__input" id="nama" name="nama"
                        value="{{ old('nama', $pengepul->nama) }}" required autofocus>
                    <label for="nama" class="form__label"><span class="content-label">
                            Nama</span></label>
                    @error('nama')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <div class="form">
                    <input type="text" class="form__input" id="alamat" name="alamat"
                        value="{{ old('alamat', $pengepul->alamat) }}" required autofocus>
                    <label for="alamat" class="form__label"><span class="content-label">
                            Alamat</span></label>
                    @error('alamat')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <div class="form">
                    <input type="text" class="form__input" id="ketersedian" name="ketersedian"
                        value="{{ old('ketersedian', $pengepul->ketersedian) }}" required autofocus>
                    <label for="ketersedian" class="form__label"><span class="content-label">
                            Ketersediaan</span></label>
                    @error('ketersedian')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <div class="form">
                    <input type="text" class="form__input" id="kontak" name="kontak"
                        value="{{ old('kontak', $pengepul->kontak) }}" required autofocus>
                    <label for="kontak" class="form__label"><span class="content-label">
                            Kontak</span></label>
                    @error('kontak')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <div class="form">
                    <input type="text" class="form__input" id="id_galeri" name="id_galeri"
                        value="{{ old('id_galeri', $pengepul->id_galeri) }}" required autofocus>
                    <label for="id_galeri" class="form__label"><span class="content-label">
                            ID Galeri</span></label>
                    @error('id_galeri')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <div class="form">
                    <input type="text" class="form__input" id="maps" name="maps"
                        value="{{ old('maps', $pengepul->maps) }}" required autofocus>
                    <label for="maps" class="form__label"><span class="content-label">
                            Maps</span></label>
                    @error('maps')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Ubah Data</button>
            </form>
        </div>
    </div>
@endsection
