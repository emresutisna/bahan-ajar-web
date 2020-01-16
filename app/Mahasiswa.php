<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
	protected $guarded = [];

    public function jurusan()
    {
        return $this->belongsTo('App\Jurusan');
    }
}
