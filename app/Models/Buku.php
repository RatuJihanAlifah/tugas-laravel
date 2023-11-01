<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'bukus';
    protected $fillable = [
        'kode_buku',
        'rak_id',
        'judul',
        'penulis',
        'penerbit',
        'cover',
        'tahun_terbit',
        'stok_buku',
    ];

    public function rak()
    {
        return $this->hasMany('App\Models\Rak','id','rak_id');
    }
}
