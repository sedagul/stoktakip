<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hareketler extends Model
{
    protected $table='Hareketler';
    protected $fillable = ['stok_kodu' , 'stok_adi' , 'kategori' , 'birimi' , 'cikis_saati' , 'fiyat'];
}
