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
                <th>Lokasi</th>
                <th>Tgl Masuk</th>
                <th>Tgl Keluar</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>No</td>
                <td>Nama Barang</td>
                <td>Jumlah</td>
                <td>Lokasi</td>
                <td>Tgl Masuk</td>
                <td>Tgl Keluar</td>
            </tr>
            <tr>
                <td>No</td>
                <td>Nama Barang</td>
                <td>Jumlah</td>
                <td>Lokasi</td>
                <td>Tgl Masuk</td>
                <td>Tgl Keluar</td>
            </tr>
            <tr>
                <td>No</td>
                <td>Nama Barang</td>
                <td>Jumlah</td>
                <td>Lokasi</td>
                <td>Tgl Masuk</td>
                <td>Tgl Keluar</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection