@extends('layouts.app')

@section('title', 'Dashboard Siswa')

@section('content')
<div class="container" style="padding: 40px 0;">
    <h1 style="font-size: 36px; font-weight: 700; margin-bottom: 40px;">Dashboard Siswa</h1>

    <div class="card">
        <div class="card-body">
            <h2 style="font-size: 24px; font-weight: 700; margin-bottom: 25px; padding-bottom: 15px; border-bottom: 2px solid #e2e8f0;">
                Riwayat Pendaftaran
            </h2>

            @forelse($pendaftarans as $pendaftaran)
            <div style="border: 2px solid #e2e8f0; border-radius: 10px; padding: 20px; margin-bottom: 20px;">
                <div style="display: flex; justify-content: space-between; align-items: start; flex-wrap: wrap; gap: 15px;">
                    <div>
                        <h3 style="font-size: 20px; font-weight: 700; color: #2d3748; margin-bottom: 10px;">
                            {{ $pendaftaran->ekstrakurikuler->nama }}
                        </h3>
                        <p style="color: #718096; margin-bottom: 5px;"><strong>Kelas:</strong> {{ $pendaftaran->kelas }}</p>
                        <p style="color: #718096;"><strong>Tanggal Daftar:</strong> {{ $pendaftaran->created_at->format('d M Y') }}</p>
                    </div>
                    <div>
                        @if($pendaftaran->status === 'pending')
                        <span class="badge badge-warning">Pending</span>
                        @elseif($pendaftaran->status === 'diterima')
                        <span class="badge badge-success">Diterima</span>
                        @else
                        <span class="badge badge-danger">Ditolak</span>
                        @endif
                    </div>
                </div>
            </div>
            @empty
            <p style="text-align: center; color: #718096; padding: 40px 0; font-size: 18px;">
                Belum ada pendaftaran.
            </p>
            @endforelse
        </div>
    </div>

    <div class="mt-4">
        <a href="{{ route('home') }}" class="btn btn-primary">
            Daftar Ekstrakurikuler Baru
        </a>
    </div>
</div>
@endsection
