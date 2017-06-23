<?php

namespace Omnipay\Fake\Message;

use Omnipay\Common\Message\AbstractResponse;

/**
 * Fake Purchase Response
 */
class CreateCustomerResponse extends AbstractResponse
{

    public function isSuccessful()
    {
        return true;
    }

    public function getCustomerReference()
    {
        return md5(time());
    }

}
