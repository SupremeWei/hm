<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class sendMailToHM extends Mailable
{
    use Queueable, SerializesModels;

    protected $name;

    protected $message;

    protected $mail;

    protected $customSubject;

    protected $company;

    protected $phone;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $mail, $subject, $message, $company, $phone)
    {
        $this->name = $name;
        $this->mail = $mail;
        $this->customSubject = $subject;
        $this->message = $message;
        $this->company = $company;
        $this->phone = $phone;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.mail',
            ['name' => $this->name,
             'mail' => $this->mail,
             'customMessage' => $this->message,
             'customSubject' => $this->customSubject,
             'company' => $this->company,
             'phone' => $this->phone]);
    }
}
