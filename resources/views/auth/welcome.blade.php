@extends('layouts/main')

@section('title','Home')

@section('content')
<br>
<div style="text-align: left;">
        <h1>Selamat Datang di Pendaftran Tk Pertiwi</h1>
        {{-- <p>Silayan merupakan aplikasi berbasis web, digunkan untuk membuat surat pengajuan</p> --}}
        <p>Silakan untuk Login atau Sign Up (Register) terlebih dahulu untuk dapat masuk ke aplikasi.</p>
        <a href="/login" class="btn btn-primary btn-lg">Login</a>
        <a href="/register" class="btn btn-success btn-lg">Sign Up</a>
</div>
                
        
@endsection