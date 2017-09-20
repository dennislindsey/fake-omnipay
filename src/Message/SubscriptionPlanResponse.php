<?php

namespace Omnipay\Fake\Message;

use Omnipay\Common\Message\RequestInterface;
use Ramsey\Uuid\Uuid;

/**
 * Fake Subscription Plan Response
 */
class SubscriptionPlanResponse extends FakeAbstractResponse
{
    /**
     * The embodied request object.
     *
     * @var RequestInterface|SubscriptionPlanRequest
     */
    protected $request;

    /**
     * @return bool
     */
    public function isSuccessful()
    {
        return true;
    }

    /**
     * @return string
     */
    public function getTransactionReference()
    {
        return Uuid::uuid4()->toString();
    }
}
