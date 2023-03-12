@extends('main.layout')
@section('content')
<center>
    <b>
        <h2>TAMBAH DATA NILAI</h2>
        <form action="/nilai/store" method="POST">
        @csrf
        <table>
            <tr>
                <td>GURU | MAPEL | KELAS</td>
                <td>
                    <select name="mengajar_id">
                       <option></option>
                        @foreach ($mengajar as $each)
                                <option value="{{ $each->id }}">{{ $each->guru->nama_guru }} {{ $each->mapel->nama_mapel }} {{ $each->kelas->nama_kelas }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td>NAMA SISWA</td>
                <td>
                    <select name="siswa_id">
                       <option></option>
                        @foreach ($siswa as $each)
                                <option value="{{ $each->id }}">{{ $each->nama_siswa }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td>UH</td>
                <td><input type="number" name="uh"/></td>
            </tr>
            <tr>
                <td>UTS</td>
                <td><input type="number" name="uts"/></td>
            </tr>
            <tr>
                <td>UAS</td>
                <td><input type="number" name="uas"/></td>
            </tr>
        </tr>
        <tr>
         <td colspan="2">
             <center>
            <button class="button-primary" input type="submit" method="POST">SIMPAN</button>
             </center>
         </td>
    </tr>
        </table>
        </form>
    </b>
</center>
@endsection