<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    // Tabel Artikel
    protected $table = 'artikels';
    protected $primaryKey = 'id_artikel';
    protected $fillable = ['title', 'author', 'slug', 'body'];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
