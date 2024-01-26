<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderMail extends Mailable
{
    use Queueable, SerializesModels;

    public $orderNo;
    public $product;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($orderNo,$product)
    {
        $this->orderNo = $orderNo;
        $this->product = $product;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data = [
            'orderNo' => $this->orderNo,
            'product' => $this->product
        ];
         return $this->view('OrderMail.ProductOrderMail',$data)->subject('Your Product Order Details');
 
    }
}
