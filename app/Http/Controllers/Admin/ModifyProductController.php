<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\HomeDescriptionRequest;
use App\Services\ImageService;
use App\Services\SessionForSweetAlertService;
use Illuminate\Http\Request;
use App\Services\CompanyDescriptionService;
use App\Services\CompanyImageService;
use App\Services\SessionService;

class ModifyHomeController extends AdminController
{
    public function __construct(CompanyDescriptionService $companyDescriptionService,
                                CompanyImageService $companyImageService,
                                SessionForSweetAlertService $sessionForSweetAlertService,
                                ImageService $imageService)
    {
        $this->companyDescriptionService = $companyDescriptionService;
        $this->companyImageService = $companyImageService;
        $this->sessionForSweetAlertService = $sessionForSweetAlertService;
        $this->imageService = $imageService;
    }

    public function home()
    {
        $homeDescription = $this->companyDescriptionService->homeDescription();
        
        $homeImages = $this->companyImageService->homePageImages();

        return view('admin.modifyHome', compact('homeDescription', 'homeImages'));
    }

    public function editHomeDescription(HomeDescriptionRequest $request)
    {
        $this->companyDescriptionService->modifyHomeDescription($request);

        $this->sessionForSweetAlertService->success('首頁內容', '修改成功');

        return redirect('admin/home');
    }

    public function addHomeImage(Request $request)
    {
        $this->imageService->uploadImages($request, 'home', 'home', '產品圖片', $this->sessionForSweetAlertService);

        return redirect('admin/home');
    }

    public function deleteHomeImage($companyImageId)
    {
        return $this->responseAjaxResult($this->imageService->deleteImages('home', 'home', $companyImageId));
    }

    private function responseAjaxResult($ajaxResult)
    {
        $httpCode = 200;

        if ($ajaxResult['status'] == 'error') {
            $httpCode = 500;
        }

        return response()->json($ajaxResult,
            $httpCode,
            ['Content-Type' => 'application/json; charset=utf-8'],
            JSON_UNESCAPED_UNICODE);
    }

    public function deleteAboutImage($companyImageId)
    {
        return $this->responseAjaxResult($this->imageService->deleteImages('about', 'about', $companyImageId));
    }

    public function addAboutImage(Request $request)
    {
        $this->imageService->uploadHomeImages($request, 'about', 'about', '關於我圖片', $this->sessionForSweetAlertService);

        return redirect('admin/about');
    }

    public function about()
    {
        $aboutDescription = $this->companyDescriptionService->aboutDescription();

        $aboutImages = $this->companyImageService->aboutPageImages();

        return view('admin.modifyAbout', compact('aboutDescription', 'aboutImages'));
    }
}