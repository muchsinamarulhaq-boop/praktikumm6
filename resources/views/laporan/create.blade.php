@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">
    <h2 class="text-2xl font-bold mb-4 text-gray-800">Form Laporan Kejadian Banjir</h2>
    
   <form method="POST" action="{{ route('lapor.store') }}">
        @csrf
        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Nama Pelapor</label>
            <input type="text" name="nama_pelapor" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Lokasi / Kecamatan</label>
            <input type="text" name="lokasi" class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Contoh: Dayeuhkolot" required>
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Tinggi Genangan (cm)</label>
            <input type="number" name="tinggi_genangan" class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="10 - 150" required>
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Tanggal Kejadian</label>
            <input type="date" name="tanggal_kejadian" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
        </div>

        <button type="submit" class="w-full bg-blue-600 text-white font-semibold py-2 rounded-md hover:bg-blue-700 transition duration-200">
            Kirim Laporan
        </button>
    </form>
</div>
@endsection