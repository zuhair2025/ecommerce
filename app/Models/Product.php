<?php

namespace App\Models;

// use App\BusinessObjects\Category;
use Illuminate\Database\Eloquent\Model;

class Product extends Model

{
   
    protected $fillable = ['category_id','name','price','discount'];
    
    public function image()
    {
    	return $this->belongsTo(ProdcutImages::class);
    }

     public function category()
    {
    	return $this->belongsTo(Category::class);
    }
}
