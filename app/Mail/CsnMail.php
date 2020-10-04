<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CsnMail extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $email;
    public $csn;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $csn)
    {
        $this->name = $name;
        $this->email = $email;
        $this->csn = $csn;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->to($this->email, $this->name)
                    ->bcc($this->email)
                    ->subject('CSN | Bliss')
                    ->view('emails.users.csn');
                    //->markdown('emails.orders.placed');
    }
}
