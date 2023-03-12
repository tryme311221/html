@extends('main.layout')
@section('content')
<center>
    <b>
        <h2>EDIT DATA MATA PELAJARAN</h2>
        <form action="/mapel/update/{{$mapel->id}}" method="POST">
        @csrf
        <table>
            <tr>
                <td>NAMA MAPEL</td>
                <td><input type="text" name="nama_mapel" value="{{$mapel->nama_mapel}}"/></td>
            </tr>
            <tr>
                <td colspan="2">
                    <center><button class="button-primary" type="submit">UBAH</button></center>
                </td>
            </tr>
        </table>
        </form>
    </b>
</center>
@endsection