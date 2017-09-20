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

    /**
     * @return bool
     */
    public function isSuccessful(): bool
    {
        return true;
    }

    /**
     * @return bool
     */
    public function isRedirect(): bool
    {
        return true;
    }

    /**
     * @return string
     */
    public function getTransactionReference(): string
    {
        return Uuid::uuid4()->toString();
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return [];
    }

    /**
     * @return string
     */
    public function getRedirectUrl(): string
    {
        return 'http://example.com/redirect-url';
    }
}
