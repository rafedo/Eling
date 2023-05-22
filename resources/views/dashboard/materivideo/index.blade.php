@extends('dashboard.layouts.main')

@section('content')
<div class="container-table">
    <div class="heading">
        <h1>Data Materi Video</h1>
    </div>

    @if (session()->has('berhasil'))
        <p>{{ session('berhasil') }}</p>
    @endif

    <a class="btn btn-primary" href="/dashboard/materivideo/create">Tambahkan Data</a>
    <table class="content-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>ID Kategori</th>
                <th>Link</th>
                <th>Sumber</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($materivideos as $materivideo)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $materivideo->nama }}</td>
                    <td>{{ $materivideo->id_kategori }}</td>
                    <td>{{ $materivideo->link }}</td>
                    <td>{{ $materivideo->sumber }}</td>
                    <td>
                        <button class="btn-info"><a href="/dashboard/materivideo/{{ $materivideo->id }}/edit">Ubah</a></button>

                        <form action="/dashboard/materivideo/{{ $materivideo->id }}" method="post" style="display:inline;">
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