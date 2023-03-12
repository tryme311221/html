@extends('main.layout')
@section('content')
        <center>
            <b>
                <h2>TAMBAH DATA SISWA</h2>
                <form method="POST" action="/siswa/store">
                    @csrf
                    <table>
                        <tr>
                            <td>NIS</td>
                            <td>
                                <input type="text" name="nis">
                            </td>
                        </tr>

                           <tr>
                                <td>NAMA SISWA</td>
                                <td>
                                    <input type="text" name="nama_siswa">
                                </td>
                            </tr>
                            <tr>
                                <td>JENIS KELAMIN</td>
                                <td>
                                    <input type="radio" name="jk" value="L">Laki-laki
                                    <input type="radio" name="jk" value="P">Perempuan
                                </td>
                            </tr>
                            <tr>
                                <td>ALAMAT</td>
                                <td>
                                    <textarea name="alamat" cols="30" rows="5"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>KELAS</td>
                                <td>
                                    <select name="kelas_id" id="">
                                       <option></option>
                                        @foreach ($kelas as $k)
                                                <option value="{{ $k->id }}">{{ $k->nama_kelas }}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                           
                            <tr>
                                <td>PASSWORD</td>
                                <td>
                                    <input type="password" name="password">
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