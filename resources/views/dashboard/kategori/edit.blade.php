@extends('dashboard.layouts.main')

@section('content')
    <div class="container-ubah">
        <div class="heading">
            <h1>Ubah Kategori</h1>
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
                    <input type="text" class="form__input" id="deskripsi" name="deskripsi"
                        value="{{ old('deskripsi', $kategori->deskripsi) }}" required autofocus>
                    <label for="deskripsi" class="form__label"><span class="content-label">
                            Deskripsi</span></label>
                    @error('deskripsi')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <div class="form">
                    <input type="text" class="form__input" id="foto" name="foto"
                        value="{{ old('foto', $kategori->foto) }}" required autofocus>
                    <label for="foto" class="form__label"><span class="content-label">
                            Foto</span></label>
                    @error('foto')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Update Kategori</button>
            </form>
        </div>
    </div>
@endsection
