<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jurusan;

class JurusanController extends Controller
{
    public function index(){
    	$jurusans = Jurusan::get();
    	// return view('master.jurusan', ['jurusans'=>$jurusans]);
    	return view('master.jurusan', compact('jurusans'));    	
    }
}
