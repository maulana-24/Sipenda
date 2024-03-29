@extends('layouts/main')
@section('title', 'login')

@section('content')
<center><h1>TK Pertiwi | Login</h1><br></center>
        <form action="" method="POST">
            @csrf
            <div class="nb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" 
                value="{{ Session::get('username') }}" required>
            </div>
            <div class="nb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" 
                class="form-control" value="{{ Session::get('password') }}" required>
            </div><br> 
            <div class="mb-3 d-grid">
                <button name="submit" type="submit" class="btn btn-primary">Login</button>
            </div>
            <div class="mb-3 text-center">
                don't have an account yet? <a href="/register">Sign Up</a>
            </div>
        </form>
@endsection  