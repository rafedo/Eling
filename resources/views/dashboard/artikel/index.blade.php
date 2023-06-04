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
                    <th>Kategori</th>
                    <th>Deskripsi Singkat</th>
                    <th>Deskripsi Panjang</th>
                    <th>Tanggal</th>
                    <th>Link</th>
                    <th>Sumber</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($artikel as $artikel)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $artikel->nama }}</td>
                        <td>{{ $artikel->kategori->jenis_kategori }}</td>
                        <td>{{ $artikel->deskripsi_singkat }}</td>
                        <td>{!! $artikel->deskripsi_panjang !!}</td>
                        <td>{{ $artikel->tanggal }}</td>
                        <td>{{ $artikel->link }}</td>
                        <td>{{ $artikel->sumber }}</td>
                        <td>
                            <img src="{{ asset('storage/artikel/' . $artikel->foto) }}" style="max-width: 200px">
                        </td>
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
