@extends('dashboard.layouts.main')

@section('content')
    <div class="container-ubah">
        <div class="heading">
            <h1>Ubah Kategori</h1>
        </div>

        <div class="content-ubah">
            <form action="/dashboard/kategori/{{ $kategori->id }}" method="post">
                <div class="form">
                    <input type="text" class="form__input" id="jenis_kategori" name="jenis_kategori"
                        value="{{ old('jenis_kategori') }}" required autofocus>
                    <label for="jenis_kategori" class="form__label"><span class="content-label">
                            Jenis Kategori</span></label>
                </div>
                <button type="submit" class="btn btn-primary">Update Kategori</button>
            </form>
        </div>
    </div>
@endsection
