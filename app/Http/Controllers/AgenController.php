<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AgenController extends Controller
{
    public function index()
    {
    	// mengambil data dari table agen
    	// $agen = DB::table('agen')->get();

        $agen = DB::table('agen')->paginate(10);

    	// mengirim data agen ke view index
    	return view('indexagen',['agen' => $agen]);
    }

    public function tambah()
    {
	    // memanggil view tambah
	    return view('tambahagen');
    }

    public function store(Request $request)
    {
	    // insert data ke table agen
	    DB::table('agen')->insert([
	    	'namaagen' => $request->namaagen,
	    	'jumlahagen' => $request->jumlahagen,
            'tersedia' => ($request->jumlahagen > 0) ? 'y' : 'n',
	    ]);
	    // alihkan halaman ke halaman agen
	    return redirect('/data-agen');
    }

    public function edit($id)
    {
	    // mengambil data agen berdasarkan id yang dipilih
	    $agen = DB::table('agen')->where('kodeagen',$id)->get();
	    // passing data agen yang didapat ke view edit.blade.php
	    return view('editagen',['agen' => $agen]);
    }

    public function update(Request $request)
    {
	    // update data agen
	    DB::table('agen')->where('kodeagen',$request->kodeagen)->update([
		    'namaagen' => $request->namaagen,
    		'jumlahagen' => $request->jumlahagen,
	    	'tersedia' => ($request->jumlahagen > 0) ? 'y' : 'n',
    	]);
	    // alihkan halaman ke halaman agen
    	return redirect('/data-agen');
    }

    public function hapus($id)
    {
	    // menghapus data agen berdasarkan id yang dipilih
	    DB::table('agen')->where('kodeagen',$id)->delete();

	    // alihkan halaman ke halaman agen
	    return redirect('/data-agen');
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table agen sesuai pencarian data
		$agen = DB::table('agen')
		->where('namaagen','like',"%".$cari."%")
		->paginate();

    		// mengirim data agen ke view index
		return view('indexagen',['agen' => $agen]);

	}

    public function view($id)
    {
	     // mengambil data pegawai berdasarkan id yang dipilih
         $agen = DB::table('agen')->where('kodeagen',$id)->get();
         // passing data pegawai yang didapat ke view edit.blade.php
         return view('viewagen',['agen' => $agen]);
    }
}
