<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $table="buku";

    public function Kategori(){
        return $this->belongsTo(Kategori::class,'kategori_id','kategori_id');
    }
}
