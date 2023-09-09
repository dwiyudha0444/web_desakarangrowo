<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
            //tambahkan kode untuk mapping ke tabel berita
            protected $table = 'berita';
            //mapping ke kolom fieldnya
            protected $fillable = ['judul','tanggal','keterangan','foto','id_name'];
    
            public function user()
            {
                return $this->belongsTo(User::class,'id_name');
            }
}
