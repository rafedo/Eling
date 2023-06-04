@extends('dashboard.layouts.main')

@section('content')
    <div class="container-tambah">
        <div class="heading">
            <h1>Tambahkan Artikel</h1>
        </div>

        <form action="/dashboard/artikel" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form">
                <input type="text" class="form__input @error('nama') is-invalid @enderror" id="nama" name="nama"
                    value="{{ old('nama') }}" required autofocus>
                <label for="nama" class="form__label"><span class="content-label">
                        Nama</span></label>
                @error('nama')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="">
                <p style="margin-top: 20px;">Kategori</p>
                <select class="form__input @error('id_kategori') is-invalid @enderror" name="id_kategori" id="id_kategori"
                    value="{{ old('id_kategori') }}" required autofocus>
                    <option value="id_kategori">Pilih Kategori</option>
                    @foreach ($kategori as $item)
                        <option value="{{ $item->id }}">{{ $item->jenis_kategori }}</option>
                    @endforeach
                </select>
                @error('id_kategori')
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
                <input id="deskripsi_panjang" type="hidden" name="deskripsi_panjang" value="{{ old('deskripsi_panjang') }}">
                <label for="deskripsi_panjang">
                    Deskripsi Panjang</label>
                <trix-editor input="deskripsi_panjang"></trix-editor>
            </div>

            <div class="form">
                <input type="text" class="form__input @error('tanggal') is-invalid @enderror" id="tanggal"
                    name="tanggal" value="{{ old('tanggal') }}" required autofocus>
                <label for="tanggal" class="form__label"><span class="content-label">
                        Tanggal</span></label>
                @error('tanggal')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="form">
                <input type="text" class="form__input @error('link') is-invalid @enderror" id="link" name="link"
                    value="{{ old('link') }}" required autofocus>
                <label for="link" class="form__label"><span class="content-label">
                        Link</span></label>
                @error('link')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="form">
                <input type="text" class="form__input @error('sumber') is-invalid @enderror" id="sumber"
                    name="sumber" value="{{ old('sumber') }}" required autofocus>
                <label for="sumber" class="form__label"><span class="content-label">
                        Sumber</span></label>
                @error('sumber')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="">
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
