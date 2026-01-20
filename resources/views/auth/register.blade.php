@extends('layouts.app')

@section('title', 'Register')

@section('content')
<div class="form-container">
    <div class="form-card">
        <h2 class="form-title">Register</h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group">
                <label class="form-label">Nama Lengkap</label>
                <input type="text" name="name" value="{{ old('name') }}" required class="form-control" placeholder="Masukkan nama lengkap">
                @error('name')
                <p class="form-error">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label class="form-label">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" required class="form-control" placeholder="Masukkan email">
                @error('email')
                <p class="form-error">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label class="form-label">Password</label>
                <input type="password" name="password" required class="form-control" placeholder="Minimal 8 karakter">
                @error('password')
                <p class="form-error">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label class="form-label">Konfirmasi Password</label>
                <input type="password" name="password_confirmation" required class="form-control" placeholder="Ulangi password">
            </div>

            <button type="submit" class="btn btn-primary btn-block">
                Register
            </button>
        </form>

        <div class="form-footer">
            Sudah punya akun?
            <a href="{{ route('login') }}">Login</a>
        </div>
    </div>
</div>
@endsection
