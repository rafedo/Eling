@extends('dashboard.layouts.main')

@section('content')
    <div class="container-ubah">
        <div class="heading">
            <h1>Ubah Data Artikel</h1>
        </div>

        <div class="content-ubah">
            <form action="/dashboard/artikel/{{ $artikel->id }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="form">
                    <input type="text" class="form__input" id="nama" name="nama"
                        value="{{ old('nama', $artikel->nama) }}" required autofocus>
                    <label for="nama" class="form__label"><span class="content-label">
                            Nama</span></label>
                    @error('nama')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <div class="form">
                    <input type="text" class="form__input" id="id_kategori" name="id_kategori"
                        value="{{ old('id_kategori', $artikel->id_kategori) }}" required autofocus>
                    <label for="id_kategori" class="form__label"><span class="content-label">
                            ID Kategori</span></label>
                    @error('id_kategori')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <div class="form">
                    <input type="text" class="form__input" id="deskripsi_singkat" name="deskripsi_singkat"
                        value="{{ old('deskripsi_singkat', $artikel->deskripsi_singkat) }}" required autofocus>
                    <label for="deskripsi_singkat" class="form__label"><span class="content-label">
                            Deskripsi Singkat</span></label>
                    @error('deskripsi_singkat')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <div class="form">
                    <input type="text" class="form__input" id="deskripsi_panjang" name="deskripsi_panjang"
                        value="{{ old('deskripsi_panjang', $artikel->deskripsi_panjang) }}" required autofocus>
                    <label for="deskripsi_panjang" class="form__label"><span class="content-label">
                            Deskripsi Panjang</span></label>
                    @error('deskripsi_panjang')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <div class="form">
                    <input type="text" class="form__input" id="tanggal" name="tanggal"
                        value="{{ old('tanggal', $artikel->tanggal) }}" required autofocus>
                    <label for="tanggal" class="form__label"><span class="content-label">
                            Tanggal</span></label>
                    @error('tanggal')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <div class="form">
                    <input type="text" class="form__input" id="link" name="link"
                        value="{{ old('link', $artikel->link) }}" required autofocus>
                    <label for="link" class="form__label"><span class="content-label">
                            Link</span></label>
                    @error('link')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <div class="form">
                    <input type="text" class="form__input" id="sumber" name="sumber"
                        value="{{ old('sumber', $artikel->sumber) }}" required autofocus>
                    <label for="sumber" class="form__label"><span class="content-label">
                            Sumber</span></label>
                    @error('sumber')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <div class="form">
                    <input type="text" class="form__input" id="foto" name="foto"
                        value="{{ old('foto', $artikel->foto) }}" required autofocus>
                    <label for="foto" class="form__label"><span class="content-label">
                            Foto</span></label>
                    @error('foto')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Ubah Materi Video</button>
            </form>
        </div>
    </div>
@endsection
