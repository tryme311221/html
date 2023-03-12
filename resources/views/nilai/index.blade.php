@extends('main.layout')
@section('content')
<center>
    <b>
        <h2>LIST DATA NILAI</h2>
            @if (session('user')->role == 'guru')
            <a href="/nilai/create" class="button-primary">TAMBAH DATA</a>
            @endif
            @if (session('success'))
            <p class="text-success">{{ session('success') }}</p>
            @endif
        <table cellPadding="10">
            <tr>
                <td>NO</td>
                <td>GURU | MAPEL | KELAS</td>
                <td>NAMA SISWA</td>
                <td>UH</td>
                <td>UTS</td>
                <td>UAS</td>
                <td>NA</td>
                @if (session('user')->role == 'guru')
                <td>ACTION</td>
                @endif
            </tr>
            @foreach ($nilai as $each)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $each->mengajar->guru->nama_guru}} {{ $each->mengajar->mapel->nama_mapel}} {{ $each->mengajar->kelas->nama_kelas}}</td>
                    <td>{{ $each->siswa->nama_siswa }}</td>
                    <td>{{ $each->uh }}</td>
                    <td>{{ $each->uts }}</td>
                    <td>{{ $each->uas }}</td>
                    <td>{{ $each->na }}</td>
                    @if (session('user')->role=='guru')
                    <td>
                        <a href="/nilai/edit/{{ $each->id }}" class="button-warning">EDIT</a>
                        <a href="/nilai/destroy/{{ $each->id }}" class="button-warning" onclick="return confirm('Yakin Hapus?')">HAPUS</a>
                        @endif
                    </td>
                </tr>
            @endforeach
        </table>
    </b>
</center>
@endsection

