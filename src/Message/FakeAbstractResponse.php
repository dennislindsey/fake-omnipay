<?php
/**
 * Class FakeAbstractResponse
 *
 * @date      6/23/17
 * @author    dennis
 * @copyright Copyright (c) Infostream Group
 */

namespace Omnipay\Fake\Message;

use Omnipay\Common\Message\AbstractResponse;

/**
 * Class FakeAbstractResponse
 */
abstract class FakeAbstractResponse extends AbstractResponse
{

    public function getTransactionSequence()
    {
        return rand(1, 1000000);
    }

}