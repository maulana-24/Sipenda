@extends('layouts/main')

@section('title','Dashboart')
@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-3">
        <img src="{{ asset('images/profile.jpg') }}" class="float-right" alt="profile.jpg">
      </div>
      <div class="col-md-9">
        <h2>Hai admin Web Tk Pertiwi</h2>
        <p>Bagai mana hari mu? apakah menyenangkan?.</p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda dolore minus ullam impedit. Facilis quos cupiditate saepe distinctio enim dolor in officiis nobis. Enim voluptates pariatur officiis ab nam dolores.</p>
        <a href="/registration-admin" class="btn btn-primary">Lihat Data Pendaftar</a>
      </div>
    </div>
  </div>
@endsection