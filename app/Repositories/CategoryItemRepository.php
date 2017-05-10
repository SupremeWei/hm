<?php

namespace App\Repositories;

use App\Models\CategoryItems;

class CategoryItemRepository extends EloquentRepository
{
    protected $categoryItem;

    /**
     * LeftSiderBarRepository constructor.
     */
    public function __construct(CategoryItems $categoryItem)
    {
        $this->categoryItem = $categoryItem;
    }

    public function getCategoryItemRows($categoryItemId)
    {
        return $this->categoryItem
            ->with('images')
            ->GetImages($categoryItemId)
            ->get();
    }
}

