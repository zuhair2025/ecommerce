<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable =['id','name'];

    // public function parentCategory(){
    //     return $this->belongsTo(Category::class,'category_id');
    // }
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
