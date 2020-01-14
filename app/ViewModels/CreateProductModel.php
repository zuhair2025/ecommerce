<?php
namespace App\ViewModels;

use Illuminate\Http\Request;
use App\Services\IProductService;
use App\Factories\ProductsFactory;

class CreateProductModel implements ICreateProductModel
{
    public $id;
    public $name;
    // public $image;
    public $price;
    public $category_id;
    public $discount;
    private $_productService;

    public function __construct(IProductService $productService,Request $request)
    {
        $this->_productService = $productService;
        $this->loadFields($request);
    }

    public function store()
    {
        $product = ProductsFactory::productBOFromModel($this);
        
        $this->_productService->addProduct($product);
    }

    public function update()
    {
        
    }

    public function loadFields(Request $request)
    {
        // if ($request->file('image')) {
        //     $imageName = time() . '.' . $request->file('image')->getClientOriginalExtension();
        //     $request->file('image')->move(public_path('uploads'), $imageName);
        //     $this->image = $imageName;
        // }

        // if (!$this->image) {
        //     $this->image = 'Not Available';
        // }
        $this->id = $request->input('id');
        $this->name = $request->input('name');
        $this->price = $request->input('price');
        $this->category_id = (int)$request->input('category_id');
        $this->discount = $request->input('discount');


    }
}