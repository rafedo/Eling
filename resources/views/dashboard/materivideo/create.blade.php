@extends('dashboard.layouts.main')

@section('content')
    <div class="container-tambah">
        <div class="heading">
            <h1>Tambahkan Data Baru</h1>
        </div>

        <div class="content-tambah">
            <form action="/dashboard/materivideo" method="post" enctype="multipart/form-data">
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
                    <select class="form__input @error('id_kategori') is-invalid @enderror" name="id_kategori"
                        id="id_kategori" value="{{ old('id_kategori') }}" required autofocus>
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
                    <input type="text" class="form__input @error('deskripsi_panjang') is-invalid @enderror"
                        id="deskripsi_panjang" name="deskripsi_panjang" value="{{ old('deskripsi_panjang') }}" required
                        autofocus>
                    <label for="deskripsi_panjang" class="form__label"><span class="content-label">
                            Deskripsi Panjang</span></label>
                    @error('nama')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <div class="form">
                    <input type="text" class="form__input @error('link_video') is-invalid @enderror" id="link_video"
                        name="link_video" value="{{ old('link_video') }}" required autofocus>
                    <label for="link_video" class="form__label"><span class="content-label">
                            Link Video</span></label>
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
    </div>
@endsection
