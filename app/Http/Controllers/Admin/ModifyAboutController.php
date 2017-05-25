<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AboutDescriptionRequest;
use App\Services\ImageService;
use App\Services\SessionForSweetAlertService;
use Illuminate\Http\Request;
use App\Services\CompanyDescriptionService;
use App\Services\CompanyImageService;
use App\Services\SessionService;

class ModifyAboutController extends AdminController
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

    public function about()
    {
        $aboutDescription = $this->companyDescriptionService->aboutDescription();
        
        $aboutImages = $this->companyImageService->aboutPageImages();

        return view('admin.modifyAbout', compact('aboutDescription', 'aboutImages'));
    }

    public function editAboutDescription(AboutDescriptionRequest $request)
    {
        $this->companyDescriptionService->modifyAboutDescription($request);

        $this->sessionForSweetAlertService->success('關於我內容', '修改成功');

        return redirect('admin/about');
    }

    public function addAboutImage(Request $request)
    {
        $this->imageService->uploadImages($request, 'about', 'about', '產品圖片', $this->sessionForSweetAlertService);

        return redirect('admin/about');
    }

    public function deleteAboutImage($companyImageId)
    {
        return $this->responseAjaxResult($this->imageService->deleteImages('about', 'about', $companyImageId));
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
}