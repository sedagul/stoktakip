<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sifre extends Model
{
    protected $table='Sifre';
    protected $fillable = ['aktif_sifre' , 'yeni_sifre' , 'yeni_sifretekrar'];
}
