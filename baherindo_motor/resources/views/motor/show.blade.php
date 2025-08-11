@extends('layouts.main')

@section('title', 'Welcome to Baherindo Motor')

@section('content')
<div class="p-2 justify-center mb-5">
    <div class="p-4 bg-white border my-auto mx-auto border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
            <img class="rounded-lg w-full h-90 object-cover" 
            src="{{ asset('storage/'.$motor->gambar_motor) }}" alt="" />

        <div class="p-5">
                <h5 class="mb-2 text-5xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $motor['nama_motor'] }}</h5>
            <h5 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
          Rp {{ number_format($motor['harga_motor'], 0, ',', '.') }}
        </h5>
            <p class="font-normal text-2xl text-gray-700 dark:text-gray-400 text-left"><b>{{ $motor['tahun_motor'] }}</b> {{ $motor['km_motor'] }}KM</p>
        </div>
        <button type="submit"
            class="text-white text-lg bg-green-500 hover:bg-green-600 focus:ring-1 focus:ring-gray-300 font-medium rounded-lg p-2 w-full
             dark:bg-green-500 dark:hover:bg-green-600 focus:outline-none dark:focus:ring-gray-900">
             <i class="bi bi-whatsapp"></i>
             Order via WhatsApp
        </button>
        <div class="grid grid-cols-2 justify-center gap-2">
        <form action="{{ route('motor.destroy', $motor->id) }}"
        method="POST">
        @csrf
        @method('DELETE')
            <button type="submit"
                class="text-white text-lg bg-green-500 hover:bg-green-600 focus:ring-1 focus:ring-gray-300 font-medium rounded-lg mt-3 p-2 w-full
                dark:bg-red-500 dark:hover:bg-red-600 focus:outline-none dark:focus:ring-gray-900">
                Hapus
            </button>
        </form>
            <a href="{{ route('motor.edit', $motor->id) }}"
                class="text-white text-lg bg-green-500 hover:bg-green-600 focus:ring-1 focus:ring-gray-300 font-medium rounded-lg mt-3 p-2 w-full
                dark:bg-blue-500 dark:hover:bg-blue-600 focus:outline-none dark:focus:ring-gray-900 text-center">
                edit
            </a>
        </div>
    </div>
</div>

@endsection