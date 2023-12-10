@extends('master2')
@section('title', 'Database Agen')

@section('judul_halaman')
<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
<h3>Data Agen</h3>

<a href="/data-agen/tambah"> + Tambah Agen Baru</a>

<br/>
<br/>
@endsection

@section('konten')
<p>Cari Data Agen :</p>
	<form action="/data-agen/cari" method="GET">
		<input class="form-control" name="cari" placeholder="Cari agen berdasarkan nama.." value="{{ old('cari') }}">
		<input type="submit" value="CARI" class="btn btn-primary">
	</form>
	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Agen</th>
			<th>Nama Agen</th>
			<th>Jumlah Agen</th>
			<th>Tersedia</th>
            <th>Opsi</th>
		</tr>
		@foreach($agen as $p)
		<tr>
			<td>{{ $p->kodeagen}}</td>
			<td>{{ $p->namaagen}}</td>
			<td>{{ $p->jumlahagen}}</td>
			<td>{{ $p->tersedia}}</td>
			<td>
                <a href="/data-agen/view/{{ $p->kodeagen}}" class="btn btn-success">View</a>
                |
				<a href="/data-agen/edit/{{ $p->kodeagen}}" class="btn btn-warning">Edit</a>
				|
				<a href="/data-agen/hapus/{{ $p->kodeagen }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $agen -> links()}}
@endsection
