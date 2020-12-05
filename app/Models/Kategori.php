<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
	protected $table = 'kategori';

	protected $fillable = [
		'kode_matkul',
		'nama_matkul',
		'id_dosen',
		'deskripsi'
	];
}