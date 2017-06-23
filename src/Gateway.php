<?php

namespace Omnipay\Fake;

use Omnipay\Common\AbstractGateway;
use Omnipay\Fake\Message\CreateCustomerRequest;
use Omnipay\Fake\Message\PurchaseRequest;

class Gateway extends AbstractGateway
{

    public function getDefaultParameters()
    {
        return [];
    }

    public function getName()
    {
        return 'fake';
    }

    public function purchase(array $options = array())
    {
        return $this->createRequest(PurchaseRequest::class, $options);
    }

    public function createCustomer(array $parameters = [])
    {
        return $this->createRequest(CreateCustomerRequest::class, $parameters);
    }

    public function completePurchase(array $options = [])
    {
    }

    public function completeAuthorize(array $options = [])
    {
    }

    public function deleteCard(array $options = [])
    {
    }

    public function authorize(array $options = [])
    {
    }

    public function void(array $options = [])
    {
    }

    public function getHttpClient()
    {
        return $this->httpClient;
    }

    public function createCard(array $options = [])
    {
    }

    public function updateCard(array $options = [])
    {
    }

    public function capture(array $options = [])
    {
    }

    public function refund(array $options = [])
    {
    }

}
