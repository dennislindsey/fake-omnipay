<?php

namespace Omnipay\Fake\Message;

use Omnipay\Common\Message\AbstractRequest;

class CreateCustomerRequest extends AbstractRequest
{

    public function sendData($data = [])
    {
        return $this->response = new CreateCustomerResponse($this, []);
    }

    public function getData()
    {
    }
}
