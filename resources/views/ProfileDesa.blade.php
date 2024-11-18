@extends('layouts.app')

@section('content')
    <h1>profile Desa</h1>
    <a href="{{ route('profile_desa.create') }}" class="btn btn-primary">Tambah profile Desa</a>
    <table class="table">
        <thead>
            <tr>
                <th>Nama Desa</th>
                <th>Lokasi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($profileDesa as $profile)
                <tr>
                    <td>{{ $profile->nama_desa }}</td>
                    <td>{{ $profile->lokasi }}</td>
                    <td>
                        <a href="{{ route('profile_desa.edit', $profile->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('profile_desa.destroy', $profile->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
