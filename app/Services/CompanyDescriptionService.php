<?php

namespace App\Services;

use App\Repositories\CompanyDescriptionRepository;

/**
 * Class CompanyDescriptionService
 * @package App\Services
 */
class CompanyDescriptionService {

    /**
     * CompanyDescriptionService constructor.
     * @param CompanyDescriptionRepository $companyDescriptionRepository
     */
    public function __construct(CompanyDescriptionRepository $companyDescriptionRepository)
    {
        $this->companyDescriptionRepository = $companyDescriptionRepository;
    }

    public function mainDescription()
    {
        return $this->companyDescriptionRepository->getMainPageAllDescription();
    }

    public function modifyMainDescription($requestData)
    {
        $mainData = [
            'center' => $requestData->get('center'),
            '3-1' => $requestData->get('3-1'),
            '3-2' => $requestData->get('3-2'),
            '3-3' => $requestData->get('3-3'),
        ];

        return $this->companyDescriptionRepository->exeModifyMainDescription($mainData);
    }
}
