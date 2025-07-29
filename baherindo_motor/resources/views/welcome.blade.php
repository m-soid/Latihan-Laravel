@extends('layouts.main')

@section('title', 'Welcome to Baherindo Motor')

@section('content')
<div class="p-2 grid grid-cols-2 md:grid-cols4 lg:grid-cols-5 gap-6 justify-center mb-5">
        @foreach ($motor as $m)
    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
            <img class="rounded-t-lg" src="/img/WhatsApp_Image_2025-07-10_at_15.42.13_feb121cc.jpg" alt="" />
        </a>
        <div class="p-5">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $m['nama'] }}</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-left"><b>Rp.{{ $m['price'] }}</b></p>
            <p class="font-normal text-gray-700 dark:text-gray-400 text-left"><b>{{ $m['tahun'] }}</b> {{ $m['jarak'] }}KM</p>
        </div>
    </div>
        @endforeach
</div>

@endsection