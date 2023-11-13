<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'price', 'type', 'quantity', 'note'];

    public function providers()
    {
        return $this->belongsToMany(Provider::class, 'products_providers_relationships', 'product_id', 'provider_id');
    }

    public function purchases()
    {
        return $this->hasMany(Purchase::class);
    }
}
