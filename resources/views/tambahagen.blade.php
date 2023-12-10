@extends('master2')

@section('konten')
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Nilai</h3>

	<a href="/data-agen" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	<form action="/data-agen/store" method="post">
		{{ csrf_field() }}
        <div class = "form-group">
            <label for = "namaagen" class = "col-sm-2 control-label">Nama Agen</label>
            <div class = "col-sm-8">
               <input name="namaagen" type = "text" class = "form-control" id = "namaagen" placeholder = "Masukkan Nama Agen...">
            </div>
         </div>

         <div class = "form-group">
            <label for = "jumlahagen" class = "col-sm-2 control-label">Jumlah Agen</label>
            <div class = "col-sm-8">
               <input name="jumlahagen" type = "number" class = "form-control" id = "jumlahagen" placeholder = "Masukkan Jumlah Agen...">
            </div>
         </div>

		<input type="submit" class="btn btn-success" value="Simpan Data">
	</form>
@endsection
