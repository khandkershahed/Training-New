<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EventRegistrationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $eventDetails;

    public function __construct($user, $eventDetails)
    {
        $this->user = $user;
        $this->eventDetails = $eventDetails;
    }

    public function build()
    {
        return $this->view('mail.event_registration')
            ->subject('Event Registration Confirmation')
            ->with([
                'userName' => $this->user->name,
                'eventName' => $this->eventDetails['project_name'],
            ]);
    }
}
