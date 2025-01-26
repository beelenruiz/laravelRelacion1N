<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $fillable = ['nombre', 'color'];
    
    //relacion 1:N con productos
    public function product(): HasMany{
        return $this -> hasMany(Product::class);
    }
}
