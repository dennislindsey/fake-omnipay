<?php

namespace Omnipay\Fake\Message;

use Omnipay\Common\Message\RedirectResponseInterface;
use Ramsey\Uuid\Uuid;

/**
 * Fake Purchase Response
 */
class PurchaseResponse extends FakeAbstractResponse implements RedirectResponseInterface
{

    public function isSuccessful()
    {
        return true;
    }

    public function isRedirect()
    {
        return (bool)($this->request->getData()['paymentSchema'] == 'PP');
    }

    public function getRedirectUrl()
    {
        return '';
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
