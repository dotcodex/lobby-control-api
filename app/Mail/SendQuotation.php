<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendQuotation extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $subject = 'Gracias por Cotizar con Nosotros';
    public $prices;
    public $customer;

    public function __construct($prices, $customer)
    {
        $this->prices = $prices;
        $this->customer = strtoupper($customer->fullname);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        
        return $this->view('email.send-quotation');
    }
}
