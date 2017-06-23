<?php

namespace Omnipay\Fake\Message;

use Omnipay\Common\Message\RedirectResponseInterface;

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
        return false;
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

    public function getCardReference()
    {
        return md5(time());
    }

}
