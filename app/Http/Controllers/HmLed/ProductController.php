<?php

namespace App\Http\Controllers\HmLed;

use App\Http\Controllers\Controller;
use App\Services\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * ProductController constructor.
     */
    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function showItemDetail($categoryItemId)
    {
        $leftSiderBarWithCategoryItems = $this->productService->getLeftSiderBarWithCategoryItems();

        $categoryMainDescriptionWithImages = $this->productService->getCategoryMainDescription($categoryItemId);

        $categoryItemFileTitleWithDescription = $this->productService->categoryItemFileTitleWithDescription($categoryItemId);

        return view('hmled.categoryItemDetail',
            compact('leftSiderBarWithCategoryItems',
                'categoryMainDescriptionWithImages',
                'categoryItemFileTitleWithDescription'));
    }

    public function showDCItemDetail($categoryItemId)
    {
        $leftSiderBarWithCategoryItems = $this->productService->getLeftSiderBarWithCategoryItems();

        $categoryItemFileTitleWithDescription = $this->productService->categoryItemFileTitleWithDescription($categoryItemId);

        return view('hmled.categoryDCItemDetail',
            compact('leftSiderBarWithCategoryItems',
                'categoryItemFileTitleWithDescription',
                'categoryDCItemsDescription'));
    }
}