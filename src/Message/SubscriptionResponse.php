<?php

namespace Omnipay\Fake\Message;

use Omnipay\Common\Message\RequestInterface;
use Ramsey\Uuid\Uuid;

/**
 * Fake Subscription Response
 */
class SubscriptionResponse extends FakeAbstractResponse
{
    /**
     * The embodied request object.
     *
     * @var RequestInterface|SubscriptionRequest
     */
    protected $request;

    public function isSuccessful(): bool
    {
        return true;
    }

    public function getTransactionReference(): string
    {
        return Uuid::uuid4()->toString();
    }

    public function getData(): array
    {
        return [];
    }
}
