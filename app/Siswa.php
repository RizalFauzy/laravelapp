<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $fillable = ['nisn', 'nama_siswa', 'tanggal_lahir', 'jenis_kelamin'];

    public function getNamaSiswaAttribute($nama_siswa) {
    	return ucwords($nama_siswa);
    }

    public function setNama_SiswaAttribute($nama_siswa) {
    	return strtolower($nama_siswa);
    }
}
