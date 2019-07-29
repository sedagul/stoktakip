<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Urun extends Model
{
   protected $table='uruns';
    protected $fillable = ['stok_kodu', 'urun_adi', 'kategori', 'birimi', 'fiyatı', 'aciklama'];
}
