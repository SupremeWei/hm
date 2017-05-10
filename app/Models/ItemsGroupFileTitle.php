<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemsGroupFileTitle extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'itemsGroupFileTitle';

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
    protected $primaryKey = 'itemsGroupId';

    public function scopeItemGroupTitle($query, $categoryItemId)
    {
        return $query->where('categoryItemId', '=', $categoryItemId);
    }

    public function itemsDescription()
    {
        return $this->hasMany('App\Models\ItemsDescription', 'itemsGroupId', 'itemsGroupId');
    }
}
