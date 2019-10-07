<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use App\kategori_artikel;

class ArtikelController extends Controller
{
    function index(){
        $Artikel=Artikel::all();

        return view('Artikel.index',compact ('Artikel'));

         	}
 public function create()
 {
 	$kategori_artikel = kategori_artikel::pluck('nama', 'id');
        return view('Artikel.create')->with('kategori_artikel', $kategori_artikel);
  }

 public function store(Request $request)
    {
        $input = $request->all();
        Artikel::create($input);
        return redirect(route('Artikel.index'));
    }
    public function show($id)
    {
        $Artikel = Artikel::find($id);
        return view('Artikel.show', compact('Artikel'));
    
    }
}
