@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto p-4 bg-white rounded shadow">
    <h2 class="text-xl font-bold mb-4">Pendaftaran Pasien Baru</h2>

    @if ($errors->any())
        <div class="bg-red-100 text-red-800 p-2 rounded mb-4">
            @foreach ($errors->all() as $error)
                <p>- {{ $error }}</p>
            @endforeach
        </div>
    @endif

    @if (session('success'))
        <div class="bg-green-100 text-green-800 p-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('register.patient') }}">
        @csrf
        <div class="mb-2">
            <label class="block font-semibold">Nama</label>
            <input type="text" name="name" class="w-full border p-2" required>
        </div>
        <div class="mb-2">
            <label class="block font-semibold">Alamat</label>
            <textarea name="address" class="w-full border p-2"></textarea>
        </div>
        <div class="mb-2">
            <label class="block font-semibold">Tanggal Lahir</label>
            <input type="date" name="birth_date" class="w-full border p-2">
        </div>
        <div class="mb-2">
            <label class="block font-semibold">No WhatsApp</label>
            <input type="text" name="whatsapp_number" class="w-full border p-2" required>
        </div>
        <div class="mb-2">
            <label class="block font-semibold">Tindakan</label>
            <select name="action_id" class="w-full border p-2" required>
                <option value="">-- Pilih Tindakan --</option>
                @foreach ($actions as $action)
                    <option value="{{ $action->id }}">
                        {{ $action->name }} (Rp {{ number_format($action->price, 0, ',', '.') }})
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-2">
            <label class="block font-semibold">Tanggal Jadwal</label>
            <input type="date" name="schedule_date" class="w-full border p-2" required>
        </div>
        <div class="mb-4">
            <label class="block font-semibold">Jam</label>
            <input type="time" name="schedule_time" class="w-full border p-2" required>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Daftar</button>
    </form>
    <div class="mt-10 grid grid-cols-1 md:grid-cols-3 gap-6">
    {{-- Card Menunggu --}}
    <div class="bg-yellow-100 p-4 rounded shadow">
        <h3 class="text-lg font-bold text-yellow-800 mb-2">Menunggu</h3>
        @forelse ($menunggu as $item)
            <div class="p-2 mb-2 border border-yellow-300 rounded bg-white">
                <p><strong>{{ $item->patient->name }}</strong></p>
                <p>{{ $item->action->name }}</p>
                <p>{{ $item->schedule_date }} {{ $item->schedule_time }}</p>
            </div>
        @empty
            <p class="text-sm text-gray-500">Tidak ada.</p>
        @endforelse
    </div>

    {{-- Card Diproses --}}
    <div class="bg-blue-100 p-4 rounded shadow">
        <h3 class="text-lg font-bold text-blue-800 mb-2">Diproses</h3>
        @forelse ($diproses as $item)
            <div class="p-2 mb-2 border border-blue-300 rounded bg-white">
                <p><strong>{{ $item->patient->name }}</strong></p>
                <p>{{ $item->action->name }}</p>
                <p>{{ $item->schedule_date }} {{ $item->schedule_time }}</p>
            </div>
        @empty
            <p class="text-sm text-gray-500">Tidak ada.</p>
        @endforelse
    </div>

    {{-- Card Selesai --}}
    <div class="bg-green-100 p-4 rounded shadow">
        <h3 class="text-lg font-bold text-green-800 mb-2">Selesai</h3>
        @forelse ($selesai as $item)
            <div class="p-2 mb-2 border border-green-300 rounded bg-white">
                <p><strong>{{ $item->patient->name }}</strong></p>
                <p>{{ $item->action->name }}</p>
                <p>{{ $item->schedule_date }} {{ $item->schedule_time }}</p>
            </div>
        @empty
            <p class="text-sm text-gray-500">Tidak ada.</p>
        @endforelse
    </div>
</div>

</div>
@endsection
