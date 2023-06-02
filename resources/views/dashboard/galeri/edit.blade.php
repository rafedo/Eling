@extends('dashboard.layouts.main')

@section('content')
    <div class="container-ubah">
        <div class="heading">
            <h1>Ubah Galeri</h1>
        </div>

        <div class="content-ubah">
            <form action="/dashboard/galeri/{{ $galeri->id }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="form">
                    <input type="text" class="form__input" id="foto" name="foto"
                        value="{{ old('foto', $galeri->foto) }}" required autofocus>
                    <label for="foto" class="form__label"><span class="content-label">
                            Foto</span></label>
                    @error('foto')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Update Galeri</button>
            </form>
        </div>
    </div>
@endsection
