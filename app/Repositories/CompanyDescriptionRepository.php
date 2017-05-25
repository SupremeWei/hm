<?php

namespace App\Repositories;

use App\Models\CompanyDescription;

/**
 * Class CompanyDescriptionRepository
 * @package App\Repositories
 */
class CompanyDescriptionRepository extends EloquentRepository
{
    /**
     * @var CompanyDescription
     */
    protected $companyDescription;

    /**
     * CompanyDescriptionRepository constructor.
     * @param CompanyDescription $companyDescription
     */
    public function __construct(CompanyDescription $companyDescription)
    {
        $this->companyDescription = $companyDescription;
    }

    /**
     * @return mixed
     */
    public function getHomePageAllDescription()
    {
        return $this->getDescription('home');
    }

    /**
     * @param $homeModifyData
     */
    public function modifyHomeDescription($homeModifyData)
    {
        $this->updateDescription('home', $homeModifyData);
    }

    /**
     * @return mixed
     */
    public function getAboutPageAllDescription()
    {
        return $this->getDescription('about');
    }

    /**
     * @param $aboutModifyData
     */
    public function modifyAboutDescription($aboutModifyData)
    {
        $this->updateDescription('about', $aboutModifyData);
    }

    /**
     * @param $usePage
     * @param $modifyData
     */
    private function updateDescription($usePage, $modifyData)
    {
        foreach ($modifyData as $key => $row) {
            if ($usePage == 'about') {
                $companyModel = $this->companyDescription->where('usePage', '=', $usePage)
                    ->where('descriptionType', '=', $key)
                    ->update(['contentTitle' => trim($row['title']), 'content' => trim($row['content'])]);
            } else {
                $companyModel = $this->companyDescription->where('usePage', '=', $usePage)
                    ->where('descriptionType', '=', $key)
                    ->update(['content' => trim($row)]);
            }
        }
    }

    /**
     * @return mixed
     */
    private function getDescription($usePage)
    {
        return $this->companyDescription->where('usePage', '=', $usePage)
            ->get()
            ->keyBy('descriptionType');
    }
}

