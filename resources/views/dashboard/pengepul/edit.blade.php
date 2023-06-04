@extends('dashboard.layouts.main')

@section('content')
    <div class="container-ubah">
        <div class="heading">
            <h1>Ubah Data Pengepul</h1>
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
                    <input type="text" class="form__input" id="ketersediaan_hari" name="ketersediaan_hari"
                        value="{{ old('ketersediaan_hari', $pengepul->ketersediaan_hari) }}" required autofocus>
                    <label for="ketersediaan_hari" class="form__label"><span class="content-label">
                            Ketersediaan Hari</span></label>
                    @error('ketersediaan Hari')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <div class="form">
                    <input type="text" class="form__input" id="ketersediaan_jam" name="ketersediaan_jam"
                        value="{{ old('ketersediaan_jam', $pengepul->ketersediaan_jam) }}" required autofocus>
                    <label for="ketersediaan_jam" class="form__label"><span class="content-label">
                            Ketersediaan Jam</span></label>
                    @error('ketersediaan_Jam')
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