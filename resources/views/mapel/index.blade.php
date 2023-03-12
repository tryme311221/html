@extends('main.layout')
@section('content')
<center>
    <b>
        <h2>LIST DATA MATA PELAJARAN</h2>
        <a href="/mapel/create" class="button-primary">TAMBAH DATA</a>
        <table cellPadding="10">
            <tr>
                <th>NO</th>
                <th>NAMA MAPEL</th>
                <th>ACTION</th>
            </tr>
            @foreach ($mapel as $m)
                <tr>
                    <td>{{$loop->iteration }}</td>
                    <td>{{ $m->nama_mapel }}</td>
                    <td>
                        <a href="/mapel/edit/{{ $m->id }}" class="button-warning">EDIT</a>
                        <a href="/mapel/destroy/{{ $m->id }}" class="button-danger" onclick="return confirm ('Yakin Hapus?')">HAPUS</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </b>
</center>
@endsection