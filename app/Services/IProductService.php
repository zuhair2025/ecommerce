<?php
namespace App\Services;

use App\BusinessObjects\IProduct;

interface IProductService
{
    public function addProduct(IProduct $product);
    public function getProduct();
}