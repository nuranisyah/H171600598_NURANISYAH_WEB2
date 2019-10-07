<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengumuman;
use App\kategori_pengumuman;

class PengumumanController extends Controller
{
    function index(){
        $Pengumuman=Pengumuman::all();

        return view('Pengumuman.index',compact ('Pengumuman'));

            	}
 public function create()
 {
 	$kategori_pengumuman = kategori_pengumuman::pluck('nama', 'id');
        return view('Pengumuman.create')->with('kategori_pemungumuman', $kategori_pengumuman);
  }

 public function store(Request $request)
    {
        $input = $request->all();
        Pengumuman::create($input);
        return redirect(route('Pengumuman.index'));
    }
    public function show($id)
    {
        $Artikel = Pengumuman::find($id);
        return view('Pengumuman.show', compact('Pengumuman'));
    
    }
}
