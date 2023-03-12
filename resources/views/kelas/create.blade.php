@extends('main.layout')
@section('content')
        <center>
            <b>
                <h2>TAMBAH DATA KELAS</h2>
                <form method="POST" action="/kelas/store">
                    @csrf
                    <table width="50%">
                           <tr>
                                <td>NAMA KELAS</td>
                                <td>
                                    <input type="text" name="nama_kelas">
                                </td>
                            </tr>
                            <tr>
                                <td>JURUSAN</td>
                                <td>
                                    <select name="jurusan_id">
                                       <option></option>
                                        @foreach ($jurusan as $j)
                                                <option value="{{ $j->id }}">{{ $j->nama_jurusan }}</option>
                                        @endforeach
                                    </select>
                                </td>
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