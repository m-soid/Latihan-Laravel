@extends('layouts.main')

@section('title', 'Welcome to Baherindo Mobil')

@section('content')
<div class="p-2 grid grid-cols-2 md:grid-cols4 lg:grid-cols-5 gap-6 justify-center mb-5">
        @foreach ($mobil as $m)
    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
        <a href="{{ route('mobil.show', $m->id) }}">
            <img class="rounded-lg object-cover" 
            src="{{ asset('storage/'.$m->gambar_mobil) }}" alt="" />
        
        <div class="p-5">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $m['nama_mobil'] }}</h5>
            <h5 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
          Rp {{ number_format($m['harga_mobil'], 0, ',', '.') }}
        </h5>
            <p class="font-normal text-gray-700 dark:text-gray-400 text-left"><b>{{ $m['tahun_mobil'] }}</b> {{ $m['km_mobil'] }}KM</p>
        </div>
        </a>
    </div>
        @endforeach
</div>

@endsection