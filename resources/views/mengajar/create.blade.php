@extends('main.layout')
@section('content')
        <center>
            <b>
                <h2>TAMBAH DATA MENGAJAR</h2>
                <form method="POST" action="/mengajar/store">
                    @csrf
                    <table>
                        <tr>
                            <td>GURU</td>
                            <td>
                                <select name="guru_id">
                                   <option></option>
                                    @foreach ($guru as $g)
                                            <option value="{{ $g->id }}">{{ $g->nama_guru }}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>MATA PELAJARAN</td>
                            <td>
                                <select name="mapel_id">
                                   <option></option>
                                    @foreach ($mapel as $m)
                                            <option value="{{ $m->id }}">{{ $m->nama_mapel }}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>KELAS</td>
                            <td>
                                <select name="kelas_id">
                                   <option></option>
                                    @foreach ($kelas as $k)
                                            <option value="{{ $k->id }}">{{ $k->nama_kelas }} {{ $k->jurusan->nama_jurusan }}</option>
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
