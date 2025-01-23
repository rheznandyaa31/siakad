@extends('layouts.master')

@section('title', 'Login - Sistem Informasi Akademik')

@section('content')
<div class="login-container">
    <div class="text-center mb-4">
        <img src="/gambar/1.jpg" alt="Logo POLINEMA" style="width: 200px; height: 200px; border-radius: 80%;">
        <h2>SISTEM KOMPENSASI POLINEMA</h2>
    </div>

    <form action="{{ route('login.submit') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="showPassword" onclick="togglePassword()">
            <label class="form-check-label" for="showPassword">Tampilkan Password</label>
        </div>
        <button type="submit" class="btn btn-primary btn-block">LOGIN</button>
        @include('daftar.daftar')
        <a href="#" class="d-block text-center mt-3">Lupa Password?</a>
    </form>

    @include('partials.footer')
</div>

<script>
    function togglePassword() {
        const passwordField = document.getElementById('password');
        passwordField.type = passwordField.type === 'password' ? 'text' : 'password';
    }
</script>
@endsection
