<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Siswa;

class SiswaController extends Controller
{
	protected $request;

	public function __construct(Request $req) {
		$this->request = $req;
	}

    public function index() {
    	$data['siswa'] = Siswa::orderBy('nama_siswa', 'asc')->paginate(10);
    	$data['total'] = Siswa::count();
		return view('siswa/daftar_siswa', $data);
    }

    public function create() {
    	return view('siswa/create');
    }

    public function store() {
    	$input = $this->request->all();
        Siswa::create($input);
    	return redirect('siswa');
    }

    public function show($id) {
        $data['siswa'] = Siswa::findOrFail($id);
        return view('siswa/show', $data);
    }

    public function edit($id) {
        $data['siswa'] = Siswa::findOrFail($id);
        return view('siswa/edit', $data);
    }

    public function update($id) {
        $siswa = Siswa::findOrFail($id);
        $siswa->update($this->request->all());
        return redirect('siswa');
    }

    public function destroy($id) {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();
        return redirect('siswa');
    }
}
