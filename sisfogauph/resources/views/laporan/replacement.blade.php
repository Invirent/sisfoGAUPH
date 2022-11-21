@extends('layouts.app')

@section('title','Pengajuan Replacement Class')

@section('content')
    
    <a target="_blank" href="/laporan/replacement/pdf" 
    class="btn btn-primary">Cetak PDF</a>
    <br>
    <br>
    <h1>
        Pengajuan Replacement Class
    </h1>
    <hr>
    <table>
        @foreach ($replacement as $rpl)
            <div class="container text-left">
                <div class="row">
                    <div class="col-4">
                        <b>Nama Lengkap </b>
                    </div>
                    <div class="col-1">
                        : 
                    </div>
                    <div class="col-7">
                        {{ $rpl->nama_lengkap }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <b>Nama Mata Kuliah </b>
                    </div>
                    <div class="col-1">
                        : 
                    </div>
                    <div class="col-7">
                        {{$rpl->mata_kuliah}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <b>Kelas </b>
                    </div>
                    <div class="col-1">
                        : 
                    </div>
                    <div class="col-7">
                        {{$rpl->kelas}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <b>Program Studi </b>
                    </div>
                    <div class="col-1">
                        : 
                    </div>
                    <div class="col-7">
                        {{$rpl->prodi}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <b>Semester </b>
                    </div>
                    <div class="col-1">
                        : 
                    </div>
                    <div class="col-7">
                        {{$rpl->semester}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <b>Tahun Akademik </b>
                    </div>
                    <div class="col-1">
                        : 
                    </div>
                    <div class="col-7">
                        {{$rpl->tahun_akademik}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <b>Jadwal Tanggal Replacement </b>
                    </div>
                    <div class="col-1">
                        : 
                    </div>
                    <div class="col-7">
                        {{$rpl->tanggal}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <b>Jadwal Jam Kuliah </b>
                    </div>
                    <div class="col-1">
                        : 
                    </div>
                    <div class="col-7">
                        {{$rpl->jadwal_kuliah}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <b>Tanggal Replacement </b>
                    </div>
                    <div class="col-1">
                        : 
                    </div>
                    <div class="col-7">
                        {{$rpl->tanggal_replacement}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <b>Jam Replacement </b>
                    </div>
                    <div class="col-1">
                        : 
                    </div>
                    <div class="col-7">
                        {{$rpl->jam_replacement}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <b>Alasan melakukan <i>replacement class</i> </b>
                    </div>
                    <div class="col-1">
                        : 
                    </div>
                    <div class="col-7">
                        {{$rpl->alasan_replacement}}
                    </div>
                </div>
            </div>
        @endforeach
    </table>

@endsection