<?php

namespace App\Repositories;

use App\Models\ItemsGroupFileTitle;

class ItemsGroupFileRepository extends EloquentRepository
{
    protected $itemsGroupFileTitle;

    /**
     * LeftSiderBarRepository constructor.
     */
    public function __construct(ItemsGroupFileTitle $itemsGroupFileTitle)
    {
        $this->itemsGroupFileTitle = $itemsGroupFileTitle;
    }

    public function getGroupFileTitleWithDescription($categoryItemId)
    {
        return $this->itemsGroupFileTitle
            ->with('itemsDescription')
            ->ItemGroupTitle($categoryItemId)
            ->get();
    }
}

