@extends('layouts.main')

@section('title', 'Form Edit Motor')

@section('content')

    <form action="{{ route('motor.update', $motor->id) }} " method="POST" enctype="multipart/form-data"
     class="p-7 rounded-xl mt-10 mb-10">
     @csrf
     @method('PUT')
        <div class="mb-5">
            <label for="base-input" class="block mb-2 text-sm font-medium text-gray-800">Nama Motor</label>
            <input type="text" name="nama_motor" id="nama_motor" placeholder="Masukan Nama Motor"
                class=" border border-gray-300 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="mb-5">
            <label for="base-input" class="block mb-2 text-sm font-medium text-gray-800">Harga</label>
            <input type="number" name="harga_motor" 
            id="harga_motor" placeholder="Masukan Harga Motor"
            value={{ $motor->nama_motor }}
                class=" border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="mb-5">
            <label for="base-input" class="block mb-2 text-sm font-medium text-gray-800">Tahun</label>
            <input type="number" name="tahun_motor" 
            id="tahun_motor" placeholder="Masukan Tahun Motor"
            value={{ $motor->tahun_motor }}
                class=" border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="mb-5">
            <label for="base-input" class="block mb-2 text-sm font-medium text-gray-800">Jarak
                Tempuh</label>
            <input type="number" name="km_motor" 
            id="km_motor" placeholder="Masukan KM Motor"
            value={{ $motor->km_motor }}
                class=" border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <button type="submit"
            class="text-white bg-gray-900 hover:bg-gray-800 focus:ring-1 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 
             dark:bg-gray-700 dark:border-gray-900 dark:hover:bg-gray-900 focus:outline-none dark:focus:ring-gray-900">Submit</button>
    </form>

@endsection