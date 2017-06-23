<?php

namespace Omnipay\Fake\Message;

/**
 * Fake Purchase Response
 */
class CreateCustomerResponse extends FakeAbstractResponse
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
