<?php

namespace App\ViewModels;

use App\Repositories\IProductRepository;
use App\Services\IProductService;

class ViewProductModel implements IViewProductModel
{
    private $_productService;

    public function __construct(IProductService $productService)
    {
        $this->_productService = $productService;
    }

    public function getAll()
    {
        return $this->_productService->getProduct();
    }
}