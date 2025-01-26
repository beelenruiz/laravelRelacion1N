<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;

    protected $fillable = ['nombre', 'descripcion', 'imagen', 'stock', 'category_id'];

    //relacion 1:N con categorias
    public function category(): BelongsTo{
        return $this -> belongsTo(Category::class);
    }

    public function nombre(): Attribute{
        return Attribute::make(
            set: fn(string $v) => ucfirst($v),
        );
    }
}
