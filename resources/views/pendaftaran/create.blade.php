@extends('layouts.app')

@section('title', 'Form Pendaftaran')

@section('content')
<div class="container" style="padding: 40px 0;">
    <div style="max-width: 700px; margin: 0 auto;">
        <h1 style="font-size: 36px; font-weight: 700; margin-bottom: 30px;">Pendaftaran Ekstrakurikuler</h1>

        <div class="card" style="margin-bottom: 30px;">
            <div class="card-body">
                <h2 style="font-size: 24px; font-weight: 700; margin-bottom: 10px;">{{ $ekskul->nama }}</h2>
                <p style="color: #718096;">{{ $ekskul->deskripsi }}</p>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <form action="{{ route('pendaftaran.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="ekstrakurikuler_id" value="{{ $ekskul->id }}">

                    <div class="form-group">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" value="{{ auth()->user()->name }}" disabled class="form-control" style="background-color: #f7fafc;">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Email</label>
                        <input type="email" value="{{ auth()->user()->email }}" disabled class="form-control" style="background-color: #f7fafc;">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Kelas</label>
                        <input type="text" name="kelas" value="{{ old('kelas') }}" placeholder="Contoh: X TKJ 1" required class="form-control">
                        @error('kelas')
                        <p class="form-error">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label">No Telepon</label>
                        <input type="tel" name="no_telepon" value="{{ old('no_telepon') }}" placeholder="08xxxxxxxxxx" required class="form-control">
                        @error('no_telepon')
                        <p class="form-error">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label">Alasan Bergabung</label>
                        <textarea name="alasan" placeholder="Tulis alasan kamu ingin bergabung dengan ekstrakurikuler ini..." required class="form-control">{{ old('alasan') }}</textarea>
                        @error('alasan')
                        <p class="form-error">{{ $message }}</p>
                        @enderror
                    </div>

                    <div style="display: flex; gap: 15px;">
                        <a href="{{ route('ekstrakurikuler.show', $ekskul->id) }}" class="btn btn-secondary">
                            Batal
                        </a>
                        <button type="submit" class="btn btn-primary">
                            Daftar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
