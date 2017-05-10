<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemsDescription extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'itemsDescription';

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
    protected $primaryKey = 'itemDescriptionId';

    public function scopeCategoryItemActive($query)
    {
        return $query->where('status', '=', 'A');
    }

    public function getDCItemsDescription()
    {
        $this->hasMany('App\Models\ItemsDCDescription', 'itemDescriptionId', 'itemDescriptionId');
    }

    public function scopeItemsDescription($query, $itemd)
    {
        
    }
}
