@extends('layouts.app')

@section('title', 'Tambah Ekstrakurikuler')

@section('content')
<div class="container" style="padding: 40px 0;">
    <div style="max-width: 800px; margin: 0 auto;">
        <h1 style="font-size: 36px; font-weight: 700; margin-bottom: 30px;">Tambah Ekstrakurikuler</h1>

        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.ekstrakurikuler.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label class="form-label">Nama Ekstrakurikuler</label>
                        <input type="text" name="nama" value="{{ old('nama') }}" required class="form-control">
                        @error('nama')
                        <p class="form-error">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" rows="4" required class="form-control">{{ old('deskripsi') }}</textarea>
                        @error('deskripsi')
                        <p class="form-error">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label">Pembina</label>
                        <input type="text" name="pembina" value="{{ old('pembina') }}" required class="form-control">
                        @error('pembina')
                        <p class="form-error">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label">Jadwal</label>
                        <input type="text" name="jadwal" value="{{ old('jadwal') }}" placeholder="Contoh: Senin & Kamis, 15:00 - 17:00" required class="form-control">
                        @error('jadwal')
                        <p class="form-error">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label">Tempat</label>
                        <input type="text" name="tempat" value="{{ old('tempat') }}" required class="form-control">
                        @error('tempat')
                        <p class="form-error">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label">Gambar (Opsional)</label>
                        <input type="file" name="gambar" accept="image/*" class="form-control">
                        @error('gambar')
                        <p class="form-error">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label">Kuota</label>
                        <input type="number" name="kuota" value="{{ old('kuota') }}" min="1" required class="form-control">
                        @error('kuota')
                        <p class="form-error">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label">Status</label>
                        <select name="status" required class="form-control">
                            <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>Aktif</option>
                            <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Nonaktif</option>
                        </select>
                        @error('status')
                        <p class="form-error">{{ $message }}</p>
                        @enderror
                    </div>

                    <div style="display: flex; gap: 15px;">
                        <a href="{{ route('admin.ekstrakurikuler.index') }}" class="btn btn-secondary">
                            Batal
                        </a>
                        <button type="submit" class="btn btn-primary">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
