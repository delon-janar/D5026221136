@extends('master3')
@section('title', 'Index Kategori')

@section('judul_halaman')
<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>

<br/>
<br/>
@endsection

@section('konten')
    <br/>
    <br/>

    <div class="">
            <form action="/kategori" method="post" class="form-horizontal">
                {{ csrf_field() }}
                <div class="form-group row">
                    <label for="kategori" class="col-sm-2 col-form-label">Pilih Kategori</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="kategori" name="kategori">
                            @foreach($kategori as $k)
                                <option value="{{ $k->ID }}">{{ $k->Nama }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <input type="submit" class="btn btn-primary" value="KIRIM">
            </form>
    </div>
@endsection
