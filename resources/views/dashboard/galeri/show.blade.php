@extends('dashboard.layouts.main')

@section('content')
    <div class="py-3">
        <a href="/dashboard/galeri/create/{{ $id }}" class="btn btn-success">(+) Tambah</a>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($galleries as $gallery)
                    <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td><img src="{{ asset('storage/images/'. $gallery->foto) }}" style="width: 800px"></td>
                        <td>
                            <form action="{{ route('galeri.destroy', ['galeri' => $gallery]) }}" method="post" style="display:inline;">
                                @method('delete')
                                @csrf
                                <button class="btn-info" onclick="return confirm('Yakin hapus data?')"
                                    style="box-sizing: border-box">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection