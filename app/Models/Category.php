<?php

namespace App\Models;

use App\Models\Artikel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_artikel';
    protected $guarded = ['id_artikel'];

public function artikels()
    {
        return $this->hasMany(Artikel::class, 'category_id', 'id_kategori');
    }
}
