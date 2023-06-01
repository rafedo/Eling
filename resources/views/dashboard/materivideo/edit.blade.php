@extends('dashboard.layouts.main')

@section('content')
    <div class="container-ubah">
        <div class="heading">
            <h1>Ubah Data Materi Video</h1>
        </div>

        <div class="content-ubah">
            <form action="/dashboard/materivideo/{{ $materivideo->id }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="form">
                    <input type="text" class="form__input" id="nama" name="nama"
                        value="{{ old('nama', $materivideo->nama) }}" required autofocus>
                    <label for="nama" class="form__label"><span class="content-label">
                            Nama</span></label>
                    @error('nama')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <div class="">
                    <select class="form__input @error('id_kategori') is-invalid @enderror" 
                        name="id_kategori" id="id_kategori" value="{{ old('id_kategori') }}" required
                        autofocus>
                        <option value="{{ old('id_kategori', $materivideo->id_kategori) }}">Pilih Kategori</option>
                        @foreach ($kategori as $item)
                            <option value="{{ $item->id }}">{{ $item->jenis_kategori }}</option>
                        @endforeach
                    </select>
                    @error('id_kategori')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <div class="form">
                    <input type="text" class="form__input" id="deskripsi_panjang" name="deskripsi_panjang"
                        value="{{ old('deskripsi_panjang', $materivideo->deskripsi_panjang) }}" required autofocus>
                    <label for="deskripsi_panjang" class="form__label"><span class="content-label">
                            Deskripsi Panjang</span></label>
                    @error('deskripsi_panjang')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <div class="form">
                    <input type="text" class="form__input" id="link_video" name="link_video"
                        value="{{ old('link_video', $materivideo->link_video) }}" required autofocus>
                    <label for="link_video" class="form__label"><span class="content-label">
                            Link Video</span></label>
                    @error('link_video')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <div class="form">
                    <input type="text" class="form__input" id="sumber" name="sumber"
                        value="{{ old('sumber', $materivideo->sumber) }}" required autofocus>
                    <label for="sumber" class="form__label"><span class="content-label">
                            Sumber</span></label>
                    @error('sumber')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <div class="">
                    <input type="file" class="form__input" accept="image/*" id="foto" name="foto"
                        value="{{ old('foto', $materivideo->foto) }}" required autofocus>
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
