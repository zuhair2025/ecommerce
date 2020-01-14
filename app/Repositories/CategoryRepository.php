<?php

namespace App\Repositories;

use App\Repositories\Repository;
use App\Factories\ProductCategoryFactory;
use App\Models\Category;
use Illuminate\Support\Facades\Log;

class CategoryRepository extends Repository implements ICategoryRepository
{
	
	public function __construct()
	{
		$category = resolve(Category::class);
		parent::setModel($category);
	}

	public function add($productCategory)
	{
		$category = ProductCategoryFactory::productCategoryDataFromBO($productCategory);
		parent::add($category);
	}

	public function getAll()
	{
		$categoryArr = parent::getAll();
        return ProductCategoryFactory::createCategoriesBO($categoryArr);
	}
}
