<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class StartMail extends Mailable
{
    use Queueable, SerializesModels;

    public $start;

    /**
     * Create a new message instance.
     *
     * @param $start
     */
    public function __construct($start)
    {
        $this->start = $start;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.start.start-form');
    }
}
