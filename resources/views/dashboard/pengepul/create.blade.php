@extends('dashboard.layouts.main')

@section('content')
<div class="container-tambah">
        <div class="heading">
            <h1>Tambahkan Data Baru</h1>
        </div>

        <div class="content-tambah">
            <form action="/dashboard/pengepul" method="post">
                @csrf
                <div class="form">
                    <input type="text" class="form__input @error('nama') is-invalid @enderror"
                        id="nama" name="nama" value="{{ old('nama') }}" required
                        autofocus>
                    <label for="nama" class="form__label"><span class="content-label">
                            Nama</span></label>
                    @error('nama')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <div class="form">
                    <input type="text" class="form__input @error('tlp') is-invalid @enderror"
                        id="tlp" name="tlp" value="{{ old('tlp') }}" required
                        autofocus>
                    <label for="tlp" class="form__label"><span class="content-label">
                            Telepon</span></label>
                    @error('tlp')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <div class="form">
                    <input type="text" class="form__input @error('alamat') is-invalid @enderror"
                        id="alamat" name="alamat" value="{{ old('alamat') }}" required
                        autofocus>
                    <label for="alamat" class="form__label"><span class="content-label">
                            Alamat</span></label>
                    @error('alamat')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>
@endsection
