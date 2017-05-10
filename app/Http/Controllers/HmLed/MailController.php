<?php

namespace App\Http\Controllers\HmLed;

use App\Http\Controllers\Controller;
use App\Http\Requests\SendEmailRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendMailToHM;

class MailController extends Controller
{
    protected $mail;

    public function sendMail(SendEmailRequest $request)
    {
        $name = $request->get('name');
        $mail = $request->get('email');
        $subject = $request->get('subject');
        $message = $request->get('message');
        $company = $request->get('company');
        $phone = $request->get('phone');

        Mail::to('alvin.wei314@gmail.com', ['title' => $subject])
            ->send(new sendMailToHM($name, $mail, $subject, $message, $company, $phone));
    }
}