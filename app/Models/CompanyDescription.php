<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyDescription extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'companyDescription';

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
    protected $primaryKey = 'companyDescriptionId';

    protected $fillable = [
        'descriptionType',
        'choiceFontawesome',
        'content',
        'updateDateTime',
    ];
}
