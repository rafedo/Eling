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
                    <input type="text" class="form__input" id="link" name="link"
                        value="{{ old('link', $artikel->link) }}" required autofocus>
                    <label for="link" class="form__label"><span class="content-label">
                            Link</span></label>
                    @error('link')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Ubah Materi Video</button>
            </form>
        </div>
    </div>
@endsection
