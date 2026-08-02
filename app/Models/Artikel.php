<?php

namespace App\Models;
use App\Models\Category;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


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
    
    protected $with=['author','category'];

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'category_id');
    }

    public function scopeFilter (Builder $query, array $filters): void
    {
        $query->when(
            $filters['search'] ?? false, 
            fn ($query, $search) =>
            $query->where('title', 'like', '%' . $search . '%')
        );        
        $query->when(
            $filters['category'] ?? false, 
            fn ($query, $category) =>
            $query->whereHas('category', fn($query) => $query->where('slug', $category))
        );        
        $query->when(
            $filters['author'] ?? false, 
            fn ($query, $author) =>
            $query->whereHas('username', fn($query) => $query->where('slug', $author))
        );        
    }
}
