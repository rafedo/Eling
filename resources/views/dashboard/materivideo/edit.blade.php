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
                <div class="form">
                    <input type="text" class="form__input" id="id_kategory" name="id_kategory"
                        value="{{ old('id_kategory', $materivideo->id_kategory) }}" required autofocus>
                    <label for="id_kategory" class="form__label"><span class="content-label">
                            ID Kategori</span></label>
                    @error('id_kategory')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <div class="form">
                    <input type="text" class="form__input" id="link" name="link"
                        value="{{ old('link', $materivideo->link) }}" required autofocus>
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
