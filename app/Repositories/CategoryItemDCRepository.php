<?php

namespace App\Repositories;

use App\Models\ItemsDCDescription;

class CategoryItemDCRepository extends EloquentRepository
{
    protected $itemsDCDescription;

    /**
     * LeftSiderBarRepository constructor.
     */
    public function __construct(ItemsDCDescription $ItemsDCDescription)
    {
        $this->itemsDCDescription = $ItemsDCDescription;
    }

    public function getCategoryDCItemRows($itemDescritptionId)
    {
        return $this->itemsDCDescription
            ->where('itemDescriptionId', '=', $itemDescritptionId)
            ->get();
    }
}

