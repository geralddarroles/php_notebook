<?php

require_once "PaymentProcessor";

// Composition, creating a class within a class  

class OrderProcessor
{
    public function __construct(private PaymentProcessor $PaymentProcessor) {}

    public function process()
    {
        $this->$PaymentProcessor->refund();
    }
}

$paymentProcessor = new PaymentProcessor();
