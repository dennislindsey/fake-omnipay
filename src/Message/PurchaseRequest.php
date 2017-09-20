<?php

namespace Omnipay\Fake\Message;

use Omnipay\Common\Message\AbstractRequest;

class PurchaseRequest extends AbstractRequest
{
    /**
     * Send the purchase request
     *
     * @param array $data
     * @return PurchaseResponse
     */
    public function sendData($data = []): PurchaseResponse
    {
        return $this->response = new PurchaseResponse($this, $this->getResponseData());
    }

    /**
     * Get the response data
     *
     * @return array
     */
    public function getResponseData(): array
    {
        $responseData = [
            'amount_usd'       => $this->getParameter('amount'),
            'currency'         => $this->getParameter('currency'),
            'payment_schema'   => $this->getParameter('paymentSchema'),
            'billing_email'    => $this->getEmail(),
            'remember_my_card' => 1,
        ];

        if ($this->getParameter('paymentSchema') == 'PP') {
            return $responseData;
        }

        $this->validate('card');
        $card = $this->getCard();
        $card->validate();

        return array_merge($responseData, [
            'name'             => $card->getName(),
            'first_name'       => $card->getFirstName(),
            'last_name'        => $card->getLastName(),
            'card_number'      => $card->getNumber(),
            'expiration_month' => $card->getExpiryMonth(),
            'expiration_year'  => $card->getExpiryYear(),
            'cvv'              => $card->getCvv(),
            'address_street'   => $card->getBillingAddress1(),
            'address_city'     => $card->getBillingCity(),
            'address_state'    => $card->getBillingState(),
            'address_country'  => $card->getBillingCountry(),
            'address_zip'      => $card->getBillingPostcode(),
            'phone_number'     => $card->getBillingPhone(),

            // If the email has not been supplied specifically with the purchase
            // then get it from the card
            'billing_email'    => $this->getEmail() ?? $card->getEmail(),
        ]);
    }

    /**
     * Get the purchase parameters
     *
     * @return array
     */
    public function getData(): array
    {
        return $this->getParameters();
    }

    /**
     * Sets the payment schema
     *
     * @param $value
     * @return AbstractRequest
     */
    public function setPaymentSchema($value): AbstractRequest
    {
        return $this->setParameter('paymentSchema', $value);
    }

    /**
     * Sets the payment frequency
     *
     * @param $value
     * @return AbstractRequest
     */
    public function setFrequency($value): AbstractRequest
    {
        return $this->setParameter('frequency', $value);
    }

    /**
     * Sets the payment interval
     *
     * @param $value
     * @return AbstractRequest
     */
    public function setInterval($value): AbstractRequest
    {
        return $this->setParameter('interval', $value);
    }

    /**
     * Sets the payment start date
     *
     * @param $value
     * @return AbstractRequest
     */
    public function setStartDate($value): AbstractRequest
    {
        return $this->setParameter('startDate', $value);
    }

    /**
     * Get the request email
     *
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->getParameter('email');
    }

    /**
     * Set the request email
     *
     * @param string $value
     * @return AbstractRequest|PurchaseRequest
     */
    public function setEmail($value): AbstractRequest
    {
        return $this->setParameter('email', $value);
    }
}
