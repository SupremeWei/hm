<?php

namespace App\Http\Controllers\HmLed;

use App\Http\Controllers\Controller;
use App\Services\CompanyDescriptionService;
use App\Services\CompanyImageService;

class HomeController extends Controller
{
    /**
     * HomeController constructor.
     */
    public function __construct(CompanyDescriptionService $companyDescriptionService,
                                CompanyImageService $companyImageService)
    {
        $this->companyDescriptionService = $companyDescriptionService;
        $this->companyImageService = $companyImageService;
    }

    public function home()
    {
        $homeImages = $this->companyImageService->homePageImages();
        $homeDescription = $this->companyDescriptionService->homeDescription();

        return view('hmled.home', compact('homeImages', 'homeDescription'));
    }

    public function about()
    {
        return view('hmled.about');
    }

    public function contact()
    {
        return view('hmled.contact');
    }
}