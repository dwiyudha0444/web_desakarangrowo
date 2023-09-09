<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class linkyt extends Model
{
                //tambahkan kode untuk mapping ke tabel linkyt
                protected $table = 'linkyt';
                //mapping ke kolom fieldnya
                protected $fillable = ['link','keterangan'];
}
