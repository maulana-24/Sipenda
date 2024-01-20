@extends('layouts/main')

@section('title','Pengajuan')
@section('content')
<center>
    <h3>Silahkan Klik Daftar untuk Memdaftar di</h3>
    <h1>TK Pertiwi Purbayasa</h1><br>
    {{-- <img src="{{ asset('images/paud.jpg') }}" class="img-fluid" alt="paud.jpg"> --}}
    {{-- <div class="d-grid gap-2">
        <a href="{{ route('registration.create') }}" class="btn btn-primary">Daftar</a>
    </div> --}}
    <a href="{{route('registration.create')}}">
        <button type="button" class="btn btn-primary">Daftar</button>
    </a>

</center>

@endsection