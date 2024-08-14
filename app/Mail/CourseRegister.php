<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CourseRegister extends Mailable
{
    use Queueable, SerializesModels;
    public $data;

    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Get the message envelope.
     */
    // public function envelope(): Envelope
    // {
    //     return new Envelope(
    //         subject: 'Course Register',
    //     );
    // }

    /**
     * Get the message content definition.
     */
    // public function content(): Content
    // {
    //     return new Content(
    //         view: 'view.name',
    //     );
    // }

   /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //$mailData = $this->data;

        return $this->view('mail.course_register_mail')
            ->with('mailData', $this->data);

        // return $this->from('ashiquzzaman.rajib.cse@gmail.com')
        //             ->view('mail.course_register_mail')
        //             ->with('mailData', $this->data)
        //             ->subject('Course Registration Information');

    }
}
