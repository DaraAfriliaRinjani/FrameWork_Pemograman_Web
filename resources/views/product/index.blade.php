@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="bg-white p-6 rounded-xl shadow-lg text-center">
        <h1 class="text-2xl font-semibold text-gray-700">Halo, {{ Auth::user()->name }}!</h1>
        <p class="mt-3 text-lg text-gray-600">Role Anda adalah <strong>{{ Auth::user()->role }}</strong></p>
        <p class="mt-3 text-gray-600">Hasil perhitungan angka: <strong>{{ $hasil ?? 'Tidak ada angka' }}</strong></p>
    </div>
</div>
@endsection
