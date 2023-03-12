@extends('main.layout')
@section('content')
<center>
    <b>
        <h2>TAMBAH DATA JURUSAN</h2>
        <form action="/jurusan/store" method="POST">
        @csrf
        <table>
            <tr>
                <td>NAMA JURUSAN</td>
                <td><input type="text" name="nama_jurusan"/></td>
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