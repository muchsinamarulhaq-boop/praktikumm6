@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto">
    <x-alert />

    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Daftar Laporan Banjir Terkini</h2>
       <a href="{{ route('lapor.create') }}" class="btn btn-primary">Buat Laporan Baru</a>
            + Tambah Laporan
        </a>
    </div>

    @if($laporan->isEmpty())
        <div class="bg-white p-6 rounded shadow text-center text-gray-500">
            Belum ada data laporan banjir yang tersimpan di database.
        </div>
    @else
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($laporan as $item)
                @include('partials.laporan-card', ['item' => $item])
            @endforeach
        </div>
    @endif
</div>
@endsection