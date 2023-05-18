@extends('dashboard.layouts.main')

@section('content')
    <div class="container-ubah">
        <div class="heading">
            <h1>Ubah Data Materi Video</h1>
        </div>

        <div class="content-ubah">
            <form action="/dashboard/pengepul/{{ $pengepul->id }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="form">
                    <input type="text" class="form__input" id="nama" name="nama"
                        value="{{ old('nama', $pengepul->nama) }}" required autofocus>
                    <label for="nama" class="form__label"><span class="content-label">
                            Nama</span></label>
                    @error('nama')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <div class="form">
                    <input type="text" class="form__input" id="tlp" name="tlp"
                        value="{{ old('tlp', $pengepul->tlp) }}" required autofocus>
                    <label for="tlp" class="form__label"><span class="content-label">
                           Telepon</span></label>
                    @error('tlp')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <div class="form">
                    <input type="text" class="form__input" id="alamat" name="alamat"
                        value="{{ old('alamat', $pengepul->alamat) }}" required autofocus>
                    <label for="alamat" class="form__label"><span class="content-label">
                            Alamat</span></label>
                    @error('alamat')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Ubah Alamat</button>
            </form>
        </div>
    </div>
@endsection
