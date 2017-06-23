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
        return [
            'amount_usd' => $this->getParameters()['amount'],
            'currency'   => $this->getParameters()['currency'],
        ];
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
        return $this->setParameter('paymentSchema', $value);
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

}
