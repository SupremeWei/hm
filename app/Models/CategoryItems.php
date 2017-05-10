<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryItems extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'categoryItems';

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
    protected $primaryKey = 'categoryItemId';

    public function images()
    {
        return $this->hasMany('App\Models\CategoryItemImages', 'categoryItemId', 'categoryItemId');
    }

    public function scopeGetImages($query, $categoryItemId)
    {
        return $query->where('categoryItemId', '=', $categoryItemId);
    }
}
