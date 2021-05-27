@extends('layouts.app')
@section('content')
<div class="isi_page">
    <div class="dropdown">
        <a class="btn btn-secondary dropdown" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
            Filter
        </a>

        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item" href="#">Nama Barang</a></li>
            <li><a class="dropdown-item" href="#">Data Terbaru</a></li>
            <li><a class="dropdown-item" href="#">Jumlah Barang</a></li>
            <li><a class="dropdown-item" href="#">Blok A</a></li>
            <li><a class="dropdown-item" href="#">Blok B</a></li>
            <li><a class="dropdown-item" href="#">Blok C</a></li>
            <li><a class="dropdown-item" href="#">Blok D</a></li>
            <li><a class="dropdown-item" href="#">Blok E</a></li>
            <li><a class="dropdown-item" href="#">Blok F</a></li>
        </ul>
    </div>


    <h2>TABEL LAPORAN</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Level</th>
                <th>Shelf</th>
                <th>Tgl Masuk</th>
                <th>Tgl Keluar</th>
            </tr>
        </thead>
        <tbody>
            <div hidden>{{$i = 1}}</div>
            @foreach($datas as $item)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $item->item->name }}</td>
                <td>{{ $item->item->quantity }}</td>
                <td>level, id:{{ $item->loc_id }}</td>
                <td>Shelf</td>
                <td>{{ $item->date_in }}</td>
                <td>{{ $item->date_out }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection