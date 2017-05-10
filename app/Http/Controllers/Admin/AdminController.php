<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function callAction($method, $parameters)
    {
        $response = parent::callAction($method, $parameters);

        return $response;
    }
}