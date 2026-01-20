@extends('layouts.app')

@section('title', 'Kelola Pendaftaran')

@section('content')
<div class="container" style="padding: 40px 0;">
    <h1 style="font-size: 36px; font-weight: 700; margin-bottom: 30px;">Kelola Pendaftaran</h1>

    <div class="table-container">
        <table class="table">
            <thead>
                <tr>
                    <th>Siswa</th>
                    <th>Ekstrakurikuler</th>
                    <th>Kelas</th>
                    <th>No Telepon</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($pendaftarans as $pendaftaran)
                <tr>
                    <td>
                        <div>
                            <div style="font-weight: 600;">{{ $pendaftaran->user->name }}</div>
                            <div style="font-size: 14px; color: #718096;">{{ $pendaftaran->user->email }}</div>
                        </div>
                    </td>
                    <td style="font-size: 14px;">{{ $pendaftaran->ekstrakurikuler->nama }}</td>
                    <td style="font-size: 14px;">{{ $pendaftaran->kelas }}</td>
                    <td style="font-size: 14px;">{{ $pendaftaran->no_telepon }}</td>
                    <td>
                        @if($pendaftaran->status === 'pending')
                        <span class="badge badge-warning">Pending</span>
                        @elseif($pendaftaran->status === 'diterima')
                        <span class="badge badge-success">Diterima</span>
                        @else
                        <span class="badge badge-danger">Ditolak</span>
                        @endif
                    </td>
                    <td>
                        @if($pendaftaran->status === 'pending')
                        <div class="table-actions">
                            <form action="{{ route('admin.pendaftaran.approve', $pendaftaran->id) }}" method="POST" style="display: inline;">
                                @csrf
                                <button type="submit" class="btn btn-success" style="font-size: 14px; padding: 6px 15px;">Terima</button>
                            </form>
                            <form action="{{ route('admin.pendaftaran.reject', $pendaftaran->id) }}" method="POST" style="display: inline;">
                                @csrf
                                <button type="submit" class="btn btn-danger" style="font-size: 14px; padding: 6px 15px;">Tolak</button>
                            </form>
                        </div>
                        @else
                        <span style="color: #cbd5e0;">-</span>
                        @endif
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" style="text-align: center; padding: 40px; color: #718096;">Belum ada pendaftaran</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $pendaftarans->links() }}
    </div>
</div>
@endsection
