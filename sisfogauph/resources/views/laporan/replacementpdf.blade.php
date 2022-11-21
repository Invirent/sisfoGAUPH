<html>
    <head>
        <title>Pengajuan Replacement Class</title>
        <style>
            container {
                width: 100%;
                text-align: left;
            }
            row {
                width: 100%;
            }
    </head>
    <h1>
        Pengajuan Replacement Class
    </h1>
    <hr>
    
    @foreach ($replacement as $rpl)
    <table>
        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td>{{ $rpl->nama_lengkap }}</td>
        </tr>
        <tr>
            <td>Nama Mata Kuliah</td>
            <td>:</td>
            <td>{{ $rpl->mata_kuliah }}</td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td>{{ $rpl->kelas }}</td>
        </tr>
        <tr>
            <td>Program Studi</td>
            <td>:</td>
            <td>{{ $rpl->prodi }}</td>
        </tr>
        <tr>
            <td>Semester</td>
            <td>:</td>
            <td>{{ $rpl->semester }}</td>
        </tr>
        <tr>
            <td>Tahun Akademik</td>
            <td>:</td>
            <td>{{ $rpl->tahun_akademik }}</td>
        </tr>
        <tr>
            <td>Jadwal Tanggal Replacement</td>
            <td>:</td>
            <td>{{ $rpl->tanggal }}</td>
        </tr>
        <tr>
            <td>Jadwal Jam Kuliah</td>
            <td>:</td>
            <td>{{ $rpl->jadwal_kuliah }}</td>
        </tr>
        <tr>
            <td>Tanggal Replacement</td>
            <td>:</td>
            <td>{{ $rpl->tanggal_replacement }} {{$rpl->jam_replacement}} </td>
        </tr>
        <tr>
            <td>Alasan Replacement</td>
            <td>:</td>
            <td>{{ $rpl->alasan_replacement }}</td>
        </tr>
    </table>
    @endforeach
</html>
