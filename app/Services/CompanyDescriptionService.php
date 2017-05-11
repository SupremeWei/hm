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
    public function __construct(CompanyDescriptionRepository $companyDescriptionRepository,
        CompanyImageService $companyImageService)
    {
        $this->companyDescriptionRepository = $companyDescriptionRepository;
        $this->companyImageService = $companyImageService;
    }

    public function homeDescription()
    {
        return $this->companyDescriptionRepository->getHomePageAllDescription();
    }

    public function modifyHomeDescription($requestData)
    {
        $homeDescriptionRequest = [
            'center' => $requestData->get('center'),
            '3-1' => $requestData->get('3-1'),
            '3-2' => $requestData->get('3-2'),
            '3-3' => $requestData->get('3-3'),
        ];

        return $this->companyDescriptionRepository->exeModifyHomeDescription($homeDescriptionRequest);
    }
}
