<?php

namespace Omnipay\Fake\Message;

use Omnipay\Common\Message\AbstractRequest;

class PurchaseRequest extends AbstractRequest
{

    public function sendData()
    {
        return $this->response = new PurchaseResponse($this, []);
    }
}
