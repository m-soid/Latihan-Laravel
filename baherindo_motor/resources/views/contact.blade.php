@extends('layouts.main')

@section('title', 'Contact Baherindo Motor')

@section('content')
    <div class="">
        <h1>Kontak baherindo motor</h1>
        <p>Kontak untuk jual beli motor second termurah di bekasi</p>
        <table>
            <tr>
                <td>Nama</td>
                <td>Kontak</td>
            </tr>
            @foreach ($contact as $m)
                <tr>
                    <td>{{ $m['nama'] }}</td>
                    <td>{{ $m['nomor'] }}</td>
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