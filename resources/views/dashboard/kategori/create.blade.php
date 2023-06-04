@extends('dashboard.layouts.main')

@section('content')
    <div class="container-tambah">
        <div class="heading">
            <h1>Tambahkan Data Kategori</h1>
        </div>

        <form action="/dashboard/kategori" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form">
                <input type="text" class="form__input @error('jenis_kategori') is-invalid @enderror" id="jenis_kategori"
                    name="jenis_kategori" value="{{ old('jenis_kategori') }}" required autofocus>
                <label for="jenis_kategori" class="form__label"><span class="content-label">
                        Jenis Kategori</span></label>
                @error('jenis_kategori')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="form">
                <input type="text" class="form__input @error('deskripsi_singkat') is-invalid @enderror"
                    id="deskripsi_singkat" name="deskripsi_singkat" value="{{ old('deskripsi_singkat') }}" required
                    autofocus>
                <label for="deskripsi_singkat" class="form__label"><span class="content-label">
                        Deskripsi Singkat</span></label>
                @error('deskripsi_singkat')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="form-trix" style="margin-top: 25px">
                <input id="deskripsi_panjang" type="hidden" name="deskripsi_panjang"
                    value="{{ old('deskripsi_panjang') }}">
                <label for="deskripsi_panjang">
                    Deskripsi Panjang</label>
                <trix-editor input="deskripsi_panjang"></trix-editor>
            </div>

            <div>
                <p style="margin-top: 20px">Foto</p>
                <input type="file" class="form__input @error('foto') is-invalid @enderror" accept="image/*"
                    id="foto" name="foto" value="{{ old('foto') }}" required autofocus>
                <label for="foto" class="form__label"><span class="content-label">
                    </span></label>
                @error('foto')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
    </div>

    <script>
        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })
    </script>
@endsection
