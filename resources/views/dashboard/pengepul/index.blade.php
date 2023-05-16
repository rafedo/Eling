@extends('dashboard.layouts.main')

@section('content')
<div class="container-table">
    <div class="heading">
        <h1>Data Pengepul</h1>
    </div>

    @if (session()->has('berhasil'))
        <p>{{ session('berhasil') }}</p>
    @endif

    <a class="btn btn-primary" href="/dashboard/pengepul/create">Tambahkan Data</a>
    <table class="content-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Telepon</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pengepuls as $pengepul)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $pengepul->nama }}</td>
                    <td>{{ $pengepul->tlp }}</td>
                    <td>{{ $pengepul->alamat }}</td>
                    <td>
                        <button class="btn-info"><a href="/dashboard/pengepul/{{ $pengepul->id }}/edit">Ubah</a></button>

                        <form action="/dashboard/pengepul/{{ $pengepul->id }}" method="post" style="display:inline;">
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