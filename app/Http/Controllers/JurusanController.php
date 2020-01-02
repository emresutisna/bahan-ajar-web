<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jurusan;

class JurusanController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
    	$jurusans = Jurusan::paginate(10);
    	return view('master.jurusan.index', compact('jurusans'));    	
    }

    public function store(Request $request)
	{
	    $this->validate($request, [
	    	'kode_jurusan' => 'required|string|max:2|min:2||unique:jurusans',
	        'nama' => 'required|string|max:100'
	    ]);

	    Jurusan::create($request->except('_token'));
	    return redirect(route('jurusan.index'))->with(['success' => 'Jurusan Baru Ditambahkan!']);
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
	    $jurusan = Jurusan::findOrFail($id);
        $jurusan->delete();
        return redirect(route('jurusan.index'))->with(['success' => 'Jurusan Berhasil Dihapus!']);
	}
}
