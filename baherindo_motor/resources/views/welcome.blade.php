@extends('layouts.main')

@section('title', 'Welcome to Baherindo Motor')

@section('content')
    <div class="">
        <h1>Welcome to baherindo motor</h1>
        <p>Jual beli motor second termurah di bekasi</p>
        <table>
            <tr>
                <td>Nama</td>
                <td>Harga</td>
            </tr>
            @foreach ($motor as $m)
                <tr>
                    <td>{{ $m['name'] }}</td>
                    <td>{{ $m['price'] }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection

<style>
    h1{
        font-size: 20px;
        font-weight: bold;
        text-align: center;
        margin-top: 5px;
        margin-bottom: 0px;
    }

    p{
        font-size: 18px;
        text-align: center;
        margin-bottom: 20px;
    }

    table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    }

    td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    }
    tr:nth-child(even) {
    background-color: #dddddd;
    }


</style>