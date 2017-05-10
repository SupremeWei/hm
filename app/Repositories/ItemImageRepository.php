<?php

namespace App\Repositories;

use App\Models\CategoryItemImages;

class ItemImageRepository extends EloquentRepository
{
    protected $categoryItemImages;

    /**
     * LeftSiderBarRepository constructor.
     */
    public function __construct(CategoryItemImages $categoryItemImages)
    {
        $this->categoryItemImages = $categoryItemImages;
    }

    public function getItemImages($categoryItemId)
    {
        return $this->categoryItemImages
            ->where('categoryItemId', '=', $categoryItemId)
            ->get(['categoryItemId', 'imageOrder', 'imageName']);
    }
}

