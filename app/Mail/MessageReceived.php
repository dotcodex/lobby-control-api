<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MessageReceived extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = 'Nuevo mensaje desde formulario de contacto' ;
    public $msg;



    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($msg)
    {
        $this->msg = $msg;
       
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      //  return $this->view('email.message-received');
       
        $subject = $this->subject;
        $email = "contacto@lobbycontrol.cl";
        $name = "LobbyControl";
      
        return $this
        ->from($email , $name)
        ->subject($subject)
        ->view('email.message-received');
    }
}
