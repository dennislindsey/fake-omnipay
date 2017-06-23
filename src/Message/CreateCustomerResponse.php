<?php

namespace Omnipay\Fake\Message;

use Ramsey\Uuid\Uuid;

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
        return Uuid::uuid4()->toString();
    }

}
