<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendDiagnostic extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $subject = 'mensage recibidoo de dignostic';
    public $msg;
    public $customer;
    public function __construct($msg,$customer)
    {
        $this->msg = $msg;
        $this->customer = $customer;
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.send-diagnostic');
    }
}
