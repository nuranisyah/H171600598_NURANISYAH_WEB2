<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
Use App\kategori_berita;


class BeritaController extends Controller
{
    function index(){
        $Berita=Berita::all();

        return view('Berita.index',compact ('Berita'));

            	}
 public function create()
 {
 	$kategori_berita = kategori_berita::pluck('nama', 'id');
        return view('Berita.create')->with('kategori_berita', $kategori_berita);
  }

 public function store(Request $request)
    {
        $input = $request->all();
        Berita::create($input);
        return redirect(route('Berita.index'));
    }
    public function show($id)
    {
        $Berita = Berita::find($id);
        return view('Berita.show', compact('Berita'));
    
    }
}
