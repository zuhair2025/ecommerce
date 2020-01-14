<?php
namespace App\Services;

use App\Services\IProductService;
use App\Repositories\IProductRepository;
use App\BusinessObjects\IProduct;

class ProductService implements IProductService
{
    private $_ProductRepository;

    public function __construct(IProductRepository $ProductRepository)
    {
        $this->_ProductRepository = $ProductRepository;
    }

    public function addProduct(IProduct $product):void
    {
        $this->_ProductRepository->add($product);
    }

    public function getProduct()
    {
        return $this->_ProductRepository->getAll();
    }
}