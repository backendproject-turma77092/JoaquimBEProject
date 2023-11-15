<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'description'];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'products_providers_relationships', 'provider_id', 'product_id');
    }
}
