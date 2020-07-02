<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    protected $table = 'tegalwisatas';
    protected $fillable = ['id', 'namawisata', 'alamatwisata', 'kategori', 'wilayah',  'fasilitas', 'latitude', 'longitude', 'foto', 'video', 'status'];
}
