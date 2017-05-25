<?php

namespace App\Services;

use App\Repositories\CompanyImageRepository;
use Illuminate\Support\Facades\Storage;

/**
 * Class ImageService
 * @package App\Services
 */
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

    /**
     * @param $request
     * @param $usePage
     * @param $useLocation
     * @param $usePageChineseName
     * @param SessionForSweetAlertService $sessionForSweetAlertService
     */
    public function uploadImages($request, $usePage, $useLocation, $usePageChineseName, SessionForSweetAlertService $sessionForSweetAlertService)
    {
        if (! $request->hasfile('addImage')) {
            $sessionForSweetAlertService->error($usePageChineseName, '請選擇圖片並點選上傳');
            return ;
        }

        $imageFile = $request->file('addImage');
        $imageName = $imageFile->getClientOriginalName();
        $imageMimeType = $imageFile->getClientMimeType();

        if ($imageMimeType <> 'image/jpeg') {
            $sessionForSweetAlertService->error($usePageChineseName, '請務必上傳 .jpg 格式圖片');
            return ;
        }

        if ($this->checkImageNameIsBeenUsed($usePage, $useLocation, $imageName)) {
            $sessionForSweetAlertService->error($usePageChineseName, $imageName.' 已使用過，請確認是不是同張圖片');
            return ;
        }

        if (! $imageFile->storeAs('public/'.$usePage, $imageName)) {
            $sessionForSweetAlertService->error($usePageChineseName, $imageName.' 上傳失敗請再試一次');
            return ;
        }

        if (! $this->companyImageRepository->addMainImages($imageName, $usePage, $useLocation, $useLocation)) {
            $sessionForSweetAlertService->error($usePageChineseName, $imageName.' 上傳失敗請再試一次');
            return ;
        }

        $sessionForSweetAlertService->success($usePageChineseName, '上傳成功');
    }

    /**
     * @param $usePage
     * @param $useLocation
     * @param $imageName
     * @return bool
     */
    private function checkImageNameIsBeenUsed($usePage, $useLocation, $imageName) {

        return $this->companyImageRepository->isBeenUsed($usePage, $useLocation, $imageName);
    }

    public function deleteImages($usePage, $useLocation, $companyImageId)
    {
        $imageRow = $this->companyImageRepository->find($companyImageId);

        // because use local disk, i use homestead but inside symbol link can not link to local computer
        // this code is temp comment
//        if (! Storage::get($imageRow->fileUrl.'/'.$imageRow->fileName)) {
//            return ['status' => 'error', 'message' => '無此檔案存在'];
//        }
//        Storage::delete($imageRow->fileUrl.'/'.$imageRow->fileName);

        $this->companyImageRepository->delete($companyImageId);

        return ['status' => 'success', 'message' => "$imageRow->fileName 刪除成功"];
    }
}
