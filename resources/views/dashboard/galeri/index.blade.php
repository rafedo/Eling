@extends('dashboard.layouts.main')

@section('content')
    <div class="container-table">
        <div class="heading">
            <h1>Data Galeri</h1>
        </div>

        @if (session()->has('berhasil'))
            <p>{{ session('berhasil') }}</p>
        @endif

        <a class="btn btn-primary" href="/dashboard/galeri/create">Tambahkan Data</a>
        <table class="content-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($galeris as $galeri)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $galeri->foto }}</td>
     
                        <td>
                            <button class="btn-info"><a href="/dashboard/galeri/{{ $galeri->id }}/edit">Ubah</a></button>

                            <form action="/dashboard/galeri/{{ $galeri->id }}" method="post" style="display:inline;">
                                @method('delete')
                                @csrf
                                <button class="btn-danger" onclick="return confirm('Yakin hapus data?')"
                                    style="box-sizing: border-box">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
