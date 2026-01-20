@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="form-container">
    <div class="form-card">
        <h2 class="form-title">Login</h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <label class="form-label">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" required class="form-control" placeholder="Masukkan email Anda">
                @error('email')
                <p class="form-error">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label class="form-label">Password</label>
                <input type="password" name="password" required class="form-control" placeholder="Masukkan password Anda">
                @error('password')
                <p class="form-error">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary btn-block">
                Login
            </button>
        </form>

        <div class="form-footer">
            Belum punya akun?
            <a href="{{ route('register') }}">Register</a>
        </div>
    </div>
</div>
@endsection
