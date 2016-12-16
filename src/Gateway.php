<?php

namespace Omnipay\Fake;

use Omnipay\Common\AbstractGateway;

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

    public function purchase(array $parameters = [])
    {
        return $this->createRequest('\Omnipay\Fake\Message\PurchaseRequest', $parameters);
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
