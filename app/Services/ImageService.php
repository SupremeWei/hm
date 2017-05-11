<?php

namespace App\Services;

use App\Repositories\CompanyImageRepository;

class ImageService
{
    /**
     * CompanyImageService constructor.
     * @param CompanyImageRepository $companyImageRepository
     */
    public function __construct(CompanyImageRepository $companyImageRepository)
    {
        $this->companyImageRepository = $companyImageRepository;
    }

    public function uploadMainImages($request, SessionForSweetAlertService $sessionForSweetAlertService)
    {
        if (! $request->hasfile('addImage')) {
            $sessionForSweetAlertService->imageEmpty('首頁圖片', '請選擇圖片並點選上傳');
            return ;
        }

        $imageFile = $request->file('addImage');
        $imageName = $imageFile->getClientOriginalName();
        $imageMimeType = $imageFile->getClientMimeType();

        if ($imageMimeType <> 'image/jpeg') {
            $sessionForSweetAlertService->error('首頁圖片', '請務必上傳 .jpg 格式圖片');
            return ;
        }

        if ($this->checkImageNameIsBeenUsed('main', 'main', $imageName)) {
            $sessionForSweetAlertService->error('首頁圖片', $imageName.' 已使用過，請確認是不是同張圖片');
            return ;
        }

        if (! $imageFile->storeAs('public/home', $imageName)) {
            $sessionForSweetAlertService->error('首頁圖片', $imageName.' 上傳失敗請再試一次');
            return ;
        }

        $bb = $this->companyImageRepository->addMainImages($imageName);

        $sessionForSweetAlertService->success('首頁圖片', '上傳成功');
    }

    private function checkImageNameIsBeenUsed($usePage, $useLocation, $imageName) {

        return $this->companyImageRepository->isBeenUsed($usePage, $useLocation, $imageName);
    }
}
