<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class FreeTrialMail extends Mailable
{
    use Queueable, SerializesModels;

    public $trial;

    /**
     * Create a new message instance.
     *
     * @param $trial
     */
    public function __construct($trial)
    {
        $this->trial = $trial;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.trial.trial-form');
    }
}
