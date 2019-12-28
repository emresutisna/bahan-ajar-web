<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    
    public function mahasiswas()
    {
        return $this->hasMany('App\Mahasiswa');
    }
}
