<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $pria = Mahasiswa::whereJenisKelamin('L')->count();
        $wanita = Mahasiswa::whereJenisKelamin('P')->count();
        return view('home',compact('pria','wanita'));
    }
}
