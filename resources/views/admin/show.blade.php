@extends('layouts/main')

@section('title','Data pendaftar')
@section('content')
<h1 class="h3">Data Pendaftar | Biodata Anak</h1><br>
<div>
    <h1 class="h3">Identitas Anak</h1><br/>
    <p><b>Nama  : </b> {{ $data->nama }}</p>
    <p><b>NIK  : </b> {{ $data->nik }}</p>
    <p><b>Tnggal Lahir  : </b> {{ $data->tgl_lahir }}</p>
    <p><b>Jenis Kelamain  : </b> {{ $data->jns_kelamin }}</p>
    <p><b>Tninggal Bersama  : </b> {{ $data->tinggal_bersama }}</p>
    <p><b>Anak Ke : </b> {{ $data->anak_ke }}</p>
    <p><b>Usia  : </b> {{ $data->usia }}</p>
    <p><b>No Hp  : </b> {{ $data->no_hp }}</p><br>
    <h1 class="h3">Orang Tua</h1><br/>
    <p><b>Nama Ayah  : </b> {{ $data->nama_ayah }}</p>
    <p><b>NIK Ayah  : </b> {{ $data->nik_ayah }}</p>
    <p><b>Tanggal Lahir Ayah  : </b> {{ $data->tgllhr_ayah }}</p>
    <p><b>Pendidikan Ayah  : </b> {{ $data->pendidikan_ayah }}</p>
    <p><b>Pekrjanan Ayah  : </b> {{ $data->pekerjaan_ayah }}</p>
    <p><b>Nama Ibu : </b> {{ $data->nama_ibu }}</p>
    <p><b>NIK Ibu : </b> {{ $data->nik_ibu }}</p>
    <p><b>Tanggal Lahir Ibu : </b> {{ $data->tgllhr_ibu }}</p>
    <p><b>Pendidikan Ibu : </b> {{ $data->pendidikan_ibu }}</p>
    <p><b>Pekrjanan Ibu : </b> {{ $data->perkerjaan_ibu }}</p><br>
    <h1 class="h3">Periodik</h1><br/>
    <p><b>Tinggi Badan  : </b> {{ $data->tinggi_bdn }}</p>
    <p><b>Berat Badan  : </b> {{ $data->berat_bdn }}</p>
    <p><b>Jarak Tempuh  : </b> {{ $data->jrk_tempuh }}</p>
    <p><b>Jumlah Saudara  : </b> {{ $data->jmlh_saudara }}</p>

    <a href="{{route('registration-admin.index')}}" class="btn btn-secondary"><< Kembali</a>
</div>
<br>
@endsection

