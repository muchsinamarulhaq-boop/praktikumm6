@extends('layouts.app')

@section('content')
<div class="container">
    <x-alert type="success" :message="'Terima kasih ' . $nama . ', laporan Anda telah berhasil tersimpan ke sistem database.'" />
    <a href="/laporan" class="btn btn-info mt-3">Lihat Semua Laporan</a>
</div>
@endsection