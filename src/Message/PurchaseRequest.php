<?php

namespace Omnipay\Fake\Message;

use Omnipay\Common\Message\AbstractRequest;

class PurchaseRequest extends AbstractRequest
{

    public function sendData($data = [])
    {
        return $this->response = new PurchaseResponse($this, $this->getResponseData());
    }

    public function getResponseData()
    {
        return [
            'amount_usd' => $this->getParameters()['amount'],
            'currency'   => $this->getParameters()['currency'],
        ];
    }

    public function getData()
    {
        return $this->getParameters();
    }
}
