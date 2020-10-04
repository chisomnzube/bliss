<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class PsnMail extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $email;
    public $psn;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $psn)
    {
        $this->name = $name;
        $this->email = $email;
        $this->psn = $psn;
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
                    ->subject('PSN | Bliss')
                    ->view('emails.users.psn');
                    //->markdown('emails.orders.placed');
    }
}
