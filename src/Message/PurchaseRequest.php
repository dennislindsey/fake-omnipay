<?php

namespace Omnipay\Fake\Message;

use Omnipay\Common\Message\AbstractRequest;

class PurchaseRequest extends AbstractRequest
{

    public function sendData($data = [])
    {
        return $this->response = new PurchaseResponse($this, []);
    }

    public function getData()
    {
    }
}
