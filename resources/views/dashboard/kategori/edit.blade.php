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
                    <input type="text" class="form__input" id="deskripsi_singkat" name="deskripsi_singkat"
                        value="{{ old('deskripsi_singkat', $kategori->deskripsi_singkat) }}" required autofocus>
                    <label for="deskripsi_singkat" class="form__label"><span class="content-label">
                        Deskripsi Singkat</span></label>
                    @error('deskripsi_singkat')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <div class="form">
                    <input type="text" class="form__input" id="deskripsi_panjang" name="deskripsi_panjang"
                        value="{{ old('deskripsi_panjang', $kategori->deskripsi_panjang) }}" required autofocus>
                    <label for="deskripsi_panjang" class="form__label"><span class="content-label">
                            Deskripsi Panjang</span></label>
                    @error('deskripsi')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <div class="">
                    <input type="file" class="form__input" accept="image/*" id="foto" name="foto"
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
