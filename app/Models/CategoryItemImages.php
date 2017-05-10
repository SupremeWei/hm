<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryItemImages extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'categoryItemImages';

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
    protected $primaryKey = 'categoryItemImageId';

    public function scopeActiveCategoryItemImage($query)
    {
        return $query->where('status', '=', 'A');
    }
}
