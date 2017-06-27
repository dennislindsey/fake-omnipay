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

    public function isSuccessful()
    {
        if (array_key_exists('cvv', $this->request->getResponseData()) && $this->request->getResponseData()['cvv'] != '000') {
            return true;
        } elseif (array_key_exists('payment_schema', $this->request->getResponseData()) && $this->request->getResponseData()['payment_schema'] == 'PP') {
            return true;
        }

        return false;
    }

    public function isRedirect()
    {
        return (bool)(array_key_exists('payment_schema', $this->request->getResponseData()) && $this->request->getResponseData()['payment_schema'] == 'PP');
    }

    public function getRedirectUrl()
    {
        return (array_key_exists('payment_schema', $this->request->getResponseData()) && $this->request->getResponseData()['payment_schema'] == 'PP'
            ? 'http://example.com/redirect-url'
            : '');
    }

    public function getRedirectMethod()
    {
        return '';
    }

    public function getRedirectData()
    {
        return [];
    }

    public function getTransactionReference()
    {
        return Uuid::uuid4()->toString();
    }

    public function getCardReference()
    {
        return Uuid::uuid4()->toString();
    }

}
