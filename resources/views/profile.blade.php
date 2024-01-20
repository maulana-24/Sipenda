@extends('layouts/main')

@section('title','profile')
@section('content')
<h1 class="h3"> {{ $user->username }} | Profile</h1>
<div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" id="username" name="username" readonly value="{{$user->username}}">
</div>
<div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="text" class="form-control" id="email" name="email" readonly value="{{$user->email}}">
</div>
@endsection