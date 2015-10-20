<?php

class MercadoPago_Core_Helper_StatusOrderMessage
    extends MercadoPago_Core_Helper_Message_Abstract
{
    protected $messagesMap =
        [
            "approved"     => 'Automatic notification of the MercadoPago: The payment was approved.',
            "refunded"     => 'Automatic notification of the MercadoPago: The payment was refunded.',
            "pending"      => 'Automatic notification of the MercadoPago: The payment is being processed.',
            "in_process"   => 'Automatic notification of the MercadoPago: The payment is being processed. Will be approved within 2 business days.',
            "in_mediation" => 'Automatic notification of the MercadoPago: The payment is in the process of Dispute, check the graphic account of the MercadoPago for more information.',
            "cancelled"    => 'Automatic notification of the MercadoPago: The payment was cancelled.',
            "rejected"     => 'Automatic notification of the MercadoPago: The payment was rejected.',
            "chargeback"   => 'Automatic notification of the MercadoPago: One chargeback was initiated for this payment.',
        ];

    public function getMessageMap()
    {
        return $this->messagesMap;
    }
}