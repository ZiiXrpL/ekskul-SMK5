@extends('layouts.app')

@section('title', 'Home')

@section('content')
<!-- Hero Section -->
<div class="hero">
    <div class="container">
        <h1>Ekstrakurikuler SMK PGRI 5 Jember</h1>
        <p>Kembangkan Bakat dan Minatmu Bersama Kami!</p>
        @guest
        <a href="{{ route('register') }}" class="btn btn-primary" style="font-size: 18px; padding: 15px 40px;">
            Daftar Sekarang
        </a>
        @endguest
    </div>
</div>

<!-- Ekstrakurikuler List -->
<div class="container">
    <div class="section-header">
        <h2 class="section-title">Daftar Ekstrakurikuler</h2>
    </div>

    <div class="card-grid">
        @forelse($ekstrakurikulers as $ekskul)
        <div class="card">
            @if($ekskul->gambar)
            <img src="{{ asset('storage/' . $ekskul->gambar) }}" alt="{{ $ekskul->nama }}" class="card-image">
            @else
            <div class="card-image-placeholder">
                {{ substr($ekskul->nama, 0, 1) }}
            </div>
            @endif

            <div class="card-body">
                <h3 class="card-title">{{ $ekskul->nama }}</h3>
                <p class="card-text">{{ $ekskul->deskripsi }}</p>

                <div style="margin: 15px 0;">
                    <div class="card-info"><strong>Pembina:</strong> {{ $ekskul->pembina }}</div>
                    <div class="card-info"><strong>Jadwal:</strong> {{ $ekskul->jadwal }}</div>
                    <div class="card-info"><strong>Kuota:</strong> {{ $ekskul->sisaTempat() }}/{{ $ekskul->kuota }} tersisa</div>
                </div>

                <a href="{{ route('ekstrakurikuler.show', $ekskul->id) }}" class="btn btn-primary btn-block">
                    Lihat Detail
                </a>
            </div>
        </div>
        @empty
        <div style="grid-column: 1 / -1; text-align: center; padding: 60px 0;">
            <p style="font-size: 18px; color: #718096;">Belum ada ekstrakurikuler tersedia.</p>
        </div>
        @endforelse
    </div>

    <div class="mt-4 text-center">
        {{ $ekstrakurikulers->links() }}
    </div>
</div>
@endsection
