<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductSpecification extends Model
{
    use SoftDeletes;

    protected $fillable = ['product_id', 'name', 'description'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
