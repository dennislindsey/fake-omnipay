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
}
