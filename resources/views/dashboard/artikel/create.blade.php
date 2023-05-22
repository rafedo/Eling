@extends('dashboard.layouts.main')

@section('content')
<div class="container-tambah">
        <div class="heading">
            <h1>Tambahkan Data Baru</h1>
        </div>

        <div class="content-tambah">
            <form action="/dashboard/artikel" method="post">
                @csrf
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
                    <input type="text" class="form__input @error('id_kategori') is-invalid @enderror"
                        id="id_kategori" name="id_kategori" value="{{ old('id_kategori') }}" required
                        autofocus>
                    <label for="id_kategori" class="form__label"><span class="content-label">
                            ID Kategori</span></label>
                    @error('id_kategori')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <div class="form">
                    <input type="text" class="form__input @error('link') is-invalid @enderror"
                        id="link" name="link" value="{{ old('link') }}" required
                        autofocus>
                    <label for="link" class="form__label"><span class="content-label">
                            Link</span></label>
                    @error('link')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <div class="form">
                    <input type="text" class="form__input @error('foto') is-invalid @enderror"
                        id="foto" name="foto" value="{{ old('foto') }}" required
                        autofocus>
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
