<?php

namespace App\Repositories;

use App\Models\Category;

class LeftSiderBarRepository extends EloquentRepository
{
    protected $category;

    /**
     * LeftSiderBarRepository constructor.
     */
    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function activeCategory()
    {
        return $this->category
             ->with('categoryItems')
             ->ActiveCategory()
             ->get();
    }
}

