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
        $aboutImages = $this->companyImageService->aboutPageImages();
        $aboutDescription = $this->companyDescriptionService->aboutDescription()->chunk(2);

        return view('hmled.about', compact('aboutImages', 'aboutDescription'));
    }

    public function contact()
    {
        return view('hmled.contact');
    }
}