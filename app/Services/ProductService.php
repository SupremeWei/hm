<?php

namespace App\Services;

use App\Repositories\CategoryItemDCRepository;
use App\Repositories\CategoryItemRepository;
use App\Repositories\ItemImageRepository;
use App\Repositories\ItemsGroupFileRepository;
use App\Repositories\LeftSiderBarRepository;
use App\Repositories\ProductRepository;

/**
 * Class ProductService
 * @package App\Services
 */
class ProductService {

    /**
     * ProductService constructor.
     */
    public function __construct(LeftSiderBarRepository $leftSiderBarRepository,
        ItemImageRepository $itemImageRepository,
        CategoryItemRepository $categoryItemRepository,
        CategoryItemDCRepository $categoryItemDCRepository,
        ItemsGroupFileRepository $itemsGroupFileRepository)
    {
        $this->leftSiderBarRepository = $leftSiderBarRepository;
        $this->itemImageRepository = $itemImageRepository;
        $this->categoryItemDCRepository = $categoryItemDCRepository;
        $this->categoryItemRepository = $categoryItemRepository;
        $this->itemsGroupFileRepository = $itemsGroupFileRepository;
    }

    public function getLeftSiderBarWithCategoryItems()
    {
        return $this->leftSiderBarRepository->activeCategory();
    }

    public function getCategoryItemImages($categoryItemId)
    {
        return $this->itemImageRepository->getItemImages($categoryItemId);
    }

    public function getCategoryMainDescription($categoryItemId)
    {
        return $this->categoryItemRepository->getCategoryItemRows($categoryItemId);
    }

    public function categoryItemFileTitleWithDescription($categoryItemId)
    {
        return $this->itemsGroupFileRepository->getGroupFileTitleWithDescription($categoryItemId);
    }

    public function categoryDCItemsDescription($itemDescritptionId)
    {
        return $this->categoryItemDCRepository->getCategoryDCItemRows($itemDescritptionId);
    }
}
