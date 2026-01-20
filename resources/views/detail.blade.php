@extends('layouts.app')

@section('title', $ekskul->nama)

@section('content')
<div class="container" style="padding: 50px 0;">
    <div style="max-width: 900px; margin: 0 auto;">
        <div class="card">
            @if($ekskul->gambar)
            <img src="{{ asset('storage/' . $ekskul->gambar) }}" alt="{{ $ekskul->nama }}" style="width: 100%; height: 400px; object-fit: cover;">
            @else
            <div style="width: 100%; height: 400px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); display: flex; align-items: center; justify-content: center; color: white; font-size: 120px; font-weight: bold;">
                {{ substr($ekskul->nama, 0, 1) }}
            </div>
            @endif

            <div class="card-body" style="padding: 40px;">
                <h1 style="font-size: 42px; font-weight: 700; margin-bottom: 25px; color: #2d3748;">{{ $ekskul->nama }}</h1>

                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; margin-bottom: 30px;">
                    <div>
                        <h3 style="font-weight: 600; color: #4a5568; margin-bottom: 8px;">Pembina</h3>
                        <p style="color: #718096;">{{ $ekskul->pembina }}</p>
                    </div>
                    <div>
                        <h3 style="font-weight: 600; color: #4a5568; margin-bottom: 8px;">Jadwal</h3>
                        <p style="color: #718096;">{{ $ekskul->jadwal }}</p>
                    </div>
                    <div>
                        <h3 style="font-weight: 600; color: #4a5568; margin-bottom: 8px;">Tempat</h3>
                        <p style="color: #718096;">{{ $ekskul->tempat }}</p>
                    </div>
                    <div>
                        <h3 style="font-weight: 600; color: #4a5568; margin-bottom: 8px;">Kuota Tersedia</h3>
                        <p style="color: #718096;">{{ $ekskul->sisaTempat() }} dari {{ $ekskul->kuota }} tempat</p>
                    </div>
                </div>

                <div style="margin-bottom: 30px;">
                    <h3 style="font-weight: 600; color: #4a5568; margin-bottom: 8px;">Deskripsi</h3>
                    <p style="color: #718096; line-height: 1.8;">{{ $ekskul->deskripsi }}</p>
                </div>

                <div style="display: flex; gap: 15px;">
                    <a href="{{ route('home') }}" class="btn btn-secondary">
                        Kembali
                    </a>

                    @auth
                        @if($ekskul->sisaTempat() > 0)
                        <a href="{{ route('pendaftaran.create', $ekskul->id) }}" class="btn btn-primary">
                            Daftar Sekarang
                        </a>
                        @else
                        <button disabled class="btn btn-secondary" style="cursor: not-allowed; opacity: 0.6;">
                            Kuota Penuh
                        </button>
                        @endif
                    @else
                    <a href="{{ route('login') }}" class="btn btn-primary">
                        Login untuk Mendaftar
                    </a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
