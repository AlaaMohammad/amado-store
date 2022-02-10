<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;


    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'quantity', 'price', 'img_src'
    ];


    /**
     * Product should belong to one category
     * @return BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     *
     * @return BelongsToMany
     */
    public function order_details()
    {
        return $this->belongsToMany(OrderDetails::class);
    }

}
