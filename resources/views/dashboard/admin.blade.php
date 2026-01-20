@extends('layouts.app')

@section('title', 'Dashboard Admin')

@section('content')
<div class="container" style="padding: 40px 0;">
    <h1 style="font-size: 36px; font-weight: 700; margin-bottom: 40px;">Dashboard Admin</h1>

    <!-- Stats Cards -->
    <div class="dashboard-stats">
        <div class="stat-card">
            <h3>Total Ekstrakurikuler</h3>
            <p>{{ $totalEkskul }}</p>
        </div>
        <div class="stat-card">
            <h3>Total Pendaftar</h3>
            <p style="color: #48bb78;">{{ $totalPendaftar }}</p>
        </div>
        <div class="stat-card">
            <h3>Menunggu Approval</h3>
            <p style="color: #ed8936;">{{ $pendingApproval }}</p>
        </div>
    </div>

    <!-- Quick Actions -->
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 25px; margin-top: 40px;">
        <a href="{{ route('admin.ekstrakurikuler.index') }}" class="card" style="text-decoration: none; color: inherit;">
            <div class="card-body">
                <h3 style="font-size: 24px; font-weight: 700; margin-bottom: 15px; color: #667eea;">Kelola Ekstrakurikuler</h3>
                <p style="color: #718096;">Tambah, edit, atau hapus data ekstrakurikuler</p>
            </div>
        </a>
        <a href="{{ route('admin.pendaftaran.index') }}" class="card" style="text-decoration: none; color: inherit;">
            <div class="card-body">
                <h3 style="font-size: 24px; font-weight: 700; margin-bottom: 15px; color: #48bb78;">Kelola Pendaftaran</h3>
                <p style="color: #718096;">Setujui atau tolak pendaftaran siswa</p>
            </div>
        </a>
    </div>
</div>
@endsection
