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
            'home3_1' => $requestData->get('3_1'),
            'home3_2' => $requestData->get('3_2'),
            'home3_3' => $requestData->get('3_3'),
        ];

        return $this->companyDescriptionRepository->modifyHomeDescription($homeDescriptionRequest);
    }

    public function aboutDescription()
    {
        return $this->companyDescriptionRepository->getAboutPageAllDescription();
    }

    public function modifyAboutDescription($requestData)
    {
        $maxCount = 6;

        for ($aboutOrder = 1; $aboutOrder <= $maxCount; $aboutOrder++) {
            $orderVariableName = sprintf('about%d_%d', $maxCount, $aboutOrder);
            $titleVariableName = sprintf('about%d_%d-title', $maxCount, $aboutOrder);

            $aboutDescriptionRequest[$orderVariableName]['content'] = $requestData->get($orderVariableName);
            $aboutDescriptionRequest[$orderVariableName]['title'] = $requestData->get($titleVariableName);
        }

        return $this->companyDescriptionRepository->modifyAboutDescription($aboutDescriptionRequest);
    }
}
