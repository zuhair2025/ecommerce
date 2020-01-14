<?php

namespace App\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\BusinessObjects\ICategory',
            'App\BusinessObjects\Category'
        );

        $this->app->bind(
            'App\Repositories\ICategoryRepository',
            'App\Repositories\CategoryRepository'
        );

        $this->app->bind(
            'App\Services\IProductCategoryService',
            'App\Services\ProductCategoryService'
        );

        $this->app->bind(
            'App\ViewModels\ICreateCategoryModel',
            'App\ViewModels\CreateCategoryModel'
        );

        $this->app->bind(
            'App\ViewModels\IViewCategoryModel',
            'App\ViewModels\ViewCategoryModel'
        );

        $this->app->bind(
            'App\BusinessObjects\IProduct',
            'App\BusinessObjects\Product'
        );

        $this->app->bind(
            'App\Repositories\IProductRepository',
            'App\Repositories\ProductRepository'
        );

        $this->app->bind(
            'App\Services\IProductService',
            'App\Services\ProductService'
        );

        $this->app->bind(
            'App\ViewModels\IViewProductModel',
            'App\ViewModels\ViewProductModel'
        );

        $this->app->bind(
            'App\ViewModels\ICreateProductModel',
            'App\ViewModels\CreateProductModel'
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        Schema::defaultStringLength(191);
        //Check for Admin
        //Return true if auth user type is admin
        $gate->define('isAdmin',function($user){
            return $user->user_type == 'admin';
        });
        //Check for Author
        //Return true if auth user type is author
        $gate->define('isAuthor',function($user){
            return $user->user_type == 'author';
        });
        //Check for Editor
        //Return true if auth user type is editor
        $gate->define('isEditor',function($user){
            return $user->user_type == 'editor';
        });
    }
}
