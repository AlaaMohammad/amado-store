<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    use HasFactory;

    /**
     * category has many products
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function products(){
        return $this->belongsTo(Product::class);
    }
}
