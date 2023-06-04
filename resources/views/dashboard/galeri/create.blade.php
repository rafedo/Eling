@extends('dashboard.layouts.main')

@section('content')
    <div class="container-tambah">
        <div class="heading">
            <h1>Tambahkan Data Galeri</h1>
        </div>

        <div class="content-tambah">
            <form action="/dashboard/galeri/store/{{ $id }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="">
                    <input type="file" class="form__input @error('foto') is-invalid @enderror" accept="image/*" id="foto" name="foto"
                        value="{{ old('foto') }}" required autofocus>
                    <label for="foto" class="form__label"><span class="content-label">
                            Foto</span></label>
                    @error('foto')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>
    
@endsection
