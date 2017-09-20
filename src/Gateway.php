<?php

namespace Omnipay\Fake;

use Omnipay\Common\AbstractGateway;
use Omnipay\Common\Message\AbstractRequest;
use Omnipay\Fake\Message\CreateCustomerRequest;
use Omnipay\Fake\Message\PurchaseRequest;
use Omnipay\Fake\Message\SubscriptionPlanRequest;
use Omnipay\Fake\Message\SubscriptionRequest;

class Gateway extends AbstractGateway
{
    /**
     * @return array
     */
    public function getDefaultParameters(): array
    {
        return [];
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return 'fake';
    }

    /**
     * @param array $options
     * @return AbstractRequest
     */
    public function purchase(array $options = [])
    {
        return $this->createRequest(PurchaseRequest::class, $options);
    }

    /**
     * @param array $options
     * @return SubscriptionRequest|AbstractRequest
     */
    public function createSubscription(array $options = []): SubscriptionRequest
    {
        return $this->createRequest(SubscriptionRequest::class, $options);
    }

    /**
     * @param array $options
     * @return SubscriptionPlanRequest|AbstractRequest
     */
    public function createSubscriptionPlan(array $options = []): SubscriptionPlanRequest
    {
        return $this->createPlan($options);
    }

    /**
     * @param array $options
     * @return SubscriptionPlanRequest|AbstractRequest
     */
    public function createPlan(array $options = []): SubscriptionPlanRequest
    {
        return $this->createRequest(SubscriptionPlanRequest::class, $options);
    }

    /**
     * @param array $parameters
     * @return CreateCustomerRequest|AbstractRequest
     */
    public function createCustomer(array $parameters = []): CreateCustomerRequest
    {
        return $this->createRequest(CreateCustomerRequest::class, $parameters);
    }

    /**
     * @param array $options
     * @return \Omnipay\Common\Message\RequestInterface|void
     */
    public function completePurchase(array $options = [])
    {
        return;
    }

    /**
     * @param array $options
     * @return \Omnipay\Common\Message\RequestInterface|void
     */
    public function completeAuthorize(array $options = [])
    {
        return;
    }

    /**
     * @param array $options
     * @return \Omnipay\Common\Message\RequestInterface|void
     */
    public function deleteCard(array $options = [])
    {
        return;
    }

    /**
     * @param array $options
     * @return \Omnipay\Common\Message\RequestInterface|void
     */
    public function authorize(array $options = [])
    {
        return;
    }

    /**
     * @param array $options
     * @return \Omnipay\Common\Message\RequestInterface|void
     */
    public function void(array $options = [])
    {
        return;
    }

    /**
     * @return \Guzzle\Http\Client|\Guzzle\Http\ClientInterface
     */
    public function getHttpClient()
    {
        return $this->httpClient;
    }

    /**
     * @param array $options
     * @return \Omnipay\Common\Message\RequestInterface|void
     */
    public function createCard(array $options = [])
    {
        return;
    }

    /**
     * @param array $options
     * @return \Omnipay\Common\Message\RequestInterface|void
     */
    public function updateCard(array $options = [])
    {
        return;
    }

    /**
     * @param array $options
     * @return \Omnipay\Common\Message\RequestInterface|void
     */
    public function capture(array $options = [])
    {
        return;
    }

    /**
     * @param array $options
     * @return \Omnipay\Common\Message\RequestInterface|void
     */
    public function refund(array $options = [])
    {
        return;
    }
}
