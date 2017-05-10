<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyImages extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'companyImages';

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
    protected $primaryKey = 'companyImageId';

    protected $fillable = [
        'usePage',
        'useLocation',
        'fileName',
        'fileUrl',
        'status',
        'updateDateTime',
    ];
}
