<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galeri;

class GaleriController extends Controller
{
    function index(){
        $Galeri=Galeri::all();

        return view('galeri.index',compact ('Galeri'));

        }
 public function create()
 {
 	$kategori_berita = kategori_galeri::pluck('nama', 'id');
        return view('Galeri.create')->with('kategori_galeri', $kategori_galeri);
  }

 public function store(Request $request)
    {
        $input = $request->all();
        Galeri::create($input);
        return redirect(route('Galeri.index'));
    }
    }
}
