@extends('main.layout')
@section('content')

       <center>
              <br>
              <h2>EDIT DATA GURU</h2>
              <form method="POST" action="/guru/update/{{ $guru->id }}">
                @csrf
                <table width="50%">
                    <tr>
                        <td>NIP</td>
                        <td><input type="text" name="nip" value="{{ $guru->nip }}"></td>

                    </tr>
                    <tr>
                        <td>NAMA GURU</td>
                        <td><input type="text" name="nama_guru" value="{{ $guru->nama_guru }}"></td>
                        
                    </tr>
                    <tr>
                        <td>JENIS KELAMIN</td>
                        <td><input type="radio" name="jk" value="L "{{ $guru->jk == 'L' ? 'checked' : '' }}>Laki-laki</td>
                        <td><input type="radio" name="jk" value="P "{{ $guru->jk == 'P' ? 'checked' : '' }}>Perempuan</td>                
                    </tr>
                    <tr>
                        <td>ALAMAT</td>
                        <td><textarea name="alamat" cols="30" rows="10">{{ $guru->alamat }}</textarea></td>
                    </tr>
                    <tr>
                        <td>PASSWORD</td>
                        <td><input type="password" name="password" value="{{ $guru->password }}"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                          <center><button class="button-primary" type="submit">UBAH</button></center>
                        </td>
                    </tr>
                </table>
            </form>
       </center>
@endsection