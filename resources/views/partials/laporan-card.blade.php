@php
    $tinggi = $item->tinggi_genangan;
    if ($tinggi < 50) {
        $status = 'Waspada';
        $badgeColor = 'bg-yellow-100 text-yellow-800 border-yellow-300';
    } elseif ($tinggi <= 100) {
        $status = 'Siaga';
        $badgeColor = 'bg-orange-100 text-orange-800 border-orange-300';
    } else {
        $status = 'Awas';
        $badgeColor = 'bg-red-100 text-red-800 border-red-300';
    }
@endphp

<div class="bg-white p-5 rounded-lg shadow border border-gray-200 flex flex-col justify-between">
    <div>
        <div class="flex justify-between items-start mb-2">
            <h3 class="text-lg font-bold text-gray-900">{{ $item->lokasi }}</h3>
            <span class="text-xs px-2.5 py-1 rounded border font-semibold {{ $badgeColor }}">
                {{ $status }}
            </span>
        </div>
        <p class="text-sm text-gray-600">Pelapor: <span class="font-medium text-gray-800">{{ $item->nama_pelapor }}</span></p>
        <p class="text-sm text-gray-600">Tinggi Genangan: <span class="font-semibold text-blue-600">{{ $item->tinggi_genangan }} cm</span></p>
    </div>
    <div class="mt-4 pt-3 border-t border-gray-100 text-xs text-gray-500">
        Tanggal Kejadian: {{ \Carbon\Carbon::parse($item->tanggal_kejadian)->translatedFormat('d F Y') }}
    </div>
</div>