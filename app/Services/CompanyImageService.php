<?php

namespace App\Services;

use App\Repositories\CompanyImageRepository;

/**
 * Class CompanyImageService
 * @package App\Services
 */
class CompanyImageService
{
    /**
     * CompanyImageService constructor.
     * @param CompanyImageRepository $companyImageRepository
     */
    public function __construct(CompanyImageRepository $companyImageRepository)
    {
        $this->companyImageRepository = $companyImageRepository;
    }

    /**
     * @return mixed
     */
    public function mainPageImages()
    {
        return $this->companyImageRepository->getImagesInfomation('main', 'main');
    }
}
