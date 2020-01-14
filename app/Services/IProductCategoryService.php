<?php

namespace App\Services;

use App\BusinessObjects\ICategory;

interface IProductCategoryService
{
	public function addCategories(ICategory $category); //addCategories
	public function getCategories(); //getCategories
}