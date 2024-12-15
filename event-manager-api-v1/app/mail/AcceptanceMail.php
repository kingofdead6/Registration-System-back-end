<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;

use Illuminate\Queue\SerializesModels;

class AcceptanceMail extends Mailable
{
    use Queueable, SerializesModels;

    public $recipientName;

    /**
     * Create a new message instance.
     *
     * @param string $recipientName
     */
    public function __construct($recipientName)
    {
        $this->recipientName = $recipientName;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.accept')->with([
            'name' => $this->recipientName,
        ]);
    }
}
