<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FrozenFriendsMail extends Mailable
{
    use Queueable, SerializesModels;

    public $frozen;

    /**
     * Create a new message instance.
     *
     * @param $frozen
     */
    public function __construct($frozen)
    {
        $this->frozen = $frozen;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.frozen-form')
                    ->subject('Frozen Friends Form');
    }
}
