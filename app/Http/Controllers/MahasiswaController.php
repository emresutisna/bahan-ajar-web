<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;
use App\Jurusan;

class MahasiswaController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
    	$mahasiswas = Mahasiswa::with('jurusan')->paginate(10);
    	return view('master.mahasiswa.index', compact('mahasiswas'));    	
    }

    public function create(){
    	$jurusans = Jurusan::get();    	
    	return view('master.mahasiswa.create', compact('jurusans'));
    }

    public function store(Request $request)
	{
	    $this->validate($request, [
	    	'nim' => 'required|string|max:9|min:9||unique:mahasiswas',
	        'nama' => 'required|string|max:150',
	        'tempat_lahir' => 'required|string|max:100'
	    ]);

	    Mahasiswa::create($request->except('_token'));
	    return redirect(route('mahasiswa.index'))->with(['success' => 'Mahasiswa Baru Ditambahkan!']);
	}

	public function edit($id){
    	$jurusan = Jurusan::findOrFail($id);
    	return view('master.jurusan.edit', compact('jurusan'));    	
    }

	public function update(Request $request, $id)
	{
		$this->validate($request, [
	    	'kode_jurusan' => 'required|string|max:2|min:2||unique:jurusans,kode_jurusan,' .  $id,
	        'nama' => 'required|string|max:100'
	    ]);

	    $jurusan = Jurusan::findOrFail($id); //QUERY UNTUK MENGAMBIL DATA BERDASARKAN ID
	    //KEMUDMIAN PERBAHARUI DATANYA
	    $jurusan->fill($request->all());
	    $jurusan->update();
	    //REDIRECT KE HALAMAN LIST JURUSAN
	    return redirect(route('jurusan.index'))->with(['success' => 'Jurusan berhasil Diperbaharui!']);
	}

	public function destroy($id)
	{
	    $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->delete();
        return redirect(route('mahasiswa.index'))->with(['success' => 'Mahasiswa Berhasil Dihapus!']);
	}
}
