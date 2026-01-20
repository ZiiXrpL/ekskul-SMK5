@extends('layouts.app')

@section('title', 'Edit Ekstrakurikuler')

@section('content')
<div class="container">
    <div class="form-container">
        <div class="form-card">
            <h1 class="form-title">Edit Ekstrakurikuler</h1>

            <form action="{{ route('admin.ekstrakurikuler.update', $ekstrakurikuler->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Nama Ekstrakurikuler -->
                <div class="form-group">
                    <label class="form-label">Nama Ekstrakurikuler</label>
                    <input type="text" name="nama" value="{{ old('nama', $ekstrakurikuler->nama) }}"
                           class="form-control" required placeholder="Masukkan nama ekskul">
                    @error('nama')
                        <p class="form-error">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Deskripsi -->
                <div class="form-group">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" required
                              placeholder="Jelaskan detail ekstrakurikuler">{{ old('deskripsi', $ekstrakurikuler->deskripsi) }}</textarea>
                    @error('deskripsi')
                        <p class="form-error">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Pembina -->
                <div class="form-group">
                    <label class="form-label">Pembina</label>
                    <input type="text" name="pembina" value="{{ old('pembina', $ekstrakurikuler->pembina) }}"
                           class="form-control" required placeholder="Nama pembina">
                    @error('pembina')
                        <p class="form-error">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Jadwal -->
                <div class="form-group">
                    <label class="form-label">Jadwal</label>
                    <input type="text" name="jadwal" value="{{ old('jadwal', $ekstrakurikuler->jadwal) }}"
                           class="form-control" required placeholder="Contoh: Senin, 15:00 - 17:00">
                    @error('jadwal')
                        <p class="form-error">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Tempat -->
                <div class="form-group">
                    <label class="form-label">Tempat</label>
                    <input type="text" name="tempat" value="{{ old('tempat', $ekstrakurikuler->tempat) }}"
                           class="form-control" required placeholder="Lokasi kegiatan">
                    @error('tempat')
                        <p class="form-error">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Gambar -->
                <div class="form-group">
                    <label class="form-label">Gambar (Opsional)</label>
                    @if($ekstrakurikuler->gambar)
                        <div style="margin-bottom: 10px;">
                           <img src="{{ asset('storage/' . $ekstrakurikuler->gambar) }}" alt="Current" style="width: 150px; height: 150px; object-fit: cover; border-radius: 8px; margin-bottom: 10px; display: block;">
                            <p style="font-size: 12px; color: #718096;">Gambar saat ini</p>
                        </div>
                    @endif
                    <input type="file" name="gambar" class="form-control" accept="image/*">
                    @error('gambar')
                        <p class="form-error">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Kuota -->
                <div class="form-group">
                    <label class="form-label">Kuota</label>
                    <input type="number" name="kuota" value="{{ old('kuota', $ekstrakurikuler->kuota) }}"
                           class="form-control" min="1" required>
                    @error('kuota')
                        <p class="form-error">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Status -->
                <div class="form-group">
                    <label class="form-label">Status</label>
                    <select name="status" class="form-control" required>
                        <option value="1" {{ old('status', $ekstrakurikuler->status) == '1' ? 'selected' : '' }}>Aktif</option>
                        <option value="0" {{ old('status', $ekstrakurikuler->status) == '0' ? 'selected' : '' }}>Nonaktif</option>
                    </select>
                    @error('status')
                        <p class="form-error">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Tombol Aksi -->
                <div style="display: flex; gap: 10px; margin-top: 30px;">
                    <button type="submit" class="btn btn-primary btn-block">Update Data</button>
                    <a href="{{ route('admin.ekstrakurikuler.index') }}" class="btn btn-secondary btn-block" style="text-align: center;">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
