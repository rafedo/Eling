@extends('dashboard.layouts.main')

@section('content')
    <div class="container-tambah" >
        <div class="heading">
            <h1>Tambahkan Data Baru</h1>
        </div>

        <div class="content-tambah">
            <form action="/dashboard/pengepul" method="post">
                @csrf
                <div class="form">
                    <input type="text" class="form__input @error('kategori') is-invalid @enderror" id="kategori"
                        name="kategori" value="{{ old('kategori') }}" required autofocus>
                    <label for="kategori" class="form__label"><span class="content-label">
                            Kategori</span></label>
                    @error('kategori')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <div class="form">
                    <input type="text" class="form__input @error('nama') is-invalid @enderror" id="nama"
                        name="nama" value="{{ old('nama') }}" required autofocus>
                    <label for="nama" class="form__label"><span class="content-label">
                            Nama</span></label>
                    @error('nama')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <div class="form">
                    <input type="text" class="form__input @error('alamat') is-invalid @enderror" id="alamat"
                        name="alamat" value="{{ old('alamat') }}" required autofocus>
                    <label for="alamat" class="form__label"><span class="content-label">
                            Alamat</span></label>
                    @error('alamat')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <div class="form">
                    <input type="text" class="form__input @error('ketersediaan_hari') is-invalid @enderror"
                        id="ketersediaan_hari" name="ketersediaan_hari" value="{{ old('ketersediaan_hari') }}" required
                        autofocus>
                    <label for="ketersediaan_hari" class="form__label"><span class="content-label">
                            Ketersediaaan Hari</span></label>
                    @error('ketersediaan_hari')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <div class="form">
                    <input type="text" class="form__input @error('ketersediaan_jam') is-invalid @enderror"
                        id="ketersediaan_jam" name="ketersediaan_jam" value="{{ old('ketersediaan_jam') }}" required
                        autofocus>
                    <label for="ketersediaan_jam" class="form__label"><span class="content-label">
                            Ketersediaaan Jam</span></label>
                    @error('ketersediaan_jam')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <div class="form">
                    <input type="text" class="form__input @error('kontak') is-invalid @enderror" id="kontak"
                        name="kontak" value="{{ old('kontak') }}" required autofocus>
                    <label for="kontak" class="form__label"><span class="content-label">
                            Kontak</span></label>
                    @error('kontak')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <div class="form">
                    <input type="text" class="form__input @error('maps') is-invalid @enderror" id="maps"
                        name="maps" value="{{ old('maps') }}" required autofocus>
                    <label for="maps" class="form__label"><span class="content-label">
                            Maps</span></label>
                    @error('maps')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>
@endsection
