<?php

namespace App\Repositories;

use App\Models\CompanyImages;

/**
 * Class CompanyImageRepository
 * @package App\Repositories
 */
class CompanyImageRepository extends EloquentRepository
{
    /**
     * @var CompanyDescription
     */
    protected $companyImages;

    /**
     * CompanyImageRepository constructor.
     * @param CompanyImages $companyImages
     */
    public function __construct(CompanyImages $companyImages)
    {
        $this->companyImages = $companyImages;
    }

    public function getImagesInfomation($usePage, $useLocation)
    {
        return $this->companyImages->where('usePage', '=', $usePage)
            ->where('useLocation', '=', $useLocation)
            ->get();
    }
}

