@extends('layouts.app')

@section('title', 'Profil Petugas BPBD')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h5 class="card-title mb-0"><i class="fas fa-id-card me-2"></i>Profil Petugas BPBD</h5>
            </div>
            <div class="card-body">
                <div class="text-center mb-4">
                    <i class="fas fa-user-circle fa-5x text-secondary"></i>
                    <h4 class="mt-2 mb-0">{{ Auth::user()->name }}</h4>
                    <span class="badge bg-success">Petugas Aktif</span>
                </div>
                <table class="table table-borderless">
                    <tr>
                        <th width="35%"><i class="fas fa-envelope me-2 text-primary"></i>Email</th>
                        <td>: {{ Auth::user()->email }}</td>
                    </tr>
                    <tr>
                        <th><i class="fas fa-calendar-alt me-2 text-primary"></i>Terdaftar Sejak</th>
                        <td>: {{ Auth::user()->created_at->translatedFormat('d F Y H:i') }} ({{ Auth::user()->created_at->diffForHumans() }})</td>
                    </tr>
                </table>
                <div class="d-grid mt-3">
                    <a href="{{ route('laporan.index') }}" class="btn btn-outline-primary">
                        <i class="fas fa-arrow-left me-1"></i>Kembali ke Daftar Laporan
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection