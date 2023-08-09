<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    public $table = 'siswa';
    public $primaryKey = 'id_siswa';
    public $fillable = array('nama_siswa','alamat_siswa','jenis_kelamin','foto_siswa');
    public $timestamps = false;
}
