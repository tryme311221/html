@extends('main.layout')
@section('content')
<center>
    <b>
        <h2>EDIT DATA JURUSAN</h2>
        <form action="/jurusan/update/{{$jurusan->id}}" method="POST">
        @csrf
        <table>
            <tr>
                <td>NAMA JURUSAN</td>
                <td><input type="text" name="nama_jurusan" value="{{$jurusan->nama_jurusan}}"/></td>
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