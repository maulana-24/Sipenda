@extends('layouts/main')

@section('title','Data pendaftar')
@section('content')
<h1 class="h3">Data Pendaftar | Edit Biodata Anak</h1><br>
<form action="{{ route('registration-admin.update',[$data->id]) }}" method="POST">
    @csrf
    @method('put')
    <div class="mb-3">
        <h4>ID : {{ $data->id }}</h4>
    </div>
    <h5><label for="identitas" class="form-label">Identitas</label></h5>
    <div class="mb-3">
        <label for="name" class="form-label">Nama</label>
        <input type="text" class="form-control" id="name" name="name" value="{{$data->nama}}">
    </div>
    <div class="mb-3">
        <label for="nik" class="form-label">NIK</label>
        <input type="text" class="form-control" id="nik" name="nik" value="{{$data->nik}}">
    </div>
    <div class="mb-3">
        <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
        <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="{{ $data->tgl_lahir }}">
    </div>
    <div class="mb-3">
        <label for="jns_kelamin" class="form-label">Jenis Kelamin</label>
        <input type="text" class="form-control" id="jns_kelamin" name="jns_kelamin" value="{{$data->jns_kelamin}}">
    </div>
    <div class="mb-3">
        <label for="agama" class="form-label">Agama</label>
        <input type="text" class="form-control" id="agama" name="agama" value="{{$data->agama}}">
    </div>
    <div class="mb-3">
        <label for="tinggal_bersama" class="form-label">Tinggal Bersama</label>
        <input type="text" class="form-control" id="tinggal_bersama" name="tinggal_bersama" value="{{$data->tinggal_bersama}}">
    </div>
    <div class="mb-3">
        <label for="anak_ke" class="form-label">Anak ke</label>
        <input type="text" class="form-control" id="anak_ke" name="anak_ke" value="{{$data->anak_ke}}">
    </div>
    <div class="mb-3">
        <label for="usia" class="form-label">Usia</label>
        <input type="text" class="form-control" id="usia" name="usia" value="{{$data->usia}}">
    </div>
    <div class="mb-3">
        <label for="no_hp" class="form-label">No Hp</label>
        <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{ $data->no_hp }}">
    </div>

    <h5><label for="orangtua" class="form-label">Orang Tua</label></h5>
    <div class="row">
        <div class="col">
            <label for="nama_ayah" class="form-label">Nama Ayah</label>
            <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" value="{{ $data->nama_ayah}}">
        </div>
        <div class="col">
            <label for="nama_ibu" class="form-label">Nama Ibu</label>
            <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" value="{{ $data->nama_ibu}}">       
        </div>
    </div><br><div class="row">
        <div class="col">
            <label for="nik_ayah" class="form-label">NIK Ayah</label>
            <input type="text" class="form-control" id="nik_ayah" name="nik_ayah" value="{{ $data->nik_ayah}}">
        </div>
        <div class="col">
            <label for="nik_ibu" class="form-label"> NIK Ibu</label>
            <input type="text" class="form-control" id="nik_ibu" name="nik_ibu" value="{{ $data->nik_ibu}}">       
        </div>
    </div><br><div class="row">
        <div class="col">
            <label for="tgllhr_ayah" class="form-label">Tanggal Lahir Ayah</label>
            <input type="date" class="form-control" id="tgllhr_ayah" name="tgllhr_ayah" value="{{ $data->tgllhr_ayah}}">
        </div>
        <div class="col">
            <label for="tgllhr_ibu" class="form-label">Tanggal Lahir Ibu</label>
            <input type="date" class="form-control" id="tgllhr_ibu" name="tgllhr_ibu" value="{{ $data->tgllhr_ibu}}">       
        </div>
    </div><br><div class="row">
        <div class="col">
            <label for="pendidikan_ayah" class="form-label">Pendidikan Ayah</label>
            <input type="text" class="form-control" id="pendidikan_ayah" name="pendidikan_ayah" value="{{ $data->pendidikan_ayah }}">
        </div>
        <div class="col">
            <label for="pendidikan_ibu" class="form-label">Pendidikan Ibu</label>
            <input type="text" class="form-control" id="pendidikan_ibu" name="pendidikan_ibu" value="{{ $data->pendidikan_ibu }}">       
        </div>
    </div><br><div class="row">
        <div class="col">
            <label for="pekerjaan_ayah" class="form-label">Pekerjaan Ayah</label>
            <input type="text" class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah" value="{{ $data->pekerjaan_ayah }}">
        </div>
        <div class="col">
            <label for="perkerjaan_ibu" class="form-label">Perkerjaan Ibu </label>
            <input type="text" class="form-control" id="perkerjaan_ibu" name="perkerjaan_ibu" value="{{ $data->perkerjaan_ibu}}">       
        </div>
    </div><br>

    <h5><label for="orangtua" class="form-label">Periodik</label></h5>
    <div class="mb-3">
        <label for="tinggi_bdn" class="form-label">TIggi Badan</label>
        <input type="text" class="form-control" id="tinggi_bdn" name="tinggi_bdn" value="{{ $data->tinggi_bdn}}">
    </div>
    <div class="mb-3">
        <label for="berat_bdn" class="form-label">Berat Badan</label>
        <input type="text" class="form-control" id="berat_bdn" name="berat_bdn" value="{{ $data->berat_bdn}}">
    </div>
    <div class="mb-3">
        <label for="jrk_tempuh" class="form-label">Jarak Tempuh</label>
        <input type="text" class="form-control" id="jrk_tempuh" name="jrk_tempuh" value="{{ $data->jrk_tempuh}}">
    </div>
    <div class="mb-3">
        <label for="jmlh_saudara" class="form-label">Jumlah Sudara</label>
        <input type="text" class="form-control" id="jmlh_saudara" name="jmlh_saudara" value="{{ $data->jmlh_saudara}}">
    </div>
    <div class="mb-3">
        <center>
            <a href="{{route('registration-admin.index')}}" class="btn btn-secondary"><< Kembali</a>
            <button type="submit" class="btn btn-primary">Update</button>
            </a>
        </center>
    </div>
</form>
@endsection