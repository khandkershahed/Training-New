<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CourseUpdateMail extends Mailable
{
    use Queueable, SerializesModels;

    public $course;

    /**
     * Create a new message instance.
     *
     * @param Course $brand
     * @return void
     */
    public function __construct($course)
    {
        $this->course = $course;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Training Course Update')
            ->view('emails.course_update');
    }
}

