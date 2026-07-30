<?php

interface PaymentProcessorType
{
    public function process(float $amount): bool;
    public function refund(float $amount): bool;
}

// abstract class create a class the that cannot be instantianted but can be inherited 
abstract class PaymentProcessor implements PaymentProcessorType
{
    public function __construct() {}

    abstract protected function validateApiKey(): bool; // a function that can be run by children but also defined by them 

    public function process(float $amount): bool
    {
        echo "processed payement";
        return false;
    }

    public function refund(float $amount): bool
    {
        echo "refunded payment";
        return false;
    }
}


// requeires payment processor 
class RAMPProcessor  extends PaymentProcessor
{
    public function process(float $amount): bool
    {
        return false;
    }

    public function refund(float $amount): bool
    {
        return false;
    }

    public function validateApiKey(): bool
    {
        return true;
    }
}


// requeires payment processor 
class Stripeprocessor  extends PaymentProcessor
{
    public function process(float $amount): bool
    {
        return false;
    }

    public function refund(float $amount): bool
    {
        return false;
    }
    public function validateApiKey(): bool
    {
        return true;
    }
}
