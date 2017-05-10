<?php

namespace App\Services;

use App\Repositories\SessionRepository;

/**
 * Class SessionService
 * @package App\Services
 */
class SessionForSweetAlertService {

    /**
     * SessionService constructor.
     * @param SessionRepository $sessionRepository
     */
    public function __construct(SessionRepository $sessionRepository)
    {
        $this->sessionRepository = $sessionRepository;
    }

    public function updateSuccess($title, $message)
    {
        $this->sessionRepository->success($title, $message);
    }

    public function imageEmpty($title, $message)
    {
        $this->sessionRepository->error($title, $message);
    }
}
