@extends('dashboard.layouts.main')

@section('content')
    <div class="container-table">
        <div class="heading">
            <h1>Data Artikel</h1>
        </div>

        @if (session()->has('berhasil'))
            <p>{{ session('berhasil') }}</p>
        @endif

        <a class="btn btn-primary" href="/dashboard/artikel/create">Tambahkan Data</a>
        <table class="content-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>ID Kategori</th>
                    <th>Link</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($artikels as $artikel)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $artikel->nama }}</td>
                        <td>{{ $artikel->id_kategori }}</td>
                        <td>{{ $artikel->link }}</td>
                        <td>{{ $artikel->foto }}</td>
                        <td>
                            <button class="btn-info"><a href="/dashboard/artikel/{{ $artikel->id }}/edit">Ubah</a></button>

                            <form action="/dashboard/artikel/{{ $artikel->id }}" method="post" style="display:inline;">
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
