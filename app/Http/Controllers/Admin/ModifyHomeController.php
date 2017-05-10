<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\MainDescriptionRequest;
use App\Services\SessionForSweetAlertService;
use Illuminate\Http\Request;
use App\Services\CompanyDescriptionService;
use App\Services\CompanyImageService;
use App\Services\SessionService;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;

class ModifyHomeController extends AdminController
{
    public function __construct(CompanyDescriptionService $companyDescriptionService,
        CompanyImageService $companyImageService,
        SessionForSweetAlertService $sessionForSweetAlertService)
    {
        $this->companyDescriptionService = $companyDescriptionService;
        $this->companyImageService = $companyImageService;
        $this->sessionForSweetAlertService = $sessionForSweetAlertService;
    }

    public function main()
    {
        $mainDescription = $this->companyDescriptionService->mainDescription();
        
        $mainImages = $this->companyImageService->mainPageImages();

        return view('admin.modifyHome', compact('mainDescription', 'mainImages'));
    }

    public function editDescription(MainDescriptionRequest $request)
    {
        $this->companyDescriptionService->modifyMainDescription($request);

        $this->sessionForSweetAlertService->updateSuccess('首頁內容', '修改成功');

        return redirect('admin/home');
    }

    public function addHomeImage(Request $request)
    {
        if (! $request->hasfile('addImage')) {
            $this->sessionForSweetAlertService->imageEmpty('首頁圖片', '請選擇圖片並點選上傳');
            return redirect('admin/home');
        }

        $requestObject = $request->file('addImage');
        $imageName = $requestObject->getClientOriginalName();
        $imageMimeType = $requestObject->getClientMimeType();
        $requestObject->storeAs('public/home', $imageName);
        $this->sessionForSweetAlertService->updateSuccess('首頁圖片', '上傳成功');

        return redirect('admin/home');
    }
}