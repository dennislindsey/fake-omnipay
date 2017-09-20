<?php

namespace Omnipay\Fake\Message;

use Omnipay\Common\Message\AbstractRequest;

class SubscriptionRequest extends AbstractRequest
{
    /**
     * Send the purchase request
     *
     * @param array $data
     * @return SubscriptionResponse
     */
    public function sendData($data = []): SubscriptionResponse
    {
        return $this->response = new SubscriptionResponse($this, $this->getResponseData());
    }

    /**
     * @return array
     */
    public function getResponseData(): array
    {
        return [];
    }

    /**
     * Get the startDate
     *
     * @return string
     */
    public function getStartDate(): string
    {
        return $this->getParameter('startDate');
    }

    /**
     * Set the plan type
     *
     * @param string $value
     * @return SubscriptionRequest|AbstractRequest provides a fluent interface.
     */
    public function setStartDate($value): SubscriptionRequest
    {
        return $this->setParameter('startDate', $value);
    }

    /**
     * Get the planReference
     *
     * @return string
     */
    public function getPlanReference(): string
    {
        return $this->getParameter('planReference');
    }

    /**
     * Set the planReference
     *
     * @param string $value
     * @return SubscriptionRequest|AbstractRequest provides a fluent interface.
     */
    public function setPlanReference($value): SubscriptionRequest
    {
        return $this->setParameter('planReference', $value);
    }

    /**
     * Get the subscription shipping address
     *
     * See the class documentation and the PayPal REST API documentation for
     * a description of the array elements.
     *
     * @return array|null
     */
    public function getShippingAddress(): ?array
    {
        return $this->getParameter('shippingAddress');
    }

    /**
     * Set the subscription shipping address
     *
     * See the class documentation and the PayPal REST API documentation for
     * a description of the array elements.
     *
     * @param  $value
     * @return SubscriptionRequest|AbstractRequest provides a fluent interface.
     */
    public function setShippingAddress(array $value): SubscriptionRequest
    {
        return $this->setParameter('shippingAddress', $value);
    }

    /**
     * Get the subscription charge models
     *
     * See the class documentation and the PayPal REST API documentation for
     * a description of the array elements.
     *
     * @return array|null
     */
    public function getChargeModels(): ?array
    {
        return $this->getParameter('chargeModels');
    }

    /**
     * Set the  subscription charge models
     *
     * See the class documentation and the PayPal REST API documentation for
     * a description of the array elements.
     *
     * @param  $value
     * @return SubscriptionRequest|AbstractRequest provides a fluent interface.
     */
    public function setChargeModels(array $value): SubscriptionRequest
    {
        return $this->setParameter('chargeModels', $value);
    }

    /**
     * Get the name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->getParameter('name');
    }

    /**
     * Set the  name
     *
     * @param string $value
     * @return SubscriptionRequest|AbstractRequest provides a fluent interface.
     */
    public function setName($value): SubscriptionRequest
    {
        return $this->setParameter('name', $value);
    }

    /**
     * Get the request customer reference -- used in many requests
     *
     * @return string
     */
    public function getCustomerReference(): string
    {
        return $this->getParameter('customerReference');
    }

    /**
     * Set the request customer reference -- used in many requests
     *
     * @param string $value
     * @return SubscriptionRequest|AbstractRequest provides a fluent interface.
     */
    public function setCustomerReference($value): SubscriptionRequest
    {
        return $this->setParameter('customerReference', $value);
    }

    /**
     * Get the request accountId -- used in every request
     *
     * @return string|null
     */
    public function getAccountId(): ?string
    {
        return $this->getParameter('accountId');
    }

    /**
     * Set the request accountId -- used in every request
     *
     * @param string $value
     * @return SubscriptionRequest|AbstractRequest provides a fluent interface.
     */
    public function setAccountId($value): SubscriptionRequest
    {
        return $this->setParameter('accountId', $value);
    }

    /**
     * Get the request email -- used in many requests
     *
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->getParameter('email');
    }

    /**
     * Set the request email -- used in many requests
     *
     * @param string $value
     * @return SubscriptionRequest|AbstractRequest provides a fluent interface.
     */
    public function setEmail($value): SubscriptionRequest
    {
        return $this->setParameter('email', $value);
    }

    /**
     * Get the plan or subscription merchant preferences
     *
     * See the class documentation and the PayPal REST API documentation for
     * a description of the array elements.
     *
     * @return array|null
     */
    public function getMerchantPreferences(): ?array
    {
        return $this->getParameter('merchantPreferences');
    }

    /**
     * Set the plan or subscription merchant preferences
     *
     * See the class documentation and the PayPal REST API documentation for
     * a description of the array elements.
     *
     * @param  $value
     * @return SubscriptionRequest|AbstractRequest provides a fluent interface.
     */
    public function setMerchantPreferences(array $value): SubscriptionRequest
    {
        return $this->setParameter('merchantPreferences', $value);
    }

    /**
     * getData
     *
     * fetch all data needed for submission
     *
     * @return array
     * @throws \Omnipay\Common\Exception\InvalidRequestException
     */
    public function getData(): array
    {
        return [
            'name'                 => $this->getName(),
            'description'          => $this->getDescription(),
            'start_date'           => $this->getStartDate(),
            'plan_reference'       => $this->getPlanReference(),
            'customer_token'       => $this->getCustomerReference(),
            'account_id'           => $this->getAccountId(),
            'email'                => $this->getEmail(),
            'billing_email'        => $this->getEmail(),
            'account_email'        => $this->getEmail(),
            'merchant_preferences' => $this->getMerchantPreferences(),
            'shipping_address'     => $this->getShippingAddress(),
            'charge_models'        => $this->getChargeModels(),
            'return_url'           => $this->getReturnUrl(),
            'cancel_url'           => $this->getCancelUrl(),
            'pingback_url'         => $this->getNotifyUrl(),
        ];
    }
}
