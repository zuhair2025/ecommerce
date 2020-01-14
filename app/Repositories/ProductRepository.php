<?php
namespace App\Repositories;

use App\Repositories\Repository;
use App\Factories\ProductsFactory;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Log;

class ProductRepository extends Repository implements IProductRepository
{
    public function __construct()
    {
        $product = resolve(Product::class);
        parent::setModel($product);
    }

    public function add($product)
    {
    //    $product = ProductsFactory::productDataFromBO($product);
    //    parent::add($product);
            $category = Category::where(['id'=>$product->getCategory()])->first();

            $productO = new Product();
            $productO->name = $product->getName();
            // $productO->image = $product->getImage();
            $productO->price = $product->getPrice();
            $productO->category()->associate($category);
            $productO->discount = $product->getDiscount();
            $productO->save();
    }

    public function getAll()
    {
        $productArr = parent::getAll();
        return ProductsFactory::createProductsBO($productArr);
    }
}