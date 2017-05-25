<?php

namespace App\Repositories;

use App\Models\CompanyImages;
use Carbon\Carbon;

/**
 * Class CompanyImageRepository
 * @package App\Repositories
 */
class CompanyImageRepository extends EloquentRepository
{
    /**
     * CompanyImageRepository constructor.
     * @param CompanyImages $companyImages
     */
    public function __construct(CompanyImages $companyImages)
    {
        $this->model = $companyImages;
    }

    /**
     * @param $usePage
     * @param $useLocation
     * @return mixed
     */
    public function getImagesInfomation($usePage, $useLocation)
    {
        return $this->model->where('usePage', '=', $usePage)
            ->where('useLocation', '=', $useLocation)
            ->where('status', '=', 'A')
            ->get();
    }

    /**
     * @param $fileName
     * @return mixed
     */
    public function addMainImages($fileName, $usePage, $useLocation, $fileUrl)
    {
        return $this->create(['usePage' => $usePage,
            'useLocation' => $useLocation,
            'fileName' => $fileName,
            'fileUrl' => $fileUrl,
            'status' => 'A',
            'updateDateTime' => Carbon::now()
        ]);
    }

    public function isBeenUsed($usePage, $useLocation, $imageName)
    {
        $imageRow = $this->model->where('usePage', '=', $usePage)
            ->where('useLocation', '=', $useLocation)
            ->where('fileName', '=', $imageName)->get();

        return ($imageRow->isEmpty()) ? false : true;
    }
}

