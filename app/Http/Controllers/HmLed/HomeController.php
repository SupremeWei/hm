<?php

namespace App\Http\Controllers\HmLed;

use App\Http\Controllers\Controller;
use App\Services\CompanyDescriptionService;

class HomeController extends Controller
{
    /**
     * HomeController constructor.
     */
    public function __construct(CompanyDescriptionService $companyDescriptionService)
    {
        $this->companyDescriptionService = $companyDescriptionService;
    }

    public function home()
    {
        $mainDescription = $this->companyDescriptionService->mainDescription();

        return view('hmled.home', compact('mainDescription'));
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