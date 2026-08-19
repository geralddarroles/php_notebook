    <?php

    require_once "PaymentProcessor.php";

    // Composition - initializing a class within another class, this is a better approach than inheritance because it allows for more flexibility and reusability of code.


    class OrderProcessor
    {
        public function __construct(private PaymentProcessor $paymentProcessor) {}

        public function process()
        {
            $this->paymentProcessor->refund(1);
        }
    }

    $orderProcessor = new OrderProcessor(new RAMPProcessor());
    $orderProcessor->process();
