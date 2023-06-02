@extends('dashboard.layouts.main')

@section('content')
    <div class="container-table">
        <div class="heading">
            <h1>Data Kategori</h1>
        </div>

        @if (session()->has('berhasil'))
            <p>{{ session('berhasil') }}</p>
        @endif

        <a class="btn btn-primary" href="/dashboard/kategori/create">Tambahkan Data</a>
        <table class="content-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Jenis Kategori</th>
                    <th>Deskripsi Singkat</th>
                    <th>Deskripsi Panjang</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kategoris as $kategori)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $kategori->jenis_kategori }}</td>
                        <td>{{ $kategori->deskripsi_singkat }}</td>
                        <td>{{ $kategori->deskripsi_panjang }}</td>
                        <td>
                            <img src="{{ asset('storage/category/'. $kategori->foto) }}" style="max-width: 200px">
                        </td>
                        <td>
                            <button class="btn-info"><a href="/dashboard/kategori/{{ $kategori->id }}/edit">Ubah</a></button>

                            <form action="/dashboard/kategori/{{ $kategori->id }}" method="post" style="display:inline;">
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