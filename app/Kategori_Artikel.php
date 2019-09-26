<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori_Artikel extends Model
{
    protected $table ='kategori_artikel';

    protected $fillable = ['nama', 'users_id'];
}
