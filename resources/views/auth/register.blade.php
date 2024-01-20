@extends('layouts/main')
@section('title', 'Register')

@section('content')
<center><h1>TK Pertiwi | Register</h1><br></center>
<form action="" method="post">
    @csrf
    <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" name="username" class="form-control"
        value="{{ Session::get('username') }}" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" name="email" class="form-control"
        value="{{ Session::get('email') }}"required>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" required>
    </div>
    <div class="mb-3 d-grid">
        <button name="submit" type="submit" class="btn btn-primary">
        Register
        </button>
    </div>
    <div class="mb-3 text-center">
        <p>
        Already have an account? <a href="/login">Login</a>
        </p>
    </div>
</form>
</div>
 
@endsection