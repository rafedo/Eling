@extends('dashboard.layouts.main')

@section('content')
<div class="container-tambah">
        <div class="heading">
            <h1>Tambahkan Data Baru</h1>
        </div>

        <div class="content-tambah">
            <form action="/dashboard/pengepul" method="post">
                @csrf
                <div class="form">
                    <input type="text" class="form__input @error('kategori') is-invalid @enderror"
                        id="kategori" name="kategori" value="{{ old('kategori') }}" required
                        autofocus>
                    <label for="kategori" class="form__label"><span class="content-label">
                            Kategori</span></label>
                    @error('kategori')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <div class="form">
                    <input type="text" class="form__input @error('nama') is-invalid @enderror"
                        id="nama" name="nama" value="{{ old('nama') }}" required
                        autofocus>
                    <label for="nama" class="form__label"><span class="content-label">
                            Nama</span></label>
                    @error('nama')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <div class="form">
                    <input type="text" class="form__input @error('alamat') is-invalid @enderror"
                        id="alamat" name="alamat" value="{{ old('alamat') }}" required
                        autofocus>
                    <label for="alamat" class="form__label"><span class="content-label">
                            Alamat</span></label>
                    @error('alamat')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <div class="form">
                    <input type="text" class="form__input @error('ketersedian') is-invalid @enderror"
                        id="ketersedian" name="ketersedian" value="{{ old('ketersedian') }}" required
                        autofocus>
                    <label for="ketersedian" class="form__label"><span class="content-label">
                            Ketersediaan</span></label>
                    @error('ketersedian')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <div class="form">
                    <input type="text" class="form__input @error('kontak') is-invalid @enderror"
                        id="kontak" name="kontak" value="{{ old('kontak') }}" required
                        autofocus>
                    <label for="kontak" class="form__label"><span class="content-label">
                            Kontak</span></label>
                    @error('kontak')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <div class="form">
                    <input type="text" class="form__input @error('id_galeri') is-invalid @enderror"
                        id="id_galeri" name="id_galeri" value="{{ old('id_galeri') }}" required
                        autofocus>
                    <label for="id_galeri" class="form__label"><span class="content-label">
                            ID Galeri</span></label>
                    @error('id_galeri')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <div class="form">
                    <input type="text" class="form__input @error('maps') is-invalid @enderror"
                        id="maps" name="maps" value="{{ old('maps') }}" required
                        autofocus>
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
