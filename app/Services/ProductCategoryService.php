<?php

namespace APP\Services;

use App\Services\IProductCategoryService;
use App\Repositories\ICategoryRepository;
use App\BusinessObjects\ICategory; 

class ProductCategoryService implements IProductCategoryService
{
	private $_CategoryRepository;

	public function __construct(ICategoryRepository $CategoryRepository)
	{
		$this->_CategoryRepository = $CategoryRepository;
	}
	public function addCategories(ICategory $category)
	{
		$this->_CategoryRepository->add($category);
	}
	public function getCategories()
	{
		return $this->_CategoryRepository->getAll();
	}

}//business logic,Manager

