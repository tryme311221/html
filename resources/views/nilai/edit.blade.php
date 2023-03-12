@extends('main.layout')
@section('content')
        <center>
            <b>
                <h2>EDIT DATA NILAI</h2>
                <form method="POST" action="/nilai/update/{{ $nilai->id }}">
                    @csrf
                    <table>
                        <tr>
                            <td>GURU | MAPEL | KELAS</td>
                            <td>
                                <select name="mengajar_id">
                                   <option></option>
                                    @foreach ($mengajar as $each)
                                            <option value="{{ $each->id }}" @if ($each->id == $nilai->mengajar_id) selected @endif>
                                            {{ $each->guru->nama_guru }} {{ $each->mapel->nama_mapel }} {{ $each->kelas->nama_kelas }}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                            <tr>
                                <td>SISWA</td>
                                <td>
                                    <select name="siswa_id">
                                       <option></option>
                                        @foreach ($siswa as $each)
                                                <option value="{{ $each->id }}" @if ($each->id == $nilai->siswa_id) selected @endif>
                                                    {{ $each->nama_siswa }}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>UH</td>
                                <td>
                                   <input type="number" name="uh" value="{{ $nilai->uh }}">
                                </td>
                            </tr>
                            <tr>
                                <td>UTS</td>
                                <td>
                                   <input type="number" name="uts" value="{{ $nilai->uts }}">
                                </td>
                            </tr>
                            <tr>
                                <td>UAS</td>
                                <td>
                                   <input type="number" name="uas" value="{{ $nilai->uas }}">
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