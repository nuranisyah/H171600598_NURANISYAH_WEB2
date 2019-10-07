<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $table ='Galeri'; 
    
    protected $fillable = [
       'judul','users_id','kategori_artikel_id'
    ];
}
