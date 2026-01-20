@extends('layouts.app')

@section('title', 'Kelola Ekstrakurikuler')

@section('content')
<div class="container" style="padding: 40px 0;">
    <div class="flex-between" style="margin-bottom: 30px;">
        <h1 style="font-size: 36px; font-weight: 700;">Kelola Ekstrakurikuler</h1>
        <a href="{{ route('admin.ekstrakurikuler.create') }}" class="btn btn-primary">
            Tambah Ekstrakurikuler
        </a>
    </div>

    <div class="table-container">
        <table class="table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Pembina</th>
                    <th>Jadwal</th>
                    <th>Kuota</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($ekstrakurikulers as $ekskul)
                <tr>
                    <td>
                        <div style="display: flex; align-items: center; gap: 12px;">
                            @if($ekskul->gambar)
                           <img src="{{ asset('storage/' . $ekskul->gambar) }}" alt="{{ $ekskul->nama }}" style="width: 50px; height: 50px; border-radius: 8px; object-fit: cover;">
                            @endif
                            <span style="font-weight: 600;">{{ $ekskul->nama }}</span>
                        </div>
                    </td>
                    <td style="color: #718096;">{{ $ekskul->pembina }}</td>
                    <td style="color: #718096; font-size: 14px;">{{ $ekskul->jadwal }}</td>
                    <td style="color: #718096;">{{ $ekskul->sisaTempat() }}/{{ $ekskul->kuota }}</td>
                    <td>
                        @if($ekskul->status)
                        <span class="badge badge-success">Aktif</span>
                        @else
                        <span class="badge badge-danger">Nonaktif</span>
                        @endif
                    </td>
                    <td>
                        <div class="table-actions">
                            <a href="{{ route('admin.ekstrakurikuler.edit', $ekskul->id) }}" class="btn btn-primary" style="font-size: 14px; padding: 6px 15px;">Edit</a>
                            <form action="{{ route('admin.ekstrakurikuler.destroy', $ekskul->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Yakin ingin menghapus?')" class="btn btn-danger" style="font-size: 14px; padding: 6px 15px;">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" style="text-align: center; padding: 40px; color: #718096;">Belum ada data</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $ekstrakurikulers->links() }}
    </div>
</div>
@endsection
