<!DOCTYPE html>
<html lang="en">
    <head>
         <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
         <title>LARACT PENILAIAN SISWA</title>
    </head>
    <body>
        <div class="header">
            <img src="{{ asset('/gambar/header.jpg') }}" width="100%" height="40%">
        </div>        
        <div class="menu">
            <b>
                <a href="/home">HOME</a>
                @if (session ('user')->role == 'admin')
                  <a href="/guru/index">GURU</a>
                  <a href="/jurusan/index">JURUSAN</a>
                  <a href="/kelas/index">KELAS</a>
                  <a href="/siswa/index">SISWA</a>
                  <a href="/mapel/index">MATA PELAJARAN</a>
                  <a href="/mengajar/index">MENGAJAR</a>
                @else
                  <a href="/nilai/index">NILAI</a>
                @endif
                  <a href="/logout">LOGOUT</a>
            </b>
        </div> 
        @yield('content')
        <div class="footer">
            <p>
                <center>
                    &copy; {{ date('Y') }} - UJIKOM LSP
                </center>
            </p>
        </div>
    </body>
</html>