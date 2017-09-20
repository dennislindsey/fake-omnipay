<?php

namespace Omnipay\Fake\Message;

use Omnipay\Common\Message\AbstractRequest;

class CreateCustomerRequest extends AbstractRequest
{
    /**
     * @param array $data
     * @return CreateCustomerResponse
     */
    public function sendData($data = []): CreateCustomerResponse
    {
        return $this->response = new CreateCustomerResponse($this, []);
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return [];
    }
}
