<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdminEventMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $events;

    /**
     * Create a new message instance.
     *
     * @param $user
     * @param $eventData
     */
    public function __construct($user, $events)
    {
        $this->user = $user;
        $this->events = $events;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.admin_event')->subject('New Event Registration');

    }
}
