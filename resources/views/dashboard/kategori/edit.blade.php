@extends('dashboard.layouts.main')

@section('content')
    <div class="container-ubah">
        <div class="heading">
            <h1>Ubah Data Kategori</h1>
        </div>

        <div class="content-ubah">
            <form action="/dashboard/kategori/{{ $kategori->id }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="form">
                    <input type="text" class="form__input" id="jenis_kategori" name="jenis_kategori"
                        value="{{ old('jenis_kategori', $kategori->jenis_kategori) }}" required autofocus>
                    <label for="jenis_kategori" class="form__label"><span class="content-label">
                            Jenis Kategori</span></label>
                    @error('jenis_kategori')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <div class="form">
                    <input type="text" class="form__input" id="deskripsi_singkat" name="deskripsi_singkat"
                        value="{{ old('deskripsi_singkat', $kategori->deskripsi_singkat) }}" required autofocus>
                    <label for="deskripsi_singkat" class="form__label"><span class="content-label">
                            Deskripsi Singkat</span></label>
                    @error('deskripsi_singkat')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-trix" style="margin-top: 25px">
                    <input id="deskripsi_panjang" type="hidden" name="deskripsi_panjang"
                        value="{{ old('deskripsi_panjang', $kategori->deskripsi_panjang) }}">
                    <label for="deskripsi_panjang">
                        Deskripsi Panjang</label>
                    <trix-editor input="deskripsi_panjang"></trix-editor>
                </div>
                <div class="">
                    <p style="margin-top: 20px">Foto</p>
                    <input type="file" class="form__input" accept="image/*" id="foto" name="foto"
                        value="{{ old('foto', $kategori->foto) }}" required autofocus>
                    <label for="foto" class="form__label"><span class="content-label">
                        </span></label>
                    @error('foto')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Ubah Data</button>
            </form>
        </div>
    </div>
@endsection
