<?php

namespace App\Http\Controllers\HmLed;

use App\Http\Controllers\Controller;
use App\Services\CompanyDescriptionService;
use App\Services\CompanyImageService;

/**
 * Class AboutController
 * @package App\Http\Controllers\HmLed
 */
class AboutController extends Controller
{
    /**
     * AboutController constructor.
     * @param CompanyDescriptionService $companyDescriptionService
     * @param CompanyImageService $companyImageService
     */
    public function __construct(CompanyDescriptionService $companyDescriptionService,
                                CompanyImageService $companyImageService)
    {
        $this->companyDescriptionService = $companyDescriptionService;
        $this->companyImageService = $companyImageService;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function about()
    {
        $aboutImages = $this->companyImageService->aboutPageImages();
        $aboutDescription = $this->companyDescriptionService->aboutDescription()->chunk(2);

        return view('hmled.about', compact('aboutImages', 'aboutDescription'));
    }
}