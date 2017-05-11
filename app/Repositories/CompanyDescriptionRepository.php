<?php

namespace App\Repositories;

use App\Models\CompanyDescription;

/**
 * Class CompanyDescriptionRepository
 * @package App\Repositories
 */
class CompanyDescriptionRepository extends EloquentRepository
{
    /**
     * @var CompanyDescription
     */
    protected $companyDescription;

    /**
     * CompanyDescriptionRepository constructor.
     * @param CompanyDescription $companyDescription
     */
    public function __construct(CompanyDescription $companyDescription)
    {
        $this->companyDescription = $companyDescription;
    }

    /**
     * @return mixed
     */
    public function getHomePageAllDescription()
    {
        return $this->companyDescription->where('usePage', '=', 'home')->get()->keyBy('descriptionType');
    }

    /**
     * @param $homeModifyData
     */
    public function exeModifyHomeDescription($homeModifyData)
    {
        foreach ($homeModifyData as $key => $row) {
            $companyModel = $this->companyDescription->where('descriptionType', '=', $key)->update(['content' => trim($row)]);
        }
    }
}

