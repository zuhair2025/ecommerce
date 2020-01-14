<?php
namespace App\Factories;

use App\BusinessObjects\IProduct;
use App\ViewModels\ICreateProductModel;

class ProductsFactory
{
    public static function productBOFromModel(ICreateProductModel $model)
    {
        $product = resolve('App\BusinessObjects\IProduct');
        
        $product->setId($model->id);
        $product->setName($model->name);
        // $product->setImage($model->image);
        $product->setPrice($model->price);
        $product->setCategory($model->category_id);
        $product->setDiscount($model->discount);
        return $product;
    }

    public static function productDataFromBO(IProduct $model)
    {
        $product = ['name' => $model->getName()];
        return $product;
    }

    public static function createProductsBO($productsArr)
    {
        $products = [];
        foreach($productsArr as $productsArrItem)
        {
            $product = resolve('App\BusinessObjects\IProduct');

            $product->setId($productsArrItem['id']);
            $product->setName($productsArrItem['name']);
            // $product->setImage($productsArrItem['image']);
            $product->setPrice($productsArrItem['price']);
            $product->setCategory($productsArrItem['category']);
            $product->setDiscount($productsArrItem['discount']);
            $products[] = $product;
        }

        return $products;
    }
}

