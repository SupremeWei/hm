<?php

namespace App\Http\Controllers\HmLed;

use App\Http\Controllers\Controller;

/**
 * Class ContactController
 * @package App\Http\Controllers\HmLed
 */
class ContactController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function contact()
    {
        return view('hmled.contact');
    }
}