<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EASController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	// $pegawai = DB::table('pegawai')->get();

        $kategori = DB::table('kategori')->get();

    	// mengirim data pegawai ke view index
    	return view('indexeas',['kategori' => $kategori]);
    }

    public function view(Request $request)
    {
	    // insert data ke table pegawai
	    // Mendapatkan ID yang dipilih dari form
        $selectedID = $request->input('kategori');

        // Mengambil data kategori berdasarkan ID yang dipilih
        $kategori = DB::table('kategori')->where('ID', $selectedID)->first();

	    // alihkan halaman ke halaman pegawai
	    return view('kategori', ['kategori' => $kategori]);
    }

}
