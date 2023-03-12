@extends('main.layout')
@section('content')
        <center>
            <b>
                <h2>TAMBAH DATA GURU</h2>
                <form method="POST" action="/guru/store">
                    @csrf
                    <table>
                           <tr>
                                <td>NIP</td>
                                <td>
                                    <input type="text" name="nip">
                                </td>
                           </tr>
                           <tr>
                            <td>NAMA GURU</td>
                            <td>
                                <input type="text" name="nama_guru">
                            </td>
                       </tr>
                       <tr>
                        <td >JENIS KELAMIN</td>
                        <td>
                            <input type="radio" name="jk" value="L">Laki-laki
                            <input type="radio" name="jk" value="P">Perempuan
                        </td>
                   </tr>
                     <tr>
                        <td>ALAMAT</td>
                        <td>
                            <textarea name="alamat"></textarea>
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