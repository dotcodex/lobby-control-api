<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class QuotationAdmin extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $subject = 'Has recibido una nueva cotizacion';
    public $customer;
    public $mailCustomer;

    public function __construct($prices, $customer)
    {
        $this->customer = $customer;
        // $this->customer = strtoupper($customer->fullname);
        // $this->email = $customer->email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->view('email.sendAdmin');
    }
}
