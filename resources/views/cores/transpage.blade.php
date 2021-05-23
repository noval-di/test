@extends('layouts.app')
@section('content')
<div class="isi_page">
    <h2>TABEL TRANSPAGE</h2>
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
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <div hidden>{{$i = 1}}</div>
            @foreach($items as $item)
						<tr>
							<td>{{ $i++ }}</td>
							<td>{{ $item->loc_id }}</td>
							<td>
								@foreach($item->user as $t)
									{{$t}},
								@endforeach
							</td>
						</tr>
			@endforeach
        </tbody>
    </table>
</div>

<a class="btn" href="/addItem" role="button" id="tambah_data">Tambah Data</a>
@endsection