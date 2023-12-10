@extends('master3')
@section('judul_halaman')
    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>View Agen</h3>

    <a href="/data-agen" class="btn btn-primary"> Kembali</a>

    <br />
    <br />
@endsection

@section('konten')
    @foreach ($agen as $p)
        <form action="/data-agen/update" method="post" class="form-horizontal" role="form">
            {{ csrf_field() }}
			<div class = "form-group">
				<label for = "kodeagen" class = "col-sm-2 control-label">Kode Agen</label>
				<div class = "col-sm-10">
					<input type="text" required="required" name="kodeagen" value="{{ $p->kodeagen}}" class="form-control" placeholder = "Edit Nama Agen" readonly>
				</div>
			</div>
			<div class = "form-group">
				<label for = "namaagen" class = "col-sm-2 control-label">Nama Agen</label>
				<div class = "col-sm-10">
					<input type="text" required="required" name="namaagen" value="{{ $p->namaagen}}" class="form-control" placeholder = "Edit Nama Agen"readonly>
				</div>
			</div>
			<div class = "form-group">
				<label for = "jumlahagen" class = "col-sm-2 control-label">Jumlah Agen</label>
				<div class = "col-sm-10">
					<input type="number" required="required" name="jumlahagen" value="{{ $p->jumlahagen}}" class="form-control" placeholder = "Edit Jumlah Agen"readonly>
				</div>
			</div>
            <div class = "form-group">
				<label for = "tersedia" class = "col-sm-2 control-label">Tersedia</label>
				<div class = "col-sm-10">
					<input type="text" required="required" name="tersedia" value="{{ $p->tersedia}}" class="form-control" placeholder = "Edit Jumlah Agen"readonly>
				</div>
			</div>

			<input type="submit" value="Simpan Data" class="btn btn-primary">
        </form>
    @endforeach

@endsection
