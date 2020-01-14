<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProdcutImages extends Model
{
    protected $fillable = ['product_id','imageUrl'];

    public function product()
    {
    	return $this->belongsTo(Product::class);
    }
}
