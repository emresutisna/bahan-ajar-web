<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $guarded = [];
    
    public function mahasiswas()
    {
        return $this->hasMany('App\Mahasiswa');
    }
}
