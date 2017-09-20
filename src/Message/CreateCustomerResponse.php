<?php

namespace Omnipay\Fake\Message;

use Ramsey\Uuid\Uuid;

/**
 * Fake Purchase Response
 */
class CreateCustomerResponse extends FakeAbstractResponse
{
    /**
     * @return bool
     */
    public function isSuccessful(): bool
    {
        return true;
    }

    /**
     * @return string
     */
    public function getCustomerReference(): string
    {
        return Uuid::uuid4()->toString();
    }
}
