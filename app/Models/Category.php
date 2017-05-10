<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 * @package App\Models
 */
class Category extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'category';

    /**
     * No use created_at, updated_at
     *
     * @var
     */
    public $timestamps = false;

    /**
     * primary key
     * @var string
     */
    protected $primaryKey = 'categoryId';

    /**
     * hasmany category items with items status is active
     *
     * @return mixed
     */
    public function categoryItems()
    {
        return $this->hasMany('App\Models\CategoryItems', 'categoryId','categoryId')
            ->where('categoryItems.status', '=', 'A');
    }

    /**
     * @param $query
     * @return mixed
     */
    public function scopeActiveCategory($query)
    {
        return $query->where('status', '=', 'A');
    }
}
