<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    //tambahkan kode untuk mapping ke tabel 
    protected $table = 'anggota';
    //mapping ke kolom fieldnya
    protected $fillable = ['name','jabatan','foto'];
}
