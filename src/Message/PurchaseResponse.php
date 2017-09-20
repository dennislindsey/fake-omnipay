<?php

namespace Omnipay\Fake\Message;

use Omnipay\Common\Message\RedirectResponseInterface;
use Omnipay\Common\Message\RequestInterface;
use Ramsey\Uuid\Uuid;

/**
 * Fake Purchase Response
 */
class PurchaseResponse extends FakeAbstractResponse implements RedirectResponseInterface
{
    /**
     * The embodied request object.
     *
     * @var RequestInterface|PurchaseRequest
     */
    protected $request;

    /**
     * @return bool
     */
    public function isSuccessful(): bool
    {
        if (array_key_exists('cvv', $this->request->getResponseData()) && $this->request->getResponseData()['cvv'] != '000') {
            return true;
        } elseif (array_key_exists('payment_schema', $this->request->getResponseData()) && $this->request->getResponseData()['payment_schema'] == 'PP') {
            return true;
        }

        return false;
    }

    /**
     * @return bool
     */
    public function isRedirect(): bool
    {
        return (bool)(array_key_exists('payment_schema', $this->request->getResponseData()) && $this->request->getResponseData()['payment_schema'] == 'PP');
    }

    /**
     * @return string
     */
    public function getRedirectUrl(): string
    {
        return (array_key_exists('payment_schema', $this->request->getResponseData()) && $this->request->getResponseData()['payment_schema'] == 'PP'
            ? 'http://example.com/redirect-url'
            : '');
    }

    /**
     * @return string
     */
    public function getRedirectMethod(): string
    {
        return '';
    }

    /**
     * @return array
     */
    public function getRedirectData(): array
    {
        return [];
    }

    /**
     * @return string
     */
    public function getTransactionReference(): string
    {
        return Uuid::uuid4()->toString();
    }

    /**
     * @return string
     */
    public function getCardReference(): string
    {
        return Uuid::uuid4()->toString();
    }
}
