@extends('main.layout')
@section('content')

       <center>
              <br>
              <h2>EDIT DATA SISWA</h2>
              <form method="POST" action="/siswa/update/{{ $siswa->id }}">
                @csrf
                <table>
                    <tr>
                        <td>NIS</td>
                        <td><input type="text" name="nis" value="{{ $siswa->nis }}"></td>

                    </tr>
                    <tr>
                        <td>NAMA SISWA</td>
                        <td><input type="text" name="nama_siswa" value="{{ $siswa->nama_siswa }}"></td>
                        
                    </tr>
                    <tr>
                        <td>JENIS KELAMIN</td>
                        <td><input type="radio" name="jk" value="L "{{ $siswa->jk == 'L' ? 'checked' : '' }}>Laki-laki</td>
                        <td><input type="radio" name="jk" value="P "{{ $siswa->jk == 'P' ? 'checked' : '' }}>Perempuan</td>                
                    </tr>
                    <tr>
                        <td>ALAMAT</td>
                        <td><textarea name="alamat" cols="30" rows="10">{{ $siswa->alamat }}</textarea></td>
                    </tr>
                    <tr>
                        <td class="bar">KELAS</td>
                        <td class="bar">
                            <select name="kelas_id">
                               <option></option>
                                @foreach ($kelas as $k)
                                        <option value="{{ $k->id }}">{{ $k->nama_kelas }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>PASSWORD</td>
                        <td><input type="password" name="password" value="{{ $siswa->password }}"></td>
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