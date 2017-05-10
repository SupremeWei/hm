<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemsDCDescription extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'itemsDCDescription';

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
    protected $primaryKey = 'itemDCDescriptionId';
}
