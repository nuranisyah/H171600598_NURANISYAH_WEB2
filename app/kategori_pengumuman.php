<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori_pengumuman extends Model
{
    protected $table ='kategori_Pengumuman'; 
    
    protected $fillable = [
        'nama','users_id',
    ];
}
