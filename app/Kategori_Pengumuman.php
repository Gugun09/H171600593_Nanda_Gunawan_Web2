<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori_Pengumuman extends Model
{
    protected $table = 'kategori_pengumuman';

    protected $fillable = ['nama', 'user_id'];
}
